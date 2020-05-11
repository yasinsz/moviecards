<div class="container-dropdown">

    <div class="row-dropdown">

        <div class="relative d-flex justify-content-center">
            <input wire:model.debounce.500ms="search" type="text" class="bg-danger rounded-full" width="64px" height="30px" placeholder="Search...">


            @if (strlen($search) >= 2)
            <div class="dropdown" width="64px" height="30px">

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
                            <span>{{ $result['title'] }}</span>
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