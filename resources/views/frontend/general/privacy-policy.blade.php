@extends('layouts.frontend.app')
@section('title', ' Privacy Policy - Blue Ocean Corporation')

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
            <span class="ms-1 text-sm font-medium text-[#1E1E1E]">Privacy Policy</span>
          </div>
        </li>
      </ol>
    </nav>
  </div>
</div>

<section class="page-banner-simple relative">
  <img src="{{ asset('assets/frontend/images/privacy-policy-banner-bg.png') }}" class="absolute left-0 top-0 w-full h-full object-cover -z-[1]" />
  <div class="container">
    <div class="py-20 lg:py-40">
      <h1 class="text-5xl lg:text-[64px] text-white">Privacy <span class="font-medium">policy</span></h1>
    </div>
  </div>
</section>

<!-- Section Starts Here 1 -->
<section class="privacy-policy relative">
  <div class="diveder-angle hidden lg:block top-[7%]">
    <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
  </div>
  <div class="container">
    <p>
      This Privacy Policy (“Privacy Policy”) describes our policies and procedures on the collection, use, disclosure, and sharing of your personal information when you interact with Blue Ocean Corporation. This Privacy Policy applies to
      activities by Blue Ocean Corporation and its affiliates and subsidiaries (collectively referred to as “Blue Ocean Corporation,” “we,” or “us”). Capitalized terms that are not defined in this Privacy Policy have the meaning given to
      them in our Terms of Service. Blue Ocean Corporation is the data controller of your personal information and is responsible for providing you with this Privacy Policy.
    </p>
    <h1>Overview</h1>
    <p class="font-medium">Blue Ocean Corporation collects information directly from you, from third parties, and automatically through your use of the Blue Ocean Corporation platform</p>

    <h2>Information We Collect</h2>
    <p>
      Account and Profile Data: When you create an account and profile on the Blue Ocean Corporation platform, we collect your name, email address, and other information you provide, such as your areas of interest or expertise. You can
      choose to add additional information to your public-facing profile, such as your photo, country of residence, employment history, educational background, and any other information you wish to include.
    </p>
    <h2>Your Content</h2>

    <p>
      We collect the information and content that you post on the Blue Ocean Corporation platform, including your questions, answers, comments, photos, and any edits made to your content. Unless you have posted certain content anonymously,
      your content, along with the date and time stamps, and associated comments, are publicly viewable on the Blue Ocean Corporation platform. Your content may be indexed by search engines and republished elsewhere on the Internet in
      accordance with our
    </p>

    <h2>Terms of Service.</h2>
    <ul>
      <li>
        <span>Communication Records:</span> We maintain a record of your communications with us, whether through email, the Blue Ocean Corporation platform, or other means. The Blue Ocean Corporation platform also includes a messaging
        feature that allows you to send direct messages to other users. We store these communications and related information, such as the date and recipient of the communication.
      </li>
      <li>
        <span>Third-Party Application Login:</span> You have the option to log into your Blue Ocean Corporation account using third-party applications (e.g., Facebook, Google). When you use this login method, we collect your name and email
        address associated with that third-party application for authentication and identity verification purposes. You may also choose to import your contacts to your Blue Ocean Corporation account to connect with your friends on the
        platform.
      </li>
      <li>
        <span> Cookies and Similar Technologies:</span> Blue Ocean Corporation and our third-party providers use cookies, log files, pixel tags, local storage objects, and other similar technologies to automatically collect information
        about your activities, such as your searches, page views, date and time of your visit, and other information about your use of the Blue Ocean Corporation platform. We also collect information about your web browser or mobile device,
        such as your browser type, device type, browser language, IP address, mobile carrier, unique device identifier, and requested and referring URLs. We receive information when you view content or interact with the Blue Ocean
        Corporation platform, even if you do not have an account. For more detailed information about these mechanisms, please refer to our Cookie Policy.
      </li>
      <li>
        <span> Billing and Payment Data:</span> If you subscribe to Blue Ocean Corporation’s services or make payments for our programs, we collect billing information from you. Depending on your location, this information may include your
        billing address, social security number, the last four digits of your credit card or debit card, phone number, and email address.
      </li>
      <li>
        <span> Platform Engagement Data:</span> We collect platform engagement and browsing information, such as IP address, date and time stamp, user agent, Blue Ocean Corporation cookie ID, URLs visited, unique advertising identifiers
        (including mobile device advertising identifiers), or content identifiers (if applicable), time zone, and other information about your activity on the Blue Ocean Corporation platform. We may also receive this information from
        third-party sites and services that have embedded Blue Ocean Corporation pixels, widgets, plug-ins, buttons, or related technologies. Additionally, we may receive such information from third parties, such as our partners or
        affiliates.
      </li>
      <li>
        <span> Data from Advertisers: </span>Third-party advertisers using our advertising services may provide us with information about you as part of their ad campaigns (e.g., email addresses) to create custom audiences for personalized
        advertising or to measure the effectiveness of their ads. For more information, including how to opt-out of certain ad services, please refer to our Cookie Policy.
      </li>
    </ul>

    <h3>How We Use Your Information and Legal Basis for Processing</h3>
    <p>
      We process the information we collect for the following purposes, and under the following legal basis. You may choose not to provide personal information through the Blue Ocean Corporation platform, but it may limit certain services
      we can provide to you:
    </p>
    <ul>
      <li>
        <strong>Provide our Services:</strong> We use your information to provide the services offered on the Blue Ocean Corporation platform, communicate with you about your use of the platform, respond to your inquiries, provide
        troubleshooting, and deliver customer service. These activities are necessary to fulfill our contractual obligations to you.
      </li>
      <li>
        <strong>Personalization:</strong> We use your information to customize the content and information we send or display to you on the Blue Ocean Corporation platform. This includes suggesting relevant courses or programs, helping
        others find your profile, offering location customization, personalized help and instructions, and enhancing your overall experience on the platform. This processing is based on our legitimate business interests in providing a
        personalized user experience.
      </li>
      <li>
        <strong>Billing and Payment:</strong> We collect and use your information to process payments if you subscribe to Blue Ocean Corporation’s services or make payments for our programs. This information is collected to fulfill our
        contractual obligations to you.
      </li>
      <li>
        <strong>Advertising:</strong> We display interest-based advertising on the Blue Ocean Corporation platform, improve our advertising and measurement systems, and measure the effectiveness and reach of ads and services. This
        processing is based on our legitimate business interests in providing relevant advertising. When necessary, we obtain your consent before engaging in this processing.
      </li>
      <li>
        <strong>Marketing and Promotions:</strong> We may use your information for marketing and promotional purposes, such as sending you news, special offers, promotions, or other relevant information about our products and services. We
        may also provide information about third-party products and services that may interest you. It is in our legitimate interest to provide relevant and interesting marketing and promotions messages. We obtain your consent before
        sending such marketing communications, and you can unsubscribe at any time.
      </li>
      <li>
        <strong>Enable Communications:</strong> We process information about your communications with us and other users on the Blue Ocean Corporation platform to improve our services and understand their usage. This processing is necessary
        to fulfill our contractual obligations to you.
      </li>
      <li>
        <strong>Analytics:</strong> We collect analytics and metrics to better understand how users use the Blue Ocean Corporation platform. We use this data to evaluate and improve our services, including advertising and personalization,
        and to develop new products and services. This processing is based on our legitimate business interests in making informed decisions about product development.
      </li>
      <li>
        <strong>Comply with Law:</strong> We may process your information to comply with legal obligations, manage our general business operations, and fulfill other business administration purposes. This processing is necessary to comply
        with legal obligations and serve our legitimate business interests.
      </li>
      <li>
        <strong>Prevent Fraud and Misuse:</strong> We may investigate, prevent, or take action against illegal activities, suspected fraud, potential threats to safety, or violations of our Terms of Service or this Privacy Policy. This
        processing is necessary to comply with legal obligations and serve our legitimate interest in preventing misuse of the Blue Ocean Corporation platform.
      </li>
    </ul>
    <h3>How We Share Your Information</h3>
    <p>We may share your information as outlined below, and when you have requested or consented to such sharing:</p>
    <ul>
      <li>
        <strong>Service Providers:</strong> We share your information with third-party service providers who use this information to perform services on our behalf, such as payment processors, hosting providers, auditors, advisors,
        consultants, and customer service providers. These service providers assist us in providing our services.
      </li>
      <li><strong>Affiliates:</strong>The information we collect may be accessed by or shared with our affiliates, whose use and disclosure of your personal information is subject to this</li>
    </ul>
    <h3>Privacy Policy.</h3>
    <ul>
      <li>
        <strong>Business Transfers:</strong> If Blue Ocean Corporation undergoes a merger, sale, transfer of assets, acquisition, or restructuring of all or part of our business, your information may be disclosed or transferred as part of
        that transaction.
      </li>
      <li>
        <strong>Protection of Rights and When Legally Required:</strong> We may disclose information when we are required to do so by law, when necessary to respond to claims asserted against us, to comply with legal processes (e.g.,
        subpoenas or warrants), to enforce or administer our agreements and terms, to prevent fraud or illegal activities, or to protect the rights, property, or safety of Blue Ocean Corporation, its users, or others.
      </li>
      <li>
        <strong>Your Content and Public Information:</strong> Your content, including your name, profile picture, profile information, and associated activity information, is available to other users of the Blue Ocean Corporation platform
        and may also be viewed publicly by non-users. Public viewing includes visibility to non-registered visitors, and users may share your content on other sites. Additionally, search engines may index your content. You can control the
        visibility of your information through your privacy settings.
      </li>
      <li>
        <strong>Platform Engagement Information:</strong> We share aggregate statistics, metrics, and reports about the performance of ads in the Blue Ocean Corporation platform with our advertisers and publishers. This aggregated data may
        include the number of unique user views, demographics of viewers, and conversion rates. Certain features allow you to share your personal information with advertisers on our platform if you choose to do so.
      </li>
      <li><strong>Research:</strong> We share aggregated or anonymized information with third parties for market research, reporting, and analytics. This information cannot be used to identify individual users.</li>
      <li>
        <strong>Do-Not-Track Signals:</strong> Please note that we do not change system behavior on the Blue Ocean Corporation platform in response to browser requests not to be tracked. However, you may disable certain tracking by third
        parties, as explained in our Cookie Policy.
      </li>
    </ul>
    <h3>How We Share Your Information</h3>
    <ul>
      <li>
        <strong>Security:</strong> Blue Ocean Corporation maintains appropriate technical, administrative, and physical safeguards to protect the information we collect from unauthorized access, use, disclosure, destruction, and alteration.
      </li>
      <li>
        <strong>Retention:</strong> We retain your personal information for as long as we have a relationship with you. After the termination of our relationship, we retain your personal information for a period necessary to maintain
        business records, comply with record retention requirements under the law, and defend or bring any legal claims.
      </li>
    </ul>
    <h3>How We Transfer Your Information</h3>
    <p>
      Blue Ocean Corporation is headquartered in Dubai, and we have operations, entities, and service providers located in various jurisdictions worldwide. As a result, we may transfer your personal information to, or access it in,
      jurisdictions that may not provide equivalent levels of data protection as your home jurisdiction. However, we take steps to ensure that your personal information receives an adequate level of protection in the jurisdictions where we
      process it. When we transfer your personal information outside of the European Economic Area or the United Kingdom, we rely on transfer mechanisms such as the European Commission-approved Standard Contractual Clauses. For more
      information on our transfer mechanisms, please contact us using the details provided below.
    </p>
    <h3>Your Privacy Rights</h3>
    <p>Depending on your jurisdiction and applicable local laws, you may have certain rights regarding your personal information. These rights may include:</p>

    <ol>
      <li>Accessing your personal information</li>
      <li>Rectifying the personal information we hold about you</li>
      <li>Erasing your personal information</li>
      <li>Restricting our use of your personal information</li>
      <li>Objecting to our use of your personal information</li>
      <li>Data portability Withdrawing consent that you have previously given</li>
      <li>Lodging a complaint with your local data protection authority</li>
      <li>If you would like to exercise any of these rights, please contact us at <a href="mailto:privacy@blueoceancorporation.com">privacy@blueoceancorporation.com</a> or complete the appropriate form.</li>
    </ol>

    <p>
      To verify your identity and complete the process, you will need access to the email account associated with your Blue Ocean Corporation account. You can also update your account information at any time by adjusting the settings in
      your Blue Ocean Corporation account.
    </p>

    <h3>Your Choices and Settings</h3>
    <p>You have control over your privacy settings and can manage various aspects of your interaction with the Blue Ocean Corporation platform:</p>

    <ul>
      <li>
        <strong>Your Content:</strong> You can edit or delete the content you post on the Blue Ocean Corporation platform at any time. Questions you have posted may remain visible on the platform. Other users can see the history of edits
        made to your content in your profile activity. If you delete your content, it will be removed from third-party sites where it has been shared through Blue Ocean Corporation’s sharing features. However, we have no control over
        deletions or changes made to your content by others.
      </li>

      <li>
        <strong>Emails and Notifications:</strong> When you create a Blue Ocean Corporation account, you may receive email digests containing content from the platform that matches your interests. You may also receive notifications about
        other content or updates on the platform. You can opt out of receiving emails or notifications by adjusting your Email and Notification settings, but we will continue to send you transactional emails related to your account.
      </li>

      <li><strong>Interactions with Other Users:</strong> You can configure your settings to restrict who can send you messages or comment on your posts on the Blue Ocean Corporation platform.</li>

      <li><strong>Profile Discoverability:</strong> You can adjust your settings to block others from discovering your account by searching for your name or using your contact information.</li>

      <li><strong>Topics and Spaces:</strong> You can change the topics and spaces you are affiliated with in your profile.</li>

      <li><strong>Credentials:</strong> You can edit the credentials displayed in your profile or in connection with specific content.</li>

      <li><strong>Indexed Search:</strong> You can control whether your profile is indexed by search engines.</li>

      <li>
        <strong>Deleted or Deactivated Account:</strong> If you choose to “Delete Account” in your profile settings, all your content will be removed from public visibility on the Blue Ocean Corporation platform, and we may not be able to
        restore it. If you choose to “Deactivate Account,” you will no longer receive communications from us, and other users will not be able to interact with you. However, your content will remain on the platform. You can reactivate your
        account at any time by logging in.
      </li>
    </ul>

    <div class="light-gray-box">
      <h2>Contact Us</h2>
      <p>If you have any questions about our privacy practices or this Privacy Policy, please contact our Data Protection Officer at <a href="mailto:privacy@blueoceanCorporation.com">privacy@blueoceanCorporation.com</a> or by mail:</p>

      <p>
        <span>Blue Ocean Corporation</span> <br />
        Attn: Privacy <br />
        Suite B2505, Latifa Towers – Sheikh Zayed Rd – <br />
        Opp. Dubai Museum of the Future – Dubai
      </p>
    </div>
    <div class="dark-gray-box">
      <h2>Privacy Policy Updates</h2>
      <p>
        We may update this Privacy Policy from time to time to reflect changes in our privacy practices or relevant data protection laws. We will notify you of any material changes and update the “Last Updated” date at the top of this
        Privacy Policy.
      </p>
    </div>
  </div>
</section>
<!-- Section End Here 1 -->
@endsection