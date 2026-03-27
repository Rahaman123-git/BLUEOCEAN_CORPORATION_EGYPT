@if ($paginator->hasPages())
  <nav aria-label="Page navigation" class="ml-auto w-max">
    <ul class="flex flex-row gap-2 text-sm">
      <!-- Previous Button -->
      <li>
        <a href="{{ $paginator->previousPageUrl() }}"
           class="disabled flex items-center justify-center h-full leading-tight font-medium text-black mr-4 gap-2 {{ $paginator->onFirstPage() ? 'cursor-not-allowed opacity-50 pointer-events-none' : '' }}">
          <img src="{{ asset('assets/frontend/images/icons/arrow-left-black.svg') }}" width="16px" height="16px" />
          Previous
        </a>
      </li>

      @php
        $totalPages = $paginator->lastPage();
        $currentPage = $paginator->currentPage();

        $start = max($currentPage - 2, 1);
        $end = min($currentPage + 2, $totalPages);

        $pages = [];

        // Always show first 2
        for ($i = 1; $i <= min(2, $totalPages); $i++) {
            $pages[] = $i;
        }

        if ($start > 3) {
            $pages[] = '...';
        }

        for ($i = $start; $i <= $end; $i++) {
            if (!in_array($i, $pages)) {
                $pages[] = $i;
            }
        }

        if ($end < $totalPages - 2) {
            $pages[] = '...';
        }

        // Always show last 2
        for ($i = max($totalPages - 1, 1); $i <= $totalPages; $i++) {
            if (!in_array($i, $pages)) {
                $pages[] = $i;
            }
        }
      @endphp

      @foreach ($pages as $page)
        @if ($page === '...')
          <li>
            <span class="flex items-center justify-center w-6 h-6 lg:h-8 lg:w-8 leading-tight font-medium text-gray-400">...</span>
          </li>
        @elseif ($page == $paginator->currentPage())
          <!-- Active Page -->
          <li>
            <a href="{{ $paginator->url($page) }}"
               aria-current="page"
               class="flex items-center justify-center w-6 h-6 lg:h-8 lg:w-8 leading-tight font-medium rounded-sm bg-primary text-white">
              {{ $page }}
            </a>
          </li>
        @else
          <!-- Normal Page -->
          <li>
            <a href="{{ $paginator->url($page) }}"
               class="flex items-center justify-center w-6 h-6 lg:h-8 lg:w-8 leading-tight font-medium text-black rounded-sm">
              {{ $page }}
            </a>
          </li>
        @endif
      @endforeach

      <!-- Next Button -->
      <li>
        <a href="{{ $paginator->nextPageUrl() }}"
           class="disabled flex items-center justify-center h-full leading-tight font-medium text-black ml-4 gap-2 {{ $paginator->hasMorePages() ? '' : 'cursor-not-allowed opacity-50 pointer-events-none' }}">
          Next
          <img src="{{ asset('assets/frontend/images/icons/arrow-right-black.svg') }}" width="16px" height="16px" />
        </a>
      </li>
    </ul>
  </nav>
@endif