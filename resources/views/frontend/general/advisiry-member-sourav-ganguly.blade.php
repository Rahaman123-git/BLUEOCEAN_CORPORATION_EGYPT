@extends('layouts.frontend.app')
@section('title', ' Sourav Ganguly Advisory Board - Blue Ocean Corporation')
@section('meta-description', 'Sourav Ganguly Blue Ocean Corporation Advisory Board Member: Expert guidance from distinguished leaders driving innovation & growth.')
@section('content')
  <div class="breadcrumb py-3">
    <div class="container">
      <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse flex-wrap">
          <li class="inline-flex items-center">
            <a href="{{ route('general.about.us') }}" class="inline-flex items-center text-sm font-medium text-[#9A9A9A]">
              <img src="{{ asset('assets/frontend/images/icons/home.svg') }}" alt="home icon" class="w-5 h-5 mr-2" />
              About Us
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <span class="px-1 text-[#1E1E1E]">/</span>
              <a href="{{ route('general.advisiry.board') }}" class="ms-1 text-sm font-medium text-[#1E1E1E]">Advisory Board</a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <span class="px-1 text-[#1E1E1E]">/</span>
              <span class="ms-1 text-sm font-medium text-[#1E1E1E]">Sourav Ganguly</span>
            </div>
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="advisory-board-section pt-32 lg:pt-10 pb-10 pt-4 pb-2 relative">
    <div class="diveder-angle top-10 2xl:top-0">
      <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
    </div>
    <div class="container">

  <div class="adv-mobile relative">
            <img src="{{ asset('assets/frontend/images/advisory/sourav-ganguly.png') }}" class="absolute bottom-0 w-[60%] left-4" />
            <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}" class="w-full" />
          </div>

      <div class="max-w-[1075px] lg:pb-10">
        <h2 class="text-xl lg:text-4xl text-primary font-semibold">
          Sourav Ganguly
        </h2>
        <p class="text-lg lg:text-[22px] text-[#454545] font-medium">
          Member of Board, Blue Ocean Corporation <br />
          Chairman - ICC Cricket Committee <br />
          Former President <br />
          Board of Control for Cricket in India (BCCI) <br />
          
        </p>
      </div>
      <div class="flex flex-col lg:flex-row gap-5 lg:gap-10 py-3 lg:py-5 bg-member-details new-clip-advisor bd-member-details">
        <div class="basis-1/2 flex flex-col gap-3 lg:gap-5 pl-0 lg:pl-14">
          <div class="mb-12 lg:mb-0">
            <h3 class="text-xl lg:text-[28px] text-[#013F81] font-medium mb-5 leading-[normal]">Visionary Leader | Iconic Cricketer | Strategic Advisor</h3>
            <p class="text-lg text-black font-medium">
              Sourav Ganguly, widely known as Dada, is a legendary figure in international cricket and one of India's most influential leaders in sports and strategy. Recognized as the Maharaja of Indian Cricket, he redefined leadership through his bold decisions, transformative vision, and ability to inspire performance under pressure.
            </p>
            <p class="text-lg text-black font-medium">As one of the most successful captains in Indian cricket history, Ganguly led the national team during a pivotal era, instilling confidence, resilience, and a fearless spirit that continues to influence leadership culture in India and beyond.</p>
          </div>
          <div class="mb-12 lg:mb-0">
            <h3 class="text-xl lg:text-[28px] text-[#013F81] font-medium mb-5 leading-[normal]">A Legacy of Leadership & Excellence</h3>
            <p class="text-lg text-black">
              Sourav Ganguly, fondly known as Dada, is an iconic figure in the world of cricket and a distinguished leader whose impact transcends the sporting arena. Renowned for his fearless leadership, exceptional strategic mindset, and
              ability to inspire transformation, Ganguly is celebrated as one of the greatest captains in Indian cricket history.
            </p>
          </div>
          <div class="mb-12 lg:mb-0">
            <h3 class="text-xl lg:text-[28px] text-[#013F81] font-medium mb-5 leading-[normal]">From Cricket Legend to Strategic Visionary</h3>
            <p class="text-lg text-black">
              After his illustrious playing career, Ganguly served as the President of the Board of Control for Cricket in India (BCCI), where he brought strategic reforms, modernized infrastructure, and reinforced governance practices that shaped the future of Indian cricket. Currently, he serves as the Chairman of the ICC Men’s Cricket Committee, where he continues to shape the global cricketing landscape with his deep knowledge and visionary leadership.<br />
As an Advisory Board Member at Blue Ocean Corporation, Sourav Ganguly brings unparalleled experience in high-performance leadership, strategic planning, and decision-making under pressure. His insights contribute to Blue Ocean’s mission of empowering professionals with the mindset and skills needed to succeed in today’s dynamic business environment.

            </p>
          </div>
          <div class="mb-12 lg:mb-0">
            <h3 class="text-xl lg:text-[28px] text-[#013F81] font-medium mb-5 leading-[normal]">Association with Blue Ocean Corporation</h3>
            <p class="text-lg text-black">
              As an <strong>Advisory Board Member at Blue Ocean Corporation</strong>, Sourav Ganguly brings his wealth of experience in leadership, strategy, and high-performance management. His association with Blue Ocean reinforces our
              commitment to fostering innovation, resilience, and transformative learning for professionals worldwide.<br />
              With his expertise in managing teams, navigating challenges, and driving success in high-pressure environments, Ganguly serves as an inspiration for professionals seeking to develop leadership skills, strategic thinking, and a
              winning mindset. His insights and guidance align with Blue Ocean’s mission of empowering businesses and individuals to thrive in a competitive world.
            </p>
          </div>
          <div class="mb-12">
            <h3 class="text-xl lg:text-[28px] text-[#013F81] font-medium mb-5 leading-[normal]">A Global Inspiration</h3>
            <p class="text-lg text-black">
              Beyond cricket and corporate leadership, Ganguly’s influence extends to motivational speaking, mentoring, and youth empowerment. His journey from a young cricketer to a world-renowned leader is a testament to the power of
              perseverance, adaptability, and visionary thinking.<br />
              <br />
              At Blue Ocean Corporation, his expertise and guidance inspire the creation of world-class learning experiences and leadership solutions that empower professionals to excel and drive meaningful change.

            </p>
          </div>
        </div>
        <div class="basis-1/2 flex flex-col justify-between gap-10">
          <div class="relative desk-img">
            <img src="{{ asset('assets/frontend/images/advisory/sourav-ganguly.png') }}" class="absolute bottom-0 w-[60%] left-4" />
            <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}" class="w-full" />
          </div>
          <div class="relative bg-[#013F81] text-white p-24 max-w-[588px] lg:bottom-[10%]">
            <img src="{{ asset('assets/frontend/images/advisory/element-2.png') }}" class="absolute -left-[25px] top-[70px]" />
            <p class="text-xl lg:text-3xl 2xl:text-[45px] 2xl:leading-[55px]">
              "In every game and every business challenge, it is the skills you build over time that define how far you go."
              <strong class="block">– Sourav Ganguly</strong>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection