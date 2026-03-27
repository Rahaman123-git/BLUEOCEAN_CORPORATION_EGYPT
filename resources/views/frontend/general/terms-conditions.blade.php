@extends('layouts.frontend.app')
@section('title', ' Term & Conditions - Blue Ocean Corporation')

@section('content')
<div class="breadcrumb py-3">
  <div class="container">
    <nav class="flex" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse flex-wrap">
        <li class="inline-flex items-center">
          <a href="#" class="inline-flex items-center text-sm font-medium text-[#9A9A9A]">
            <img src="{{ asset('assets/frontend/images/icons/home.svg') }}" alt="home icon" class="w-5 h-5 mr-2" />
            Home
          </a>
        </li>
        <li aria-current="page">
          <div class="flex items-center">
            <span class="px-1 text-[#1E1E1E]">/</span>
            <span class="ms-1 text-sm font-medium text-[#1E1E1E]">Term & Conditions</span>
          </div>
        </li>
      </ol>
    </nav>
  </div>
</div>

<section class="page-banner-simple relative">
  <img src="{{ asset('assets/frontend/images/terms-condition-banner-bg.png') }}" class="absolute left-0 top-0 w-full h-full object-cover -z-[1]" />
  <div class="container">
    <div class="py-20 lg:py-40">
      <h1 class="text-5xl lg:text-[64px] text-white">Term & <span class="font-medium">Conditions</span></h1>
    </div>
  </div>
</section>

<!-- Section Starts Here 1 -->
<section class="terms-section relative">
  <div class="diveder-angle hidden lg:block top-[7%]">
    <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
  </div>
  <div class="container">
    <h1>Welcome to BLUE OCEAN CORPORATION</h1>
    <ul>
      <li>This page provides information about the legal terms and conditions that apply to your use of the site.</li>
      <li>
        We, BLUE OCEAN CORPORATION (“blueoceancorporation.com”, “we” or “us”) ask you to take the time to read these Terms and Conditions carefully. They explain the rules covering your use of this website (the “Site”) as well as other
        information regarding your rights.
      </li>
      <li>By using the Site you’ll be confirming that you have read and understood these Terms and Conditions and that you agree to follow them.</li>
      <li>
        These Terms and Conditions may change from time to time and, if they do, the most up-to-date version will always be available on our Site. We will indicate at the top of this page when they were last updated.
      </li>
      <li>
        Even if you have already read these Terms and Conditions before, please ensure that you check back regularly to view any changes which may have been made. By continuing to use the site after these Terms and Conditions have changed,
        you will be confirming that you have read and understood, and agreed to be bound by, any revised Terms and Conditions.
      </li>
    </ul>

    <ol>
      <li>
        <h2>1. WHO CAN USE THE SITE</h2>
        <ul>
          <li>
            When you are using our Site we expect that you are over the age of 18. However we do hope that our students and future students are as engaged in their learning and education as their parents. So if you are looking at
            blueoceancorporation.com and are under 18 and/or a minor, then the use of the Site is subject to the consent of your parent or guardian.
          </li>
          <li>
            As educators, protecting the online privacy of children is especially important to us. We advise parents or guardians who permit their children to use the Site, and in particular any interactive element of the Site, that they
            should make their child aware of the potential risks to them.
          </li>
        </ul>
      </li>
      <li>
        <h2>2. USE OF THE SITE AND USER CODE OF CONDUCT</h2>
        <ul>
          <li>We want all our users to be able to feel safe and at ease whilst using our site. The best way to make sure this happens is to follow these Terms and Conditions.</li>
          <li>You may only use the Site lawfully, for personal (non-commercial) purposes and in a manner which does not damage the Site or infringe the intellectual property or other rights of any person, firm or company.</li>
          <li>
            You may download and store one copy of any page or other element of the content of the Site (the “Content”), and may make one printed copy, for your personal (non-commercial) use only, but you must not distribute any Content to
            other people or delete or change any copyright, trademark, or other proprietary notices. If you wish to make further copies of any Content, or to distribute copies of any Content to other people, you must first obtain our
            written permission.  You can do this via the Contact Us section of this Site.
          </li>
          <li>
            You agree that in using the Site (or any part thereof) or the Content you will not attempt to gain unauthorised access to any part or component of the Site or the Content, the server on which the Site is stored or any server,
            computer or database connected to the Site. In the event that you have a claim against another user of the Site arising out of that user’s use of the Site or the Content, you agree to pursue such right, claim or action
            independently of and without recourse to us.
          </li>
          <li>
            You agree that you will not place or transmit false or misleading information on or through this Site or input or upload to this Site any information that contains viruses, Trojan horses, worms, time bombs or other computer
            programming routines that are intended to damage, interfere with, intercept or expropriate any system or this Site.
          </li>
          <li>
            We cannot take responsibility or liability for the conduct of any person who uses our Site. In addition, blueoceancorporation.com is not responsible or liable for any loss or damage suffered as a result of the use of our site.
          </li>
          <li>
            We ask that in using this Site you show respect for other users and the property of others. You agree:
          </li>
          <li>
            to behave in a respectful way to all other users, not to post or otherwise make available content which is, in our view, likely to impair others’ enjoyment of this site
          </li>
          <li>not to breach the law or encourage a breach of the law.</li>
          <li>
            not to post or otherwise make available content which, in our view, portrays unacceptable violence.
          </li>
          <li>
            not to post or otherwise make available content which is, in our view, abusive, offensive, defamatory, obscene, pornographic or of a sexual nature, illegal, threatening, intimidating, in breach of privacy, confidentiality or
            third party rights or otherwise unacceptable.
          </li>
          <li>
            not to behave in a way which is threatening, intimidating, harassing or bullying, offensive, abusive, defamatory, discriminatory or demeaning or to stalk or violate the rights of others including individuals’ privacy rights.
          </li>
          <li>not to share any information which is confidential to any other person.</li>
          <li>
            not to register as or on behalf of anyone else, impersonate anyone else, seek to take on a false identity or misrepresent yourself, your identity or your age.
          </li>
          <li>
            not post or otherwise make available content containing financial information (such as account, credit or debit card details) or information which identifies an individual personally or is capable of identifying an individual
            personally (such as names, phone numbers, email addresses or postal addresses).
          </li>
          <li>to respect information you obtain on our site and use it only in accordance with this User Code of Conduct and our Terms and Conditions.</li>
          <li>
            not to advertise, promote or endorse any goods or services and not use our site to send any chain letters, junk mail, ‘spamming’ material or any other form of bulk communication.
          </li>
          <li>
            We may investigate any reported breach of these terms and conditions or complaints and take any action that we deem appropriate (which may include, without limitation, removing any of your information, issuing warnings,
            suspending, restricting or terminating your access to and/or removing any Content from the Site.
          </li>
          <li>
            You agree that we may terminate or suspend your use of the Site at any time and for any or no reason without any notice, even if we continue to allow others to use it. You agree that we will not be liable to you for any loss
            caused by termination or suspension of your access to the Site.
          </li>
        </ul>
      </li>
      <li>
        <h3>3. USER-GENERATED CONTENT</h3>
        <ul>
          <li>
            This site also contains an opportunity for users to comment on, upload documents or share articles and posts on the site (“User Content”). Any User Content that is not your personal information will be considered
            non-confidential and non-proprietary. So long as the User Content remains on our Site we may use, copy, distribute, modify, make derivative works from and disclose to third parties any such material for any purpose.
          </li>
          <li>
            You confirm that all information and details provided by you to us (including on registration, if applicable) are true, accurate and up to date in all respects and at all times and that you will comply with Paragraph 2 (Use of
            this Site and User Code of Conduct) or as set out elsewhere in these Terms and Conditions.
          </li>
          <li>
            You further confirm that in relation to any material submitted to the Site, you have the right to do so and have obtained all necessary licenses and/or approvals. You acknowledge that you are responsible for the material that
            you share or post and that whilst we keep an eye on User Content, we may not check materials or details before they are published.
          </li>
          <li>
            We may remove or block access to any User Content at any time. For example, we may do this where we reasonably believe that someone has broken the law, e.g. infringed a third party’s intellectual property rights or breached a
            duty of confidentiality. We can bear no liability in respect of any loss or damage suffered as a result of any of these actions.
          </li>
          <li>
            It is information in the public domain, so we advise you to think carefully before choosing to share any personal information on the interactive parts of our Site. It may be accessed by any person using the web in any part of
            the world and can be found using independent search engines. So, if you choose to post information to the interactive parts of our site, please be aware that you do so at your own risk and that it won’t be protected by
            blueoceancorporation.com.  For more information, please see our Privacy Policy.
          </li>
        </ul>
      </li>
      <li>
        <h3>4. Third Party Content</h3>
        <ul>
          <li>This site will contain some content which does not come from us, whether such content is posted by users or otherwise comes from anyone other than us (together, “Third Party Content”).</li>
          <li>
            Whilst we try to keep an eye on it, Third Party Content is not approved by blueoceancorporation.com and we have no obligation to police it. Personal views or opinions expressed in such Third Party Content may not represent the
            views of BLUE OCEAN CORPORATION and does not constitute a recommendation, endorsement or guarantee by us of quality or accuracy. We shall not be responsible or liable for any Third Party Content or for the consequences of the
            use of it.
          </li>
          <li>
            If you have any concerns about content appearing on this site, please click here to Contact Us. We reserve the right to remove Third Party content from the Site with or without notice.
          </li>
        </ul>
      </li>
      <li>
        <h3>5. Links to Others Sites</h3>
        <ul>
          <li>
            Our site also contains links to other third party websites, resources, and partners. Whilst we hope you find them useful, we can’t endorse them and we reserve the right to remove a link at any time.
          </li>
          <li>
            If you choose to access any of these links, you will be leaving our Site. Of course we hope you come back and visit us again. As you go you should be aware that we don’t have any control over these third party sites.  We are not
            responsible for the content, advertising, or information available from them, or for any dealings or disputes that you may have in relation to those sites.
          </li>
          <li>
            We are also not liable for any loss or damage which may be suffered as a result of the use of such links and third party sites.
          </li>
          <li>We encourage you to review the terms and conditions and privacy policy on any new site you may choose to access because our terms and conditions and privacy policy will no longer be applicable.</li>
          <li>
            We would be delighted if you want to link to blueoceancorporation.com homepage, provided you do so in a way that is fair and legal and does not damage our reputation or take advantage of it. You will need our express permission
            if you wish to create a link that indicates any form of association, approval or endorsement from us. You can ask us through the Contact Us section of the Site. We do reserve the right to withdraw linking permission for any
            reason without notice.
          </li>
        </ul>
      </li>
      <li>
        <h3>6. Pop Ups</h3>
        <ul>
          <li>
            When using our Site, you may receive a pop-up window. We don’t mean to surprise you. They are for things like competition entry forms and questionnaires to help us improve our service to you. Pop-up boxes from
            blueoceancorporation.com are clearly marked with a heading from us.
          </li>
          <li>
            You might also get pop-up ads from third parties. These may appear due to software you have installed, deliberately or unknowingly, on your computer. Unfortunately, we cannot control these pop-up boxes because they haven’t come
            from us. And we certainly do not endorse any website or product which comes from these third parties.  To read more about our Cookie Policy click here.
          </li>
        </ul>
      </li>
      <li>
        <h3>7. INTELLECTUAL PROPERTY</h3>
        <ul>
          <li>
            All text, graphics, audio, video or image files, content, software, applications and information displayed on or available from this site, and all copyright, trade mark rights, design rights and other intellectual property
            rights in them (together, the “Proprietary Content”) are the property of  BLUE OCEAN CORPORATION, other BLUE OCEAN CORPORATION and BLUE OCEAN CORPORATION initiatives, our users, suppliers or licensors. This includes, without
            limitation, the organisation and lay-out of the site and the underlying software.  Those rights are protected by laws and treaties around the world.  All such rights are reserved.
          </li>
          <li>By using the site you’re agreeing that Proprietary Content is available for personal use only and that you will not copy, reproduce, publish, distribute or dispose of in any way, any Proprietary Content.</li>
          <li>If you wish to quote our content you are welcome to Contact Us to make arrangements to use the content in context and accurately.</li>
          <li>Neither the BLUE OCEAN CORPORATION name nor any other BLUE OCEAN company name, trade mark, logo or design may be used or copied in any manner.</li>
        </ul>
      </li>
      <li>
        <h3>8. Accessibility</h3>
        <ul>
          <li>
            If you have trouble using our website with certain web browsers or other software or if you want to let us know how we can improve accessibility, please let us know by clicking here to contact us. Your feedback and suggestions
            will help us to improve our service to you
          </li>
        </ul>
      </li>
      <li>
        <h3>9. Site information and downtime</h3>
        <ul>
          <li>Please note that we may make changes to the site, its functions and services from time to time.</li>
          <li>
            The site may be unavailable occasionally for maintenance, updating or otherwise. Where this happens we apologise for any inconvenience caused. However, we are not liable for any loss, damages or inconvenience resulting from such
            unavailability.
          </li>
          <li>
            At blueoceancorporation.com we take great care in seeking to present accurate, transparent and useful information to you. However, there may be content on this site which is not generated by us, for example Third Party Content,
            as described above. This may mean that some information might be out of date, incomplete, contain some errors or be in some way unreliable. Just to be sure, please check any information obtained from this site before acting upon
            it in any way.
          </li>
        </ul>
      </li>
      <li>
        <h3>10. LIABILITY AND INDEMNITY</h3>
        <ul>
          <li>
            The Site and the Content are provided as a convenience and for general information purposes only.  Commentary and other Content posted on the Site are not intended to amount to advice on which reliance should be placed.
            Therefore, although we have taken reasonable care in the preparation of the Site and the Content we do not warrant that it will always be available, that it will be free from errors, bugs or viruses or that the Content is
            accurate or up to date (and any reliance placed on the Content is entirely at your own risk).
          </li>
          <li>
            To the extent possible under applicable law we exclude all liability which might otherwise arise, in contract, tort (including negligence) or on any other basis, as a result of your access to or use of the Site or the Content.
          </li>
          <li>
            In using this site you agree to indemnify and hold harmless BLUE OCEAN CORPORATION and all other BLUE OCEAN CORPORATION and education initiatives, their subsidiaries and holding companies, the subsidiaries of their holding
            companies and each of their respective officers, directors, shareholders, employees, representatives and agents in full against any claims from other persons, firms and companies, and any associated losses, liabilities, damages
            or costs of any kind, that may arise as a result of your use of the Site (including any breach or suspected breach of these terms or conditions), your violation of any law or the rights of a third party or our publishing your
            posted materials, except to the extent that they are caused by our editing of your materials.
          </li>
        </ul>
      </li>
      <li>
        <h3>11. DISPUTES</h3>
        <ul>
          <li>For the purposes of this section you are a consumer if you access the site for reasons outside your trade, business or profession.</li>
          <li>
            As a consumer you agree to use the Site (or any part of it) in accordance with all applicable laws relevant to the location (jurisdiction) from which you access the Site.
          </li>
          <li>
            These Terms and Conditions and any dispute or claim in relation to them (including non-contractual disputes or claims)  are governed by English law and we reserve the right to bring proceedings in the courts in any location (the
            English courts, your country of residence or whichever forum) we feel is appropriate.
          </li>
          <li>We always recommend that you should seek local legal advice, however please speak to us first if you have any concerns to see if they can be resolved</li>
        </ul>
      </li>
      <li>
        <h3>12. GENERAL</h3>
        <ul>
          <li>If any of these terms are deemed invalid or unenforceable for any reason (including, but not limited to the exclusions and limitations set out above), then the remaining terms will continue to apply.</li>
          <li>
            Unless we otherwise expressly agree in writing, these terms and conditions constitute the entire agreement between you and us with respect to your use of the Site and the Content and, if you are not a consumer, supersede all
            discussions, communications, conversations and agreements concerning the subject matter hereof.
          </li>
          <li>
            If we fail to insist that you perform any of your obligations under these terms and conditions, or if we do not enforce our rights against you, or if we delay in doing so, that will not mean that we have waived our rights
            against you and will not mean that you do not have to comply with those obligations. If we waive a default by you, we will only do so in writing, and that will not mean that we will automatically waive any later default by you
          </li>
        </ul>
      </li>
      <li>
        <h3>13. If in doubt, please talk to us</h3>
        <p>
          If you have any queries, comments or complaints regarding the site or these Terms and Conditions, just get in touch. You can click here to contact us or write to us at:
          <a class="text-primary hover:underline" href="mailto:info@blueoceancorporation.com">info@blueoceancorporation.com</a>
        </p>
      </li>
    </ol>
  </div>
</section>
<!-- Section End Here 1 -->

@endsection