@extends('layouts.frontend.app')
@section('title', ' FAQ - Blue Ocean')

@section('content')
  <div class="breadcrumb py-3">
    <div class="container">
      <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse flex-wrap">
          <li class="inline-flex items-center">
            <a href="{{ route('general.home') }}" class="inline-flex items-center text-sm font-medium text-[#9A9A9A]">
              <img src="{{ asset('assets/frontend/images/icons/home.svg') }}" alt="home icon" class="w-5 h-5 mr-2" />
              Home
            </a>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <span class="px-1 text-[#1E1E1E]">/</span>
              <span class="ms-1 text-sm font-medium text-[#1E1E1E]">FAQs</span>
            </div>
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="page-banner-simple relative faq-banner">
    <img src="{{ asset('assets/frontend/images/faq-banner-bg.png') }}" class="absolute left-0 top-0 w-full h-full object-cover -z-[1]" />
    <div class="container">
      <div class="py-20 lg:py-40">
        <h1 class="text-2xl lg:text-[64px] text-white lg:leading-normal text-shodow-black">Quick Answers for Your <span class="font-medium block">Blue Ocean Journey!</span></h1>
      </div>
    </div>
  </section>

  <section class="faq-section relative">
    <div class="diveder-angle hidden lg:block top-[15%]">
      <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
    </div>
    <div class="container">
      <h2 class="text-primary text-2xl lg:text-[34px] lg:leading-[normal] font-medium mb-5">Welcome to Blue Ocean Corporation FAQ Page</h2>
      <p class="text-[#3A3A3A] text-2xl lg:text-[34px] lg:leading-[normal]">
        Here, we have compiled answers to the most commonly asked questions regarding our training programs, consulting services, and conferences. If you have any further queries, feel free to reach out to us.
      </p>

      <!--  -->
      <div id="accordion-open" data-accordion="open">
        <h2 class="faq-heading">General Questions</h2>
        <!--  -->
        <h2 id="accordion-open-heading-1">
          <button type="button" class="faq-accord-button" data-accordion-target="#accordion-open-body-1" aria-expanded="true" aria-controls="accordion-open-body-1">
            How to register for a course?
          </button>
        </h2>
        <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
          <div class="faq-accord-body">
            <p>
              You can register online by selecting your desired course on our official website and filling out the required details. Alternatively, you can email us at info@blueoceanacademy.com or call +971 52 176 9265. After your inquiry, a
              program expert will contact you to guide you through the registration process.
            </p>
          </div>
        </div>
        <!--  -->
        <h2 id="accordion-open-heading-2">
          <button type="button" class="faq-accord-button" data-accordion-target="#accordion-open-body-2" aria-expanded="true" aria-controls="accordion-open-body-2">
            How to make payment?
          </button>
        </h2>
        <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
          <div class="faq-accord-body">
            <p>Payments can be made online via our website. Your training consultant can also provide a direct payment link for your convenience.</p>
          </div>
        </div>
        <!--  -->
        <h2 id="accordion-open-heading-3">
          <button type="button" class="faq-accord-button" data-accordion-target="#accordion-open-body-3" aria-expanded="true" aria-controls="accordion-open-body-3">
            Do you have combo offers?
          </button>
        </h2>
        <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
          <div class="faq-accord-body">
            <p>Yes, we frequently offer combo packages and promotional discounts on various courses.</p>
          </div>
        </div>
        <!--  -->
        <h2 id="accordion-open-heading-4">
          <button type="button" class="faq-accord-button" data-accordion-target="#accordion-open-body-4" aria-expanded="true" aria-controls="accordion-open-body-4">
            What are the different modes of training offered?
          </button>
        </h2>
        <div id="accordion-open-body-4" class="hidden" aria-labelledby="accordion-open-heading-4">
          <div class="faq-accord-body">
            <p>We provide classroom sessions at our premises, online sessions, and corporate training that can be conducted at your office or any convenient location.</p>
          </div>
        </div>

        <h2 class="faq-heading">Public Training Courses</h2>
        <!--  -->
        <h2 id="accordion-open-heading-5">
          <button type="button" class="faq-accord-button" data-accordion-target="#accordion-open-body-5" aria-expanded="true" aria-controls="accordion-open-body-5">
            How many delegates can be accommodated in one batch?
          </button>
        </h2>
        <div id="accordion-open-body-5" class="hidden" aria-labelledby="accordion-open-heading-5">
          <div class="faq-accord-body">
            <p>Typically, each batch accommodates 15 students, though this may vary depending on the course.</p>
          </div>
        </div>
        <!-- 6th Accordion -->
        <h2 id="accordion-open-heading-6">
          <button type="button" class="faq-accord-button" data-accordion-target="#accordion-open-body-6" aria-expanded="true" aria-controls="accordion-open-body-6">
            Can I pay in instalments?
          </button>
        </h2>
        <div id="accordion-open-body-6" class="hidden" aria-labelledby="accordion-open-heading-6">
          <div class="faq-accord-body">
            <p>Yes, we accept part payments, allowing you to pay in up to three instalments.</p>
          </div>
        </div>
        <!-- 7th Accordion -->
        <h2 id="accordion-open-heading-7">
          <button type="button" class="faq-accord-button" data-accordion-target="#accordion-open-body-7" aria-expanded="true" aria-controls="accordion-open-body-7">
            Do you offer training programs in Arabic?
          </button>
        </h2>
        <div id="accordion-open-body-7" class="hidden" aria-labelledby="accordion-open-heading-7">
          <div class="faq-accord-body">
            <p>Yes, we have a dedicated division that delivers training programs and certification examinations in Arabic.</p>
          </div>
        </div>
        <!-- 8th Accordion -->
        <h2 id="accordion-open-heading-8">
          <button type="button" class="faq-accord-button" data-accordion-target="#accordion-open-body-8" aria-expanded="true" aria-controls="accordion-open-body-8">
            Do you provide corporate training?
          </button>
        </h2>
        <div id="accordion-open-body-8" class="hidden" aria-labelledby="accordion-open-heading-8">
          <div class="faq-accord-body">
            <p>Yes, we offer a wide range of corporate courses tailored to the specific needs of government, semi-government, and private organizations.</p>
          </div>
        </div>
        <!-- 9th Accordion -->
        <h2 id="accordion-open-heading-9">
          <button type="button" class="faq-accord-button" data-accordion-target="#accordion-open-body-9" aria-expanded="true" aria-controls="accordion-open-body-9">
            Do you provide course materials?
          </button>
        </h2>
        <div id="accordion-open-body-9" class="hidden" aria-labelledby="accordion-open-heading-9">
          <div class="faq-accord-body">
            <p>Yes, we provide course materials to enhance your understanding of the modules.</p>
          </div>
        </div>

        <h2 class="faq-heading">In-House Training</h2>
        <!-- 10th Accordion -->
        <h2 id="accordion-open-heading-10">
          <button type="button" class="faq-accord-button" data-accordion-target="#accordion-open-body-10" aria-expanded="true" aria-controls="accordion-open-body-10">
            How many delegates can be accommodated in one batch?
          </button>
        </h2>
        <div id="accordion-open-body-10" class="hidden" aria-labelledby="accordion-open-heading-10">
          <div class="faq-accord-body">
            <p class="font-medium mb-2">Our in-house courses are designed to enhance operational efficiency cost-effectively. Benefits include:</p>
            <ul>
              <li>Tailored solutions to address specific company challenges</li>
              <li>Training conducted by industry-specific faculty</li>
              <li>Customizable content to meet organizational needs</li>
              <li>Timely responses to all inquiries</li>
            </ul>
          </div>
        </div>
        <!-- 11th Accordion -->
        <h2 id="accordion-open-heading-11">
          <button type="button" class="faq-accord-button" data-accordion-target="#accordion-open-body-11" aria-expanded="true" aria-controls="accordion-open-body-11">
            Do you provide in-house training at a location of our convenience?
          </button>
        </h2>
        <div id="accordion-open-body-11" class="hidden" aria-labelledby="accordion-open-heading-11">
          <div class="faq-accord-body">
            <p>Yes, we can conduct in-house training at your desired location or at Blue Ocean premises.</p>
          </div>
        </div>
        <!-- 12th Accordion -->
        <h2 id="accordion-open-heading-12">
          <button type="button" class="faq-accord-button" data-accordion-target="#accordion-open-body-12" aria-expanded="true" aria-controls="accordion-open-body-12">
            Do you provide customized in-house training?
          </button>
        </h2>
        <div id="accordion-open-body-12" class="hidden" aria-labelledby="accordion-open-heading-12">
          <div class="faq-accord-body">
            <p>Yes, we offer tailored in-house training programs to meet the specific needs of your organization and employees.</p>
          </div>
        </div>
      </div>
      <!--  -->

      <div>
        <h2 class="text-primary font-medium text-3xl lg:text-[42px] mb-3">Need Further Assistance?</h2>
        <div class="flex flex-col lg:flex-row gap-14 items-center justify-between py-5 lg:py-8 px-5 lg:px-10 border border-[#999999]">
          <div class="basis-1/2 text-lg lg:text-2xl">
            <p class="font-medium">
              If you have any additional questions or need personalized guidance, feel free to contact us:
            </p>
            <div class="mt-5 lg:mt-10">
              <p class="flex items-center">
                <span class="inline-block">Email: </span>
                <a href="mailto:info@blueoceanacademy.com">info@blueoceanacademy.com</a>
              </p>
              <p class="flex items-center">
                <span class="inline-block">Phone: </span>
                <a href="tel:+971521769265">+971 52 176 9265</a>
              </p>
            </div>
          </div>
          <div class="basis-1/2">
            <img src="{{ asset('assets/frontend/images/brand-logo-tagline.svg') }}" alt="Blue Ocean Logo" class="w-full" />
          </div>
        </div>
        <p class="text-primary text-2xl lg:text-[34px] lg:leading-[normal] mt-10">
          We look forward to helping you achieve excellence!
        </p>
      </div>
    </div>
  </section>
@endsection