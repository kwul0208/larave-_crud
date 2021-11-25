<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    private static $datas = [
        [
            "nama" => "Ahmad Wahyu Awaludin",
            "slug" => "ahmad-wahyu-awaludin",
            "nim" => "201011400908",
            "alamat" => "Jawa Tengah"
        ],
        [
            "nama" => "jamal Wahyu Awaludin",
            "slug" => "jamal-wahyu-awaludin",
            "nim" => "201011400908",
            "alamat" => "Jakarta"
        ]
    ];

    public static function allData()
    {
        return  self::$datas;
    }
}
