@if ($paginator->hasPages())
  <nav aria-label="Page navigation" class="ml-auto w-max">
    <ul class="flex flex-row gap-2 text-sm">
      <!-- Previous Button -->
      <li>
        <a href="{{ $paginator->previousPageUrl() }}" class="disabled flex items-center justify-center h-full leading-tight font-medium text-black mr-4 gap-2 {{ $paginator->onFirstPage() ? 'cursor-not-allowed opacity-50' : '' }}">
          <img src="{{ asset('assets/frontend/images/icons/arrow-left-black.svg') }}" width="16px" height="16px" />
          Previous
        </a>
      </li>

      <!-- Loop through page numbers -->
      @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url) @if ($page == $paginator->currentPage())
      <!-- Active Page -->
      <li>
        <a href="{{ $url }}" aria-current="page" class="flex items-center justify-center w-6 h-6 lg:h-8 lg:w-8 leading-tight font-medium rounded-sm bg-primary text-white">
          {{ $page }}
        </a>
      </li>
      @else
      <!-- Regular Page -->
      <li>
        <a href="{{ $url }}" class="flex items-center justify-center w-6 h-6 lg:h-8 lg:w-8 leading-tight font-medium text-black rounded-sm">
          {{ $page }}
        </a>
      </li>
      @endif @endforeach

      <!-- Next Button -->
      <li>
        <a href="{{ $paginator->nextPageUrl() }}" class="disabled flex items-center justify-center h-full leading-tight font-medium text-black ml-4 gap-2 {{ $paginator->hasMorePages() ? '' : 'cursor-not-allowed opacity-50' }}">
          Next
          <img src="{{ asset('assets/frontend/images/icons/arrow-right-black.svg') }}" width="16px" height="16px" />
        </a>
      </li>
    </ul>
  </nav>
@endif
