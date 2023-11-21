<?php

namespace App\Http\Controllers;

use App\Models\Tracks;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTracksRequest;
use App\Http\Requests\UpdateTracksRequest;

class TracksController extends Controller
{
    public static function index() {
        return view ('tracks/all', [
            "title" => "F1 | Tracks",
            "tracks" => Tracks::all() 
        ]);
    }

    public static function create() {
        //
    }

    public static function store(Request $request) {
        //
    }

    public function show($tracks) {
        return view('tracks.detail', [
            "title" => "FDIWS | Details of tracks",
            "tracks" => Tracks::find($tracks)
        ]);
    }

    public function edit(Tracks $tracks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTracksRequest $request, Tracks $tracks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tracks $tracks)
    {
        //
    }
}