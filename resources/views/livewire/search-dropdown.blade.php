<div class="container-dropdown">

    <div class="row-dropdown">

        <div class="relative d-flex flex-wrap justify-content-center">
            <input wire:model.debounce.500ms="search" type="text" class="search-button rounded-full mt-5 mb-4" placeholder="Search...">


            @if (strlen($search) >= 2)
            <div class="dropdown">

                @if ($searchResults->count() > 0)
                <ul class=" drop-list">
                    @foreach ($searchResults as $result)
                    <li class="drop-items">
                        <a href=" {{ route('show', $result['id']) }}">

                            @if ($result['poster_path'])
                            <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" width="40px">
                            @else
                            <img src="https://via.placeholder.com/50x75" alt="poster" width="40px">
                            @endif
                            <span class="text-white ml-3">{{ $result['title'] }}</span>
                        </a>
                    </li>
                    @endforeach

                </ul>
                @else
                <div> No results for "{{ $search }}"</div>
                @endif
            </div>
            @endif
        </div>
    </div>

</div>