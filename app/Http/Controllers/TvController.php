<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    public function indexpopular()
    {
        $apiURL = 'https://api.themoviedb.org/3/tv/popular';

        $apiKey = 'a757334af40d772fdbcf3e74de6294c9';
        $header = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhNzU3MzM0YWY0MGQ3NzJmZGJjZjNlNzRkZTYyOTRjOSIsInN1YiI6IjY1NjcwYzEwNmMwYjM2MDEwMWZiYzliMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.znrLrHondE6z2grZzQdyjUTpZmR8T7_cryNloId7AJc';

        $response = Http::get($apiURL, [
            'api_key' => $apiKey,
            'header'  => $header,
        ]);

        if ($response->successful() ){
            $data1 = $response->json();
            
            // dd($response->json());
            return view('tv/TvPopular', [
                'TvPopular' => $data1['results'],
            ]);
        } else {
            
            return view('error', ['message' => 'Failed to fetch movie data']);
        }
    }

    public function indexontv()
    {
        $apiURL = 'https://api.themoviedb.org/3/tv/on_the_air';

        $apiKey = 'a757334af40d772fdbcf3e74de6294c9';
        $header = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhNzU3MzM0YWY0MGQ3NzJmZGJjZjNlNzRkZTYyOTRjOSIsInN1YiI6IjY1NjcwYzEwNmMwYjM2MDEwMWZiYzliMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.znrLrHondE6z2grZzQdyjUTpZmR8T7_cryNloId7AJc';

        $response = Http::get($apiURL, [
            'api_key' => $apiKey,
            'header'  => $header,
        ]);

        if ($response->successful() ){
            $data1 = $response->json();
            
            // dd($response->json());
            return view('tv/TvOnTheAir', [
                'TvOnTheAir' => $data1['results'],
            ]);
        } else {
            return view('error', ['message' => 'Failed to fetch movie data']);
        }
    }

    public function indextoprated()
    {
        $apiURL = 'https://api.themoviedb.org/3/tv/top_rated';

        $apiKey = 'a757334af40d772fdbcf3e74de6294c9';
        $header = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhNzU3MzM0YWY0MGQ3NzJmZGJjZjNlNzRkZTYyOTRjOSIsInN1YiI6IjY1NjcwYzEwNmMwYjM2MDEwMWZiYzliMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.znrLrHondE6z2grZzQdyjUTpZmR8T7_cryNloId7AJc';

        $response = Http::get($apiURL, [
            'api_key' => $apiKey,
            'header'  => $header,
        ]);

        if ($response->successful() ){
            $data1 = $response->json();
            
            // dd($response->json());
            return view('tv/TvTopRated', [
                'TvTopRated' => $data1['results'],
            ]);
        } else {
            return view('error', ['message' => 'Failed to fetch movie data']);
        }
    }

    public function indexairingtoday()
    {
        $apiURL = 'https://api.themoviedb.org/3/tv/airing_today';

        $apiKey = 'a757334af40d772fdbcf3e74de6294c9';
        $header = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhNzU3MzM0YWY0MGQ3NzJmZGJjZjNlNzRkZTYyOTRjOSIsInN1YiI6IjY1NjcwYzEwNmMwYjM2MDEwMWZiYzliMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.znrLrHondE6z2grZzQdyjUTpZmR8T7_cryNloId7AJc';

        $response = Http::get($apiURL, [
            'api_key' => $apiKey,
            'header'  => $header,
        ]);

        if ($response->successful() ){
            $data1 = $response->json();
            
            // dd($response->json());
            return view('tv/TvAiringToday', [
                'TvAiringToday' => $data1['results'],
            ]);
        } else {
            return view('error', ['message' => 'Failed to fetch movie data']);
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
