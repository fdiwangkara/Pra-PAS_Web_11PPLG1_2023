<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController 
{
    public static function index() {
        return view ('team.all', [
            "title" => "F1 | Team",
            "team" => Team::all()
        ]);
    }

    public function show($team) {
        return view('team.detail', [
            "title" => "FDIWS | Details of team",
            "team" => Team::find($team)
        ]);
    }
}
