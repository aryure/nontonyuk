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
    <link rel="stylesheet" href="{{ asset('/searchbar.css') }}">

  </head>

  <body>  
    @include('Navbar')

    <div class="album py-3" style="background-color: rgb(16, 16, 16)">
      <div class="container">
        <h5 class="pb-2" style="color: white">Airing Today Tv Show For You</h5>
        <div class="row">
          @foreach ($TvAiringToday as $TvAiringToday)
          <div class="item movie-card-detal col-md-2 col-6" style="margin-top: 15px;">
            <a href="{{ route('tv.show', ['id' => $TvAiringToday['id'], 'seasonNumber' => '1']) }}" class="non-text-decoration">
              <img src="{{ 'https://image.tmdb.org/t/p/w500'. $TvAiringToday['poster_path'] }}" class="img-fluid" alt="gambar">
              <div class="py-2 movie-details-detal">
                <p class="daleman-p-poster-detal col-3">
                  <i class="fa-solid fa-star" style="color: #d7a904;"></i> {{$TvAiringToday['vote_average']}}
                </p>
                <p style="margin-left:37%; margin-top:40%;">
                  <svg xmlns="http://www.w3.org/2000/svg" height="52" width="52" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#e8eaed" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z"/></svg>
                </p>
                <p class="col-12 text-center" style="margin-top:30%;">{{ $TvAiringToday['name'] }} ({{($TvAiringToday['first_air_date'] )}})</p>
              </div>              
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- TV List End -->

    

    

    

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

</html>
