<!-- Registration Modal -->
<div id="registration-form-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-5xl max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow-sm">
      <button type="button" id="modal-close" class="absolute right-5 top-5 text-gray-400 bg-transparent text-sm w-8 h-8 lg:w-10 lg:h-10 ms-auto inline-flex justify-center items-center" data-modal-hide="registration-form-modal">
        <svg class="w-3 h-3 lg:h-6 lg:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close modal</span>
      </button>
      <div class="form-sec-modal">
        <aside style="background-image: url({{ asset('assets/frontend/images/consulting/training-form-image.png') }});">
          <div class="form-over">
            <a href="javascript:void(0)"><img src="{{ asset('assets/frontend/images/consulting/boc-logo.webp') }}" alt=""></a>
          </div>
          <a href="https://blueoceancorporation.com/" class="form-over-bot text-white hover:text-blue">
            www.blueoceancorporation.com
          </a>
        </aside>
        <div class="form-area">
          <h2 id="modal-type" class="text-primary font-semibold mb-5 text-2xl lg:text-[32px] lg:leading-[normal]"></h2>
          <p id="modal-title" class="text-xl text-[#1E1E1E] mb-5 font-medium"></p>
          <form id="lead-registration-form" class="max-w-[504px]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-1">
              <div class="mb-5">
                <label for="fname" class="block mb-2 text-sm font-medium text-[#131927]">First Name<sup>*</sup></label>
                <input type="text" name="fname" id="fname" class="border border-[#A0A0A0] text-[#131927] text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="First Name" required />
              </div>
              <div class="mb-5">
                <label for="lname" class="block mb-2 text-sm font-medium text-[#131927]">Last Name<sup>*</sup></label>
                <input type="text" name="lname" id="lname" class="bg-gray-50 border border-[#A0A0A0] text-[#131927] text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Last Name" required />
              </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-1">
              <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-[#131927]">Email<sup>*</sup></label>
                <input type="email" name="email" id="email" class="border border-[#A0A0A0] text-[#131927] text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required />
              </div>
              <div class="mb-5">
                <label for="phone" class="block mb-2 text-sm font-medium text-[#131927]">Phone Number<sup>*</sup></label>
                <input type="tel"name="phone" id="phone" class="border border-[#A0A0A0] text-[#131927] text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Phone number" required/>
                <input type="hidden" name="full_phone" id="full_phone">
              </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-1">
              <div class="mb-5">
                <label for="city" class="block mb-2 text-sm font-medium text-[#131927]">City<sup>*</sup></label>
                <input type="text" name="city" id="city" class="border border-[#A0A0A0] text-[#131927] text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="City" required />
              </div>
              <div class="mb-5">
                <label for="country" class="block mb-2 text-sm font-medium text-[#131927]">Country<sup>*</sup></label>
                <input type="text" name="country" id="country" class="bg-gray-50 border border-[#A0A0A0] text-[#131927] text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Country" required />
              </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-1">
              <div class="mb-5">
                <label for="c-website" class="block mb-2 text-sm font-medium text-[#131927]">Company Website</label>
                <input type="url" name="c_website" id="c-website" class="border border-[#A0A0A0] text-[#131927] text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Company Website" />
              </div>
              <div class="mb-5">
                <label for="position" class="block mb-2 text-sm font-medium text-[#131927]">Designation / Position<sup>*</sup></label>
                <input type="text" name="position" id="position" class="bg-gray-50 border border-[#A0A0A0] text-[#131927] text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Designation / Postion" required />
              </div>
            </div>
            <fieldset class="mb-5">
              <div class="flex items-center">
                <input type="checkbox" name="otherinfo" id="otherinfo" class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" value="1" checked/> 
                <label for="otherinfo" class="ms-4 text-sm text-[#767676]">I agree to receive other information from Blue Ocean Corporation</label>
              </div>
            </fieldset>
            <input type="hidden" name="leadsource" id="lead-source">
            <input type="hidden" name="leadsourceid" id="lead-source-id">
            <!-- <button type="submit" class="btn primary-btn min-w-[160px]">Submit</button> -->
            <button type="submit" id="submitBtn" class="btn primary-btn min-w-[160px] flex items-center justify-center gap-2">
              <span id="submitText">Submit</span>
              <svg
                id="submitSpinner"
                class="w-4 h-4 animate-spin hidden"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
              >
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
              </svg>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Thank You Modal -->
<div id="thankyou-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden  fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-5xl max-h-full">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow-sm ">
      <button type="button" style="z-index: 12000;" class="absolute right-5 top-5 text-gray-400 bg-transparent text-sm w-8 h-8 lg:w-10 lg:h-10 ms-auto inline-flex justify-center items-center z-index-1000" data-modal-hide="thankyou-modal">
        <svg class="w-3 h-3 lg:h-6 lg:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close modal</span>
      </button>

      <div class="form-sec-modal">
        <aside style="background-image: url({{ asset('assets/frontend/images/thankyou-4.png') }});" class="mt-5">
          <div class="form-over"></div>
          <a href="https://blueoceancorporation.com/" class="form-over-bot text-white hover:text-blue">
            www.blueoceancorporation.com
          </a>
        </aside>
        <div class="form-area thankyou-modal-box">
          <div class="top-modal-text">
            <h4><strong id="thankyoumessage"></strong></h4>
            <p>We look forward to supporting your learning journey.</p>
          </div>
          <a href="javascript:void(0)" id="downloadlink" class="btn primary-btn hidden" target="_blank"></a>
          <h5 class="blue-text">Stay connected - There's more to discover!</h5>
          <a href="javascript:void(0)" class="btn primary-btn">Discover More <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}"></a>
          <h5>Stay Connected!	&#x1F310;</h5>
          <p>
            We’d love to keep in touch and share more about our upcoming events, courses and success stories.
            Follow us on <a href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fschool%2Fblue-ocean-management-training%2Fmycompany%2F%3FviewAsMember%3Dtrue">LinkedIn</a> to stay updated and become part of our ever-growing community. Your journey with us is just beginning and we are excited to see all the amazing things you will achieve!
          </p>
          <div class="link-din flex mt-5">
            <img src="{{ asset('assets/frontend/images/linkdin.png') }}" alt=""> <a href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fschool%2Fblue-ocean-management-training%2Fmycompany%2F%3FviewAsMember%3Dtrue" class="ml-4">
              &#x1F517; Follow Us on LinkedIn</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>