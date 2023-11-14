<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team 
{
    private static $team = [
        [
            "id" => 1,
            "team" => "Mercedes AMG Formula one Team",
            "principal" => "Toto Wolff",
            "owner" => "Hywell Thomas",
            "driver1" => "Lewis Hamilton",
            "driver2" => "George Russell",
        ],
        [
            "id" => 2,
            "team" => "Scuderia Ferrari",
            "principal" => "Frederic Vasseur",
            "owner" => "Diego Loverno",
            "driver1" => "Charles Leclerc",
            "driver2" => "Carlos Sainz",
        ],
        [
            "id" => 3,
            "team" => "Mclaren Formula One Team",
            "principal" => "Zak Brown",
            "owner" => "Andrea Stella",
            "driver1" => "Lando Norris",
            "driver2" => "Oscar Piastri",
        ],
        [
            "id" => 4,
            "team" => "Aston Martin Aramco",
            "principal" => "Lawrence Stroll",
            "owner" => "Martin Whitmarsh",
            "driver1" => "Fernando Alonso",
            "driver2" => "Lance Stroll",
        ],
        [
            "id" => 5,
            "team" => "Oracle Red Bull Racing",
            "principal" => "Christian Horner",
            "owner" => "Dietrich Mateschitz",
            "driver1" => "Max Verstappen",
            "driver2" => "Sergio Pérez",
        ],
    ];

    public static function all()
    {
        return self::$team;
    }
}
