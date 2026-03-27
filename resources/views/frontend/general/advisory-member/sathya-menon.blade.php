@extends('layouts.frontend.app')
@section('title', ' Dr. Sathya Menon Advisory Board - Blue Ocean Corporation')
@section('meta-description', 'Dr. Sathya Menon Blue Ocean Corporation Advisory Board Member: Expert guidance from distinguished leaders driving innovation & growth.')
<style>
@media (max-width: 480px) {
    .advisory-detail .right-clip {
    clip-path: none !important;
}
.advisory-detail .left-clip {
    clip-path: none !important;
}
}
</style>
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
              <span class="ms-1 text-sm font-medium text-[#1E1E1E]">Dr. Sathya Menon</span>
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
      <div class="max-w-[1075px] lg:pb-10">
<div class="adv-mobile relative">
            <img src="{{ asset('assets/frontend/images/advisory/dr-menon-adv3.png') }}" class="absolute bottom-0 w-[75%] left-4" />
            <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}" class="w-full" />
          </div>
        <h2 class="text-xl lg:text-4xl text-primary font-semibold">
          Dr. Sathya Menon
        </h2>
        <p class="text-lg lg:text-[22px] text-[#454545] font-medium">
          Chairman & Managing Director <br />
          Blue Ocean Corporation <br />
        Vice Chairman, CILT UAE Chapter
        </p>
        <p class="text-lg lg:text-[22px] text-[#454545]">
          FCIPS, FCLIT, FCMI, CPM, CICCM, CISCM, <br />
          CERTIFIED SAP CONSULTANT – SCM
        </p>
      </div>
      <div class="flex flex-col lg:flex-row gap-5 lg:gap-10 py-3 lg:py-5 new-clip-advisor bd-member-details">
        <div class="basis-1/2 flex flex-col gap-5 pl-0 lg:pl-14 lg:pt-4">
          <div class="mb-12">
            <h3 class="text-xl lg:text-[28px] text-[var(--color-dark-bg-blue)] font-medium mb-5 leading-[normal]">Visionary Educator | Industry Thought Leader CEO, Blue Ocean Corporation</h3>
            <p class="text-lg lg:text-[18px] text-black font-medium"> With an expertise spanning nearly three decades, Dr Sathya Menon has played a pivotal role in shaping a skilled and advanced workforce landscape across the world. His leadership has been instrumental in creating an environment that promotes professional growth and innovation, significantly enhancing the collective expertise within the region.</p>  </br>
            <p class="text-lg lg:text-[18px] text-black font-medium"> A renowned Supply Chain training and consulting expert, Dr Menon has a remarkable track record of training over 30,000 professionals in Logistics and Supply Chain Management and developing tailored solutions that helped numerous organizations to enhance operational efficiency and drive business success. </p>

              <br />
             <p class="text-lg lg:text-[18px] text-black font-medium"> Being the Group CEO of Blue Ocean Corporation, he has exhibited unmatched dedication to driving innovation and implementing robust practices to advance the organization’s business development. From forging strategic partnerships with global training institutions and re-modelling business structure to effectively address the pandemic challenges to strengthening the infrastructure by revamping courses and enhancing digital channels, his commitment to advancing the organization is unequivocal.

            </p>
          </div>
        </div>
        <div class="basis-1/2 flex flex-col justify-between gap-10">
          <div class="relative desk-img">
            <img src="{{ asset('assets/frontend/images/advisory/dr-menon-adv3.png') }}" class="absolute bottom-0 w-[75%] left-4" />
            <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}" class="w-full" />
          </div>
        </div>
      </div>
      <div class="ml-0 lg:ml-14 py-2 lg:py-10">
        <h3 class="text-xl lg:text-[28px] text-[var(--color-dark-bg-blue)] font-medium mb-5 leading-[normal]">A Visionary Leader in Learning & Development</h3>
        <p class="text-lg lg:text-[22px] text-black">
          Dr. Sathya Menon’s leadership journey highlights the transformative power of dedication, resilience, and true commitment to excellence. As a visionary leader, educator, and mentor, Dr. Menon has not only shaped the landscape of his profession but has also inspired thousands of individuals to attain the highest standards of achievement in life.

        </p>
      </div>
      <div class="py-2 lg:py-10">
        <div class="flex flex-col lg:flex-row gap-5">
          <div class="bg-[#6FA3BC] text-white pl-16 py-10 pr-5 relative basis-0 grow">
            <img src="{{ asset('assets/frontend/images/advisory/element-3.png') }}" class="absolute top-6 -left-4" />
            <div class="flex flex-col gap-5">
              <h4 class="text-xl font-medium">CEO & Strategic Architect of Blue Ocean Corporation</h4>
              <p class="text-xl">
                Under his leadership, Blue Ocean has delivered <strong>exceptional corporate training, leadership development programs</strong> and international certifications, transforming careers and businesses worldwide.
              </p>
            </div>
          </div>
          <div class="bg-[#6FA3BC] text-white pl-16 py-10 pr-5 relative basis-0 grow">
            <img src="{{ asset('assets/frontend/images/advisory/element-3.png') }}" class="absolute top-6 -left-4" />
            <div class="flex flex-col gap-5">
              <h4 class="text-xl font-medium">Champion of Workforce Empowerment</h4>
              <p class="text-xl">Having mentored and trained thousands of professionals, Dr. Menon has played a crucial role in <strong>bridging global skill gaps</strong> and fostering innovation-driven economies.</p>
            </div>
          </div>
          <div class="bg-[#6FA3BC] text-white pl-16 py-10 pr-5 relative basis-0 grow">
            <img src="{{ asset('assets/frontend/images/advisory/element-3.png') }}" class="absolute top-6 -left-4" />
            <div class="flex flex-col gap-5">
              <h4 class="text-xl font-medium">Thought Leader & Keynote Speaker</h4>
              <p class="text-xl">A sought-after speaker at global forums, conferences, and summits, Dr Menon has shared insights on business transformation, leadership, professional development, and the future of work.
</strong></p>
            </div>
          </div>
          <div class="bg-[#6FA3BC] text-white pl-16 py-10 pr-5 relative basis-0 grow">
            <img src="{{ asset('assets/frontend/images/advisory/element-3.png') }}" class="absolute top-6 -left-4" />
            <div class="flex flex-col gap-5">
              <h4 class="text-xl font-medium">Global Recognition & Influence</h4>
              <p class="text-xl">He has been instrumental in shaping <strong>high-impact leadership programs</strong> for professionals, corporate executives, and government entities, driving sustainable business excellence.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-[#F9F9F9] p-10">
        <div class="flex flex-col lg:flex-row gap-5">
          <div class="basis-[70%]">
            <h3 class="text-xl lg:text-[28px] text-[var(--color-dark-bg-blue)] font-medium mb-5 leading-[normal]">Awards & Honors</h3>
            <p class="text-lg lg:text-[22px] text-black font-medium mb-5">Dr. Menon’s groundbreaking contributions to education, leadership, and corporate training have earned him prestigious accolades and global recognition, including:</p>
            <ul class="text-lg lg:text-[22px] text-black list-disc pl-5">
              <li>GMBF Business Excellence Award at GMBF Global’s MahaBiz, Dubai, 2022</li>
              <li>Top 100 Leaders in Education’ Award by Global Forum for Education and Learning (GFEL), Dubai, 2019</li>
              <li>CEO of the Year Award by the prestigious Middle East Training and Development Leadership Conference, Dubai, 2019</li>
              <li>Best Training Initiative in Logistics and Supply Chain Management in Asia, Malaysia, 2018</strong></li>
              <li>Outstanding Contribution to Global Learning, Dubai at the World HRD Congress, Dubai, 2018</li>
               <li>Global Training and Development Leadership Award, Mumbai, 2017</li>
            </ul>
              
          </div>
          <div class="basis-[30%]">
            <img src="{{ asset('assets/frontend/images/advisory/rectangle.png') }}" />
          </div>
        </div>
      </div>
      
           <div class="py-1 lg:py-4">
  <div class="flex flex-col lg:flex-row gap-5">
    <!-- Left Column: Fellowships -->
    <div class="basis-[50%] bg-[#F9F9F9] py-8 pl-14 pr-5">
      <h3 class="text-xl lg:text-[28px] text-[var(--color-dark-bg-blue)] font-medium mb-6">Fellowships</h3>
      <ul class="text-lg lg:text-[22px] text-black list-disc pl-5">
        <li>Fellow of the Chartered Institute of Logistics and Transport (FCILT)</li>
        <li>Fellow of the Chartered Institute of Procurement & Supply (FCIPS)</li>
        <li>Fellow of the Chartered Management Institute (FCMI)</li>
      </ul>
    </div>

  

    <!-- Right Column: Academic Qualifications -->
    <div class="basis-[50%] bg-[#F9F9F9] py-8 pl-14 pr-5">
      <h3 class="text-xl lg:text-[28px] text-[var(--color-dark-bg-blue)] font-medium mb-6">Academic Qualifications</h3>
      <ul class="text-lg lg:text-[22px] text-black list-disc pl-5">
        <li>Doctorate in Business Management</li>
        <li>Master’s Degree in Business Administration (MBA)</li>
        <li>Bachelor’s Degree in Business Management</li>
      </ul>
    </div>
  </div>
</div>
   <div class="py-1 lg:py-4">
  <div class="flex flex-col lg:flex-row gap-5">
    <!-- Section: Title and Content in Single Row -->
    <div class="bg-[#013F81] text-white py-10 pl-14 pr-10 w-full">
      <h4 class="text-2xl lg:text-[34px] mb-6 leading-[51px]">
        Driving Global Impact & <strong class="block">Transforming Industries</strong>
      </h4>
      <p class="text-lg lg:text-2xl">
        Dr Menon’s influence extends beyond the business realm, as he is a prominent figure within the sports community. An ardent fan of cricket, Dr. Sathya Menon himself is a former Kerala state cricketer. He has been honoured with the Arjuna Award from the Hindustan Arts Society for his contribution to the sport.
        Beyond sports, his intellectual curiosity is evident in his deep-rooted passion for emerging technologies, notably the Metaverse and Artificial Intelligence, areas where he continually seeks to expand his knowledge and understanding.
      </p>
    </div>
  </div>
</div>
<div class="py-1 lg:py-4 bg-[#F0F5FF] p-4">
  <div class="flex flex-col lg:flex-row gap-5">
    <!-- Left Column: Professional Certifications (First Half) -->
    <div class="basis-[50%] ">
      <h5 class="text-xl lg:text-[28px] font-bold text-primary mb-2 prop-text">Professional Certifications</h5>
      <ul class="p-10 flex flex-col gap-5">
                        <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CPM</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified Purchase Manager from Institute of Supply Chain Management <strong>(ISM), USA</strong></p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CISCM</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified International Supply Chain Manager from International Purchasing and Supply Chain Management Institute <strong>(IPSCMI), USA</strong></p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CICCM</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified International Commercial Contracts Manager from International Purchasing and Supply Chain Management Institute <strong>(IPSCMI), USA</strong></p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CIPTC</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified International Professional Training Consultant from American Certification Institute <strong>(ACI), USA</strong></p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CPPM</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified Professional Purchasing Manager from American Purchasing Society <strong>(APS), USA</strong></p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CPP</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified Purchasing Professional from American Purchasing Society <strong>(APS), USA</strong></p>
                  </div>
                </li>
      </ul>
    </div>

   

    <!-- Right Column: Professional Certifications (Second Half) -->
    <div class="basis-[50%]">
      <ul class="p-10 flex flex-col gap-5">
           <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CILT</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certification in Supply Chain Leadership from Chartered Institute of Logistics and Transport, UK</p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CILT</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certification in Distribution & Transportation from Chartered Institute of Logistics and Transport, UK</p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CILT</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certification in Quality Management & Risk Assessment from Chartered Institute of Logistics and Transport, UK</p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CILT</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certification in Shipping & Freight Forwarding from Chartered Institute of Logistics and Transport, UK</p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">ABNLP</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified Associate Leadership & Executive Coach (Neuro-Linguistic Programming) from The American Board of Neuro-Linguistic Programming</p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">ABNLP</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified Organizational Development Coach from The American Board of Neuro-Linguistic Programming</p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">ABNLP</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified Life Coach from The American Board of Neuro-Linguistic Programming</p>
                  </div>
                </li>
      </ul>
    </div>
  </div>
</div>
<!--
     <div class="py-1 lg:py-4">
        <div class="flex flex-col lg:flex-row gap-5">
          <div class="basis-[57%] bg-[#013F81]">
            <div class="bg-white flex flex-col gap-5 pb-5">
              <div class="bg-[#F9F9F9] py-8 pl-14 pr-5">
                <h3 class="text-xl lg:text-[28px] text-[var(--color-dark-bg-blue)] font-medium mb-6 leading-[normal]">Fellowships</h3>
                <ul class="text-lg lg:text-[22px] text-black list-disc pl-5">
                  <li>Fellow of the Chartered Institute of Logistics and Transport (FCILT)</strong> </li>
                  <li>Fellow of the Chartered Institute of Procurement & Supply (FCIPS)</strong></li>
                  <li>Fellow of the Chartered Management Institute (FCMI)</strong></li>
                </ul>
              </div>
              <div class="bg-[#F9F9F9] py-8 pl-14 pr-5">
                <h3 class="text-xl lg:text-[28px] text-[var(--color-dark-bg-blue)] font-medium mb-6 leading-[normal]">Academic Qualifications</h3>
                <ul class="text-lg lg:text-[22px] text-black list-disc pl-5">
                  <li>Doctorate in Business Management</strong> </li>
                  <li>Master’s Degree in Business Administration (MBA)</strong> </li>
                  <li>Bachelor’s Degree in Business Management</strong> </li>
                </ul>
              </div>

            </div>
            <div class="text-white py-10 pl-14 pr-10">
              <h4 class="text-2xl lg:text-[34px] mb-10 leading-[51px]">
                Driving Global Impact &
                <strong class="block">Transforming Industries</strong>
              </h4>
              <p class="text-lg lg:text-2xl font-medium mb-10">
                Dr Menon’s influence extends beyond the business realm, as he is a prominent figure within the sports community.  An ardent fan of cricket, Dr. Sathya Menon himself is a former Kerala state cricketer. He has been honoured with the Arjuna Award from the Hindustan Arts Society for his contribution to the sport.
                Beyond sports, his intellectual curiosity is evident in his deep-rooted passion for emerging technologies, notably the Metaverse and Artificial Intelligence, areas where he continually seeks to expand his knowledge and understanding.

              </p>

              <ul class="text-lg lg:text-2xl list-disc pl-5 flex flex-col gap-10 font-medium max-w-[600px]">
                <li>Expanding Blue Ocean’s presence to 12+ countries, reaching 100,000+ professionals globally.</li>
                <li>Establishing Blue Ocean Conferences – bringing together top industry leaders, innovators, and decision-makers to shape the future of business.</li>
                <li>Developing industry-relevant certification programs that align with evolving market demands and business challenges.</li>
                <li>Empowering professionals across multiple industries -from supply chain management and project management to corporate leadership and human resources.</li>
              </ul> 
            </div>
          </div>
          <div class="basis-[43%]">
            <div class="bg-[#F0F5FF] p-4">
              <h5 class="text-xl lg:text-[28px] font-medium text-primary p-6">Professional Certifications</h5>
              <ul class="p-4 flex flex-col gap-5">
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CPM</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified Purchase Manager from Institute of Supply Chain Management <strong>(ISM), USA</strong></p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CISCM</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified International Supply Chain Manager from International Purchasing and Supply Chain Management Institute <strong>(IPSCMI), USA</strong></p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CICCM</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified International Commercial Contracts Manager from International Purchasing and Supply Chain Management Institute <strong>(IPSCMI), USA</strong></p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CIPTC</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified International Professional Training Consultant from American Certification Institute <strong>(ACI), USA</strong></p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CPPM</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified Professional Purchasing Manager from American Purchasing Society <strong>(APS), USA</strong></p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CPP</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified Purchasing Professional from American Purchasing Society <strong>(APS), USA</strong></p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CILT</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certification in Supply Chain Leadership from Chartered Institute of Logistics and Transport, UK</p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CILT</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certification in Distribution & Transportation from Chartered Institute of Logistics and Transport, UK</p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CILT</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certification in Quality Management & Risk Assessment from Chartered Institute of Logistics and Transport, UK</p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">CILT</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certification in Shipping & Freight Forwarding from Chartered Institute of Logistics and Transport, UK</p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">ABNLP</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified Associate Leadership & Executive Coach (Neuro-Linguistic Programming) from The American Board of Neuro-Linguistic Programming</p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">ABNLP</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified Organizational Development Coach from The American Board of Neuro-Linguistic Programming</p>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="flex flex-row gap-2 py-2 px-5 bg-primary rounded-sm items-center mb-3 max-w-fit">
                      <img src="{{ asset('assets/frontend/images/icons/ribbon-secondary.svg') }}" />
                      <h6 class="text-xl font-semibold text-white">ABNLP</h6>
                    </div>
                    <p class="text-lg lg:text-[22px] text-black">Certified Life Coach from The American Board of Neuro-Linguistic Programming</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->
              

    <div class="advisory-board-role advisory-member">
      <div class="relative overflow-hidden">
        <div class="container">
          <div class="advisory-detail flex flex-col lg:flex-row py-10 gap-10 lg:gap-0">
            <div class="basis-[45%]">
              <div class="left-clip-wrap mt-0">
                <div class="left-clip h-28"></div>
              </div>
              <div class="lg:h-[200px] pt-10 lg:pt-[100px]">
                <p class="text-3xl lg:text-[45px] font-medium text-primary lg:leading-[45px] 2xl:pr-[10%]">Shaping the Future of Professional Learning</p>
              </div>
            </div>
            <div class="basis-[55%]">
              <div class="right-clip-wrap lg:mt-[112px]">
                <div class="right-clip">
                  <p class="text-lg lg:text-[26px] pl-[15%]">
                    With a relentless commitment to excellence, innovation, and empowerment, Dr. Sathya Menon continues to lead Blue Ocean Corporation toward greater global impact. His mission is to equip professionals and organizations with
                    the skills, knowledge, and leadership mindset required to thrive in an ever-evolving business world.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection