@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800"> <!-- first section -->
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                @if($movie['poster_path'])
                  <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }} " alt="parasite" class="w-64 lg:w-96 rounded">
                @else
                  <img src="/img/NoImages.png" alt="poster" class="w-50 rounded">
                @endif
            </div>
            <div class="md:ml-24"><!-- info section  -->
                <h2 class="text-4xl mt-4 md:mt-0 font-semibold">{{ $movie['title'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                      <i class="text-yellow-400 fas fa-star"></i>
                    <span class="ml-1">{{ $movie['vote_average'] }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M/d/y') }}</span>
                    <span class="mx-2">|</span>
                    <span>
                      @foreach ($movie['genres'] as $genre)
                        {{ $genre['name'] }}
                        @if(!$loop->last),
                        @endif
                      @endforeach
                    </span>
                </div>

                <p class="text-gray-300 mt-8">
                  {{ $movie['overview'] }}
                </p>

                <div class="mt-12"><!-- featured Crew -->
                    <h4 class="text-white font-semibold">Featured Crew</h4>
                    <div class="flex mt-4">
                      @foreach ($movie['credits']['crew'] as $crew)
                        @if($loop->index < 3)
                        <div class="mr-8">
                          {{ $crew['name'] }}
                          <div class="text-grey-300">
                            {{ $crew['job'] }}
                          </div>
                        </div>
                        @endif
                      @endforeach
                    </div>
                </div><!-- end featured Crew -->

                    @if(count($movie['videos']['results']))
                      <div class="mt-12">
                          <a href=" https://youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}" class="flex inline-flex items-center px-5 py-4 rounded border-solid border-4 border-yellow-500 hover:opacity-75 transition ease-in-out durtion-150">
                            <i class="text-yellow-500 fas fa-play"> Play Trailer</i>
                          </a>
                      </div>
                    @endif<!-- end play trailer -->
             </div>

             </div><!-- end info section -->
          </div> <!-- end first section -->

        <div class="movie-cast border-b border-gray-800"> <!-- cast -->
            <div class="container mx-auto px-4 py-16">
                <h2 class="text-4xl font-semibold">Cast</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                  @foreach ($movie['credits']['cast'] as $cast)
                    @if($loop->index < 5)
                      <div class="mt-8">
                        <a href="https://www.imdb.com/list/ls000699213/">
                          @if($cast['profile_path'])
                            <img src="{{ 'https://image.tmdb.org/t/p/w300/'.$cast['profile_path'] }} " alt="parasite" class="hover:opacity-75 transition ease-in-out durtion-150 w-64 lg:w-96 rounded">
                          @else
                            <img src="/img/NoImages.png" alt="poster" class="w-50 rounded">
                          @endif
                        </a>
                        <div class="mt-2 flex flex-col items-center">
                            <span class="border-b border-gray-900">Real Name:</span>
                            <a href="https://www.imdb.com/list/ls000699213/" class="text-lg hover:text-gray:300">{{ $cast['name'] }}</a>

                            <span class="border-b border-gray-900 mt-2">Character:</span>
                            <a href="https://www.imdb.com/list/ls000699213/" class="text-lg hover:text-gray:300">{{ $cast['character'] }}</a>
                        </div>
                      </div>
                    @endif
                  @endforeach
                </div>
            </div>
        </div> <!-- end cast -->

        <div class="movie-images">  <!--movie-images -->
            <div class="container mx-auto px-4 py-16">
                <h2 class="text-4xl font-semibold">Images about movies</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                  @forelse ($movie['images']['backdrops'] as $image)
                    @if($loop->index < 9)
                      <div class="mt-8">
                        <a href="#">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500/'. $image['file_path'] }}" class="hover:opacity-75 transition ease-in-out durtion-150 rounded">
                        </a>
                      </div>
                    @endif
                  @empty
                    <img src="/img/NoImages.png" alt="poster" class="w-50 rounded">
                  @endforelse

                </div>
            </div>
        </div> <!-- end movie-images -->
@endsection
