@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css"/>
  
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/consulting.css') }}">
@endpush

@section('content')
  <div class="container">
    <div class="register-form">
      <h3 class="heading-third">Registration Form</h3>
      <div class="register-form-inner">
        <aside style="background-image: url('https://blueoceancorporation.com/assets/frontend/images/latest-added/form-sec-bg.png');" class="hide-on-mobile">
  <img src="https://blueoceancorporation.com/assets/frontend/images/latest-added/form-sec-bg.png" class="w-full" alt="">
</aside>

        <div class="form-sec">
          <iframe aria-label='Download Brochure' frameborder="0" style="height:100%;width:99%;border:none;" src='https://forms.zohopublic.com/blueoceanmanagementtrainingc10/form/DownloadBrochure1/formperma/9f9IyW6ZYoXgJundLuEYItNnB1DAD7hJobZpiNNY6GY'></iframe>
        </div>
      </div>
    </div>
  </div>
@endsection