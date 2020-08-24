<div class="mt-8">
    <a href="{{ route('movies.show', $movie['id']) }}">
        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150 rounded">
    </a>
    <div class="mt-3">
        <a href="{{ route('movies.show' ,$movie['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{ $movie['title'] }}</a>
    </div>
    <div class="flex items-center text-gray-400">
        <i class="text-yellow-400 fas fa-star"></i>
        <span class="ml-1">{{ $movie['vote_average'] . '%'}}</span>
          <span class="mx-2">|</span>
          <span>{{( \Carbon\Carbon::parse($movie['release_date']))->format('M/d/y') }}</span>
    </div>
    <div class="text-gray-400 text-sm">
      @foreach ($movie['genre_ids'] as $genre)
        {{ $genres->get($genre)}}
        @if(!$loop->last),
        @endif
      @endforeach
    </div>
</div>
