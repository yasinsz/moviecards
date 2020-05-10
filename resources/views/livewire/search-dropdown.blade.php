<div class="relative d-flex justify-content-center">
    <input wire:model.debounce.500ms="search" type="text" class="bg-danger rounded-full" width="64px" height="30px" placeholder="Search...">
</div>

@if (strlen($search) >= 2)
<div class="z-50 absolute bg-gray-800 text-sm rounded w-64 mt-4">

    @if ($searchResults->count() > 0)
    <ul>
        @foreach ($searchResults as $result)
        <li class="border-b border-gray-700">
            <a href="{{ route('show', $result['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">

                @if ($result['poster_path'])
                <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" class="w-8">
                @else
                <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                @endif
                <span class="ml-4">{{ $result['title'] }}</span>
            </a>
        </li>
        @endforeach

    </ul>
    @else
    <div class="px-3 py-3">No results for "{{ $search }}"</div>
    @endif
</div>
@endif