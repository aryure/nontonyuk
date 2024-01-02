<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //
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
        $apiURL = "https://api.themoviedb.org/3/movie/{$id}";
        $apitrailer = "https://api.themoviedb.org/3/movie/{$id}/videos";
        $apiURL2 = 'https://api.themoviedb.org/3/movie/upcoming';
        $apiURL3 = "https://api.themoviedb.org/3/movie/{$id}/similar";
        
        $apiKey = 'a757334af40d772fdbcf3e74de6294c9';
        $header = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhNzU3MzM0YWY0MGQ3NzJmZGJjZjNlNzRkZTYyOTRjOSIsInN1YiI6IjY1NjcwYzEwNmMwYjM2MDEwMWZiYzliMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.znrLrHondE6z2grZzQdyjUTpZmR8T7_cryNloId7AJc';

        $response = Http::get($apiURL, [
            'api_key' => $apiKey,
            
        ]);

        $response2 = Http::get($apiURL2, [
            'api_key' => $apiKey,
            
        ]);

        $responsetrailer = Http::get($apitrailer, [
            'api_key' => $apiKey,
            
        ]);

        $response3 = Http::get($apiURL3, [
            'api_key' => $apiKey,
            
        ]);

        if ($response->successful() && $response2->successful() && $responsetrailer->successful() && $response3->successful() ){
            $data1 = $response->json();
            $data2 = $response2->json();
            $datatrailer = $responsetrailer->json();
            $data3 = $response3->json();
            
            // dd($data1, $data2, $datatrailer, $data3);
            return view('movie/DetailMovie', [
                'detail' => $data1,
                'upcomingmovie' => $data2['results'],
                'trailer' => $datatrailer,
                'similiarmovie' => $data3['results'],
            ]);
        } else {
            return view('Error502', ['message' => 'Failed to fetch movie data']);
        }
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
