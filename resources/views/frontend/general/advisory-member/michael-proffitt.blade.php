@extends('layouts.frontend.app')
@section('title', ' Michael Proffitt Advisory Board Member - Blue Ocean Corporation')
@section('meta-description', 'Michael Proffitt Blue Ocean Corporation Advisory Board Member: Expert guidance from distinguished leaders driving innovation & growth.')
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
              <a href="{{ route('general.advisory.board') }}" class="ms-1 text-sm font-medium text-[#1E1E1E]">Advisory Board</a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <span class="px-1 text-[#1E1E1E]">/</span>
              <span class="ms-1 text-sm font-medium text-[#1E1E1E]">Michael Proffitt</span>
            </div>
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="advisory-board-section pt-32 lg:pt-10 pb-10 pt-4 pb-2 relative">
    <div class="diveder-angle top-10 2xl:top-0">
 <div class="adv-mobile relative ">
            <img src="{{ asset('assets/frontend/images/advisory/michael-proffitt.png') }}" class="absolute bottom-0 w-[75%] left-4" />
            <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}" class="w-full" />
          </div>
      <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
    </div>
    <div class="container">
      <div class="max-w-[1075px] lg:pb-10">
        <h2 class="text-xl lg:text-4xl text-primary font-semibold">
          Michael Proffitt
        </h2>
        <p class="text-lg lg:text-[22px] text-[#454545] font-medium">
          Former CEO <br />
          Dubai Logistics City <br /> Advisor, Blue Ocean Corporation

        </p>
      </div>
      <div class="flex flex-col lg:flex-row gap-5 lg:gap-10 py-3 lg:py-5 new-clip-advisor bd-member-details">
        <div class="basis-1/2 flex flex-col gap-5 pl-0 lg:pl-14 lg:pt-28">
          <div class="mb-4 lg:mb-12">
            <h3 class="text-xl lg:text-[28px] text-[var(--color-dark-bg-blue)] font-medium mb-5 leading-[normal]">Global Logistics Visionary | Infrastructure Pioneer</h3>
            <p class="text-lg lg:text-[22px] text-black font-medium">
              Michael Proffitt is a globally respected logistics strategist and infrastructure pioneer, renowned for his transformational leadership as the founding CEO of Dubai Logistics City (DLC) and as a Management Board Member of Dubai World Central (DWC), shaping major global logistics hubs.

            </p>
          </div>
          <div class="mb-4 lg:mb-12">
            <h3 class="text-xl lg:text-[28px] text-[var(--color-dark-bg-blue)] font-medium mb-5 leading-[normal]">Global Leadership in Business Transformation</h3>
            <p class="text-lg lg:text-[22px] text-black">
             With over three decades of international experience, Michael has successfully led high-impact logistics and infrastructure initiatives across Europe, the Middle East, Asia, and Latin America. He has held senior executive roles at DHL (Deutsche Post World Net), Danzas, Hays plc, and McGregor Cory, where he managed complex transformations and provided strategic advice on large-scale logistics optimization and operational excellence.

            </p>
          </div>
        </div>
        <div class="basis-1/2 flex flex-col justify-between gap-10">
          <div class="relative desk-img ">
            <img src="{{ asset('assets/frontend/images/advisory/michael-proffitt.png') }}" class="absolute bottom-0 w-[75%] left-4" />
            <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}" class="w-full" />
          </div>
        </div>
      </div>
      <div class="ml-0 lg:ml-14 py-2 lg:py-10">
        <h3 class="text-[var(--color-dark-bg-blue)] text-xl lg:text-[28px] font-medium mb-4 pl-0 lg:pl-10">Global Influence in Logistics, Strategy, and Development</h3>
        <div class="flex flex-col lg:flex-row gap-5">
          <div class="bg-[#6FA3BC] text-white pl-16 py-10 pr-10 relative basis-0 grow">
            <img src="{{ asset('assets/frontend/images/advisory/element-3.png') }}" class="absolute top-6 -left-4" />
            <div class="flex flex-col gap-5">
              <h4 class="text-xl font-medium">Founding CEO of Dubai Logistics City (DLC)</h4>
              <p class="text-xl">
                As the visionary behind the world’s first fully integrated logistics platform, Michael played a critical role in positioning Dubai as a global logistics hub. Under his leadership, DLC became a benchmark for innovation in the
                supply chain and logistics sector.
              </p>
            </div>
          </div>
          <div class="bg-[#6FA3BC] text-white pl-16 py-10 pr-10 relative basis-0 grow">
            <img src="{{ asset('assets/frontend/images/advisory/element-3.png') }}" class="absolute top-6 -left-4" />
            <div class="flex flex-col gap-5">
              <h4 class="text-xl font-medium">Strategic Contributions Across Continents</h4>
              <p class="text-xl">Michael and his team have supported companies and projects across Europe, the UAE, Saudi Arabia, Turkey, Mexico, India, Kazakhstan, and Azerbaijan. Their work includes the development of Free Trade Zones in Dubai, Mexico, India, and Azerbaijan.
</p>
            </div>
          </div>
          <div class="bg-[#6FA3BC] text-white pl-16 py-10 pr-10 relative basis-0 grow">
            <img src="{{ asset('assets/frontend/images/advisory/element-3.png') }}" class="absolute top-6 -left-4" />
            <div class="flex flex-col gap-5">
              <h4 class="text-xl font-medium">Pioneer in Economic Development</h4>
              <p class="text-xl">With deep expertise in emerging markets, he has contributed to national-level initiatives that have accelerated economic growth, trade facilitation, and investment opportunities.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-col gap-7 ml-0 lg:ml-14 bg-[var(--color-dark-bg-blue)] text-white p-14">
        <h3 class="text-xl lg:text-[28px] font-medium">Chief Advisor – Blue Ocean Corporation</h3>
        <p class="text-lg lg:text-[22px]">
          As the Advisor to Blue Ocean Corporation, a global leader in logistics and supply chain training, he plays a pivotal role in guiding the organization’s strategic direction, prioritizing innovative training methodologies, infrastructure development, and impactful public-private partnerships.
</br>He drives strategic initiatives that equip professionals with practical skills, aligning with the dynamic needs of the global economy. 

        </p>
      </div>
      <div class="ml-0 lg:ml-14 py-4 lg:py-10">
        <div class="flex flex-col lg:flex-row gap-5">
          <div class="bg-[#F9F9F9] text-black p-10">
            <div class="flex flex-col gap-5">
              <h4 class="text-xl font-medium text-[#006AB5]">A Thought Leader & Global Speaker</h4>
              <p class="text-xl">
                Michael is a respected thought leader and keynote speaker at international conferences, sharing insights on <strong>business transformation, logistics innovation, leadership strategies, and economic development.</strong> His
                ability to bridge industry knowledge with real-world application makes him an influential mentor and guide for professionals worldwide.
              </p>
            </div>
          </div>
          <div class="bg-[#F9F9F9] text-black p-10">
            <div class="flex flex-col gap-5">
              <h4 class="text-xl font-medium text-[#006AB5]">Driving Excellence, Inspiring Change</h4>
              <p class="text-xl">
                With an unwavering dedication to strategic innovation, leadership excellence, and business transformation, Michael Proffitt continues to shape industries, empower leaders, and redefine success on a global scale.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection