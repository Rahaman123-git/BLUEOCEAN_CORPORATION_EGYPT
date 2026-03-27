@extends('layouts.frontend.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/js/gridzy/gridzy.min.css') }}" />
<!-- gridzy file for gridzySkinClassic skin -->
<link rel="stylesheet" href="{{ asset('assets/frontend/js/gridzy/skins/gridzySkinClassic/style.min.css') }}" />

@endpush

@section('content')
<!-- Boc Slider -->
<div class="slider-container life-bocSlider relative">
  <div class="boclifeSlider">
    <div class="slider-item relative">
      <picture>
        <img src="{{ asset('assets/frontend/images/latest-added/traning-gallery/gannery-banner.png') }}"
          alt="banner image" class="img-fluid d-block w-full" />
      </picture>
      <div class="absolute w-full life-text">
        <div class="container">
          <div class="flex">
            <h5 class="life-boc-text">
              <span class="font-light">See Our Impactful</span><br />
              Training Sessions In Action
            </h5>
          </div>
        </div>
      </div>
    </div>

    <div class="slider-item relative">
      <picture>
        <img src="{{ asset('assets/frontend/images/latest-added/traning-gallery/gannery-banner.png') }}"
          alt="banner image" class="img-fluid d-block w-full" />
      </picture>
      <div class="absolute w-full life-text">
        <div class="container">
          <div class="flex">
            <h5 class="life-boc-text">
              <span class="font-light">See Our Impactful</span><br />
              Training Sessions In Action
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Boc Slider -->

<!-- About Section -->
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
            Welcome to the <strong>Blue Ocean Corporation Gallery</strong>—where we capture the energy, passion, and
            achievements that define us! From global conferences to engaging training sessions, from leadership summits
            to team
            celebrations, every moment tells a story of growth and innovation.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About Section -->

<!-- Gallery View -->
<section class="gallery-block">
  <div class="container">
    <div class="search-box text-right">
      <form action="">
        <select name="" id="">
          <option value="">Short by Year</option>
          <option value="">2024</option>
          <option value=".2025">2025</option>
        </select>
      </form>
    </div>
  </div>
  <div class="container mt-6 mb-10">
     <div id="myFilterControls">
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
      <div class="gridzy gridzySkinClassic gallery-container" data-gridzy-filterControls="#myFilterControls button"      data-gridzy-filterControls="#myFilterControls"     data-gridzy-layout="justified"     data-gridzy-desiredHeight="400"
     data-gridzy-spaceBetween="15"     id="gallery-traningpage">
        <a class="item yr2020"
          href="{{ asset('assets/frontend/images/latest-added/traning-gallery/1740380407434 1 (1).png') }}">
          <figure>
            <img class="gridzyImage"
              src="{{ asset('assets/frontend/images/latest-added/traning-gallery/1740380407434 1 (1).png') }}"
              alt="a random image" />
            <figcaption class="gridzyCaption">
              <p class="area-text">Corporate Training | 2025</p>
              <p class="btm-txt">Exceptional customer service</p>
            </figcaption>

          </figure>
        </a>
        <a class="item yr2021"
          href="{{ asset('assets/frontend/images/latest-added/traning-gallery/1740380407434 1 (1).png') }}">
          <figure>

            <img class="gridzyImage"
              src="{{ asset('assets/frontend/images/latest-added/traning-gallery/1740380407434 1 (1).png') }}"
              alt="Corporate Training  | 2025" />
            <figcaption class="gridzyCaption">
              <p class="area-text">Corporate Training | 2025</p>
              <p class="btm-txt">Exceptional customer service</p>
            </figcaption>

          </figure>
        </a>
        <a class="item yr2022"
          href="{{ asset('assets/frontend/images/latest-added/traning-gallery/1740380407434 1.png') }}">
          <figure>

            <img class="gridzyImage 2023"
              src="{{ asset('assets/frontend/images/latest-added/traning-gallery/1740380407434 1.png') }}"
              alt="A traditional, grand reception by Kerala Tourism | Kochi Airport" />
            <figcaption class="gridzyCaption">
              <p class="area-text">Kochi Airport</p>
              <p class="btm-txt">A traditional, grand reception by Kerala Tourism</p>
            </figcaption>

          </figure>
        </a>

        <a class="item relative  yr2023"
          href="{{ asset('assets/frontend/images/latest-added/boc-life-gallery/Mask group (30).png') }}">
          <figure>

            <img class="gridzyImage 2022"
              src="{{ asset('assets/frontend/images/latest-added/boc-life-gallery/Mask group (30).png') }}"
              alt="Image 8" />
            <figcaption class="gridzyCaption">
              <p class="area-text">Kochi Airport</p>
              <p class="btm-txt">Power BI training</p>
            </figcaption>

          </figure>
        </a>
        <a class="item relative yr2024"
          href="{{ asset('assets/frontend/images/latest-added/traning-gallery/1741849208720 1.png') }}">
          <figure>

            <img class="gridzyImage 2020"
              src="{{ asset('assets/frontend/images/latest-added/traning-gallery/1741849208720 1.png') }}"
              alt="Image 3" />
            <figcaption class="gridzyCaption">
              <p class="area-text">Kochi Airport</p>
              <p class="btm-txt">A traditional, grand reception by Kerala Tourism</p>
            </figcaption>


          </figure>
        </a>
        <a class="item yr2025" href="{{ asset('assets/frontend/images/latest-added/traning-gallery/gannery-banner.png') }}">
          <img class="gridzyImage"
            src="{{ asset('assets/frontend/images/latest-added/traning-gallery/gannery-banner.png') }}" alt="Image 4" />
        </a>
        <a class="item yr2023" href="{{ asset('assets/frontend/images/latest-added/boc-life-gallery/gallery2.png') }}">
          <img class="gridzyImage"
            src="{{ asset('assets/frontend/images/latest-added/boc-life-gallery/gallery2.png') }}" alt="Image 6" />
        </a>
        <a class="item yr2024" href="{{ asset('assets/frontend/images/latest-added/boc-life-gallery/gallery1.png') }}">
          <img class="gridzyImage"
            src="{{ asset('assets/frontend/images/latest-added/boc-life-gallery/gallery1.png') }}" alt="Image 7" />
        </a>
        <a class="item yr2020" href="{{ asset('assets/frontend/images/latest-added/traning-gallery/gannery-banner.png') }}">
          <img class="gridzyImage"
            src="{{ asset('assets/frontend/images/latest-added/traning-gallery/gannery-banner.png') }}" alt="Image 4" />
        </a>
        <a class="item yr2021" href="{{ asset('assets/frontend/images/latest-added/boc-life-gallery/gallery2.png') }}">
          <img class="gridzyImage 2023"
            src="{{ asset('assets/frontend/images/latest-added/boc-life-gallery/gallery2.png') }}" alt="Image 6" />
        </a>
        <a class="item yr2022" href="{{ asset('assets/frontend/images/latest-added/boc-life-gallery/gallery1.png') }}">
          <img class="gridzyImage 2022"
            src="{{ asset('assets/frontend/images/latest-added/boc-life-gallery/gallery1.png') }}" alt="Image 7" />
        </a>



      </div>

    </div>
  </div>


</section>
<!-- Gallery View -->
@endsection

@push('scripts')

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