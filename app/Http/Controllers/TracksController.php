<?php

namespace App\Http\Controllers;

use App\Models\Tracks;
use Illuminate\Http\Request;

class TracksController extends Controller
{
    public static function index() {
        return view ('tracks/all', [
            "title" => "F1 | Tracks",
            "tracks" => Tracks::all() 
        ]);
    }

    public function show($tracks) {
        return view('tracks.detail', [
            "title" => "FDIWS | Details of tracks",
            "tracks" => Tracks::find($tracks)
        ]);
    }
}
