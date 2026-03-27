@extends('layouts.frontend.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/register.css') }}">
<link href="{{ asset('assets/frontend/css/css/fonts.css') }}" rel="stylesheet">
<style>
  .strike{text-decoration:line-through;color:#a33;font-weight:600}
  .price-big{font-weight:800;font-size:18px}
  .money{font-variant-numeric:tabular-nums}
  
  .alert-error{background:#ffeaea;border:1px solid #ffd0d0;color:#9b1c1c}
  .lead-tabs{display:flex;gap:8px;margin:12px 0}
.tab-btn{padding:8px 12px;border:1px solid #ddd;background:#f7f7f7;border-radius:8px;cursor:pointer}
.tab-btn.active{background:#0d6efd;color:#fff;border-color:#0d6efd}
.hidden{display:none !important}

</style>
@endpush

@section('content')
@php
    use Illuminate\Support\Facades\Crypt;

    // Incoming (encrypted)
    $courseId   = request('course_id')   ? Crypt::decryptString(request('course_id'))   : null;
    $courseName = request('course_name') ? Crypt::decryptString(request('course_name')) : null;
    $courseFee  = request('course_fee')  ? Crypt::decryptString(request('course_fee'))  : null;
    $s  = request('s')  ? Crypt::decryptString(request('s'))  : null;

    // Free flag
    $isFreeOffer = (request()->boolean('is_free') || (float)($courseFee ?? 0) <= 0);

    // Course constants
    $FOSCM_ID   = '974583000005848030'; $FOSCM_NAME = 'FOSCM - Foundations of Supply Chain Management from ASCM, US'; $FOSCM_FEE = 50000;
    $CISCA_ID   = '974583000008542045'; $CISCA_NAME = 'CISCA - Certified International Supply Chain Associate from IPSCMI, US'; $CISCA_FEE = 20000;
    $SCMF_ID    = '5834669000297835056'; $SCMF_NAME  = 'SCMF - Supply Chain Management Fundamentals from BOC, UK'; $SCMF_FEE  = 10000;

    // === FOSCM combo (keep the offer logic) ===
    $comboActive       = ($courseId === $FOSCM_ID); // trigger on FOSCM
    $comboOriginal     = 2000;                     // FOSCM(50k) + CISCA(20k)
    $comboOffer        = 1250;                     // offer price for combo
    $comboCouponTarget = 750;                     // final price after coupon

    if ($comboActive) {
        // Fee shown/used in totals should be the combo offer
        $courseFee   = $comboOffer;
        $comboPrimaryId   = $FOSCM_ID;
        $comboPrimaryName = $FOSCM_NAME;
        $comboExtraId     = $CISCA_ID;
        $comboExtraName   = $CISCA_NAME;
    }
@endphp

<div class="container-register">
  <div class="left">
    <img src="{{ asset('assets/frontend/css/images/register-image.webp') }}" alt="Registration Image">
  </div>

  <div class="right">
    <!-- START: course registration content -->
    <section class="course-head">
      <h1 class="course-title">Course Registration</h1>
      <div class="course-sub">{{ $courseName }}</div>

      

      <div class="info-strip">
       @if($courseId  == $SCMF_ID)
        <strong>
        Learn supply chain from the world No. 1 and transform your career with expertise the future demands.</strong>
       @elseif($courseId  == $CISCA_ID)
       	<strong>
		    Advance your supply chain skills from the world No. 1 and transform your career with expertise the future demands.</strong>
       @elseif($courseId  == $FOSCM_ID)
        <strong>
		    Master supply chain from the world No.1 and transform your career with expertise the future demands.</strong>
       @endif
      </div>

      <div class="price-panel">
        <div class="panel-inner">
          <h3 class="panel-title">Program Details</h3>

          {{-- SCMF PAGE --}}
          @if($courseId  == $SCMF_ID)
            <div class="course-line">
              <div class="course-name">{{ $courseName }}</div>
              <div class="course-price">
                @if(!empty($courseFee) && (float)$courseFee > 0)
                  @if($isFreeOffer)
                    <span class="strike">${{ number_format((float)$courseFee, 2) }}</span>
                   
                  @else
                    <span>${{ number_format((float)$courseFee, 2) }}</span>
                  @endif
                @endif
              </div>
            </div>
            <hr>
            <p class="panel-note">
              <span class="note-bullet">•</span>
              Celebrating our milestone of Being the World No. 1 in Supply Chain Training & Consulting by Providing the Supply Chain Management Fundamentals Program with 100% scholarship!
            </p>

          {{-- CISCA PAGE: add SCMF free --}}
          @elseif($courseId  == $CISCA_ID)
            <div class="course-line">
              <div class="course-name">{{ $CISCA_NAME }}</div>
              <div class="course-price">
                <span>${{ number_format((float)($courseFee ?? $CISCA_FEE), 2) }}</span>
              </div>
            </div>
            <div style="clear:both"></div>
            <div class="course-line">
              <div class="course-name">{{ $SCMF_NAME }}</div>
              <div class="course-price">
                <span class="strike">${{ number_format((float)$SCMF_FEE, 2) }}</span>
                
              </div>
            </div>
            <hr>
            <p class="panel-note">
              <span class="note-bullet">•</span>
              Register Now and Get Supply Chain Management Fundamentals For Free! <br>
              That’s the Blue Ocean Way of Celebrating our milestone as the World No. 1 in Supply Chain Training & Consulting!
            </p>

          {{-- FOSCM PAGE: show combo inside "Individual Prices" --}}
          @elseif($courseId  == $FOSCM_ID)
            <div class="course-line">
              <div class="course-name">{{ $FOSCM_NAME }}</div>
              <div class="course-price">
                <span>${{ number_format($FOSCM_FEE, 2) }}</span>
              </div>
            </div>
            <div style="clear:both"></div>
            <div class="course-line">
              <div class="course-name">{{ $CISCA_NAME }}</div>
              <div class="course-price">
                <span class="strike">${{ number_format($CISCA_FEE, 2) }}</span>
              </div>
            </div>
            <div style="clear:both"></div>
            <div class="course-line">
              <div class="course-name">{{ $SCMF_NAME }}</div>
              <div class="course-price">
                <span class="strike">${{ number_format($SCMF_FEE, 2) }}</span>
                
              </div>
            </div>

            <hr>

            <!--<div class="course-line">
              <div class="course-name">Subtotal (FOSCM + CISCA + SCMF)</div>
              <div class="course-price">
                <span class="strike">${{ number_format($comboOriginal, 2) }}</span>
              </div>
            </div>

            <div class="course-line">
              <div class="course-name price-big">Combo Offer</div>
              <div class="course-price price-big">
                ${{ number_format($comboOffer, 2) }}
              </div>
            </div>

            <div class="course-line" style="color:#176b2a;font-weight:600;">
              <div class="course-name">You save</div>
              <div class="course-price">
                ${{ number_format($comboOriginal - $comboOffer, 2) }}
              </div>
            </div>-->

            <p class="panel-note">
              <span class="note-bullet">•</span>
              Pay for 1 (FOSCM), Get Enrolled in 3 (FOSCM + CISCA + SCMF).<br>
              That’s the Blue Ocean way of celebrating our milestone as World No. 1!
            </p>
          @endif
        </div>
      </div>
<div class="lead-tabs" role="tablist" aria-label="Lead type">
  <button type="button" class="tab-btn active" id="tabStudent" role="tab" aria-selected="true" aria-controls="panelStudent">Student</button>
   
          @php
if($courseId != $SCMF_ID ){
           
@endphp
  <button type="button" class="tab-btn" id="tabUniversity" role="tab" aria-selected="false" aria-controls="panelUniversity">University</button>
   @php
}
           
@endphp
</div>
      <form id="regForm" method="POST" action="{{ url('submit.php') }}" enctype="multipart/form-data">
        @csrf
        
		<div id="panelStudent" data-mode="student" aria-labelledby="tabStudent">
        
        <div class="form-sec" style="margin:0;">
          <div class="form-left">
           <div class="two-col">
            <div class="col">
              <label class="field-label">First Name*</label>
              <input type="text" name="name" required class="names-field" placeholder="First Name*" value="{{ old('name') }}" style="width:230px;">
              <div class="error"></div>
            </div>
            <div class="col">
              <label class="field-label">Last Name*</label>
              <input type="text" placeholder="Last Name*" name="lname" required class="names-field" value="{{ old('lname') }}" style="width:230px;">
              <div class="error"></div>
            </div>
           </div>
          
           <div class="two-col">
            <label for="email" class="field-label" style="margin-top:6px;">Email*</label>
            <input class="email" id="email" name="email" type="email" placeholder="example@mail.com" value="{{ old('email') }}" required>
            <div id="emailError" class="error" aria-live="polite" style="display:none;">Please enter a valid email address</div>
</div>
 <div class="two-col">
            <label class="field-label">Phone Number*</label>
            <div class="phone-row">
              {{-- Country calling codes (short list kept as-is) --}}
              <select id="cmobile" name="cmobile" class="country-select" required>
                <option value="" disabled selected>Country Code</option>
                <option value="93">Afghanistan (+93)</option>
                <option value="355">Albania (+355)</option>
                <option value="213">Algeria (+213)</option>
                <option value="376">Andorra (+376)</option>
                <option value="244">Angola (+244)</option>
                <option value="54">Argentina (+54)</option>
                <option value="374">Armenia (+374)</option>
                <option value="61">Australia (+61)</option>
                <option value="43">Austria (+43)</option>
                <option value="994">Azerbaijan (+994)</option>
                <option value="973">Bahrain (+973)</option>
                <option value="880">Bangladesh (+880)</option>
                <option value="32">Belgium (+32)</option>
                <option value="55">Brazil (+55)</option>
                <option value="359">Bulgaria (+359)</option>
                <option value="1">Canada (+1)</option>
                <option value="56">Chile (+56)</option>
                <option value="86">China (+86)</option>
                <option value="57">Colombia (+57)</option>
                <option value="506">Costa Rica (+506)</option>
                <option value="385">Croatia (+385)</option>
                <option value="357">Cyprus (+357)</option>
                <option value="420">Czech Republic (+420)</option>
                <option value="45">Denmark (+45)</option>
                <option value="20">Egypt (+20)</option>
                <option value="372">Estonia (+372)</option>
                <option value="251">Ethiopia (+251)</option>
                <option value="358">Finland (+358)</option>
                <option value="33">France (+33)</option>
                <option value="49">Germany (+49)</option>
                <option value="30">Greece (+30)</option>
                <option value="852">Hong Kong (+852)</option>
                <option value="36">Hungary (+36)</option>
                <option value="354">Iceland (+354)</option>
                <option value="91">India (+91)</option>
                <option value="62">Indonesia (+62)</option>
                <option value="98">Iran (+98)</option>
                <option value="964">Iraq (+964)</option>
                <option value="353">Ireland (+353)</option>
                <option value="972">Israel (+972)</option>
                <option value="39">Italy (+39)</option>
                <option value="81">Japan (+81)</option>
                <option value="962">Jordan (+962)</option>
                <option value="254">Kenya (+254)</option>
                <option value="965">Kuwait (+965)</option>
                <option value="371">Latvia (+371)</option>
                <option value="961">Lebanon (+961)</option>
                <option value="218">Libya (+218)</option>
                <option value="370">Lithuania (+370)</option>
                <option value="352">Luxembourg (+352)</option>
                <option value="853">Macau (+853)</option>
                <option value="60">Malaysia (+60)</option>
                <option value="960">Maldives (+960)</option>
                <option value="356">Malta (+356)</option>
                <option value="230">Mauritius (+230)</option>
                <option value="52">Mexico (+52)</option>
                <option value="373">Moldova (+373)</option>
                <option value="377">Monaco (+377)</option>
                <option value="976">Mongolia (+976)</option>
                <option value="212">Morocco (+212)</option>
                <option value="95">Myanmar (+95)</option>
                <option value="31">Netherlands (+31)</option>
                <option value="64">New Zealand (+64)</option>
                <option value="234">Nigeria (+234)</option>
                <option value="47">Norway (+47)</option>
                <option value="968">Oman (+968)</option>
                <option value="92">Pakistan (+92)</option>
                <option value="970">Palestine (+970)</option>
                <option value="507">Panama (+507)</option>
                <option value="51">Peru (+51)</option>
                <option value="63">Philippines (+63)</option>
                <option value="48">Poland (+48)</option>
                <option value="351">Portugal (+351)</option>
                <option value="974">Qatar (+974)</option>
                <option value="40">Romania (+40)</option>
                <option value="7">Russia (+7)</option>
                <option value="966">Saudi Arabia (+966)</option>
                <option value="65">Singapore (+65)</option>
                <option value="421">Slovakia (+421)</option>
                <option value="386">Slovenia (+386)</option>
                <option value="27">South Africa (+27)</option>
                <option value="82">South Korea (+82)</option>
                <option value="34">Spain (+34)</option>
                <option value="94">Sri Lanka (+94)</option>
                <option value="46">Sweden (+46)</option>
                <option value="41">Switzerland (+41)</option>
                <option value="886">Taiwan (+886)</option>
                <option value="66">Thailand (+66)</option>
                <option value="90">Turkey (+90)</option>
                <option value="971">United Arab Emirates (+971)</option>
                <option value="44">United Kingdom (+44)</option>
                <option value="1">United States (+1)</option>
                <option value="598">Uruguay (+598)</option>
                <option value="998">Uzbekistan (+998)</option>
                <option value="58">Venezuela (+58)</option>
                <option value="84">Vietnam (+84)</option>
                <option value="967">Yemen (+967)</option>
                <option value="263">Zimbabwe (+263)</option>
              </select>

              <input class="phone-det" name="mobile" value="{{ old('mobile') }}" pattern="[0-9]{8,15}" minlength="8" title="Digits only, at least 8 digits" type="tel" placeholder="12 345 6789" required>
            </div>
</div>
<div class="two-col">


    </div>
            <div class="two-col">
              <div class="col">
                <label for="selectCountry" class="field-label">Select Country*</label>
                <select id="country" name="country" required class="country-state" disabled>
                  <option value="">Select Country</option>
                </select>
              </div>

              <div class="col">
                <label for="selectState" class="field-label">City/State/Province</label>
                <select id="state" name="state" class="country-state" disabled>
                  <option value="">City/State/Province</option>
                </select>
              </div>
              
            </div>
           
<!-- University (auto-populate after state) -->
           <!-- College (auto-complete) -->
           <div  id="designation" >
      <label class="field-label">Designation</label>
      <input type="text" id="uni_designation" name="job_title" class="names-field  email" data-required-university style="margin-top:-5px;">
</div>
<div   >
      <label class="field-label">Company Name</label>
     <input type="text" id="company"  class="names-field  email"   name="company" value="">
</div>
<div class="two-col">
<div id="note"  >
    <label class="field-label">Comment</label>
    <textarea id="uni_note" name="uni_note" rows="10"  style="height:125px;" class="names-field email" placeholder="Tell us about your request"></textarea>
    </div>

 </div>
 <div class="two-col">
  <label for="collegeInput" class="field-label" style="margin-top:18px;"></label>
  <input id="collegeInput" name="college" type="text" class="names-field email" 
         placeholder="Start typing your college…"  list="collegeList"
         autocomplete="off" inputmode="text"  style="display:none;"/>
  <datalist id="collegeList"></datalist>
</div>
  <!-- Hidden: auto-filled University (submitted with the form) -->
 <input type="hidden" id="university_hidden" name="university" value="">

  <!-- Optional flags (useful on backend) -->
  <input type="hidden" id="college_is_new"    name="college_is_new" value="1">
 
 <div class="two-col" style="display:none"  >
  <div id="website" >
      <label class="field-label">Website</label>
      <input type="url" id="website" name="website" class="names-field email" placeholder="https://example.edu">
    </div>
<div class="col" id="yearofpassing" style="display:none;">
  <label for="yearOfPassing" class="field-label">Year of Passing*</label>
  <select id="yearOfPassing" name="year_of_passing" >
    <option value="">Select Year</option>
  </select>
  
</div>
  
  </div>
  

			</div>

           
          </div>

          <div class="form-right">
           <div class="two-col">
         
          @php
if($courseId != $SCMF_ID ){
           
@endphp
            <!-- Coupon -->
            
            <div class="coupon-box" style="    margin-top: 8px;">
              <div class="coupon-head">
                <img src="{{ asset('assets/frontend/css/images/Tag.png')}}" alt="Coupon" class="coupon-icon">
                <span class="tag">Coupon</span>
              </div>

              <div class="coupon-row">
                <input id="coupon" name="coupon" type="text" placeholder="Apply Coupon Code" value="{{ old('coupon') }}" @if($isFreeOffer) readonly @endif>
                <button type="button" id="applyCouponBtn" class="btn small apply-btn" @if($isFreeOffer) disabled @endif>Apply</button>
              </div>

              <div class="coupon-note" id="couponFeedback" style="display:none;"></div>
            </div>
            @php            }
@endphp
</div>
 <div class="two-col" style="    margin-top: 4px;">
          

    
    
          
          
          <div id="fees_tab">
            <h3 class="fees-title">Course Fees (INR)</h3>
            <div class="fees-box">
              <div class="row">
                <span class="label">Original Fee</span>
                <div class="value money">{!! '$' !!} <span id="amountOriginalText">0.00</span></div>
              </div>
              <div class="row">
                <span class="label">
                Scholarship</span>
                <div class="value money">- {!! '$' !!} <span id="amountDiscountText">0.00</span></div>
              </div>
              <div class="row">
                <span class="label">VAT (5%)</span>
                <div class="value money">{!! '$' !!} <span id="amountvatText">0.00</span></div>
              </div>
              
              <hr>
              <div class="row payable">
                <span class="label">Payable</span>
                <div class="value money">{!! '$' !!} <span id="amountPayableText">0.00</span></div>
              </div>
            </div>
            </div>
          </div>
</div>
 
          {{-- Hidden fields --}}
          <input type="hidden" name="is_free_offer"  id="is_free_offer"  value="{{ $isFreeOffer ? '1' : '' }}">
          <input type="hidden" name="coupon_valid"   id="coupon_valid"   value="">
          <input type="hidden" name="discount_type"  id="discount_type"  value="">
          <input type="hidden" name="discount_value" id="discount_value" value="">

          <input type="hidden" name="amount_cgst" id="amount_cgst" value="">
          <input type="hidden" name="amount_sgst" id="amount_sgst" value="">

          <input type="hidden" name="amount_original" id="amount_original" value="">
          <input type="hidden" name="amount_discount" id="amount_discount" value="">
          <input type="hidden" name="amount_payable"  id="amount_payable"  value="">

          {{-- Send both short & full names for country/state --}}
          <input type="hidden" name="country_code" id="country_code" value="">
          <input type="hidden" name="country_name" id="country_name" value="">
          <input type="hidden" name="state_code"   id="state_code"   value="">
          <input type="hidden" name="state_name"   id="state_name"   value="">

          {{-- Course meta --}}
          <input type="hidden" name="course_name" value="{{ $courseName }}">
          <input type="hidden" name="course" value="{{ $courseId }}">
          <input type="hidden" id="course_fee" name="course_fee" value="{{ $courseFee }}">
           <input type="hidden" id="course_fee" name="course_fee" value="{{ $courseFee }}">
           <input type="hidden" id="source_name" name="source_name" value="{{ $s}}">
          
          <div style="clear:both;"></div>
           <div class="buttons">
              <button type="reset" class="btn btn-outline">Reset</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </div>
        <!-- University section (hidden by default) -->

<input type="hidden" id="lead_type" name="lead_type" value="student">
      </form>
      <div style="clear:both;"></div>
    </section>
    <!-- END: course registration content -->
  </div>
</div>

{{-- Countries loader (expects /public/data/countries.json) --}}
<script>
(async function(){
  const COUNTRY_JSON_URL = "{{ asset('data/countries.json') }}";
  const countryEl = document.getElementById('country');
  const stateEl   = document.getElementById('state');

  const countryCodeH = document.getElementById('country_code');
  const countryNameH = document.getElementById('country_name');
  const stateCodeH   = document.getElementById('state_code');
  const stateNameH   = document.getElementById('state_name');

  function updateCountryFields(){
    const opt = countryEl.options[countryEl.selectedIndex];
    if (!opt) return;
    countryCodeH.value = opt.value || '';
    countryNameH.value = opt.textContent || '';
    if (!stateEl.value){ stateCodeH.value = ''; stateNameH.value = ''; }
  }
  function updateStateFields(){
    const opt = stateEl.options[stateEl.selectedIndex];
    if (!opt) return;
    stateCodeH.value = opt.value || '';
    stateNameH.value = opt.textContent || '';
  }

  let countries = [];

  function setOptions(el, options, placeholder) {
    el.innerHTML = '';
    const ph = document.createElement('option');
    ph.value = '';
    ph.textContent = placeholder;
    el.appendChild(ph);
    options.forEach(opt => {
      const o = document.createElement('option');
      o.value = opt.value;
      o.textContent = opt.label;
      el.appendChild(o);
    });
  }

  try {
    const resp = await fetch(COUNTRY_JSON_URL, { cache: 'no-cache' });
    countries = await resp.json();

    const countryOpts = countries.map(c => ({
      value: (c.code2 || c.code || c.name),
      label: c.name
    }));
    setOptions(countryEl, countryOpts, 'Select Country');
    countryEl.disabled = false;

    countryEl.addEventListener('change', () => {
      populateStates(countryEl.value);
      updateCountryFields();
    });

  } catch (err) {
    console.error('Failed to load countries.json:', err);
    setOptions(countryEl, [], 'Error loading countries');
    countryEl.disabled = true;
  }

  function populateStates(code2, preselect) {
    const country = countries.find(c =>
      (c.code2 && c.code2.toUpperCase() === (code2||'').toUpperCase()) ||
      (c.code  && c.code.toUpperCase()  === (code2||'').toUpperCase()) ||
      (c.name  && c.name === code2)
    );
    const states = country?.states || [];
    const stateOpts = states.map(s => ({
      value: (s.code || s.state_code || s.name),
      label: s.name
    }));
    setOptions(stateEl, stateOpts, states.length ? 'Select City/State/Province' : 'No City/State/Province available');
    stateEl.disabled = !states.length;

    if (preselect) {
      stateEl.value = preselect;
      updateStateFields();
    } else {
      stateCodeH.value = '';
      stateNameH.value = '';
    }
  }

  document.getElementById('regForm').addEventListener('submit', () => {
    updateCountryFields();
    updateStateFields();
  });
})();
</script>

{{-- Fees + Coupon logic (FOSCM combo + CISCA+SCMF original/discount) --}}
<script>
(function(){
  // Page identity flags
  const PAGE_ID   = "{{ $courseId }}";
  const FOSCM_ID  = "{{ $FOSCM_ID }}";
  const CISCA_ID  = "{{ $CISCA_ID }}";
  const SCMF_ID   = "{{ $SCMF_ID }}";

  const IS_FOSCM  = PAGE_ID === FOSCM_ID;
  const IS_CISCA  = PAGE_ID === CISCA_ID;
  const IS_SCMF   = PAGE_ID === SCMF_ID;

  // Flags/values from server
  const IS_FREE        = {{ $isFreeOffer ? 'true' : 'false' }};
  const COMBO_ON       = "{{ $comboActive ? '1' : '' }}" === '1';              // true on FOSCM
  const COMBO_OFFER    = parseFloat("{{ $comboActive ? $comboOffer : 0 }}") || 0;       // 50,000
  const COMBO_TARGET   = parseFloat("{{ $comboActive ? $comboCouponTarget : 0 }}") || 0; // 30,000
  const COMBO_ORIGINAL = parseFloat("{{ $comboActive ? $comboOriginal : 0 }}") || 0;     // 80,000

  const CISCA_FEE = parseFloat("{{ $CISCA_FEE }}") || 0;
  const SCMF_FEE  = parseFloat("{{ $SCMF_FEE }}")  || 0;

  // Elements
  const feeInput  = document.getElementById('course_fee');   // price used for math
  const couponInp = document.getElementById('coupon');
  const applyBtn  = document.getElementById('applyCouponBtn');
  const feedback  = document.getElementById('couponFeedback');

  const amtOrigT  = document.getElementById('amountOriginalText');
  const amtDiscT  = document.getElementById('amountDiscountText');
  const amtPayT   = document.getElementById('amountPayableText');

  const hfValid   = document.getElementById('coupon_valid');
  const hfType    = document.getElementById('discount_type');
  const hfValue   = document.getElementById('discount_value');
  const amtOrigH  = document.getElementById('amount_original');
  const amtDiscH  = document.getElementById('amount_discount');
  const amtPayH   = document.getElementById('amount_payable');

  const vatSpan = document.getElementById('amountvatText');
  const vatH    = document.getElementById('amount_vat');
  //const cgstSpan = document.getElementById('amountCgstText');
  //const sgstSpan = document.getElementById('amountSgstText');
  //const cgstH    = document.getElementById('amount_cgst');
  //const sgstH    = document.getElementById('amount_sgst');

  // Helpers
  const num   = (v) => { const n = parseFloat(v); return isNaN(n) ? 0 : n; };
  const money = (n) => (Math.round(n*100)/100).toFixed(2);

  function showMsg(msg, ok){
    if (!feedback) return;
    feedback.textContent = msg;
    feedback.style.display = 'block';
    feedback.classList.remove('alert-success','alert-error');
    feedback.classList.add(ok ? 'alert-success' : 'alert-error');
  }

  function setTotals(original, discount){
    const subtotal = Math.max(0, original - discount);
    const cgst = subtotal * 0.09;
    const sgst = subtotal * 0.09;
	const vat = subtotal * 0.05;
    const payable = subtotal + vat;

    amtOrigT.textContent = money(original);
    amtDiscT.textContent = money(discount);
    vatSpan.textContent = money(vat);
    amtPayT.textContent  = money(payable);

    amtOrigH.value = money(original);
    amtDiscH.value = money(discount);
    vatH.value    = money(vat);
    amtPayH.value  = money(payable);
  }

  // Compute totals for each page type:
  // - FOSCM: Original = COMBO_ORIGINAL; built-in offer = COMBO_ORIGINAL - COMBO_OFFER; coupon lowers to COMBO_TARGET
  // - CISCA: Original = CISCA_FEE + SCMF_FEE; built-in offer = SCMF_FEE (SCMF free); coupon reduces CISCA_FEE
  // - Others: Original = course_fee; coupon optional
  function computeTotals(){
    let baseOriginal = 0;
    let priceBeforeCoupon = 0;
    let couponDiscount = 0;

    if (COMBO_ON && IS_FOSCM) {
      baseOriginal = COMBO_ORIGINAL;     // 80,000
      priceBeforeCoupon = COMBO_OFFER;   // 50,000 (offer)
    } else if (IS_CISCA) {
      baseOriginal = CISCA_FEE + SCMF_FEE; // show full value of CISCA + SCMF
      priceBeforeCoupon = CISCA_FEE;       // SCMF is free by default (offer)
    } else {
      const fee = num(feeInput.value || 0);
      baseOriginal = fee;
      priceBeforeCoupon = fee;

    }

    // Coupon (if any) applies on priceBeforeCoupon
    if (hfValid.value === '1') {
      const t = (hfType.value || '').toLowerCase();
      const v = num(hfValue.value || 0);
      if (t === 'amount')  couponDiscount = v;
      if (t === 'percent') couponDiscount = priceBeforeCoupon * (v/100);
      if (couponDiscount > priceBeforeCoupon) couponDiscount = priceBeforeCoupon;
    }

    // Built-in offer portion
    const offerDiscount = Math.max(0, baseOriginal - priceBeforeCoupon);
    const totalDiscount = offerDiscount + couponDiscount;

    setTotals(baseOriginal, totalDiscount);
  }

  function applyFreeMode(){
    // When course is fully free, show discount equal to the original.
    // For CISCA (rare), "original" should reflect CISCA+SCMF;
    // For FOSCM, reflect combo original; else just fee.
    let original = num(feeInput.value || 0);
    if (COMBO_ON && IS_FOSCM) original = COMBO_ORIGINAL;
    else if (IS_CISCA) original = CISCA_FEE + SCMF_FEE;

    setTotals(original, original);
    if (applyBtn) applyBtn.disabled = true;
    if (couponInp){
      couponInp.value = '';
      couponInp.placeholder = 'Free offer applied';
      couponInp.readOnly = true;
    }
    hfValid.value = '1';
    hfType.value  = 'amount';
    hfValue.value = original.toString();
    showMsg('Free offer applied - no payment required.', true);
  }

  // Ensure fee input is aligned with the pre-coupon price
  if (COMBO_ON && IS_FOSCM) {
    feeInput.value = money(COMBO_OFFER);
  } else if (IS_CISCA) {
    feeInput.value = money(CISCA_FEE);
  }

  // INIT totals
  if (IS_FREE) applyFreeMode(); else computeTotals();

  feeInput?.addEventListener('input', computeTotals);

  // APPLY COUPON
  async function applyCoupon(){
    const code = (couponInp.value || '').trim();
    if (!code) { showMsg('Please enter a coupon code.', false); return; }

    applyBtn.disabled = true;
    const prev = applyBtn.textContent;
    applyBtn.textContent = 'Validating.....';
    feedback.style.display = 'none';

    try {
      const resp = await fetch("{{ url('validate-coupon.php') }}", {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: "coupon=" + encodeURIComponent(code)
      });

      const ct = resp.headers.get('content-type') || '';
      if (!ct.includes('application/json')) {
        hfValid.value = ''; hfType.value = ''; hfValue.value = '';
        computeTotals();
        showMsg('Unexpected server response. Please try again.', false);
        return;
      }

      const data = await resp.json();
      if (!resp.ok || !data.valid) {
        hfValid.value = ''; hfType.value = ''; hfValue.value = '';
        computeTotals();
        showMsg(data.message || 'Invalid or expired coupon.', false);
        return;
      }

      if (COMBO_ON && IS_FOSCM) {
        // FOSCM combo: 50,000 -> 30,000 (extra 20,000 off)
        const extraOff = Math.max(0, COMBO_OFFER - COMBO_TARGET); // 20,000
        hfValid.value = '1';
        hfType.value  = 'amount';
        hfValue.value = String(extraOff);
        computeTotals();
        showMsg('Coupon applied on combo. Final payable ' + (COMBO_TARGET).toFixed(2) + '.', true);
      } else {
        // Generic coupon (works for CISCA and others)
        const dtype = (data.type || '').toLowerCase();
        const dval  = parseFloat(data.value || 0);
        if (!dtype || isNaN(dval)) {
          hfValid.value = ''; hfType.value = ''; hfValue.value = '';
          computeTotals();
          showMsg('Coupon response incomplete.', false);
          return;
        }
        hfValid.value = '1';
        hfType.value  = dtype;
        hfValue.value = dval;
        computeTotals();
        showMsg('Coupon applied successfully.', true);
      }

    } catch (e) {
      hfValid.value = ''; hfType.value = ''; hfValue.value = '';
      computeTotals();
      showMsg('Network error while validating coupon.', false);
    } finally {
      applyBtn.disabled = false;
      applyBtn.textContent = prev;
    }
  }

  applyBtn?.addEventListener('click', applyCoupon);
})();
</script>
<script>

(function(){
  // JSON generated earlier: { "<State>": [ { college, university }, ... ] }
  const DATA_URL = "{{ asset('data/colleges_with_universities.json') }}";

  // Elements
  const countryEl     = document.getElementById('country');
  const stateEl       = document.getElementById('state');
  const stateNameH    = document.getElementById('state_name');
  const countryNameH  = document.getElementById('country_name');

  const collegeInput  = document.getElementById('collegeInput');
  const collegeList   = document.getElementById('collegeList');

  const univHidden    = document.getElementById('university_hidden');
  const collegeIsNewH = document.getElementById('college_is_new');
  const univIsNewH    = document.getElementById('university_is_new');

  // Data
  let DATA = {};           // { state: [ {college, university}, ... ] }
  let CURRENT = [];        // list for the selected state
  let byCollege = new Map(); // normalized college -> university

  // Helpers
  const norm = s => (s || "").toLowerCase().trim().replace(/\s+/g,' ');

  function buildIndex(list){
    byCollege = new Map();
    list.forEach(item => {
      byCollege.set(norm(item.college), item.university || "");
    });
  }

  function setOptions(list){
    collegeList.innerHTML = '';
    list.forEach(item => {
      const opt = document.createElement('option');
      // Show "College (University)" in the suggestions for clarity,
      // but the value remains the College so the input stays clean.
      opt.value = item.college;
      opt.label = item.university ? `${item.college} (${item.university})` : item.college;
      collegeList.appendChild(opt);
    });
  }

  function refreshForState(){
    const stateName = (stateNameH?.value || '').trim();
    CURRENT = Array.isArray(DATA[stateName]) ? DATA[stateName].slice() : [];
    // sort by college
    CURRENT.sort((a,b)=>a.college.localeCompare(b.college));
    buildIndex(CURRENT);
    setOptions(CURRENT);

    // reset values/flags on state change
    collegeInput.value = '';
    univHidden.value = '';
    collegeIsNewH.value = '1';
    univIsNewH.value = '1';
  }

  function updateMatchFlags(){
    const v = collegeInput.value;
    const hit = byCollege.get(norm(v)); // exact (case-insensitive) match
    if (hit !== undefined){
      // Existing college from the list
      collegeIsNewH.value = '0';
      univHidden.value    = hit || '';
      univIsNewH.value    = hit ? '0' : '1';
    } else {
      // New/unknown college
      collegeIsNewH.value = '1';
      univHidden.value    = '';
      univIsNewH.value    = '1';
    }
  }

  // Load data once
  fetch(DATA_URL, { cache: 'no-cache' })
    .then(r => r.json())
    .then(json => { DATA = json || {}; })
    .catch(e => { console.warn('Could not load college+university JSON:', e); });

  // Wire up state/country changes
  stateEl?.addEventListener('change', () => {
    const opt = stateEl.options[stateEl.selectedIndex];
    if (opt) stateNameH.value = opt.textContent || '';
    refreshForState();
  });

  countryEl?.addEventListener('change', () => {
    const opt = countryEl.options[countryEl.selectedIndex];
    if (opt) countryNameH.value = opt.textContent || '';
    // Your existing code repopulates states; we reset here
    CURRENT = [];
    byCollege = new Map();
    collegeList.innerHTML = '';
    collegeInput.value = '';
    univHidden.value = '';
    collegeIsNewH.value = '1';
    univIsNewH.value = '1';
  });

  // Detect match while typing or on blur
  collegeInput.addEventListener('input', updateMatchFlags);
  collegeInput.addEventListener('blur',  updateMatchFlags);

  // Final guard on submit
  document.getElementById('regForm').addEventListener('submit', (e) => {
    
    // Ensure match status/university is final
    updateMatchFlags();
  });
})();
</script>

<script>
(function(){
  const yearSelect = document.getElementById('yearOfPassing');
  if (!yearSelect) return;

  const currentYear = new Date().getFullYear();
  const startYear   = currentYear ; // go back 50 years
  const endYear     = currentYear + 5;  // allow a few years ahead for ongoing courses

  for (let y = endYear; y >= startYear; y--) {
    const opt = document.createElement('option');
    opt.value = y;
    opt.textContent = y;
    yearSelect.appendChild(opt);
  }
})();
</script>
<script>
(function(){
  // Tabs
  const tabStudent   = document.getElementById('tabStudent');
  const tabUniv      = document.getElementById('tabUniversity');
  const leadTypeH    = document.getElementById('lead_type');

  // Sections in the single (student) panel
  const feesTab       = document.getElementById('fees_tab');
  const yearOfPassing = document.getElementById('yearofpassing');
  const noteWrap      = document.getElementById('note');          // textarea wrapper
  const websiteWrap   = document.getElementById('website');       // wrapper (contains input#website)
  const designationWrap = document.getElementById('designation'); // wrapper (contains input#uni_designation)
  const couponBoxes   = document.querySelectorAll('.coupon-box');

  // Inputs / labels we toggle
  const couponInp   = document.getElementById('coupon');
  const applyBtn    = document.getElementById('applyCouponBtn');
  const collegeInp  = document.getElementById('collegeInput');
  const collegeLbl  = document.querySelector('label[for="collegeInput"]');
  const yearSelect  = document.getElementById('yearOfPassing');

  // Common required fields (always required in both modes)
  const commonRequired = [
    'input[name="name"]',
    'input[name="lname"]',
    '#email',
    '#cmobile',
    'input[name="mobile"]',
    '#country',
    '#state'
  ].map(s => document.querySelector(s)).filter(Boolean);

  // Student-only required
  const studentOnlyRequired = [ yearSelect ].filter(Boolean);


  // Helpers
  const show = (el, on) => { if (el) el.style.display = on ? '' : 'none'; };
  const setRequired = (el, on) => { if (el) on ? el.setAttribute('required','required') : el.removeAttribute('required'); };
  const setRequiredList = (list, on) => list.forEach(el => setRequired(el, on));

  function activate(mode){
    const isStudent = (mode === 'student');
    leadTypeH.value = isStudent ? 'student' : 'university';

    // Tabs visual
    tabStudent.classList.toggle('active', isStudent);
    tabUniv.classList.toggle('active', !isStudent);
    tabStudent.setAttribute('aria-selected', isStudent ? 'true' : 'false');
    tabUniv.setAttribute('aria-selected', !isStudent ? 'true' : 'false');

    // Show/Hide sections
    couponBoxes.forEach(b => show(b, isStudent));
   
    show(yearOfPassing, isStudent);

    show(noteWrap, !isStudent);
    show(websiteWrap, !isStudent);
    show(designationWrap, !isStudent);

    // Label switch: college -> university
    if (collegeLbl){
      collegeLbl.textContent = isStudent ? 'College/University*' : 'University*';
    }

    // Required logic
    setRequiredList(commonRequired, true);       // always required
    setRequiredList(studentOnlyRequired, isStudent); // Year of Passing only for students

    // Disable coupon inputs when hidden
    if (!isStudent){
      if (couponInp){ couponInp.value = ''; couponInp.setAttribute('disabled','disabled'); }
      if (applyBtn){ applyBtn.setAttribute('disabled','disabled'); }
    } else {
      if (couponInp){ couponInp.removeAttribute('disabled'); }
      if (applyBtn){ applyBtn.removeAttribute('disabled'); }
    }
  }

  // init + events
  activate('student');
  tabStudent.addEventListener('click', () => activate('student'));
  tabUniv.addEventListener('click',   () => activate('university'));

  // Guard on submit: ensure common fields present; year only if student
  document.getElementById('regForm').addEventListener('submit', (e) => {
    const isStudent = (leadTypeH.value === 'student');

    // Check common required
    for (const el of commonRequired){
      if (!el) continue;
      if (!el.value || (el.tagName === 'SELECT' && !el.value)){
        e.preventDefault();
        el.focus();
        return;
      }
    }
    // Student-only year requirement
    
  });
})();
</script>


@endsection
