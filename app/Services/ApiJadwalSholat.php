<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ApiJadwalSholat {
    private static $baseUrl = 'https://api.myquran.com/';
    private static $version = 'v2';

    public static function getJadwal($id_city, $date){
        $url = self::$baseUrl.self::$version."/sholat/jadwal/$id_city/$date";
        $result = Http::get($url)->json();
        return $result;
    }
}