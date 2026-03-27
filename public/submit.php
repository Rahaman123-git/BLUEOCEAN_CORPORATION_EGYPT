<?php
session_start();
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);
require_once('Payment/assets/config.php');
require_once('Payment/assets/database.php');

//print_r($_POST);
//exit;
/** Helpers **/
$s = static function($k, $d=''){ return isset($_POST[$k]) ? trim((string)$_POST[$k]) : $d; };
function ensure_dir($path){
  if (!is_dir($path)) { @mkdir($path, 0775, true); }
  if (!is_dir($path) || !is_writable($path)) { throw new RuntimeException("Upload path not writable: $path"); }
}
function base_url_for_current_request(): string {
  $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
  $host   = $_SERVER['HTTP_HOST'] ?? 'localhost';
  $base   = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/\\');
  return $scheme.'://'.$host.$base;
}
/*$auth_type = ZAPSAND_PAYMENT_AUTH_TYPE;
		$zapapikey= ZAPSAND_PAYMENT_UPDATE_KEY;
		$baseUrl = ZAPSAND_LEAD_FUN_URL;
		$params = array_merge($_POST, [
			'auth_type' => $auth_type,
			'zapikey'   => $zapapikey,
		]);
		$query = http_build_query($params);

		// Final URL
		
		//$jsonPayload = json_encode($data);
		// Convert array to JSON
		//echo $jsonData = json_encode($data);
		
		// Set API endpoint for sandbox
		
		$ch = curl_init($baseUrl);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $query);  // Automatically sends as multipart/form-data
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		// Optional: Set headers (Content-Type NOT required for form-data)
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
		'Accept: application/json'
		]);
		$rawResponse = curl_exec($ch);
		//$response = '...'; // <-- Replace with your actual API response from curl_exec()
		
		// Decode JSON
		$response = json_decode($rawResponse, true);
curl_close($ch);

university_in	varchar(255)	utf8mb4_unicode_ci		Yes	NULL			Change Change	Drop Drop	
	36	student_id	varchar(100)	utf8mb4_unicode_ci		Yes	NULL			Change Change	Drop Drop	
	37	id_proof_url	varchar(512)	utf8mb4_unicode_ci		Yes	NULL			Change Change	Drop Drop	
	38	college	text	utf8mb4_unicode_ci		No	None			Change Change	Drop Drop	
	39	job_title	text	utf8mb4_unicode_ci		No	None			Change Change	Drop Drop	
	40	company


university_in,college,job_title,company


*/
$FOSCM_ID = '974583000005848030';
$CISCA_ID = '974583000008542045';
$SCMF_ID  = '5834669000297835056';

$FOSCM_FEE = 1250.00;
$CISCA_FEE = 500.00;
$SCMF_FEE  = 250.00;
/** Read POST **/
$name            = $s('name');
$lname           = $s('lname');
$email           = $s('email');
$course_fee      = $s('course_fee', '0');   // the price shown before taxes/after built-in offers
$cmobile         = $s('cmobile');
$mobile          = $s('mobile');
$country         = $s('country');
$state           = $s('state');
$country_name    = $s('country_name');
$state_name      = $s('state_name');
$course          = $s('course');            // Zoho course id you passed from Blade
$course_name     = $s('course_name');
$coupon          = $s('coupon');
$coupon_valid    = $s('coupon_valid');
$discount_type   = $s('discount_type');
$discount_value  = $s('discount_value');
$amount_original = $s('amount_original', '0'); // subtotal before discount
$amount_discount = $s('amount_discount', '0'); // total discount
$amount_cgst     = $s('amount_cgst', '0');
$amount_sgst     = $s('amount_sgst', '0');
$amount_payable  = $s('amount_payable', '0');  // subtotal - discount + taxes
$is_free_offer   = $s('is_free_offer', '');   // '1' for free flows
$university_in   = $s('university');
$college   = $s('college');
$job_title   = $s('job_title');
$company   = $s('company');
$website   = $s('website');
$uni_note   = $s('uni_note');
$lead_type   = $s('lead_type');
$student_id      = $s('student_id');
$amount          = (float)$amount_payable;

function normalize_digits($s){ return preg_replace('/\D+/', '', (string)$s); }
function debugQuery($query, $params) {
    foreach ($params as $p) {
        $query = preg_replace('/\?/', "'" . $p . "'", $query, 1);
    }
    return $query;
}

$email_check = trim((string)$email);
$cc_check    = normalize_digits($cmobile); // country code (optional)
$mob_check   = normalize_digits($mobile);  // local number

// We’ll compare against stored cmobile/mobile after stripping symbols/spaces.
if($course === $SCMF_ID){
	 $sqlDup = "
  SELECT id
  FROM payment_history
  WHERE (email = ? or  mobile = ?)
   
	AND course = ?
  LIMIT 1
";
	
}else{
 $sqlDup = "
  SELECT id
  FROM payment_history
  WHERE (email = ? or  mobile = ?)
    AND zap_pushed = 1
	AND course = ?
  LIMIT 1
";
}

if ($stmtDup = mysqli_prepare($conn, $sqlDup)) {
    mysqli_stmt_bind_param($stmtDup, 'sss', $email_check, $mob_check,$course );
	//echo debugQuery($sqlDup, [$email_check, $mob_check, $course]);
    mysqli_stmt_execute($stmtDup);
    mysqli_stmt_store_result($stmtDup);
    $already = mysqli_stmt_num_rows($stmtDup) > 0;
    mysqli_stmt_free_result($stmtDup);
    mysqli_stmt_close($stmtDup);

    if ($already) {
        // Show a friendly message and stop.
        ?>
        <!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="UTF-8" />
            <title>Already Registered</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
        <link rel="icon" type="image/png" href="'assets/frontend/images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="assets/frontend/images/favicon/favicon.svg" />
            <style>
              body{margin:0;background:#f2f3f7;font-family:Poppins,system-ui,-apple-system,Segoe UI,Arial,sans-serif;color:#1f2937}
              .wrap{max-width:720px;margin:60px auto;padding:0 16px}
              .card{background:#fff;border-radius:14px;box-shadow:0 10px 30px rgba(0,0,0,.08);padding:28px}
              .title{font-size:24px;font-weight:700;color:#14179a;margin:0 0 8px}
              .muted{color:#6b7280}
              .btn{display:inline-block;margin-top:16px;background:#14179a;color:#fff;text-decoration:none;padding:10px 16px;border-radius:10px;font-weight:600}
            </style>
          </head>
          <body>
            <div class="wrap">
              <div class="card">
                <h1 class="title">Already Registered</h1>
                <p>We found an existing registration with  this <strong><?= htmlspecialchars($email_check) ?></strong> or <strong> <?= htmlspecialchars($mobile) ?></strong> phone number .</p>
                <p class="muted">If you think this is a mistake, please contact support at <strong>support@blueoceancorporation.in</strong> with your email and phone.</p>
                <a class="btn" href="/">Go to Homepage</a>
              </div>
            </div>
          </body>
        </html>
        <?php
        exit;
    }
 else {






/** Build course items JSON (FOSCM bundles CISCA & SCMF) **/
/** Build course items JSON (FOSCM bundles CISCA & SCMF) **/


$course_items = [];

if ($course === $FOSCM_ID) {
  // Pre-coupon charge for FOSCM in combo (Blade sends 50,000 here)
  $foscm_pre_coupon = max(0.0, (float)$course_fee); // expected 50000.00

  // Compute coupon discount to apply on the FOSCM line
  $foscm_coupon_off = 0.0;
  if ($coupon_valid === '1') {
    $dtype = strtolower((string)$discount_type);
    $dval  = (float)$discount_value;

    if ($dtype === 'amount') {
      $foscm_coupon_off = $dval;
    } elseif ($dtype === 'percent') {
      $foscm_coupon_off = round($foscm_pre_coupon * ($dval / 100), 2);
    } else {
      // Fallback: infer from totals => total discount - built-in offer (CISCA+SCMF)
      $built_in_offer = $CISCA_FEE + $SCMF_FEE; // 30,000
      $foscm_coupon_off = max(0.0, (float)$amount_discount - $built_in_offer);
    }

    // Cap so we never go below zero
    $foscm_coupon_off = max(0.0, min($foscm_coupon_off, $foscm_pre_coupon));
  }

  $foscm_final = round($foscm_pre_coupon - $foscm_coupon_off, 2);

  // Original total 80,000; CISCA & SCMF are free via built-in offer
  $course_items = [
    [
      'id' => $FOSCM_ID,
      'name' => 'FOSCM - Foundations of Supply Chain Management from ASCM, US',
      'original_price' => $FOSCM_FEE,          // 50,000 list price
      'final_price'    => $foscm_final,        // 50,000 minus coupon (e.g., 30,000)
      'discount_amount'=> round($foscm_coupon_off, 2) // coupon only is shown here
    ],
    [
      'id' => $CISCA_ID,
      'name' => 'CISCA - Certified International Supply Chain Associate from IPSCMI, US',
      'original_price' => $CISCA_FEE,
      'final_price'    => 0.00,
      'discount_amount'=> $CISCA_FEE          // built-in combo offer
    ],
    [
      'id' => $SCMF_ID,
      'name' => 'SCMF - Supply Chain Management Fundamentals from BOC, UK',
      'original_price' => $SCMF_FEE,
      'final_price'    => 0.00,
      'discount_amount'=> $SCMF_FEE           // built-in combo offer
    ],
  ];

} 
elseif ($course === $CISCA_ID) {
  // CISCA paid, SCMF free (page logic already sets course_fee pre-coupon = 20000)
  $cisca_pre_coupon = max(0.0, (float)$course_fee);
  $cisca_coupon_off = 0.0;

  if ($coupon_valid === '1') {
    $dtype = strtolower((string)$discount_type);
    $dval  = (float)$discount_value;

    if ($dtype === 'amount') {
      $cisca_coupon_off = $dval;
    } elseif ($dtype === 'percent') {
      $cisca_coupon_off = round($cisca_pre_coupon * ($dval / 100), 2);
    }
    $cisca_coupon_off = max(0.0, min($cisca_coupon_off, $cisca_pre_coupon));
  }

  $cisca_final = round($cisca_pre_coupon - $cisca_coupon_off, 2);

  $course_items = [
    [
      'id' => $CISCA_ID,
      'name' => 'CISCA - Certified International Supply Chain Associate from IPSCMI, US',
      'original_price' => $CISCA_FEE,
      'final_price'    => $cisca_final,                // reflect coupon if any
      'discount_amount'=> round($cisca_coupon_off, 2),
    ],
    [
      'id' => $SCMF_ID,
      'name' => 'SCMF - Supply Chain Management Fundamentals from BOC, UK',
      'original_price' => $SCMF_FEE,
      'final_price'    => 0.00,
      'discount_amount'=> $SCMF_FEE,                   // built-in free
    ],
  ];

} 
elseif ($course === $SCMF_ID) {
  $scmf_pre_coupon = max(0.0, (float)$course_fee);
  $scmf_coupon_off = 0.0;

  if ($coupon_valid === '1') {
    $dtype = strtolower((string)$discount_type);
    $dval  = (float)$discount_value;

    if ($dtype === 'amount') {
      $scmf_coupon_off = $dval;
    } elseif ($dtype === 'percent') {
      $scmf_coupon_off = round($scmf_pre_coupon * ($dval / 100), 2);
    }
    $scmf_coupon_off = max(0.0, min($scmf_coupon_off, $scmf_pre_coupon));
  }

  $course_items = [
    [
      'id' => $SCMF_ID,
      'name' => 'SCMF - Supply Chain Management Fundamentals from BOC, UK',
      'original_price' => $SCMF_FEE,
      'final_price'    => round($scmf_pre_coupon - $scmf_coupon_off, 2),
      'discount_amount'=> round($scmf_coupon_off, 2),
    ],
  ];

} else {
  // Fallback: single course as provided
  $pre_coupon = max(0.0, (float)$course_fee);
  $coupon_off = 0.0;

  if ($coupon_valid === '1') {
    $dtype = strtolower((string)$discount_type);
    $dval  = (float)$discount_value;
    if ($dtype === 'amount') {
      $coupon_off = $dval;
    } elseif ($dtype === 'percent') {
      $coupon_off = round($pre_coupon * ($dval / 100), 2);
    }
    $coupon_off = max(0.0, min($coupon_off, $pre_coupon));
  }

  $course_items = [
    [
      'id' => $course,
      'name' => $course_name,
      'original_price' => (float)$amount_original, // if unknown per-item, keep total
      'final_price'    => round($pre_coupon - $coupon_off, 2),
      'discount_amount'=> round($coupon_off, 2),
    ],
  ];
}
$course_items_json = json_encode($course_items, JSON_UNESCAPED_SLASHES | JSON_INVALID_UTF8_SUBSTITUTE);
$sql = "INSERT INTO `payment_history`
(`name`,`lname`,`email`,`amount`,`currency`,
 `cmobile`,`mobile`,`country`,`updated`,`state`,`coupon`,
 `course_fee`,`coupon_valid`,`amount_discount`,`amount_payable`,
 `country_name`,`state_name`,`lead_id`,`course`,
 `university_in`,`student_id`,`id_proof_url`,
 `discount_type`,`discount_value`,`amount_cgst`,`amount_sgst`,
 `course_items_json`,`college`,`job_title`,`company`)
VALUES (?,?,?,?,?,?,?,?,CURDATE(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

if (!$stmt = mysqli_prepare($conn, $sql)) {
    http_response_code(500);
    echo "DB prepare failed: " . mysqli_error($conn);
    exit;
}

// Map to placeholders in EXACT order (29 variables)
$currency = 'USD';
$lead_id_placeholder = ''; // not creating lead in Zoho

$params = [
  $name, $lname, $email,                           // 1-3
  $amount_original, $currency,                     // 4-5
  $cmobile, $mobile, $country,                     // 6-8
  /* updated via CURDATE() */                      // (no param)
  $state, $coupon,                                 // 9-10
  $course_fee, $coupon_valid, $amount_discount,    // 11-13
  $amount_payable,                                 // 14
  $country_name, $state_name,                      // 15-16
  $lead_id_placeholder, $course,                   // 17-18
  $university_in, $student_id, $id_proof_url,      // 19-21
  $discount_type, $discount_value,                 // 22-23
  $amount_cgst, $amount_sgst,                      // 24-25
  $course_items_json, $college, $job_title, $company // 26-29
];

// Easiest way to avoid miscounting: build the types string programmatically.
// If you want proper numeric types, see the note below.
$types = str_repeat('s', count($params)); // 29 's'

// Bind
mysqli_stmt_bind_param(
    $stmt,
    $types,
    ...$params
);

if (!mysqli_stmt_execute($stmt)) {
    http_response_code(500);
    echo "DB execute failed: " . mysqli_stmt_error($stmt);
    exit;
}

//echo $stmt;
//exit;
//mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

$receipt = mysqli_insert_id($conn);

$lead_type    = $_POST['lead_type'] ?? ($_GET['lead_type'] ?? ($lead_type ?? 'student'));
$isUniversity = strtolower(trim((string)$lead_type)) === 'university';

if ($isUniversity) {
	
	$url = ZAPSAND_UN_FUN_URL . '?' . http_build_query([
  'auth_type' => ZAUTH_TYPE,
  'zapikey'   => ZAPSAND_UN_KEY,
]);
$params = array_merge($_POST, [  
  // If $course_items_json is already JSON text, decode it so you don't double-encode:
  'course_items' => json_decode($course_items_json, true) ?? $course_items_json,
	'db_id' => $receipt,
	'payment'           =>""
]);

$json = json_encode($params, JSON_UNESCAPED_UNICODE);

$ch = curl_init($url);
curl_setopt_array($ch, [
  CURLOPT_POST            => true,
  CURLOPT_POSTFIELDS      => $json,
  CURLOPT_RETURNTRANSFER  => true,
  CURLOPT_HTTPHEADER      => [
    'Content-Type: application/json',
    'Accept: application/json',
  ],
]);
$raw = curl_exec($ch);
$info = curl_getinfo($ch);
$err  = curl_error($ch);
curl_close($ch);

if ($err) { die("cURL error: $err\n"); }
//echo "HTTP {$info['http_code']}\n";
//var_dump($raw);
$response = json_decode($raw, true);
}else{

$url = ZAPSAND_LEAD_FUN_URL . '?' . http_build_query([
  'auth_type' => ZAUTH_TYPE,
  'zapikey'   => ZAPSAND_LEAD_KEY,
]);
$params = array_merge($_POST, [  
  // If $course_items_json is already JSON text, decode it so you don't double-encode:
  'course_items' => json_decode($course_items_json, true) ?? $course_items_json,
	'db_id' => $receipt,
	'payment'           =>""
]);

$json = json_encode($params, JSON_UNESCAPED_UNICODE);

$ch = curl_init($url);
curl_setopt_array($ch, [
  CURLOPT_POST            => true,
  CURLOPT_POSTFIELDS      => $json,
  CURLOPT_RETURNTRANSFER  => true,
  CURLOPT_HTTPHEADER      => [
    'Content-Type: application/json',
    'Accept: application/json',
  ],
]);
$raw = curl_exec($ch);
$info = curl_getinfo($ch);
$err  = curl_error($ch);
curl_close($ch);

if ($err) { die("cURL error: $err\n"); }
//echo "HTTP {$info['http_code']}\n";
//var_dump($raw);
$response = json_decode($raw, true);
//print_r($response);

//exit;
/** Insert ONLY into DB (no Zoho) **/


/** ======== PAID FLOW: create Razorpay order & open checkout ======== */
if ($amount > 0 &&  !$isUniversity) {
	$fullName = $name.' '.$lname;
	$mode = '';
    $currency = "AED";
    $initial = isset($amount) ? floatval($amount) : 0;
    $full = isset($amount) ? floatval($amount) : 0;
    $fullName = isset($fullName) ? htmlspecialchars($fullName) : '';
    $email = isset($email) ? htmlspecialchars($email) : '';
    $mobile = isset($mobile) ? htmlspecialchars($mobile) : '';
	$courseName = $course_name;
	$order_paypage_url = "create_orders_program.php"; 
	$amount = 250;
	$_SESSION['curr']=$currency;
	$_SESSION['Initial']=$amount;
	$_SESSION['amount']=$amount;
	$_SESSION['Full']=$amount;
	$_SESSION['FullName']=$fullName;
	$_SESSION['email']=$email;
	$_SESSION['mobile']=$mobile;
	$_SESSION['Country']=$ountry;
	$_SESSION['invoice']='';
	$_SESSION['db_id']=$receipt;
	$_SESSION['courseName']=$course_name;       
	?>
	
	  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Summary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="Payment/assets/order_summary.css" rel="stylesheet"/>
    <link rel="icon" type="image/png" href="'assets/frontend/images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="assets/frontend/images/favicon/favicon.svg" />
</head>
<body>
<header class="header">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-text">
                       <img src="Payment/images/logo.webp" alt="Blueocean Logo">
                    </div>
                </div>
               
            </div>
        </header>
<form id="paymentRedirectForm" method="post" action="<?= $order_paypage_url ?>">
<div class="payment-container">
        <div class="payment-content">
            <!-- Payment Details Section -->
            <div class="payment-details">
                <h2 class="section-title">Payment Details</h2>
                
                <table class="payment-details-table">
                    <tr>
                        <td>Name</td>
                        <td><?= $fullName ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?= maskEmail($email) ?></td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td><?= maskMobile($mobile) ?></td>
                    </tr>
                    <tr>
                        <td>Course Name</td>
                        <td><?= $courseName ?></td>
                    </tr>
                    <tr>
                        <td>Currency</td>
                        <td><?= $currency ?></td>
                    </tr>
                    <tr>
                        <td>Amount</td>
                        <td><?= $amount ?>      
                    <input type="hidden" name="amount" id="amount" placeholder="Enter Amount"  value="<?= $amount ?>" />   <span id="usdConvertedLabel"></span>  </td>
                    </tr>
             <tr id="extra_row_mobile" <?php if($Payment_Mode == 'Tabby'||  $Payment_Mode == 'Tamara'){ ?><?php }else{ ?>style="display: none;"<?php }?>>
                <td class="label">Registered Mobile no. with Tabby/Tamara</td>
                <td>
                    <input type="text" name="mobile_confirm" id="mobile_confirm" placeholder="9715XXXXXXXX or 9665XXXXXXXX" maxlength="12" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                </td>
            </tr>
                </table>

               
            </div>

            <!-- Payment Mode Section -->
             <div class="payment-mode">
                <h2 class="section-title">Payment Mode</h2>
                
                <div class="payment-options">
                    <div class="payment-option  <?php if($Payment_Mode == 'Payment Link' || $Payment_Mode == 'Online Payment'){ echo 'selected';}?>">
                        <input type="radio" name="payment_mode" id="payment_mode" onchange="toggleExtraFields()" required value="Online Payment" <?php if($Payment_Mode == 'Payment Link' || $Payment_Mode == 'Online Payment'){ echo 'checked';}?>>
                        <label for="online">Online Payment (Card Payment)</label>
                    </div>
                    
                    <div class="payment-option <?php if($Payment_Mode == 'Tabby' ){ echo 'selected';}?>">
                         <input type="radio" name="payment_mode" id="payment_mode" onchange="toggleExtraFields()" required value="Tabby" <?php if($Payment_Mode == 'Tabby'){ echo 'checked';}?>>
                        <label for="tabby">Pay later with Tabby</label>
                        <div class="payment-logo">
                            <span class="tabby-logo">tabby</span>
                        </div>
                    </div>
                    
                    <div class="payment-option <?php if($Payment_Mode == 'Tamara'){ echo 'selected';}?>">
                        <input type="radio" name="payment_mode" id="payment_mode" onchange="toggleExtraFields()" required value="Tamara" <?php if($Payment_Mode == 'Tamara'){ echo 'checked';}?>>
                        <label for="tamara">Pay with Tamara</label>
                        <div class="payment-logo">
                            <span class="tamara-logo">tamara</span>
                        </div>
                        
                    </div>
                </div>
            </div>
<div style="text-align:center;">
			<input type="hidden" name="rdb" value="<?=$receipt?>">
            <button type="submit" class="confirm-button" id="proceedBtn">Confirm & Proceed to Payment</button>
            <div id="loadingMessage" style="display:none; margin-top:10px; font-weight:bold; color:green;">
                Redirecting... Please wait
            </div>
            
        </div>
        <div class="security-notice">
                        This is a secure site. Your data will remain confidential with us and will not be shared with any third party. We do not store any financial data on our servers.
                    </div>
            <!-- Payment Methods Section -->
            <div class="payment-methods">
                <h3>We accept the following payment methods:</h3>
                <div class="payment-icons-grid">
                    <div class="payment-icon">
                        <img src="Payment/images/1.png" alt="Blueocean Logo">
                    </div>
                    <div class="payment-icon">
                        <img src="Payment/images/2.png" alt="Blueocean Logo">
                    </div>
                    <div class="payment-icon">
                        <img src="Payment/images/3.png" alt="Blueocean Logo">
                    </div>
                    <div class="payment-icon">
                        <img src="Payment/images/4.png" alt="Blueocean Logo">
                    </div>
                    <div class="payment-icon">
                        <img src="Payment/images/5.png" alt="Blueocean Logo">
                    </div>

                    <div class="payment-icon">
                        <img src="Payment/images/6.png" alt="Blueocean Logo">
                    </div>
                    <div class="payment-icon">
                        <img src="Payment/images/7.png" alt="Blueocean Logo">
                    </div>
                    <div class="payment-icon">
                        <img src="Payment/images/8.png" alt="Blueocean Logo">
                    </div>
                    <div class="payment-icon">
                       <img src="Payment/images/9.png" alt="Blueocean Logo">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

					
        

        <!-- Hidden inputs -->
               
    </form>

  
<script>
const USD_TO_AED = 3.65;
const USD_TO_SAR = 3.75;
const currentCurrency = '<?= $currency ?>';

// Convert USD to AED or SAR
function convertUSD(amount, toCurrency) {
    const rate = toCurrency === 'AED' ? USD_TO_AED : USD_TO_SAR;
    return toCurrency + " " +(amount * rate).toFixed(2)  ;
}

// Determine which conversion to apply
function updateCurrencyConversion() {
    const paymentMode = document.querySelector('input[name="payment_mode"]:checked')?.value;
    const mobile = document.getElementById('mobile_confirm')?.value.replace(/\D/g, '') || '';
    const amount = parseFloat(document.getElementById('amount')?.value) || 0;
    const currency = '<?= $currency ?>';
    const usdToAedRate = 3.65;
    const usdToSarRate = 3.75;
    const sarToAedRate = <?= SAR_TO_AED ?>;
    const aedToSarRate = 1 / sarToAedRate;
    const label = document.getElementById('usdConvertedLabel');

    let converted = '';
    let show = false;

    // --- Main Smart Conversion Logic ---

    // USD + Tabby/Tamara + Mobile Prefix
    if (currency === 'USD' && (paymentMode === 'Tabby' || paymentMode === 'Tamara') && mobile.length >= 3) {
        if (mobile.startsWith('971')) {
            converted = (amount * usdToAedRate).toFixed(2) + ' AED';
            show = true;
        } else if (mobile.startsWith('966')) {
            converted = (amount * usdToSarRate).toFixed(2) + ' SAR';
            show = true;
        }
    }

    // SAR currency but UAE mobile → convert to AED
    if (currency === 'SAR' && mobile.startsWith('971')) {
        converted = (amount * sarToAedRate).toFixed(2) + ' AED';
        show = true;
    }

    // AED currency but SA mobile → convert to SAR
    if (currency === 'AED' && mobile.startsWith('966')) {
        converted = (amount * aedToSarRate).toFixed(2) + ' SAR';
        show = true;
    }

    // SAR currency + Online Payment → always show AED conversion (fallback)
    if (currency === 'SAR' && paymentMode === 'Online Payment' && !converted) {
        converted = (amount * sarToAedRate).toFixed(2) + ' AED';
        show = true;
    }

    if (show) {
        label.innerText = `≈ ${converted}`;
        label.style.display = 'inline';
    } else {
        label.innerText = '';
        label.style.display = 'none';
    }
}



document.querySelectorAll('input[name="payment_mode"]').forEach((radio) => {
    radio.addEventListener('change', function () {
        // Remove 'selected' class from all radio buttons' parent divs
        document.querySelectorAll('.payment-option').forEach(option => {
            option.classList.remove('selected');
        });

        // Add 'selected' class to the parent div of the checked radio
        if (this.checked) {
            this.closest('.payment-option').classList.add('selected');
        }

        // Optionally call showPayButton if you are using it
        updateCurrencyConversion();
    });
});
document.getElementById('mobile_confirm').addEventListener('input', updateCurrencyConversion);
document.getElementById('amount').addEventListener('input', updateCurrencyConversion);
function updateAEDConversion() {
    const amountInput = document.getElementById('amount');
    const conversionLabel = document.getElementById('aedConversionLabel');
    const currency = '<?= $currency ?>';
    const exchangeRate = <?= SAR_TO_AED ?>;

    const amount = parseFloat(amountInput.value) || 0;
    if (currency === 'SAR') {
        const converted = (amount * exchangeRate).toFixed(2);
        conversionLabel.innerText = `≈ AED ${converted}`;
        conversionLabel.style.display = 'inline';
    } else {
        conversionLabel.style.display = 'none';
        conversionLabel.innerText = '';
    }
}

function isNumberKey(evt) {
    const charCode = (evt.which) ? evt.which : evt.keyCode;
    return (charCode >= 48 && charCode <= 57);
}



function toggleExtraFields() {
    //const mode = document.getElementById('payment_mode').value;
	const selected = document.querySelector('input[name="payment_mode"]:checked');
	const mode = selected ? selected.value : '';
    const extraRow = document.getElementById('extra_row_mobile');
    const mobileInput = document.getElementById('mobile_confirm');

    if (mode === 'Tabby' || mode === 'Tamara') {
        extraRow.style.display = '';
        mobileInput.setAttribute('required', 'required');
    } else {
        extraRow.style.display = 'none';
        mobileInput.removeAttribute('required');
        mobileInput.value = '';
    }
}

function validateMobileFormat(mobile) {
   

   const currency = '<?= $currency ?>';
    mobile = mobile.trim().replace(/\D/g, ''); // Remove all non-numeric characters
    const uaePattern = /^9715\d{8}$/; // UAE format: 9715XXXXXXXX
    const saPattern = /^9665\d{8}$/;  // SA format: 9665XXXXXXXX
	if (currency === 'SAR') {
       return saPattern.test(mobile);
    }else if (currency === 'AED') {
        return uaePattern.test(mobile)
    }else{
    	return uaePattern.test(mobile) || saPattern.test(mobile);
	}
}

document.getElementById('paymentRedirectForm').addEventListener('submit', function (e) {
    //const paymentMode = document.getElementById('payment_mode').value;
	const currency = '<?= $currency ?>';
	const selectedMode = document.querySelector('input[name="payment_mode"]:checked');
const paymentMode = selectedMode ? selectedMode.value : '';
    const mobileInput = document.getElementById('mobile_confirm');
    let mobile = mobileInput?.value || '';

    mobile = mobile.replace(/\D/g, ''); // Remove + and other characters
    //document.getElementById('mobileconfirm').value = mobile;

        if ((paymentMode === 'Tabby' || paymentMode === 'Tamara') && !validateMobileFormat(mobile) ) {
        e.preventDefault();
		if (currency === 'AED') {
		   alert("Invalid mobile number.\nIt must start with:\n- UAE: 9715XXXXXXXX");
		} else if (currency === 'SAR') {
			alert("Invalid mobile number.\nIt must start with:\n- SA : 9665XXXXXXXX");
		}else{
			alert("Invalid mobile number.\nIt must start with:\n- UAE: 9715XXXXXXXX\n- SA : 9665XXXXXXXX");
		}
		
        
        return false;
    }


    document.getElementById('proceedBtn').disabled = true;
    document.getElementById('loadingMessage').style.display = 'block';
});
window.addEventListener('DOMContentLoaded', function () {
    updateCurrencyConversion();
});
</script>
    </body>
    </html>
    
    <?php
	
	
echo "PaymentPage";
 
  exit;
	}
}
$course_name   = $course_name   ?? ($_POST['course_name'] ?? '');
$name          = $name          ?? ($_POST['name'] ?? '');
$email         = $email         ?? ($_POST['email'] ?? '');
$cmobile       = $cmobile       ?? ($_POST['cmobile'] ?? '');
$mobile        = $mobile        ?? ($_POST['mobile'] ?? '');
$country       = $country       ?? ($_POST['country'] ?? '');
$state         = $state         ?? ($_POST['state'] ?? '');
$country_name  = $country_name  ?? ($_POST['country_name'] ?? '');
$state_name    = $state_name    ?? ($_POST['state_name'] ?? '');
$course_fee    = $course_fee    ?? (float)($_POST['course_fee'] ?? 0);

// University extras (all optional)
$university    = $university    ?? ($_POST['university'] ?? $_POST['college'] ?? '');

$designation   = $designation   ?? ($_POST['designation'] ?? $_POST['uni_designation'] ?? '');
$website       = $website       ?? ($_POST['website'] ?? '');
$uni_note      = $uni_note      ?? ($_POST['uni_note'] ?? '');

// Safer phone display
$phone_display = trim(($cmobile ? '+' . ltrim($cmobile, '+') . ' ' : '') . $mobile);
/** ======== FREE FLOW (no payment) ======== */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title><?= $isUniversity ? 'Request Received' : 'Registration Successful' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
   <link rel="icon" type="image/png" href="'assets/frontend/images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="assets/frontend/images/favicon/favicon.svg" />
    <style>
      :root{
        --bg:#f2f3f7; --card:#fff; --text:#1f2937; --muted:#6b7280; --brand:#14179a; --ok:#16a34a;
        --shadow:0 10px 30px rgba(0,0,0,.08);
      }
      *{box-sizing:border-box}
      body{margin:0;background:var(--bg);font-family:Poppins,system-ui,-apple-system,Segoe UI,Arial,sans-serif;color:var(--text)}
      .wrap{max-width:900px;margin:40px auto;padding:0 16px}
      .card{background:var(--card);border-radius:14px;box-shadow:var(--shadow);padding:28px}
      .header{display:flex;align-items:center;gap:14px;margin-bottom:16px}
      .logo{height:40px}
      .title{font-size:24px;font-weight:700;color:var(--brand)}
      .success{display:flex;align-items:center;gap:10px;background:#ecfdf5;border:1px solid #bbf7d0;color:#065f46;padding:12px 14px;border-radius:10px;margin:14px 0}
      .success .badge{display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;border-radius:50%;background:var(--ok);color:#fff;font-weight:700}
      .muted{color:var(--muted);font-size:14px;margin-top:10px}
      .grid{display:grid;gap:14px;margin-top:18px}
      @media(min-width:768px){ .grid-2{grid-template-columns:1fr 1fr} }
      .box{background:#fafafa;border:1px solid #eee;border-radius:10px;padding:14px}
      .row{display:flex;justify-content:space-between;margin:6px 0}
      .row .label{color:var(--muted)}
      .row .val{font-weight:600;text-align:right;max-width:75%}
      .cta{margin-top:20px;display:flex;flex-wrap:wrap;gap:10px}
      .btn{appearance:none;border:none;border-radius:10px;padding:10px 16px;cursor:pointer;font-weight:600}
      .btn-primary{background:var(--brand);color:#fff}
      .btn-outline{background:#fff;border:1px solid #e5e7eb;color:#374151}
    </style>
  </head>
  <body>
    <div class="wrap">
      <div class="card">
        <div class="header">
          <img src="<?php echo LOGO; ?>" alt="Logo" class="logo">
          <div class="title">
            <?= $isUniversity ? 'Request Received' : 'Registration Successful' ?>
          </div>
        </div>

        <div class="success">
          <div class="badge">✓</div>
          <div>
            <?php if ($isUniversity): ?>
              <strong>Thank you for your interest.</strong> Your request has been registered. We’ll get back to you soon.
            <?php else: ?>
              <strong>Great news!</strong> You have successfully registered for
              <strong><?= htmlspecialchars($course_name ?: 'the course'); ?></strong>.
              <div class="muted">You will receive a confirmation email very soon with further details.</div>
            <?php endif; ?>
          </div>
        </div>

        <div class="grid grid-2">
          <div class="box">
            <div class="row"><div class="label">Name</div><div class="val"><?= htmlspecialchars($name); ?></div></div>
            <div class="row"><div class="label">Email</div><div class="val"><?= htmlspecialchars($email); ?></div></div>
            <div class="row"><div class="label">Phone</div><div class="val"><?= htmlspecialchars($phone_display); ?></div></div>
            <div class="row"><div class="label">Course</div><div class="val"><?= htmlspecialchars($course_name); ?></div></div>
            
            
          </div>

          <?php if ($isUniversity): ?>
            <div class="box">
              <div class="row"><div class="label">Country</div><div class="val"><?= htmlspecialchars($country_name ?: $country); ?></div></div>
              <div class="row"><div class="label">State</div><div class="val"><?= htmlspecialchars($state_name ?: $state); ?></div></div>
              <?php if ($university): ?>
              <div class="row"><div class="label">University</div><div class="val"><?= htmlspecialchars($university); ?></div></div>
              <?php endif; ?>
              <?php if ($designation): ?>
              <div class="row"><div class="label">Designation</div><div class="val"><?= htmlspecialchars($designation); ?></div></div>
              <?php endif; ?>
              <?php if ($website): ?>
              <div class="row"><div class="label">Website</div><div class="val"><a href="<?= htmlspecialchars($website); ?>" target="_blank" rel="noopener"><?= htmlspecialchars($website); ?></a></div></div>
              <?php endif; ?>
              <?php if ($uni_note): ?>
              <div class="row"><div class="label">Note</div><div class="val"><?= nl2br(htmlspecialchars($uni_note)); ?></div></div>
              <?php endif; ?>
            </div>
          <?php else: ?>
            <div class="box">
              <div class="row"><div class="label">Country</div><div class="val"><?= htmlspecialchars($country_name ?: $country); ?></div></div>
              <div class="row"><div class="label">State</div><div class="val"><?= htmlspecialchars($state_name ?: $state); ?></div></div>
              <div class="row"><div class="label">Original Fee</div><div class="val">$ <?= number_format((float)$course_fee, 2); ?></div></div>
              <div class="row"><div class="label">Discount</div><div class="val">$ <?= number_format((float)$course_fee, 2); ?></div></div>
              <div class="row"><div class="label">Payable</div><div class="val">$ 0.00</div></div>
            </div>
          <?php endif; ?>
        </div>

        <div class="cta">
          <a class="btn btn-primary" href="/">Go to Homepage</a>
        </div>

        <div class="muted" style="margin-top:10px">
          This is a secure page. Your data is safe with us and will not be shared with third parties.
        </div>
      </div>
    </div>
  </body>
</html>
<?php

exit;
}
}
?>
