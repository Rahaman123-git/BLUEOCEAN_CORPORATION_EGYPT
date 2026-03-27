<style>
  @media (max-width: 767px) {
    .icon { display: none !important; }
  }
</style>
<div class="course-form-wrap relative">
      <div class="filter-click">
        <img src="{{ asset('assets/frontend/images/icons/filter-icon.png') }}" width="32px" height="32px" />
    </div>

  <form class="flex flex-col gap-5 for-mobile-view">
    <div>
      <div x-data="courseFilter('Keyword', '')" x-effect="updateURL('Keyword', filterSelected.keyword)" class="searchInput traning-searchbox relative">
        <input type="text" id="search-box" x-init="initSelectedValues()" x-model="filterSelected.keyword" @change="handleKeywordChange" placeholder="Search Courses" />
        <!-- <div class="resultBox">
        </div> -->
        <div class="icon"><img src="{{ asset('assets/frontend/images/search-icon.svg') }}" width="18px" height="18px" /></div>
      </div>
    </div>
    <div class="hide-search-mob flex flex-col gap-5">
    <div x-data="courseFilter('Schedule', '')" x-init="initSelectedValues()" class="relative w-full">
      <label for="schedule" class="block mb-1 text-xs font-medium text-[#000000CC]">Training Month</label>
      <div class="relative">
        <div class="absolute end-0 inset-y-0 flex items-center pe-3 pointer-events-none">
        </div>
        <input class="w-full" type="month" id="schedule" x-model="filterSelected.schedule" @change="handleCalendarChange" value="{{ \Carbon\Carbon::now()->format('Y-m') }}" min="{{ \Carbon\Carbon::now()->startOfYear()->format('Y-m') }}" max="{{ \Carbon\Carbon::now()->addYear()->endOfYear()->format('Y-m') }}" />
      </div>
    </div>
    <div x-data="courseFilter('Category', {{ json_encode($courseCategories) }})" x-init="initSelectedValues()" x-effect="updateURL('category', filterSelected.category)" class="relative w-full">
      <label class="block mb-1 text-xs font-medium text-[#000000CC]">Course Category</label>
      <div x-bind="dropdown">
        <button x-bind="toggleButton">
          <span x-text="filterSelected.category.length === 0 ? 'Select options' : (filterSelected.category.length === 1 ? options[filterSelected.category[0]] : `${filterSelected.category.length} selected`)"></span>
          <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
        <div x-bind="menu" class="rounded-none">
          <!-- Select All Option -->
          <label x-bind="menuItem">
            <input type="checkbox" @change="toggleAll($event, 'category')" :checked="filterSelected.category.length === Object.keys(options).length" />
            <span>Select All</span>
          </label>
          <!-- Individual Options -->
          <template x-for="(option, id) in options" :key="id">
            <label x-bind="menuItem">
              <input type="checkbox" :value="id" x-model="filterSelected.category" />
              <span x-text="option"></span>
            </label>
          </template>
        </div>
      </div>
    </div>
    <div x-data="courseFilter('Certification', {{ json_encode($coursesCertifications) }})" x-init="initSelectedValues()" x-effect="updateURL('certification', filterSelected.certification)" class="relative w-full">
      <label class="block mb-1 text-xs font-medium text-[#000000CC]">Certification </label>
      <div x-bind="dropdown">
        <button x-bind="toggleButton">
          <span x-text="filterSelected.certification.length === 0 ? 'Select options' : (filterSelected.certification.length === 1 ? options[filterSelected.certification[0]] : `${filterSelected.certification.length} selected`)"></span>
          <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
        <div x-bind="menu" class="rounded-none">
          <!-- Select All Option -->
          <label x-bind="menuItem">
            <input type="checkbox" @change="toggleAll($event, 'certification')" :checked="filterSelected.certification.length === Object.keys(options).length" />
            <span>Select All</span>
          </label>
          <!-- Individual Options -->
          <template x-for="(option, id) in options" :key="id">
            <label x-bind="menuItem">
              <input type="checkbox" :value="id" x-model="filterSelected.certification" />
              <span x-text="option"></span>
            </label>
          </template>
        </div>
      </div>
    </div>
    <div x-data="courseFilter('Language', {{ json_encode(['English' => 'English', 'Arabic' => 'Arabic']) }})" x-init="initSelectedValues()" x-effect="updateURL('language', filterSelected.language)" class="relative w-full">
      <label class="block mb-1 text-xs font-medium text-[#000000CC]">Language</label>
      <div x-bind="dropdown">
        <button x-bind="toggleButton">
          <span x-text="filterSelected.language.length === 0 ? 'Select options' : (filterSelected.language.length === 1 ? filterSelected['language'][0] : `${filterSelected.language.length} selected`)"></span>
          <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
        <div x-bind="menu" class="rounded-none">
          <!-- Select All Option -->
          <label x-bind="menuItem">
            <input type="checkbox" @change="toggleAll($event, 'language')" :checked="filterSelected.language.length === Object.keys(options).length" />
            <span>Select All</span>
          </label>
          <!-- Individual Options -->
          <template x-for="(option, id) in options" :key="id">
            <label x-bind="menuItem">
              <input type="checkbox" :value="id" x-model="filterSelected.language" />
              <span x-text="option"></span>
            </label>
          </template>
        </div>
      </div>
    </div>
    <div x-data="courseFilter('Format', {{ json_encode(['Online' => 'Online', 'Offline' => 'Offline']) }}, 'format')" x-init="initSelectedValues()" x-effect="updateURL('format', filterSelected.format)" class="relative w-full">
      <label class="block mb-1 text-xs font-medium text-[#000000CC]">Format</label>
      <div x-bind="dropdown">
        <button x-bind="toggleButton">
          <span x-text="filterSelected.format.length === 0 ? 'Select options' : (filterSelected.format.length === 1 ? filterSelected.format[0] : `${filterSelected.format.length} selected`)"></span>
          <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
        <div x-bind="menu" class="rounded-none">
          <!-- Select All Option -->
          <label x-bind="menuItem">
            <input type="checkbox" @change="toggleAll($event, 'format')" :checked="filterSelected.format.length === Object.keys(options).length" />
            <span>Select All</span>
          </label>
          <!-- Individual Options -->
          <template x-for="(option, id) in options" :key="id">
            <label x-bind="menuItem">
              <input type="checkbox" :value="id" x-model="filterSelected.format" />
              <span x-text="option"></span>
            </label>
          </template>
        </div>
      </div>
    </div>
    <div x-data="courseFilter('Location', {{ json_encode($courseLocations) }}, 'location')" x-init="initSelectedValues()" x-effect="updateURL('location', filterSelected.location)" class="relative w-full">
      <label class="block mb-1 text-xs font-medium text-[#000000CC]">Location</label>
      <div x-bind="dropdown">
        <button x-bind="toggleButton">
          <span x-text="filterSelected.location.length === 0 ? 'Select options' : (filterSelected.location.length === 1 ? options[filterSelected.location[0]] : `${filterSelected.location.length} selected`)"></span>
          <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
        <div x-bind="menu" class="rounded-none">
          <!-- Select All Option -->
          <label x-bind="menuItem">
            <input type="checkbox" @change="toggleAll($event, 'location')" :checked="filterSelected.location.length === Object.keys(options).length" />
            <span>Select All</span>
          </label>
          <!-- Individual Options -->
          <template x-for="(option, id) in options" :key="id">
            <label x-bind="menuItem">
              <input type="checkbox" :value="id" x-model="filterSelected.location" />
              <span x-text="option"></span>
            </label>
          </template>
        </div>
      </div>
    </div>
       <div class="flex gap-2">
         <a href="javascript:void(0)" class="btn primary-btn text-base course-button filter-hide">
     Search
      <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}">
    </a>
 <a href="javascript:void(0)" class="btn primary-btn text-base course-button rst" x-data="courseFilter('reset', '')" @click="resetFilter">
      Reset
      <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}">
    </a>
    
       </div>       
   
    </div>
  </form>
</div>
