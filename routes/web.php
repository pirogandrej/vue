<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Route::post('messages', function (Illuminate\Http\Request $request) {
    echo $request->input('body');
    App\Events\Message::dispatch($request->input('body'));
    return view('chat');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/start', 'StartController@index')->name('start');                                       /* getStart example*/
Route::get('/start/data', 'StartController@data')->name('data');                                    /* data => Controller -> Blade -> Component */
Route::get('/start/ajax', 'StartController@ajax')->name('ajax');                                    /* data(ajax) => Controller -> Component */
Route::get('/start/getjson', 'StartController@getjson')->name('getjson');                           /* getjson */
Route::get('/start/chartline', 'StartController@chartline')->name('chartline');                     /* chartline(ajax) => GraphLine */
Route::get('/start/data-chartline', 'StartController@chartDataLine')->name('chartdataline');        /* getjson - line */
Route::get('/start/chartpie', 'StartController@chartpie')->name('chartpie');                        /* chartpie(ajax) => GraphPie */
Route::get('/start/data-chartpie', 'StartController@chartDataPie')->name('chartdatapie');           /* getjson - Pie*/
Route::get('/start/chartrandom', 'StartController@chartrandom')->name('chartrandom');               /* chartrandom(ajax) => GraphLine random*/
Route::get('/start/data-chartrandom', 'StartController@chartDataRandom')->name('chartdatarandom');  /* getjson - random */

Route::get('/start/socket-chart', 'StartController@newEvent')->name('start.newevent');
Route::get('/start/send-message', 'StartController@sendMessage');
Route::get('/translation/{id}', 'TranslationController@index');

Route::get('chat', 'ChatController@getIndex');
Route::get('/', 'IoController@index');