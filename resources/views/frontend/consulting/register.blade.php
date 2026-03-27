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
        <aside style="background-image: url('https://test.blueoceancorporation.com/assets/frontend/images/latest-added/form-sec-bg.png');" class="hide-on-mobile">
  <img src="https://test.blueoceancorporation.com/assets/frontend/images/latest-added/form-sec-bg.png" class="w-full" alt="">
</aside>

        <div class="form-sec">
          <iframe aria-label='Consulting' frameborder="0" class="consulting-form" src='https://forms.zohopublic.com/blueoceanmanagementtrainingc10/form/Consulting/formperma/jIwxRTb2pXd1Ee3AkkMvHa0gifhAFo82tEPrHN9Ns-s'></iframe>
        </div>
      </div>
    </div>
  </div>
@endsection