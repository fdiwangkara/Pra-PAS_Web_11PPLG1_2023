<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracks 
{
    private static $tracks = [
        [
            "id" => 1,
            "track" => "Adelaide Street Circuit",
            "location" => "Australia",
            "length" => 3.780,
            "type" => "Street circuit",
        ],
        [
            "id" => 2,
            "track" => "Circuit de Monaco",
            "location" => "Monaco",
            "length" => 3.337,
            "type" => "Street circuit",
        ],
        [
            "id" => 3,
            "track" => "Marina Bay Street Circuit",
            "location" => "Singapore",
            "length" => 4.940,
            "type" => "Street circuit",
        ],
        [
            "id" => 4,
            "track" => "Nürburgring",
            "location" => "Germany",
            "length" => 5.148,
            "type" => "Race circuit",
        ],
        [
            "id" => 5,
            "track" => "Yas Marina Circuit",
            "location" => "Abu Dhabi",
            "length" => 5.281,
            "type" => "Race circuit",
        ]
    ];

    public static function all()
    {
        return self::$tracks;
    }
}
