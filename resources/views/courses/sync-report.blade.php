@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Course Schedule – Sync Report (Preview)</h1>

    {{-- Summary --}}
    <div class="bg-white shadow rounded p-4 mb-6">
        <h2 class="text-xl font-semibold mb-2">Summary</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div><div class="text-gray-500">Token HTTP</div><div class="text-lg">{{ $report['token']['http'] ?? '-' }}</div></div>
            <div><div class="text-gray-500">Has Token</div><div class="text-lg">{{ $report['token']['has_token'] ? 'Yes' : 'No' }}</div></div>
            <div><div class="text-gray-500">Courses</div><div class="text-lg">{{ $report['summary']['courses'] }}</div></div>
            <div><div class="text-gray-500">Schedules</div><div class="text-lg">{{ $report['summary']['schedules'] }}</div></div>
        </div>
        @if(!empty($report['token']['errors']))
            <div class="mt-3 text-red-600">
                <strong>Token Errors:</strong>
                <ul class="list-disc ml-5">
                    @foreach($report['token']['errors'] as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mt-4">
            <form method="POST" action="{{ route('courses.sync.commit') }}">
                @csrf
                <button class="bg-blue-600 text-white px-4 py-2 rounded" type="submit">
                    Write to DB (Run Full Sync)
                </button>
            </form>
        </div>
    </div>

    {{-- Sections --}}
    <x-sync-section
        title="Pricing (Products)"
        meta="Pages: {{ $report['pricing']['pages'] }} • Found: {{ $report['pricing']['found'] }}"
    >
        @if(!empty($report['pricing']['samples']))
            <div class="overflow-auto">
                <table class="min-w-full text-sm">
                    <thead>
                        <tr class="text-left border-b">
                            <th class="py-2 pr-4">Product ID</th>
                            <th class="py-2 pr-4">Product Name</th>
                            <th class="py-2 pr-4">Course Type</th>
                            <th class="py-2 pr-4">Currency</th>
                            <th class="py-2 pr-4">Mode</th>
                            <th class="py-2 pr-4">Formula_1</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($report['pricing']['samples'] as $row)
                            <tr class="border-b">
                                <td class="py-2 pr-4">{{ $row['Product_Names.id'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['Product_Names.Product_Name'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['Product_Names.Course_Type'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['Currency'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['Mode_Of_Delivery'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['Formula_1'] ?? '' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-gray-600">No samples captured.</p>
        @endif
    </x-sync-section>

    <x-sync-section
        title="Retail Batches (Batch_Module)"
        meta="Pages: {{ $report['retail']['pages'] }} • Found: {{ $report['retail']['found'] }}"
    >
        @if(!empty($report['retail']['samples']))
            <div class="overflow-auto">
                <table class="min-w-full text-sm">
                    <thead>
                        <tr class="text-left border-b">
                            <th class="py-2 pr-4">Course ID</th>
                            <th class="py-2 pr-4">Name</th>
                            <th class="py-2 pr-4">Batch Type</th>
                            <th class="py-2 pr-4">Start</th>
                            <th class="py-2 pr-4">End</th>
                            <th class="py-2 pr-4">City</th>
                            <th class="py-2 pr-4">Country</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($report['retail']['samples'] as $row)
                            <tr class="border-b">
                                <td class="py-2 pr-4">{{ $row['Course_Name']['id'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['Name'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['Batch_Type'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['Batch_Start_Date'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['Batch_End_Date'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['City'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['Country'] ?? '' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-gray-600">No samples captured.</p>
        @endif
    </x-sync-section>

    <x-sync-section
        title="Corporate Batches (Batch_Corporate)"
        meta="Pages: {{ $report['corp']['pages'] }} • Found: {{ $report['corp']['found'] }}"
    >
        @if(!empty($report['corp']['samples']))
            <div class="overflow-auto">
                <table class="min-w-full text-sm">
                    <thead>
                        <tr class="text-left border-b">
                            <th class="py-2 pr-4">Course ID</th>
                            <th class="py-2 pr-4">Name</th>
                            <th class="py-2 pr-4">Batch Type</th>
                            <th class="py-2 pr-4">Start</th>
                            <th class="py-2 pr-4">End</th>
                            <th class="py-2 pr-4">City</th>
                            <th class="py-2 pr-4">Country</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($report['corp']['samples'] as $row)
                            <tr class="border-b">
                                <td class="py-2 pr-4">{{ $row['Course_Name']['id'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['Name'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['Batch_Type'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['Batch_Start_Date'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['Batch_End_Date'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['City'] ?? '' }}</td>
                                <td class="py-2 pr-4">{{ $row['Country'] ?? '' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-gray-600">No samples captured.</p>
        @endif
    </x-sync-section>

    {{-- Built Course Calendar (what would be inserted) --}}
    <x-sync-section
        title="Built Course Calendar (Preview insert set)"
        meta="Courses: {{ $report['summary']['courses'] }} • Schedules: {{ $report['summary']['schedules'] }}"
    >
        @if(!empty($courseCalendar))
            <div class="space-y-4">
                @foreach(array_slice($courseCalendar, 0, 20) as $cid => $c)
                    <details class="bg-gray-50 rounded p-3">
                        <summary class="cursor-pointer font-semibold">
                            {{ $cid }} — {{ $c['title'] ?? '' }} ({{ $c['courseType'] ?? '' }}) — schedules: {{ count($c['schedule'] ?? []) }}
                        </summary>
                        <div class="mt-2">
                            <pre class="text-xs overflow-auto">{{ json_encode($c, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</pre>
                        </div>
                    </details>
                @endforeach
                @if(count($courseCalendar) > 20)
                    <p class="text-sm text-gray-500">Showing first 20 courses…</p>
                @endif
            </div>
        @else
            <p class="text-gray-600">Nothing built.</p>
        @endif
    </x-sync-section>

    {{-- Breadcrumbs --}}
    <x-sync-section title="Breadcrumbs" meta="">
        @if(!empty($report['breadcrumbs']))
            <ul class="list-disc ml-6 text-sm">
                @foreach($report['breadcrumbs'] as $b)
                    <li>{{ $b }}</li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-600">No breadcrumbs.</p>
        @endif
    </x-sync-section>
</div>
@endsection

{{-- Simple Blade component (inline) --}}
@push('components')
@once
    @php
        // lightweight component without separate file
    @endphp
@endonce
@endpush

@php
// Quick inline component for sections
@endphp
@once
    @push('components')
        {{-- no-op --}}
    @endpush
@endonce

@php
// Emulate a component with a Blade include:
@endphp
@macro('x-sync-section')
@verbatim
<div class="bg-white shadow rounded p-4 mb-6">
    <div class="flex items-center justify-between mb-3">
        <h2 class="text-xl font-semibold">{{ $title }}</h2>
        @if(!empty($meta)) <div class="text-gray-500">{{ $meta }}</div> @endif
    </div>
    {{ $slot }}
</div>
@endverbatim
@endmacro
