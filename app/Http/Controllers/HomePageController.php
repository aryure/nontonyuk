<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apiURL = 'https://api.themoviedb.org/3/movie/top_rated'; 
        $apiURL2 = 'https://api.themoviedb.org/3/discover/movie';
        $apiURL3 = 'https://api.themoviedb.org/3/discover/tv';
        $apiURL4 = 'https://api.themoviedb.org/3/tv/top_rated';
        
        $apiKey = 'a757334af40d772fdbcf3e74de6294c9';
        $header = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhNzU3MzM0YWY0MGQ3NzJmZGJjZjNlNzRkZTYyOTRjOSIsInN1YiI6IjY1NjcwYzEwNmMwYjM2MDEwMWZiYzliMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.znrLrHondE6z2grZzQdyjUTpZmR8T7_cryNloId7AJc';

        $response = Http::get($apiURL, [
            'api_key' => $apiKey,
            'header'  => $header,
        ]);

        $response2 = Http::get($apiURL2, [
            'api_key' => $apiKey,
            'header'  => $header,
        ]);

        $response3 = Http::get($apiURL3, [
            'api_key' => $apiKey,
            'header'  => $header,
        ]);

        // $response4 = Http::get($apiURL4, [
        //     'api_key' => $apiKey,
        //     'header'  => $header,
        // ]);

        if ($response->successful() && $response2->successful() && $response3->successful() ){
            $data1 = $response->json();
            $data2 = $response2->json();
            $data3 = $response3->json();
            // $data4 = $response4->json();
            
            // dd($response->json());
            return view('HomePage', [
                'movieTopRated' => $data1['results'],
                'movielist' => $data2['results'],
                'tvlist' => $data3['results'],
                // 'trailer' => $data4['results'],
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
