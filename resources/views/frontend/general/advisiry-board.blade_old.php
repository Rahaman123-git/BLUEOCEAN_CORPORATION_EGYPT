@extends('layouts.frontend.app')
@section('title', ' Advisory Board - Blue Ocean Corporation')
@section('meta-description', 'Blue Ocean Corporation Advisory Board: Expert guidance from distinguished leaders driving
innovation & growth.')

<style>
@media (max-width: 600px) {
.advisory-detail .left-clip {
    clip-path: none !important;
}

.advisory-detail .right-clip {
    clip-path:none !important;
}
}
</style>
@section('content')
<div class="breadcrumb py-3">
    <div class="container">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse flex-wrap">
                <li class="inline-flex items-center">
                    <a href="{{ route('general.about.us') }}"
                        class="inline-flex items-center text-sm font-medium text-[#9A9A9A]">
                        <img src="{{ asset('assets/frontend/images/icons/home.svg') }}" alt="home icon"
                            class="w-5 h-5 mr-2" />
                        About Us
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <span class="px-1 text-[#1E1E1E]">/</span>
                        <span class="ms-1 text-sm font-medium text-[#1E1E1E]">Advisory Board</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="pt-0 lg:pt-32 pb-10 relative">
    <div class="diveder-angle top-10 2xl:top-0">
        <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
    </div>
    <div class="container">
        <div class="main">
            <h2 class="text-3xl lg:text-[45px] text-primary leading-[normal] mb-10">
                Guiding Excellence,
                <strong class="block">Shaping the Future</strong>
            </h2>
            <p class="text-black text-lg lg:text-[22px] font-medium pb-5">
                At Blue Ocean Corporation, our Advisory Board is composed of industry pioneers, thought leaders, and
                visionaries who bring a wealth of experience in business strategy, leadership, innovation, and industry
                transformation. Their
                insights and expertise steer our organization toward global excellence, ensuring we remain at the
                forefront of professional training, consulting, and industry conferences.
            </p>
            <p class="text-black text-lg lg:text-[22px] font-medium">With decades of collective experience, our advisors
                play a crucial role in shaping our strategic direction, fostering innovation, and strengthening global
                partnerships.</p>
        </div>
    </div>
</section>

<section class="advisory-board-section pt-0 lg:pt-32 pb-10 relative">
    <div class="diveder-angle top-10 2xl:top-0">
        <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
    </div>
    <div class="container">
        <div class="max-w-[1075px] lg:pb-10">
            <h2 class="text-3xl lg:text-[45px] text-primary leading-[normal] mb-10">
                Meet Our Esteemed
                <strong class="block">Advisory Board</strong>
            </h2>
        </div>
        <div class="flex flex-col lg:flex-row gap-5 lg:items-center bd-member-details py-5">
            <div class="basis-1/2 flex flex-col gap-5 pl-0 lg:pl-16 2xl:pl-32">              
                <div>
                    <h3 class="text-lg lg:text-3xl text-primary font-semibold" style ="Font-size:28px; font-weight:600">Sourav Ganguly</h3>
                    <h4 class="text-lg lg:text-2xl text-black font-medium" style ="Font-size:22px;">
                        Member of Board, Blue Ocean Corporation<br />
                        Chairman - ICC Cricket Committee <br/>
                        Former President <br />
                        Board of Control for Cricket in India (BCCI)<br />
                        
                    </h4>
                </div>
                <div class="text-[#454545] text-base lg:text-xl">
                    <h5 class="font-medium"><strong>Expertise:</strong></h5>
                    <p>Leadership, Team Building, Strategic Decision-Making</p>
                    <h5 class="font-medium"><strong>Contributions:</strong></h5>
                    <p>Offers insights into leadership, resilience, and strategy, bringing a high-performance mindset to
                        Blue Ocean Corporation.</p>
                    <h5 class="font-medium"><strong>Brief Bio:</strong></h5>
                    <p>
                        Sourav Ganguly, former captain of the Indian cricket team and current Chairman of the ICC Men’s Cricket Committee, is a legendary leader known for transforming Indian cricket. His leadership on and off the field is
                        an inspiration in team building, strategy,
                        and perseverance - qualities he brings to Blue Ocean Corporation as a strategic advisor.
                    </p>
                </div>
                <div>
                    <a href="{{ route('general.advisiry.member.sourav.ganguly') }}"
                        class="inline-block btn bg-primary p-3 hover:bg-secondary w-[50px] h-[50px]">
                        <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" class="w-full" />
                    </a>
                </div>
            </div>
            <div class="basis-1/2 relative">
                <img src="{{ asset('assets/frontend/images/advisory/sourav-ganguly.png') }}"
                    class="absolute bottom-0 w-[60%] left-4" />
                <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}"
                    class="w-full" />
            </div>
        </div>


        <div class="flex flex-col lg:flex-row-reverse bd-member-details gap-5 lg:items-center py-5">
            <div class="basis-1/2 flex flex-col gap-5 pr-0 lg:pr-16 2xl:pr-32">
                <div>
                    <h3 class="text-lg lg:text-2xl text-primary font-semibold" style ="Font-size:28px; font-weight:600">Michael Proffitt</h3>
                    <h4 class="text-lg lg:text-2xl text-black font-medium" style ="Font-size:22px;">
                        Former CEO <br />
                        Dubai Logistics City <br /> Advisor, Blue Ocean Corporation
                    </h4>
                </div>
                <div class="text-[#454545] text-base lg:text-xl">
                    <h5 class="font-medium"><strong>Expertise:</strong></h5>
                    <p>Supply Chain Management, Global Trade, Logistics Infrastructure</p>
                    <h5 class="font-medium"><strong>Contributions:</strong></h5>
                    <p>Guides Blue Ocean Corporation’s strategic vision by fostering innovation in training methodologies, expanding infrastructure, and building impactful public-private partnerships. </p>
                    <h5 class="font-medium"><strong>Brief Bio:</strong></h5>
                    <p>
                       With a distinguished career in logistics and supply chain management, Michael Proffitt played a key role in developing Dubai Logistics City and shaping global trade hubs. His extensive expertise strengthens Blue Ocean Corporation’s strategic initiatives and global impact.
                    </p>
                </div>
                <div>
                    <a href="{{ route('general.advisiry.member.michael.proffitt') }}"
                        class="inline-block btn bg-primary p-3 hover:bg-secondary w-[50px] h-[50px]">
                        <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" class="w-full" />
                    </a>
                </div>
            </div>
            <div class="basis-1/2 relative">
                <img src="{{ asset('assets/frontend/images/advisory/michael-proffitt.png') }}"
                    class="absolute bottom-0 w-[75%] right-4" />
                <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-left.png') }}"
                    class="w-full" />
            </div>
        </div>
        <div class="flex flex-col lg:flex-row gap-5 bd-member-details lg:items-center py-5">
            <div class="basis-1/2 flex flex-col gap-5 pl-0 lg:pl-16 2xl:pl-32">
                <div>
                    <h3 class="text-lg lg:text-2xl text-primary font-semibold" style ="Font-size:28px; font-weight:600">Dr. Sathya Menon</h3>
                    <h4 class="text-lg lg:text-2xl text-black font-medium" style ="Font-size:22px;">
                        Group CEO <br />
                     Blue Ocean Corporation <br />
                        Vice Chairman of CILT – UAE Chapter <br />
                      
                       
                    </h4>
                </div>
                <div class="text-[#454545] text-base lg:text-xl">
                    <h5 class="font-medium"><strong>Expertise:</strong></h5>
                    <p>Leadership • Supply Chain Training & Consulting. Strategic Development </p>
                    <h5 class="font-medium"><strong>Contributions:</strong></h5>
                    <p>Leads Blue Ocean Corporation’s strategic growth and global expansion by driving innovation across professional training, business transformation, and global conferences.</p>
                    <h5 class="font-medium"><strong>Brief Bio:</strong></h5>
                    <p>
                        With over 30 years of industry expertise, Dr. Sathya Menon has transformed supply chain practices across continents, guiding over 30,000 professionals and driving operational excellence in leading organizations. As the Group CEO of Blue Ocean Corporation, he leads the organization’s global strategy, spearheads innovation across professional training and consulting, and builds strategic alliances that position Blue Ocean as a pioneer in industry-relevant education and business transformation.

                    </p>
                </div>
                <div>
                    <a href="{{ route('general.advisiry.member.sathya.menon') }}"
                        class="inline-block btn bg-primary p-3 hover:bg-secondary w-[50px] h-[50px]">
                        <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" class="w-full" />
                    </a>
                </div>
            </div>
            <div class="basis-1/2 relative">
                <img src="{{ asset('assets/frontend/images/advisory/dr-menon-adv3.png') }}"
                    class="absolute bottom-0 w-[70%] left-4" />
                <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}"
                    class="w-full" />
            </div>
        </div>
        <div class="flex flex-col lg:flex-row-reverse bd-member-details gap-5 lg:items-center py-5">
            <div class="basis-1/2 flex flex-col gap-5 pr-0 lg:pr-16 2xl:pr-32">
                <div>
                    <h3 class="text-lg lg:text-2xl text-primary font-semibold" style ="Font-size:28px; font-weight:600">Abdul Azeez</h3>
                    <h4 class="text-lg lg:text-2xl text-black font-medium">
                        Group Chairman<br />
                        Blue Ocean Corporation 
                    </h4>
                </div>
                <div class="text-[#454545] text-base lg:text-xl">
                    <h5 class="font-medium"><strong>Expertise:</strong></h5>
                    <p>Corporate Strategy, Business Development, Executive Leadership</p>
                    <h5 class="font-medium"><strong>Contributions:</strong></h5>
                    <p>Provides vision, governance, and strategic direction to Blue Ocean Corporation’s global
                        initiatives.</p>
                    <h5 class="font-medium"><strong>Brief Bio:</strong></h5>
                    <p>
                        As the Chairman, Abdul Azeez has been instrumental in Blue Ocean Corporation’s rise as a global leader. His business acumen and leadership ensure that the company remains at the forefront of industry excellence.
                    </p>
                </div>
                <div>
                    <a href="{{ route('general.advisiry.member.abdul.azeez') }}"
                        class="inline-block btn bg-primary p-3 hover:bg-secondary w-[50px] h-[50px]">
                        <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" class="w-full" />
                    </a>
                </div>
            </div>
            <div class="basis-1/2 relative">
                <img src="{{ asset('assets/frontend/images/advisory/abdul-azeez.png') }}"
                    class="absolute bottom-0 w-[70%] right-4" />
                <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-left.png') }}"
                    class="w-full" />
            </div>
        </div>
        <div class="flex flex-col lg:flex-row gap-5 bd-member-details lg:items-center py-5">
            <div class="basis-1/2 flex flex-col gap-5 pl-0 lg:pl-16 2xl:pl-32">
                <div>
                    <h3 class="text-lg lg:text-2xl text-primary font-semibold" style ="Font-size:28px; font-weight:600">John Ellis</h3>
                    <h4 class="text-lg lg:text-2xl text-black font-medium" style ="Font-size:22px;">
                        Chief Operating Officer <br />
                        Blue Ocean Corporation 
                    </h4>
                </div>
                <div class="text-[#454545] text-base lg:text-xl">
                    <h5 class="font-medium"><strong>Expertise:</strong></h5>
                    <p>Aerospace, Operations Management, Business Growth</p>
                    <h5 class="font-medium"><strong>Contributions:</strong></h5>
                    <p>Optimizes operational efficiency and service delivery at Blue Ocean Corporation.</p>
                    <h5 class="font-medium"><strong>Brief Bio:</strong></h5>
                    <p>
                        Having held leadership roles in aerospace and airport management, John Ellis brings invaluable
                        experience in optimizing large-scale operations. His expertise ensures seamless execution of
                        training and consulting projects at Blue Ocean.
                    </p>
                </div>
                <div>
                    <a href="{{ route('general.advisiry.member.john.ellis') }}"
                        class="inline-block btn bg-primary p-3 hover:bg-secondary w-[50px] h-[50px]">
                        <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" class="w-full" />
                    </a>
                </div>
            </div>
            <div class="basis-1/2 relative">
                <img src="{{ asset('assets/frontend/images/advisory/john-ellis.png') }}"
                    class="absolute bottom-0 w-[60%] left-4" />
                <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}"
                    class="w-full" />
            </div>
        </div>
        <div class="flex flex-col lg:flex-row-reverse gap-5 bd-member-details  lg:items-center py-5">
            <div class="basis-1/2 flex flex-col gap-5 pr-0 lg:pr-16 2xl:pr-32">
                <div>
                    <h3 class="text-lg lg:text-2xl text-primary font-semibold" style ="Font-size:28px; font-weight:600">VS Ramachandran</h3>
                    <h4 class="text-lg lg:text-2xl text-black font-medium" style ="Font-size:22px;">
                        Chief Financial Officer <br />
                        Blue Ocean Corporation<br />
                    </h4>
                </div>
                <div class="text-[#454545] text-base lg:text-xl">
                    <h5 class="font-medium"><strong>Expertise:</strong></h5>
                    <p>Financial Planning, Risk Management, Corporate Strategy</p>
                    <h5 class="font-medium"><strong>Contributions:</strong></h5>
                    <p>Oversees financial health, risk management, and strategic financial planning at Blue Ocean.</p>
                    <h5 class="font-medium"><strong>Brief Bio:</strong></h5>
                    <p>A seasoned finance leader with decades of experience in corporate planning and financial
                        strategy, VS Ramachandran plays a crucial role in ensuring fiscal responsibility and sustainable
                        growth for Blue Ocean Corporation.</p>
                </div>
                <div>
                    <a href="{{ route('general.advisiry.member.vs.ramachandran') }}"
                        class="inline-block btn bg-primary p-3 hover:bg-secondary w-[50px] h-[50px]">
                        <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" class="w-full" />
                    </a>
                </div>
            </div>
            <div class="basis-1/2 relative">
                <img src="{{ asset('assets/frontend/images/advisory/ramachandran.png') }}"
                    class="absolute bottom-0 w-[60%] right-4" />
                <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-left.png') }}"
                    class="w-full" />
            </div>
        </div>
    </div>
</section>

<section class="advisory-board-role overflow-hidden">
    <div class="container">
        <h2 class="text-3xl lg:text-[45px] text-primary leading-[normal] font-semibold mb-5">The Role of Our Advisory
            Board</h2>
        <ul class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            <li class="bg-[#013F81]">
                <div class="flex flex-col gap-5 text-white p-4 lg:p-[50px]">
                    <h3 class="text-2xl lg:text-[34px] font-medium">Strategic Direction</h3>
                    <p class="text-base lg:text-2xl">Providing high-level guidance on industry trends, business growth,
                        and global expansion.</p>
                </div>
            </li>
            <li class="bg-[#013F81]">
                <div class="flex flex-col gap-5 text-white p-4 lg:p-[50px]">
                    <h3 class="text-2xl lg:text-[34px] font-medium">Innovation & Excellence</h3>
                    <p class="text-base lg:text-2xl">Ensuring Blue Ocean Corporation remains a leader in professional
                        training, consulting, and conferences.</p>
                </div>
            </li>
            <li class="bg-[#013F81]">
                <div class="flex flex-col gap-5 text-white p-4 lg:p-[50px]">
                    <h3 class="text-2xl lg:text-[34px] font-medium">Global Partnerships</h3>
                    <p class="text-base lg:text-2xl">Strengthening relationships with business leaders, policymakers,
                        and academic institutions</p>
                </div>
            </li>
            <li class="bg-[#013F81]">
                <div class="flex flex-col gap-5 text-white p-4 lg:p-[50px]">
                    <h3 class="text-2xl lg:text-[34px] font-medium">Industry Thought Leadership</h3>
                    <p class="text-base lg:text-2xl">Sharing insights that shape the future of leadership, supply chain,
                        and corporate training.</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="relative">
        <img src="{{ asset('assets/frontend/images/advisory/element.png') }}"
            class="absolute left-0 lg:bottom-0 2xl:bottom-[120px] hidden lg:block" />
        <div class="container">
            <div class="advisory-detail flex flex-col lg:flex-row py-10 gap-10 lg:gap-0">
                <div class="basis-[45%]">
                    <div class="left-clip-wrap">
                        <div class="left-clip">
                            <p class="text-2xl lg:text-[34px] font-medium pr-[10%]">Join Us in Shaping the Future.</p>
                        </div>
                    </div>
                    
                </div>
                <div class="basis-[55%]">
                    <div class="lg:h-[200px]">
                        <p class="text-2xl lg:text-[28px] font-medium text-[#353535] lg:pl-[15%]">Our Advisory Board
                            helps us drive impactful change, empowering professionals and organizations worldwide.</p>
                    </div>
                    <div class="right-clip-wrap">
                        <div class="right-clip">
                            <p class="text-2xl lg:text-[34px] font-medium pl-[13%] lg:pl-[15%]">Blue Ocean Corporation remains
                                committed to excellence, leadership, and global impact - Guided by our esteemed
                                advisors.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="flex flex-col lg:flex-row gap-1 py-2 container lg:items-center lg:gap-5 lg:py-14">
        <p class="text-2xl lg:text-[34px] font-medium text-primary">Reach out to us today and let’s create impact
            together!</p>
        <div>
            <a href="{{ route('general.contact.us') }}" class="btn primary-btn">Let’s Connect</a>
        </div>
    </div>
</section>
@endsection