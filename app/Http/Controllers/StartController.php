<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(){

        return view('start');

    }

    public function data(){
        $url_data = [
            array(
                'title' => 'github',
                'url' => 'http://github.com'
            ),
            array(
                'title' => 'YOUTUBE',
                'url' => 'http://youtube.com'
            )
        ];

//        dd(json_encode($url_data));

        return view('data', [
            'url_data' => $url_data
        ]);
    }

    public function ajax(){

        return view('ajax');

    }

    public function getjson(){
        return [
            array(
                'title' => 'sandi+',
                'url' => 'http://sandiplus.com.ua'
            ),
            array(
                'title' => 'airfel',
                'url' => 'http://airfel.in.ua'
            )
        ];
    }
}
