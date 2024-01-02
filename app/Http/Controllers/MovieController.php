<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function indexpopular()
    {
        $apiURL = 'https://api.themoviedb.org/3/movie/popular';

        $apiKey = 'a757334af40d772fdbcf3e74de6294c9';
        $header = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhNzU3MzM0YWY0MGQ3NzJmZGJjZjNlNzRkZTYyOTRjOSIsInN1YiI6IjY1NjcwYzEwNmMwYjM2MDEwMWZiYzliMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.znrLrHondE6z2grZzQdyjUTpZmR8T7_cryNloId7AJc';

        $response = Http::get($apiURL, [
            'api_key' => $apiKey,
            'header'  => $header,
        ]);

        if ($response->successful() ){
            $data1 = $response->json();
            
            // dd($response->json());
            return view('movie/MoviePopular', [
                'MoviePopular' => $data1['results'],
            ]);
        } else {
            
            return view('error', ['message' => 'Failed to fetch movie data']);
        }
    }

    public function indexnowplaying()
    {
        $apiURL = 'https://api.themoviedb.org/3/tv/now_playing';

        $apiKey = 'a757334af40d772fdbcf3e74de6294c9';
        $header = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhNzU3MzM0YWY0MGQ3NzJmZGJjZjNlNzRkZTYyOTRjOSIsInN1YiI6IjY1NjcwYzEwNmMwYjM2MDEwMWZiYzliMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.znrLrHondE6z2grZzQdyjUTpZmR8T7_cryNloId7AJc';

        $response = Http::get($apiURL, [
            'api_key' => $apiKey,
            'header'  => $header,
        ]);

        if ($response->successful() ){
            $data1 = $response->json();
            
            // dd($response->json());
            return view('movie/MovieNowPlaying', [
                'MovieNowPlaying' => $data1['results'],
            ]);
        } else {
            return view('error/502', ['message' => 'Failed to fetch movie data']);
        }
    }

    public function indextoprated()
    {
        $apiURL = 'https://api.themoviedb.org/3/movie/top_rated';

        $apiKey = 'a757334af40d772fdbcf3e74de6294c9';
        $header = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhNzU3MzM0YWY0MGQ3NzJmZGJjZjNlNzRkZTYyOTRjOSIsInN1YiI6IjY1NjcwYzEwNmMwYjM2MDEwMWZiYzliMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.znrLrHondE6z2grZzQdyjUTpZmR8T7_cryNloId7AJc';

        $response = Http::get($apiURL, [
            'api_key' => $apiKey,
            'header'  => $header,
        ]);

        if ($response->successful() ){
            $data1 = $response->json();
            
            // dd($response->json());
            return view('movie/MovieTopRated', [
                'MovieTopRated' => $data1['results'],
            ]);
        } else {
            return view('error', ['message' => 'Failed to fetch movie data']);
        }
    }

    public function indexupcoming()
    {
        $apiURL = 'https://api.themoviedb.org/3/movie/upcoming';

        $apiKey = 'a757334af40d772fdbcf3e74de6294c9';
        $header = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhNzU3MzM0YWY0MGQ3NzJmZGJjZjNlNzRkZTYyOTRjOSIsInN1YiI6IjY1NjcwYzEwNmMwYjM2MDEwMWZiYzliMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.znrLrHondE6z2grZzQdyjUTpZmR8T7_cryNloId7AJc';

        $response = Http::get($apiURL, [
            'api_key' => $apiKey,
            'header'  => $header,
        ]);

        if ($response->successful() ){
            $data1 = $response->json();
            
            // dd($response->json());
            return view('movie/MovieUpcoming', [
                'MovieUpcoming' => $data1['results'],
            ]);
        } else {
            return view('error/502', ['message' => 'Failed to fetch movie data']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
