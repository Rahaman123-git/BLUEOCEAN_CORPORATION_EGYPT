@extends('layouts.frontend.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/js/gridzy/gridzy.min.css') }}" />
<!-- gridzy file for gridzySkinClassic skin -->
<link rel="stylesheet" href="{{ asset('assets/frontend/js/gridzy/skins/gridzySkinClassic/style.min.css') }}" />
<!-- <link rel="stylesheet" href="{{ asset('assets/frontend/css/style-last.css') }}"> -->
 <style>
    header#header-top, nav.header-main {
    z-index: 1000;
}
.gallery-container {

overflow-x: auto;
    white-space: nowrap;
    width: 100%;

}

 </style>
@endpush
@section('content')
<!-- Boc Slider -->
<div class="slider-container life-bocSlider relative">
    <div class="boclifeSlider">
        <div class="slider-item relative">
            <picture>
                <img src="{{ asset('assets/frontend/images/life-at-boc/slider1.png') }}" alt="banner image"
                    class="img-fluid d-block w-full" />
            </picture>
            <div class="absolute w-full life-text">
                <div class="container">
                    <div class="flex">
                        <h5 class="life-boc-text">
                            <span class="font-light">Life at</span><br />
                            Blue Ocean Corporation
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item relative">
            <picture>
                <img src="{{ asset('assets/frontend/images/life-at-boc/slider1.png') }}" alt="banner image"
                    class="img-fluid d-block w-full" />
            </picture>
            <div class="absolute w-full life-text">
                <div class="container">
                    <div class="flex">
                        <h5 class="life-boc-text">
                            <span class="font-light">Life at</span><br />
                            Blue Ocean Corporation
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Boc Slider -->

<!-- About Section Starts Here -->
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
<!-- About Section Ends Here -->

<!-- Gallery View -->
<section class="gallery-block">
    <div class="container">
     <div class="gallery-container">
        <div class="search-box text-right">
            <form action="">
                <select name="" id="">
                    <option value="">Short by Year</option>
                    <option value="">2024</option>
                    <option value="">2025</option>
                </select>
            </form>
        </div>
    </div>

    <div class="container mt-6 mb-10">
        <div id="myFilterControls"  class="myfilter-controls">
            <button value="*">All</button>
            <button value=".yr2020">2020</button>
            <button value=".yr2021">2021</button>
            <button value=".yr2022">2022</button>
            <button value=".yr2023">2023</button>
            <button value=".yr2024">2024</button>
            <button value=".yr2025">2025</button>
        </div>
        <!-- <select class="filter-select" id="myFilterControls">
  <option value="all">Show All</option>
  <option value="yr2020">2020</option>
  <option value="yr2021">2021</option>
  <option value="yr2022">2022</option>
  <option value="yr2023">2023</option>
  <option value="yr2024">2024</option>
  <option value="yr2025">2025</option>
</select> -->

        <div class="gallery">
            <div class="gridzy gridzySkinClassic gallery-container"
                data-gridzy-filterControls="#myFilterControls button" data-gridzy-filterControls="#myFilterControls"
                data-gridzy-layout="justified" data-gridzy-desiredHeight="400" data-gridzy-spaceBetween="15"
                id="gallery-traningpage">
                <!-- Your image links -->
            

                <a class="item yr2025"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (24).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (24).png') }}"
                        alt="Image 2" />
                </a>
                <a class="item yr2025"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (23).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (23).png') }}"
                        alt="Image 3" />
                </a>
                <a class="item yr2025"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (22).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (22).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2025"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (21).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (21).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2024"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (20).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (20).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2024"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (19).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (19).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2024"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (18).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (18).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2024"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (17).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (17).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2023"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (16).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (16).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2023"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (15).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (15).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2023"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (14).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (14).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2023"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (13).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (13).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2022"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (12).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (12).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2022"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (11).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (11).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2022"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (10).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (10).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2022"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (9).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (9).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2022"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (8).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (8).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2022"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (8).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (8).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2021"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (9).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (9).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2021"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (7).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (7).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2021"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (6).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (6).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2021"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (5).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (5).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2020"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (4).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (4).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2020"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (3).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (3).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2020"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (2).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (2).png') }}"
                        alt="gallery-image" />
                </a>
                <a class="item yr2020"
                    href="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (1).png') }}">
                    <img class="gridzyImage"
                        src="{{ asset('assets/frontend/images/gallery-images/gallery-images1 (1).png') }}"
                        alt="gallery-image" />
                </a>

            </div>

        </div>
        <div class="mt-2 text-right">
            <a href="#" class="btn btn_theme btn_text load-more">
                Load More<span><img src="{{ asset('assets/frontend/images/consulting/arrow-right-blue.webp') }}"
                        alt="" /></span>
            </a>
        </div>
    </div>                  
                        
                        </div>
</section>
<!-- Gallery View -->
@endsection

@push('scripts')
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
        lightGallery(document.getElementById("gallery-traningpage"), {
            plugins: [lgZoom, lgThumbnail, lgFullscreen],
            speed: 500,
            thumbnail: true
        });
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const filterButtons = document.querySelectorAll('#myFilterControls button');

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
@endpush