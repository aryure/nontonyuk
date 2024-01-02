<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    {{-- <script src="/docs/5.3/assets/js/color-modes.js"></script> --}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Arya Yudha Reynardo">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Nonton Yuk</title>

    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/"> --}}

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"> --}}

    {{-- <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}

    <!-- Favicons -->
    {{-- <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/styledetailmovie.css') }}">

  </head>

  <body> 

    {{-- <div class="album py-3">
        <div class="container">
          <h5 class="pb-2">Trending</h5>
          <div class="wrapper-TopRatedMovie">
            
            <div class="item movie-card-TopRatedMovie" data-aos="fade-right" data-aos-delay="500">
              <a class="non-text-decoration">
                <img src="{{ 'https://image.tmdb.org/t/p/w500'. $detail['backdrop_path'] }}" class="img-fluid" alt="gambar">
                <div class="py-2 movie-details-TopRatedMovie">
                  <p class="daleman-p-poster-TopRatedMovie col-3">
                    <i class="fa-solid fa-star" style="color: #d7a904;"></i> 
                  </p>
                  <div class="row">
                    <p class="col-12" style="margin-top:15%; margin-left:5%; font-weight: bold;">
                   original_title
                    </p>
                    <p class="col-12 releaseYear" style="margin-left:5%">
                      release_date
                    </p>
                  </div>
                </div>              
              </a>
            </div>
            
          </div>
        </div>
    </div> --}}
    
    {{-- <div class="container-fluid">
        <img src="{{'https://image.tmdb.org/t/p/w500'. $detail['backdrop_path']}}">
    </div> --}}

    <main>
        <div class="position-relative overflow-hidden" 
             style="background: url('https://image.tmdb.org/t/p/w500{{ $detail['backdrop_path'] }}') center center; background-size: cover;">
            
            <!-- Overlay hitam sebelah gambar -->
            <div class="overlay"></div>
            
            <div class="font-zindex3 col-11">

              <div class="container-fluid my-5">
                <nav class="navbar navbar-expand-lg">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="/" style="color: white">Nonton Yuk</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon" style="background-color: white; border-radius:5px"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll d-flex mx-auto" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="/" style="color: white">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                            Tv Shows
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/tv/popular">Populer</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/tv/ontheair">On The Air</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/tv/toprated">Top Rated</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/tv/airingtoday">Airing Today</a></li>
                          </ul>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                            Movies
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/movies/popular">Populer</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/movies/nowplaying">Now Playing</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/movies/toprated">Top Rated</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/movies/upcoming">Upcoming</a></li>
                          </ul>
                        </li>
                      </ul>
                      {{-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form> --}}
                    </div>
                  </div>
                </nav>
              </div>

              <h1 class="display-4 fw-normal text-uppercase">{{ $detail['original_title']}}</h1>
              <p class="fw-normal">
                  <i class="fa-solid fa-star" style="color: #d7a904;"></i> {{$detail['vote_average']}}
                </p>
              <p class="lead fw-normal col-lg-4">{{ $detail['overview']}}</p>
              @if(isset($detail['genres']))
                  <p><span class="bold" style="color: rgb(217, 6, 6)">Genres :</span>
                      @foreach($detail['genres'] as $genre)
                          {{ $genre['name'] }}
                          @if(!$loop->last){{-- Tambahkan koma di antara genre kecuali untuk yang terakhir --}}
                              ,
                          @endif
                      @endforeach
                  </p>
              @endif
              {{-- <p class="bold ">Staring : <span>Machiael</span></p> --}}
              <div class="mx-auto mt-4 my-5">
                @if(isset($trailer['results']) && !empty($trailer['results']))
                    <!-- Assuming you want to play the first trailer, you can get its key -->
                    @php
                        $trailerKey = $trailer['results'][0]['key'];
                        $trailerUrl = "https://www.youtube.com/watch?v={$trailerKey}";
                    @endphp
                    <a href="{{ $trailerUrl }}" class="btn btn-lg warnabutton" target="_blank">
                        <i class="fa-solid fa-play"></i> Play Trailer
                    </a>
                @else
                    <p>No trailer available</p>
                @endif
              </div>
            </div>
           
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        <!-- Similiar Movie Start -->
        @if ($similiarmovie)
          <div class="album py-3" style="background-color: black">
            <div class="container">
              <h4 style="color: white" class="pb-2">Similiar Movie For You</h4>
              <div class="wrapper-TopRatedMovie">
                @foreach ($similiarmovie as $movies)
                <div class="item movie-card-TopRatedMovie">
                  <a href="{{ route('movie.show', ['id' => $movies['id']]) }}" class="non-text-decoration">
                      <img src="{{ 'https://image.tmdb.org/t/p/w500'. $movies['backdrop_path'] }}" class="img-fluid" alt="gambar">
                      <div class="py-2 movie-details-TopRatedMovie">
                      <p class="daleman-p-poster-TopRatedMovie col-3">
                          <i class="fa-solid fa-star" style="color: #d7a904;"></i> {{$movies['vote_average']}}
                      </p>
                      <div class="row">
                          <p class="col-12" style="margin-top:15%; margin-left:5%; font-weight: bold;">
                          {{ $movies['original_title']}} 
                          </p>
                          <p class="col-12 releaseYear" style="margin-left:5%">
                          {{date('Y', strtotime($movies['release_date']))}} 
                          </p>
                      </div>
                      </div>              
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        @else
        <p></p>
        @endif
        <!-- Similiar Movie End -->

        <!-- Upcoming Movie Start -->
        <div class="album py-3" style="background-color: black">
            <div class="container">
            <h4 style="color: white" class="pb-2">Upcoming Movie For You</h4>
            <div class="wrapper-TopRatedMovie">
                @foreach ($upcomingmovie as $movies)
                <div class="item movie-card-TopRatedMovie">
                <a href="{{ route('movie.show', ['id' => $movies['id']]) }}" class="non-text-decoration">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500'. $movies['backdrop_path'] }}" class="img-fluid" alt="gambar">
                    <div class="py-2 movie-details-TopRatedMovie">
                    <p class="daleman-p-poster-TopRatedMovie col-3">
                        <i class="fa-solid fa-star" style="color: #d7a904;"></i> {{$movies['vote_average']}}
                    </p>
                    <div class="row">
                        <p class="col-12" style="margin-top:15%; margin-left:5%; font-weight: bold;">
                        {{ $movies['original_title']}} 
                        </p>
                        <p class="col-12 releaseYear" style="margin-left:5%">
                        {{$movies['release_date']}} 
                        </p>
                    </div>
                    </div>              
                </a>
                </div>
                @endforeach
            </div>
            </div>
        </div>
        <!-- UpComing Movie End -->
      
    </main>
    
    <!-- Footer Start -->
    @include('Footer')
    <!-- Footer End -->
  
  </body>

  {{-- <script src="{{ asset('/script.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script> --}}


  <script src="https://kit.fontawesome.com/1c164f6dc6.js" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  

  {{-- START AOS --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@next/dist/aos.css" />
  <script src="https://cdn.jsdelivr.net/npm/aos@next/dist/aos.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init();
    });
  </script>
  {{-- END AOS --}}

  {{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var releaseDate = '{{$movieTopRated['release_date']}}'; // Ganti dengan nilai aktual dari server

        // Memastikan releaseDate bukan null atau undefined
        if (releaseDate) {
            var year = new Date(releaseDate).getFullYear();
            document.getElementById('releaseYear').innerText = year;
        } else {
            // Handle jika releaseDate tidak valid
            document.getElementById('releaseYear').innerText = 'Invalid Date';
        }
    });
  </script> --}}

  

</html>
