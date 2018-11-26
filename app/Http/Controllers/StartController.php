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

    public function chartline(){

        return view('chartline');

    }

    public function chartDataLine(){
        return [
            'labels' => ['март', 'апрель', 'май', 'июнь'],
            'datasets' => array([
                'label' => 'Продажи',
                'backgroundColor' => '#f26202',
                'data' => [15000, 25000, 10000, 3000],
            ])
        ];
    }

    public function chartpie(){

        return view('chartpie');

    }

    public function chartDataPie(){
        return [
            'labels' => ['март', 'апрель', 'май', 'июнь'],
            'datasets' => array([
                'label' => 'Продажи',
                'backgroundColor' => ['#f26202','#ff0000','#00ff00','#0000ff'],
                'data' => [15000, 25000, 10000, 3000],
            ])
        ];
    }

    public function chartrandom(){

        return view('chartrandom');

    }

    public function chartDataRandom(){
        return [
            'labels' => ['март', 'апрель', 'май', 'июнь'],
            'datasets' => array(
                [
                    'label' => 'Золото',
                    'backgroundColor' => '#f26202',
                    'data' => [ rand(0,40000), rand(0,40000), rand(0,40000), rand(0,40000) ]
                ],
                [
                    'label' => 'Серебро',
                    'backgroundColor' => '#00ee00',
                    'data' => [ rand(0,40000), rand(0,40000), rand(0,40000), rand(0,40000) ]
                ]
            )
        ];
    }
}
