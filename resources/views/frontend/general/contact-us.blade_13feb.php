@extends('layouts.frontend.app') @section('title', ' Contact Us - Blue Ocean Corporation') @section('meta-description', 'Contact Blue Ocean Corporation. connect and discuss how we can support your business goals. Reach out today!')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/style-last.css') }}" />
@endpush @section('content')
<!-- Hero Section Start Here -->
<div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
    <!-- Item 1 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="{{ asset('assets/frontend/images/London-bridege-1.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
    </div>
    <!-- Item 2 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="{{ asset('assets/frontend/images/London-bridege-1.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
    </div>

    <!-- Item 3 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="{{ asset('assets/frontend/images/London-bridege-1.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
    </div>
    <!-- Item 4 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="{{ asset('assets/frontend/images/London-bridege-1.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
    </div>
    <!-- Item 5 -->
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
      <img src="{{ asset('assets/frontend/images/London-bridege-1.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
    </div>
  </div>
  <!-- Slider indicators -->
  <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
  </div>
</div>
<!-- Hero Section End Here -->

<!-- Contact Us Start Here -->
<section class="contact-us-section relative">
  <div class="diveder-angle">
    <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
  </div>
  <div class="container">
    <div class="max-w-5xl">
      <h2 class="text-3xl font-medium leading-tight text-blue-600 sm:text-4xl dark:text-white">
        Let's Connect!
      </h2>
      <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">
        Whether you have questions about our training programs, consulting services, or upcoming conferences, we’re here to help. Reach out to us, and our team will be happy to assist you.
      </p>
    </div>
    <!--  -->

    @if(isset($locations) && !empty($locations))
      @php $locationGroups = $locations->chunk(3); @endphp
      @foreach($locationGroups as $locationGroup)
        <ul class="grid grid-cols-1 mt-4 sm:mt-12 gap-y-6 gap-x-4 sm:gap-y-12 sm:gap-x-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 relative">
          @foreach($locationGroup as $location)
            <li>
              <div class="my-4 space-y-2">
                <div class="mb-3">
                  <h3 class="text-xl font-normal text-gray-900 dark:text-white">{{ $location->location_name }}</h3>
                  @if(!$loop->index)
                    <p class="text-base text-gray-500 dark:text-gray-400">Headquarters</p>
                  @endif
                </div>
                <p class="text-base text-gray-500 dark:text-gray-400">{{ $location->location_address }} {{ $location->location_landmark }}</p>
                @if($location->phone_no)
                  <p>Phone: <a href="tel:{{ str_replace(' ', '', $location->phone_no) }}" target="_blank">{{ $location->phone_no }}</a></p>
                @endif
                <p>Email: <a href="mailto:{{ $location->email_id }}" target="_blank">{{ $location->email_id }}</a></p>
              </div>
              @if($location->google_map_url)
                <a href="javascript:void(0)" class="btn primary-btn text-base map-toggle-btn" data-target="{{ str_replace(' ', '-', $location->location_name) }}-mapview">Get Direction<img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" /></a>
              @endif
            </li>
          @endforeach
          @foreach($locationGroup as $location)
            @if($location->google_map_url)
              <div class="map-box w-100 py-4 shadow-lg my-5 hidden" id="{{ str_replace(' ', '-', $location->location_name) }}-mapview">
                <div class="container">
                  <iframe
                    class="w-full"
                    src="{{ $location->google_map_url }}"
                    width=""
                    height="450"
                    style="border: 0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
                </div>
              </div>
            @endif
          @endforeach
        </ul>
      @endforeach
    @endif
    <!--  -->
  </div>
</section>
<!-- Contact Us End Here -->

<!-- Contact Form Start-->
<section class="contact-form-section py-4 sm:py-8">
  <div class="container">
    <h3 class="font-bold text-[42px] px-0 py-5 sm:py-10 text-primary">Get in Touch</h3>
    <!--  -->
    <div class="grid grid-cols-1 lg:gap-8 lg:grid-cols-3">
      <div class="img-sec">
        <img src="{{ asset('assets/frontend/images/get-in.webp') }}" alt="get-in" />
      </div>
      <div class="col-span-2 mb-8 lg:mb-0">
        <!--<form action="#" class="grid grid-cols-1 gap-8 mx-auto max-w-screen-md sm:grid-cols-2">
          <div>
            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First Name*</label>
            <input
              type="text"
              id="first-name"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="First Name*"
              required
            />
          </div>
          <div>
            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last Name</label>
            <input
              type="text"
              id="last-name"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Last Name*"
              required
            />
          </div>
          <div class="sm:col-span-2">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email*</label>
            <input
              type="email"
              id="email"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="example@mail.com"
              required
            />
          </div>
          <div class="sm:col-span-2">
            <div class="grid grid-cols-1 gap-8 mx-auto max-w-screen-md sm:grid-cols-1 lg:grid-cols-2">
              <div>
                <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone Number*</label>
                <input
                  type="number"
                  id="phone-number"
                  class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                  placeholder="United Arab Emirates"
                  required
                />
              </div>
              <div>
                <input
                  type="number"
                  id="phone-number"
                  class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light lg:mt-6"
                  placeholder="+971 12 345 6789"
                  required
                />
              </div>
            </div>
          </div>

          <div class="sm:col-span-2">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Company Name*</label>
            <input
              type="email"
              id="email"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="Add Here"
              required
            />
          </div>
          <div class="sm:col-span-2">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Company Website</label>
            <input
              type="email"
              id="email"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="example@mail.com"
              required
            />
          </div>
          <div class="sm:col-span-2">
            <label for="topic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Enquiry</label>
            <select
              id="topic"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            >
              <option selected>Training / Conferences / Consulting</option>
              <option value="US">Switch plans and add-ons</option>
              <option value="CA">Billing & Invoice</option>
              <option value="FR">I can't log in to Flowbite</option>
              <option value="DE">Parental controls</option>
            </select>
          </div>
          <div class="sm:col-span-2">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Short description about your business </label>
            <textarea
              id="message"
              rows="6"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Description"
            ></textarea>
            
            <div class="flex items-center mt-4">
              <input
                id="link-checkbox"
                type="checkbox"
                value=""
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
              />
              <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree to receive other information from Blue Ocean Corporation</label>
            </div>
            
          </div>
          <button type="submit" class="btn primary-btn text-base">Send Your Inquiry</button>
        </form>-->
      </div>
    </div>
    <!--  -->
  </div>
</section>
<!-- Contact Form End-->
@endsection