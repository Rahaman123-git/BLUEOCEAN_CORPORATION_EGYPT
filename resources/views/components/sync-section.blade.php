<div class="bg-white shadow rounded p-4 mb-6">
  <div class="flex items-center justify-between mb-3">
    <h2 class="text-xl font-semibold">{{ $title ?? '' }}</h2>
    @if(!empty($meta))
      <div class="text-gray-500">{{ $meta }}</div>
    @endif
  </div>
  {{ $slot }}
</div>
