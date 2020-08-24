<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search...">
    <div class="absolute top-0 ml-1">
        <i class="text-gray-500 fas fa-search"></i>
    </div>

    @if(strlen($search) > 2)
      <div class="absolute bg-indigo-700 text-sm rounded w-64 mt-2">
         @if(count($searchResults) > 0)
             <ul>
               @foreach ($searchResults as $result)
                 @if($loop->index < 6)
                  <li class="border-b border-indigo-800">
                      <a href="{{ route('movies.show', $result['id']) }}" class="block hover:bg-indigo-500 px-3 py-3 flex items center">
                        @if($result['poster_path'])
                          <img src="https://image.tmdb.org/t/p/w92/{{$result['poster_path']}}" alt="poster" class="w-10 rounded">
                        @else
                          <img src="/img/NoImages.png" alt="poster" class="w-10 rounded">
                        @endif
                        <span class="ml-4">{{ $result['title'] }}</span>
                      </a>
                  </li>
                @endif
              @endforeach
              </ul>
          @else
            <div class="px-3 py-3">
              <p>No results for "{{ $search }}" keep looking...</p>
            </div>
          @endif
      </div>
    @endif
</div>
