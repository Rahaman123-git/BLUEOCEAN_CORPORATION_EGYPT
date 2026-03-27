@extends('layouts.frontend.app') 
@section('title', ($pageSetting->page_title ?? ''))
@section('meta-description', ($pageSetting->meta_details ?? ''))

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
              <span class="ms-1 text-sm font-medium text-[#1E1E1E]">News & Insight</span>
            </div>
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="page-banner-simple-big relative">
    @if($pageSetting->media_type == 'image')
      <img src="{{ asset('storage/website-content/page-settings/'.$pageSetting->banner_file) }}" class="absolute left-0 top-0 w-full h-full -z-[1]" style="object-fit: cover;" />

      <div class="container">
        <div class="pb-20 pt-40 lg:pt-60 lg:pb-28 2xl:pt-96 2xl:pb-48">
          <h1 class="text-5xl lg:text-[64px] 2xl:text-[86px] text-white">Blue Ocean <span class="font-medium block">in the Spotlight</span></h1>
        </div>
      </div>
    @elseif($pageSetting->media_type == 'video')
      <!-- Banner video Section Starts Here -->
      <div class="w-full">
        <video class="w-full shadow-lg" width="440px" loop="true" autoplay="true" controls="">
          <source src="{{ asset('storage/website-content/page-settings/'.$pageSetting->banner_file) }}" type="video/mp4" />
          <source src="" type="video/ogv" />
          <source src="" type="video/webm" />
          Your browser does not support the video tag.
        </video>
      </div>
    @endif
  </section>

  <section class="news-insight-text relative">
    <div class="diveder-angle hidden lg:block top-[20%]">
      <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
    </div>
    <div class="container">
      <div class="flex flex-col lg:flex-row gap-5 lg:items-center py-14">
        <div class="basis-1/2">
          <h2 class="text-primary text-3xl lg:text-[42px] lg:leading-[normal]">
            Making Headlines

            <span class="font-bold block">Around the Globe</span>
          </h2>
        </div>
      </div>
      <div class="flex flex-col lg:flex-row gap-5 pt-0 pb-14 lg:py-14">
        <div class="basis-1/2">
          <p class="text-primary text-2xl lg:text-[34px] lg:leading-[36px] font-medium">
            Our journey of impact is featured across leading global media showcasing visionary leadership, transformative events, and a lasting legacy of innovation.
          </p>
        </div>
        <div class="basis-1/2">
          <div class="border border-black">
            <div class="flex flex-row gap-4 justify-between bg-[#3D3D3D] text-white px-4 py-3">
              <h2 class="text-lg lg:text-2xl font-medium">Digital Media Link</h2>
              <img src="{{ asset('assets/frontend/images/icons/arrow-up-right.svg') }}" />
            </div>
            <div>
              <ul class="p-4 2xl:p-10">
                @if(isset($news['digitalMediaURL']) && !empty($news['digitalMediaURL'])) @foreach($news['digitalMediaURL'] as $dMediaURL)
                <li class="pt-3 pb-[18px] border-b border-[#DADADA]">
                  <a href="{{ $dMediaURL->digital_media_url }}" class="text-primary underline font-medium inline-block break-all" target="_blank">
                    {{ $dMediaURL->digital_media_url }}
                  </a>
                </li>
                @endforeach @else
                <li class="pt-3 pb-[18px] border-b border-[#DADADA]">
                  <a href="javascript:void(0)" class="text-primary underline font-medium inline-block break-all">
                    No digital media URL avaiable.
                  </a>
                </li>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="news-insight-article">
    <div class="container">
      <div>
        <ul class="article-list" id="masonry-container">
          @if(isset($news['featured']) && !empty($news['featured'])) 
            @foreach($news['featured'] as $featured)
              <li class="article-item">
                <h2 class="article-number">Featured News {{ $loop->iteration }}</h2>
                <div class="article-wrap">
                  <img src="{{ asset('storage/news/'.$featured->featured_news_image) }}" />
                </div>
              </li>
            @endforeach 
          @endif
        </ul>
      </div>

      <div class="pagination py-5">
        @include('frontend.general.include.pagination')
      </div>
    </div>
  </section>

  <section class="newsletter-section pt-4 pb-10 relative">
    <div class="diveder-angle hidden lg:block top-0 -mt-9">
      <img src="{{ asset('assets/frontend/images/element.png') }}" alt="" />
    </div>
    <div class="container">
      <div class="flex flex-col lg:flex-row lg:items-center gap-5 py-4 lg:py-8 px-4 lg:px-[60px] border border-black">
        <div class="basis-1/2">
          <h2 class="text-2xl lg:text-[34px] text-primary"><span class="font-medium block">Catch Every Wave!</span> Stay Connected to Blue Ocean News.</h2>
        </div>
        <div class="basis-1/2">
          <form class="flex items-center gap-5 max-w-sm mx-auto">
            <label for="simple-search" class="sr-only">Email Address</label>
            <div class="relative w-full">
              <input type="text" name="email" id="newsletterEmail" class="border border-[#999999] block w-full py-3 px-5" placeholder="Email address" />
            </div>
            <button type="button" class="btn primary-btn" id="submitNewsletter">Submit</button>
            <div id="newsletterMsg" style="margin-top: 10px; color: red;"></div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
            
@push('scripts')
  <script>
    document.getElementById('submitNewsletter').addEventListener('click', function (e) {
      e.preventDefault();
      
      const emailInput = document.getElementById('newsletterEmail');
      const messageBox = document.getElementById('newsletterMsg');
      const email = emailInput.value.trim();

      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      
      messageBox.style.color = 'red';

      if (!email) {
        messageBox.textContent = 'Email is required.';
        return;
      }

      if (!emailPattern.test(email)) {
        messageBox.textContent = 'Please enter a valid email address.';
        return;
      }

      messageBox.textContent = '';

      const formData = new FormData();
      formData.append('email', email);

      fetch('/blogs/subscribe-newsletter', {
        method: 'POST',
        body: formData,
        headers: {
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          messageBox.style.color = 'green';
          messageBox.textContent = 'Subscribed successfully!';
          emailInput.value = '';
        } else {
          messageBox.textContent = data.message || 'Something went wrong.';
        }
      })
      .catch(error => {
        console.error('Error:', error);
        messageBox.textContent = 'An error occurred. Please try again later.';
      });
    });
  </script>
@endpush