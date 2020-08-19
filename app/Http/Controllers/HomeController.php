<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getPlaylists() {
//        curl -X "GET" "https://api.spotify.com/v1/me/top/" -H "Accept: application/json" -H "Content-Type: application/json" -H "Authorization: Bearer BQAOofA02Uj8X6Bl8ohrXSP8hMqTwb57KYNyFyaJNgewpTXJdeTjScMaBvg4AflOHDU7CnrbAJRcCD6gzoLPLlJ2gLa7KPIUIayz0HvTixMikMfgULBNpQmyjjbAl3O6tHLhq7e7_7wCgR4ViqKEMsG0OtKnicBzkdxtcYZ6jNw";


        $response = Http::withToken('BQAOofA02Uj8X6Bl8ohrXSP8hMqTwb57KYNyFyaJNgewpTXJdeTjScMaBvg4AflOHDU7CnrbAJRcCD6gzoLPLlJ2gLa7KPIUIayz0HvTixMikMfgULBNpQmyjjbAl3O6tHLhq7e7_7wCgR4ViqKEMsG0OtKnicBzkdxtcYZ6jNw')
            ->withHeaders(['Authorization' => 'user-top-read'])
            ->get('https://api.spotify.com/v1/me/top/', [
                'type' => 'artists'
            ]);

        $array = json_decode($response->body(), true);

//        dd($response);

        return $array['items'];
    }
}
