@extends('layouts.frontend.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/js/gridzy/gridzy.min.css') }}" />
<!-- gridzy file for gridzySkinClassic skin -->
<link rel="stylesheet" href="{{ asset('assets/frontend/js/gridzy/skins/gridzySkinClassic/style.min.css') }}" />
<!-- Fancybox CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<style>
    .inovation_logo {
        background-color: #F4F4F4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 280px;
    }

    .inovation_logo img {
        max-width: 180px !important;
    }

    .transformInovation-Section .inovation-hover-two {
        background: linear-gradient(270deg, #0340CE 0%, #01B3F8 100%);
    }

    .inv_hov-image {
        min-width: 180px;
        text-align: center;
        margin-left: 58px;
    }

    .inovation_logo:hover .inovation-hover {
        opacity: 1;
        visibility: visible;
    }

    .inovation-custom-lg li button.active .inovation_logo .inovation-hover-two,
    .inovation-custom-lg li button.active .inovation_logo .inovation-hover,
    .inovation-custom-lg li button.active .inovation_logo .gradent-three,
    .inovation-custom-lg li button.active .inovation_logo .gradent-four {
        opacity: 1 !important;
        visibility: visible !important;
    }

    .inovation-custom-lg li button.active .inovation_logo .btn.primary-btn.btn-gallery-page {
        transform: rotate(90deg);
    }

    .inovation-custom-lg li {
        width: 24%;
        margin: 0 0.5%;
    }

    .inovation .hover-image {
        width: 100%
    }

    .inovation-hover {
        position: absolute;
        top: 0;
        background: #AACF3A;
        background: -webkit-linear-gradient(40deg, rgba(170, 207, 58, 1) 0%, rgb(62 114 248) 65%);
        background: -moz-linear-gradient(40deg, rgba(170, 207, 58, 1) 0%, rgb(62 114 248) 65%);
        background: linear-gradient(40deg, rgba(170, 207, 58, 1) 0%, rgb(62 114 248) 65%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#AACF3A", endColorstr="#0249FD", GradientType=0);
        z-index: 10;
        left: 0;
        padding: 20px;
        height: 100%;
        opacity: 0;
        transition: all 0.3s ease-in-out 0s;
        visibility: hidden;
        width: 100%;
    }

    .inovation-hover-two {
        position: absolute;
        top: 0;
        background: rgb(65, 119, 255);
        background: -moz-linear-gradient(232deg, rgba(65, 119, 255, 1) 0%, rgba(255, 64, 0, 1) 100%);
        background: -webkit-linear-gradient(232deg, rgba(65, 119, 255, 1) 0%, rgba(255, 64, 0, 1) 100%);
        background: linear-gradient(232deg, rgba(65, 119, 255, 1) 0%, rgba(255, 64, 0, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#4177ff", endColorstr="#ff4000", GradientType=1);
    }

    .inovation-hover-three {
        background: #1ABBBC;
        background: -webkit-linear-gradient(61deg, rgba(26, 187, 188, 1) 0%, rgba(0, 172, 173, 1) 65%);
        background: -moz-linear-gradient(61deg, rgba(26, 187, 188, 1) 0%, rgba(0, 172, 173, 1) 65%);
        background: linear-gradient(61deg, rgba(26, 187, 188, 1) 0%, rgba(0, 172, 173, 1) 65%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#1ABBBC", endColorstr="#00ACAD", GradientType=0);
    }

    .inovation-hover-four {
        background: #EB008B;
        background: -webkit-linear-gradient(61deg, rgba(235, 0, 139, 1) 0%, rgba(71, 3, 135, 1) 65%);
        background: -moz-linear-gradient(61deg, rgba(235, 0, 139, 1) 0%, rgba(71, 3, 135, 1) 65%);
        background: linear-gradient(61deg, rgba(235, 0, 139, 1) 0%, rgba(71, 3, 135, 1) 65%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#EB008B", endColorstr="#470387", GradientType=0);
    }

    .select-confarence {
        padding: 15px;
        background-color: #f5f5f5;
    }

    .select-confarence h2 {
        margin-right: 20px;
        font-size: 18px;
        font-weight: 400;
        color: #0c1895;
    }

    .select-box-inn {
        margin-top: 25px;
        border: 1px solid #f5f5f5;
    }

    .select-box-inn h2 {
        font-size: 26px;
        padding: 0;
        margin-bottom: 20px;
        color: #0c1895;
        font-weight: 600;
    }

    .btn.primary-btn.btn-gallery-page {
        position: absolute;
        bottom: 11px;
        z-index: 1020;
        right: 10px;
        padding: 10px;
        transition: all ease-in-out 0.3s 0s;
    }

    #innerdefaulttab-tab li button.active {
        background-color: #7961ff;
        color: #fff;
    }

    ul#innerdefaulttab-tab {
        background: #f5f5f5;
    }

    #header-top {
        z-index: 100;
    }

    #inner-into-tab {
        border: 2px solid #01B3F8;
    }

    #inner-into-tab li button.active{
       background-color: #01B3F8;
       color: #fff;
    }
    ul#video-image-tab li button {
        background: #219bff;
        color: #fff;
        padding: 10px 15px;
        font-size: 15px;
        border-radius: 3px;
        margin-right: 20px !important;
    }

    ul#video-image-tab li button.active {
        background: #0b44ff;
    }

    .select-box-inn.border-0 {
        border: 0;
    }


</style>
@endpush

@section('content')
<section class="topBanner gallery-page relative">
    <img src="{{ asset('assets/frontend/images/latest-added/main-gallery/gallery-banner.png') }}" alt=""
        class="topBannerImg" />
    <div class="bannerOverlay gallery-overlay">
        <div class="container">
            <h2>
                Experience Blue Ocean
                <span>Moments That Inspire!</span>
            </h2>
        </div>
    </div>
</section>

<section class="about-section relative gallery-about">
    <div class="diveder_angle absolute top">
        <img src="{{ asset('assets/frontend/images/con-bowld-img/devider_angle.png') }}" alt="" />
    </div>
    <div class="experience-band pb-0">
        <div class="container">
            <div class="flex flex-wrap items-center">
                <div class="experience-band-text">
                    <h2 class="experience-band-heading">
                        Snapshots of Success.
                        <span class="block font-bold">Memories of Excellence.</span>
                    </h2>
                </div>
                <div class="w-full lg:w-1/2">
                    <p class="body-text mb-8 2xl:mb-10">
                        Welcome to the <strong>Blue Ocean Corporation Gallery</strong>—where we capture the energy,
                        passion, and achievements that define us! From global conferences to engaging training sessions,
                        from leadership summits to team
                        celebrations, every moment tells a story of growth and innovation.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="">
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap text-sm font-medium text-center inovation-custom-lg" id="innerdefault-tab"
                    data-tabs-toggle="#innerdefault-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block w-full rounded-t-lg active" id="profile-tab"
                            data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">
                            <div class="hover-image mb-4">
                                <div class="inovation_logo relative">
                                    <img src="https://blueoceancorporation.com/assets/frontend/images/con-bowld-img/IPSC2026.svg"
                                        alt="" class="w-full main-logo">
                                    <div class="inovation-hover flex items-center inovation-hover-two">
                                        <div class="inv_hov-image">
                                            <img src="https://blueoceancorporation.com/assets/frontend/images/con-bowld-img/ipsc_hover.svg"
                                                alt="" class="w-full">
                                        </div>

                                    </div>
                                    <div class="btn primary-btn btn-gallery-page">
                                        <img
                                            src="https://blueoceancorporation.com/assets/frontend/images/icons/arrow-right.svg">
                                    </div>
                                </div>
                            </div>

                        </button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block w-full rounded-t-lg" id="dashboard-tab"
                            data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                            aria-selected="false">
                            <div class="hover-image mb-4">
                                <div class="inovation_logo relative gradent-two">
                                    <img src="https://blueoceancorporation.com/assets/frontend/images/con-bowld-img/IHRC.svg"
                                        alt="" class="w-full main-logo">
                                    <div class="inovation-hover flex items-center">
                                        <div class="inv_hov-image">
                                            <img src="https://blueoceancorporation.com/assets/frontend/images/con-bowld-img/IHRC-hover.svg"
                                                alt="" class="w-full">
                                        </div>

                                    </div>
                                    <div class="btn primary-btn btn-gallery-page">
                                        <img
                                            src="https://blueoceancorporation.com/assets/frontend/images/icons/arrow-right.svg">
                                    </div>
                                </div>
                            </div>
                        </button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block w-full rounded-t-lg" id="settings-tab" data-tabs-target="#settings"
                            type="button" role="tab" aria-controls="settings" aria-selected="false">
                            <div class="hover-image mb-4">
                                <div class="inovation_logo relative gradent-three">
                                    <img src="https://blueoceancorporation.com/assets/frontend/images/con-bowld-img/CXO-round table.svg"
                                        alt="" class="w-full main-logo">
                                    <div class="inovation-hover flex items-center inovation-hover-three">
                                        <div class="inv_hov-image">
                                            <img src="https://blueoceancorporation.com/assets/frontend/images/con-bowld-img/cxo_white.svg"
                                                alt="" class="w-full">
                                        </div>

                                    </div>
                                    <div class="btn primary-btn btn-gallery-page">
                                        <img
                                            src="https://blueoceancorporation.com/assets/frontend/images/icons/arrow-right.svg">
                                    </div>
                                </div>
                            </div>
                        </button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block w-full rounded-t-lg" id="contacts-tab" data-tabs-target="#contacts"
                            type="button" role="tab" aria-controls="contacts" aria-selected="false">

                            <div class="hover-image mb-4 bottom-content">
                                <div class="inovation_logo relative gradent-four">
                                    <img src="https://blueoceancorporation.com/assets/frontend/images/con-bowld-img/BOWLD-1.svg"
                                        alt="" class="main-logo">
                                    <div
                                        class="inovation-hover inovation-bottom  flex items-center inovation-hover-four">
                                        <div class="inv_hov-image">
                                            <img src="https://blueoceancorporation.com/assets/frontend/images/con-bowld-img/WD-white.svg"
                                                alt="" class="">
                                        </div>

                                    </div>
                                    <div class="btn primary-btn btn-gallery-page">
                                        <img
                                            src="https://blueoceancorporation.com/assets/frontend/images/icons/arrow-right.svg">
                                    </div>
                                </div>
                            </div>

                        </button>
                    </li>
                </ul>
            </div>
            <div id="innerdefault-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <!-- INNER TAB PANEL  START-->
                    <div class="mb-4">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="innerdefaulttab-tab"
                            data-tabs-toggle="#innerdefault-tab-content" role="tablist">
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 active" id="abudhabi-tab" data-tabs-target="#abudhabi"
                                    type="button" role="tab" aria-controls="abudhabi" aria-selected="false">IPSC
                                    Abudhabi</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 " id="dubai-tab" data-tabs-target="#dubai" type="button"
                                    role="tab" aria-controls="dubai" aria-selected="false">IPSC Dubai</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4" id="london-tab" data-tabs-target="#london"
                                    type="button" role="tab" aria-controls="london" aria-selected="false">IPSC
                                    London</button>
                            </li>

                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4" id="mumbai-tab" data-tabs-target="#mumbai"
                                    type="button" role="tab" aria-controls="mumbai" aria-selected="false">IPSC
                                    Mumbai</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4" id="qatar-tab" data-tabs-target="#qatar" type="button"
                                    role="tab" aria-controls="qatar" aria-selected="false">IPSC Qatar</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4" id="riyadh-tab" data-tabs-target="#riyadh"
                                    type="button" role="tab" aria-controls="riyadh" aria-selected="false">IPSC
                                    Riyadh</button>
                            </li>

                        </ul>
                    </div>
                    <div id="innerdefault-tab-content">
                        <div class="hidden" id="abudhabi" role="tabpanel" aria-labelledby="abudhabi-tab">



                            <div class="mb-4">
                                <ul class="flex flex-wrap -mb-px text-sm font-medium" id="inner-into-tab"
                                    data-tabs-toggle="#inner-into-tab-content" role="tablist">
                                    <li class="me-2 " role="presentation">
                                        <button class="inline-block p-4 active" id="year2021-tab" data-tabs-target="#year2021"
                                            type="button" role="tab" aria-controls="year2021"
                                            aria-selected="false">2021</button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button class="inline-block p-4" id="year2022-tab" data-tabs-target="#year2022"
                                            type="button" role="tab" aria-controls="year2022"
                                            aria-selected="false">2022</button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button class="inline-block p-4" id="year2023-tab" data-tabs-target="#year2023"
                                            type="button" role="tab" aria-controls="year2023"
                                            aria-selected="false">2023</button>
                                    </li>
                                    <li role="presentation">
                                        <button class="inline-block p-4" id="year2024-tab" data-tabs-target="#year2024"
                                            type="button" role="tab" aria-controls="year2024"
                                            aria-selected="false">2024</button>
                                    </li>
                                </ul>
                            </div>
                            <div id="inner-into-tab-content">
                                <div class="hidden" id="year2021" role="tabpanel" aria-labelledby="year2021-tab">
                                    <div class="select-box-inn border-0">




                                        <div class="image-video-tab">
                                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center"
                                                id="video-image-tab" data-tabs-toggle="#video-image-tab-content"
                                                role="tablist">
                                                <li class="" role="presentation">
                                                    <button class="inline-block active" id="imageshow-tab"
                                                        data-tabs-target="#imageshow" type="button" role="tab"
                                                        aria-controls="imageshow" aria-selected="false">Images</button>
                                                </li>
                                                <li class="" role="presentation">
                                                    <button class="inline-block" id="videoshow-tab"
                                                        data-tabs-target="#videoshow" type="button" role="tab"
                                                        aria-controls="videoshow" aria-selected="false">Video</button>
                                                </li>

                                            </ul>
                                        </div>
                                        <div id="#video-image-tab-content">
                                            <div class="hidden" id="imageshow" role="tabpanel"
                                                aria-labelledby="imageshow-tab">
                                                <h2 class="text-center">Conferences IPSC Abhdhabi</h2>
                                                <div class="gallery-new">
                                                    <div class="gridzy gridzySkinClassic gallery-container"
                                                        data-gridzy-filterControls="#myFilterControls-one button"
                                                        data-gridzy-layout="justified" data-gridzy-desiredHeight="400"
                                                        data-gridzy-spaceBetween="15" data-gridzy-lightbox="fancybox"
                                                        id="gallery-confrence-one">

                                                        <!-- Your image links -->
                                                        <a class="item images-ips"
                                                            href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (24).png') }}">
                                                            <img class="gridzyImage"
                                                                src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (24).png') }}"
                                                                alt="Image 2" />
                                                        </a>
                                                        <a class="item images-ips"
                                                            href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (22).png') }}">
                                                            <img class="gridzyImage"
                                                                src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (22).png') }}"
                                                                alt="gallery-image" />
                                                        </a>





                                                    </div>

                                                </div>
                                            </div>
                                            <div class="hidden" id="videoshow" role="tabpanel"
                                                aria-labelledby="videoshow-tab">
                                                <h2 class="text-center">Conferences IPSC Abhdhabi</h2>
                                                <div class="video-box">
                                                        <div class="gallery-video grid grid-cols-2 md:grid-cols-3 gap-4"">
                                                         <a
                                                                    href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
                                                                    data-fancybox data-caption="Watch our promo video"
                                                                    class="inline-block relative group">

                                                                    <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/hqdefault.jpg"
                                                                        class="rounded-lg shadow-md transition-transform group-hover:scale-105"
                                                                        alt="Video thumbnail" />

                                                                    <!-- Optional Play Button Overlay -->
                                                                    <div
                                                                        class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition">
                                                                        <svg class="w-12 h-12 text-white"
                                                                            fill="currentColor" viewBox="0 0 20 20">
                                                                            <path d="M6 4l12 6-12 6V4z" />
                                                                        </svg>
                                                                    </div>
                                                                </a>
                                                          
                                                          <a
                                                                    href="https://www.youtube.com/embed/qinRd83pDf4?si=_Xz4tnuypASTYMhN"
                                                                    data-fancybox data-type="iframe"
                                                                    data-caption="Watch our video"
                                                                    class="inline-block group relative">

                                                                    <!-- Thumbnail -->
                                                                    <img src="https://img.youtube.com/vi/qinRd83pDf4/hqdefault.jpg"
                                                                        alt="Video Thumbnail"
                                                                        class="gridzyImage rounded shadow-md transition-transform group-hover:scale-105" />

                                                                    <!-- Optional Play Button Overlay -->
                                                                    <div
                                                                        class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition">
                                                                        <svg class="w-14 h-14 text-white"
                                                                            fill="currentColor" viewBox="0 0 20 20">
                                                                            <path d="M6 4l12 6-12 6V4z" />
                                                                        </svg>
                                                                    </div>
                                                                </a>
                                                          
                                                             <a
                                                                    href="https://blueoceancorporation.com/assets/frontend/images/ipsc-video/IHRC-2022-armani -hotel-dubai.mp4"
                                                                    data-fancybox data-type="iframe"
                                                                    data-caption="My YouTube Video"
                                                                    class="inline-block relative group">

                                                                    <!-- Thumbnail -->
                                                                    <img src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (24).png') }}"
                                                                        alt="YouTube Thumbnail"
                                                                        class="rounded shadow-md transition-transform group-hover:scale-105" />

                                                                    <!-- Play Button Overlay (optional) -->
                                                                    <div
                                                                        class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition">
                                                                        <svg class="w-14 h-14 text-white"
                                                                            fill="currentColor" viewBox="0 0 20 20">
                                                                            <path d="M6 4l12 6-12 6V4z" />
                                                                        </svg>
                                                                    </div>
                                                                </a>
                                                          
                                                            <a
                                                                    href="https://www.youtube.com/embed/sxBIgeVfiKM?si=VXkECHIYPmarwy56"
                                                                    data-fancybox data-type="iframe"
                                                                    data-caption="My YouTube Video"
                                                                    class="inline-block relative group">

                                                                    <!-- Thumbnail -->
                                                                    <img src="https://img.youtube.com/vi/sxBIgeVfiKM/hqdefault.jpg"
                                                                        alt="YouTube Thumbnail"
                                                                        class="rounded shadow-md transition-transform group-hover:scale-105" />

                                                                    <!-- Play Button Overlay (optional) -->
                                                                    <div
                                                                        class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition">
                                                                        <svg class="w-14 h-14 text-white"
                                                                            fill="currentColor" viewBox="0 0 20 20">
                                                                            <path d="M6 4l12 6-12 6V4z" />
                                                                        </svg>
                                                                    </div>
                                                                </a>
                                                        
                                                       <a
                                                                    href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
                                                                    data-fancybox data-caption="Watch our promo video"
                                                                    class="inline-block relative group">

                                                                    <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/hqdefault.jpg"
                                                                        class="rounded-lg shadow-md transition-transform group-hover:scale-105"
                                                                        alt="Video thumbnail" />

                                                                    <!-- Optional Play Button Overlay -->
                                                                    <div
                                                                        class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition">
                                                                        <svg class="w-12 h-12 text-white"
                                                                            fill="currentColor" viewBox="0 0 20 20">
                                                                            <path d="M6 4l12 6-12 6V4z" />
                                                                        </svg>
                                                                    </div>
                                                                </a>
                                                          
                                                          <a
                                                                    href="https://www.youtube.com/embed/qinRd83pDf4?si=_Xz4tnuypASTYMhN"
                                                                    data-fancybox data-type="iframe"
                                                                    data-caption="Watch our video"
                                                                    class="inline-block group relative">

                                                                    <!-- Thumbnail -->
                                                                    <img src="https://img.youtube.com/vi/qinRd83pDf4/hqdefault.jpg"
                                                                        alt="Video Thumbnail"
                                                                        class="gridzyImage rounded shadow-md transition-transform group-hover:scale-105" />

                                                                    <!-- Optional Play Button Overlay -->
                                                                    <div
                                                                        class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition">
                                                                        <svg class="w-14 h-14 text-white"
                                                                            fill="currentColor" viewBox="0 0 20 20">
                                                                            <path d="M6 4l12 6-12 6V4z" />
                                                                        </svg>
                                                                    </div>
                                                                </a>
                                                          
                                                             <a
                                                                    href="https://blueoceancorporation.com/assets/frontend/images/ipsc-video/IHRC-2022-armani -hotel-dubai.mp4"
                                                                    data-fancybox data-type="iframe"
                                                                    data-caption="My YouTube Video"
                                                                    class="inline-block relative group">

                                                                    <!-- Thumbnail -->
                                                                    <img src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (24).png') }}"
                                                                        alt="YouTube Thumbnail"
                                                                        class="rounded shadow-md transition-transform group-hover:scale-105" />

                                                                    <!-- Play Button Overlay (optional) -->
                                                                    <div
                                                                        class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition">
                                                                        <svg class="w-14 h-14 text-white"
                                                                            fill="currentColor" viewBox="0 0 20 20">
                                                                            <path d="M6 4l12 6-12 6V4z" />
                                                                        </svg>
                                                                    </div>
                                                                </a>
                                                          
                                                            <a
                                                                    href="https://www.youtube.com/embed/sxBIgeVfiKM?si=VXkECHIYPmarwy56"
                                                                    data-fancybox data-type="iframe"
                                                                    data-caption="My YouTube Video"
                                                                    class="inline-block relative group">

                                                                    <!-- Thumbnail -->
                                                                    <img src="https://img.youtube.com/vi/sxBIgeVfiKM/hqdefault.jpg"
                                                                        alt="YouTube Thumbnail"
                                                                        class="rounded shadow-md transition-transform group-hover:scale-105" />

                                                                    <!-- Play Button Overlay (optional) -->
                                                                    <div
                                                                        class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition">
                                                                        <svg class="w-14 h-14 text-white"
                                                                            fill="currentColor" viewBox="0 0 20 20">
                                                                            <path d="M6 4l12 6-12 6V4z" />
                                                                        </svg>
                                                                    </div>
                                                                </a>
                                                        </div>
                                                
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="hidden p-4 rounded-lg" id="year2022" role="tabpanel"
                                    aria-labelledby="year2022-tab">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content
                                        the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's
                                            associated content</strong>. Clicking another tab will toggle the visibility
                                        of this one for the next. The tab JavaScript swaps classes to control the
                                        content visibility and styling.</p>
                                </div>
                                <div class="hidden p-4 rounded-lg" id="year2023" role="tabpanel"
                                    aria-labelledby="year2023-tab">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content
                                        the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's
                                            associated content</strong>. Clicking another tab will toggle the visibility
                                        of this one for the next. The tab JavaScript swaps classes to control the
                                        content visibility and styling.</p>
                                </div>
                                <div class="hidden p-4 rounded-lg" id="year2024" role="tabpanel"
                                    aria-labelledby="year2024-tab">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content
                                        the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's
                                            associated content</strong>. Clicking another tab will toggle the visibility
                                        of this one for the next. The tab JavaScript swaps classes to control the
                                        content visibility and styling.</p>
                                </div>
                            </div>



                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dubai" role="tabpanel"
                            aria-labelledby="dubai-tab">
                            Year 2022 Content
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="london" role="tabpanel"
                            aria-labelledby="london-tab">
                            london
                        </div>

                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="mumbai" role="tabpanel"
                            aria-labelledby="mumbai-tab">
                            mumbai
                        </div>

                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="qatar" role="tabpanel"
                            aria-labelledby="qatar-tab">
                            qatar
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="riyadh" role="tabpanel"
                            aria-labelledby="riyadh-tab">
                            riyadh
                        </div>
                    </div>
                    <!-- INNER TAB PANEL  END-->


                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    Tab panel 2
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                    aria-labelledby="settings-tab">
                    Tab Panel 3
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
                    aria-labelledby="contacts-tab">
                    Tab Panel 4
                </div>
            </div>

        </div>
    </div>
</section>


@endsection

@push('scripts')
<!-- JavaScript -->
<script src='https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js'></script>
<script src='https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js'></script>

<script src="{{ asset('assets/frontend/js/gallery.js') }}"></script>
<script src="{{ asset('assets/frontend/js/gridzy/gridzy.min.js') }}"></script>


<!-- <link rel="stylesheet" href="{{ asset('assets/frontend/js/light-box-all/lightgallery-bundle.min.css') }}" /> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.1.2/css/lightgallery-bundle.min.css">
<script src="{{ asset('assets/frontend/js/light-box-all/lightgallery.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('assets/frontend/js/light-box-all/lg-zoom.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/light-box-all/lg-thumbnail.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/light-box-all/lg-fullscreen.min.js') }}"></script>






<script>
    document.addEventListener("DOMContentLoaded", function () {
        lightGallery(document.getElementById("gallery-confrence-one"), {
            plugins: [lgZoom, lgThumbnail, lgFullscreen],
            speed: 500,
            thumbnail: true
        });
    });
</script>
<script>
    Gridzy.create(document.querySelector('.gridzy'));
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterButtons = document.querySelectorAll('.myfilter-controls button');

        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Remove 'active' class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));

                // Add 'active' class to the clicked button
                this.classList.add('active');
            });
        });
    });
</script>
<script>
    const select = document.getElementById('gallery-select');
    const divs = document.querySelectorAll('.gallery-show');

    function updateDivVisibility() {
        const value = select.value;
        divs.forEach(div => {
            div.style.display = (div.id === value) ? 'block' : 'none';
        });
    }

    // On change
    select.addEventListener('change', updateDivVisibility);

    // On page load
    window.addEventListener('DOMContentLoaded', updateDivVisibility);
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabContainer = document.querySelector('#innerdefault-tab');
        const tabs = tabContainer.querySelectorAll('[role="tab"]');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active from all
                tabs.forEach(t => {
                    t.setAttribute('aria-selected', 'false');
                    t.classList.remove('active'); // add/remove what you need
                });

                // Add active to clicked
                tab.setAttribute('aria-selected', 'true');
                tab.classList.add('active');
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabContainer = document.querySelector('#innerdefaulttab-tab');
        const tabs = tabContainer.querySelectorAll('[role="tab"]');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active from all
                tabs.forEach(t => {
                    t.setAttribute('aria-selected', 'false');
                    t.classList.remove('active'); // add/remove what you need
                });

                // Add active to clicked
                tab.setAttribute('aria-selected', 'true');
                tab.classList.add('active');
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabContainer = document.querySelector('#video-image-tab');
        const tabs = tabContainer.querySelectorAll('[role="tab"]');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active from all
                tabs.forEach(t => {
                    t.setAttribute('aria-selected', 'false');
                    t.classList.remove('active'); // add/remove what you need
                });

                // Add active to clicked
                tab.setAttribute('aria-selected', 'true');
                tab.classList.add('active');
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabContainer = document.querySelector('#inner-into-tab');
        const tabs = tabContainer.querySelectorAll('[role="tab"]');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active from all
                tabs.forEach(t => {
                    t.setAttribute('aria-selected', 'false');
                    t.classList.remove('active'); // add/remove what you need
                });

                // Add active to clicked
                tab.setAttribute('aria-selected', 'true');
                tab.classList.add('active');
            });
        });
    });
</script>

<script>
    Fancybox.bind("[data-fancybox]", {
        Toolbar: false,
        smallBtn: true,
        on: {
            reveal: (fancybox) => {
                console.log('Lightbox opened');
            }
        }
    });
</script>


@endpush