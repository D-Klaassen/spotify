<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlaylistController extends Controller
{
    //
    public function getPlaylists() {

        if (array_key_exists('userToken', $_GET)) {
            $response = Http::withToken('BQA7nqm0YPhRVghx2nC03JRwCskTKMfI3vVfdALqYFdh4_cr-mXoPZMlPz-cKHYmRuV3X8WebXIBxeTITo0R9ZC3Am1k9bl_4VrHqPJik6STQ9BxWEnZ-3ZUBzhgc3B6569axgFzHfF85-U_Rv7l0MhrvAvvRl_HPSCokZlvu0ZH6f23OUIx6UB7760FdmdB7CUAnMPJKvEyfrKF40KrLxRTNKi0p4gWYfLF2dP05jScxAyFRo_p5cEr3l2Nfs9lUDm0ZSfb9Q3On5BrzqxPerEX6jFxEM4CT51U')
                ->withHeaders(['Authorization' => 'user-top-read'])
                ->get('https://api.spotify.com/v1/me/top/', [
                    'type' => 'artists'
                ]);

            dd($response);

            $array = json_decode($response->body(), true);

            dd($array);

            return $array['items'];

        } else {
            dd('rip');
        }


//
//        $response = Http::withToken('BQAOofA02Uj8X6Bl8ohrXSP8hMqTwb57KYNyFyaJNgewpTXJdeTjScMaBvg4AflOHDU7CnrbAJRcCD6gzoLPLlJ2gLa7KPIUIayz0HvTixMikMfgULBNpQmyjjbAl3O6tHLhq7e7_7wCgR4ViqKEMsG0OtKnicBzkdxtcYZ6jNw')
//            ->withHeaders(['Authorization' => 'user-top-read'])
//            ->get('https://api.spotify.com/v1/me/top/', [
//                'type' => 'artists'
//            ]);
//
//        $array = json_decode($response->body(), true);
//
////        dd($response);
//
//        return $array['items'];
//    }


//        curl -X "GET" "https://api.spotify.com/v1/me/top/" -H "Accept: application/json" -H "Content-Type: application/json" -H "Authorization: Bearer BQAOofA02Uj8X6Bl8ohrXSP8hMqTwb57KYNyFyaJNgewpTXJdeTjScMaBvg4AflOHDU7CnrbAJRcCD6gzoLPLlJ2gLa7KPIUIayz0HvTixMikMfgULBNpQmyjjbAl3O6tHLhq7e7_7wCgR4ViqKEMsG0OtKnicBzkdxtcYZ6jNw";




    }
}
