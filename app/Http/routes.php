<?php


/*Route::get('/', function () {
    return view('calendar.index');
});
*/
Route::get('/', ['as' => 'pocetna', 'uses' => 'CalendarController@index']);
Route::get('kreiraj', ['as' => 'kreiraj', 'uses' => 'CalendarController@create']);
Route::post('snimi', ['as' => 'snimi', 'uses' => 'CalendarController@store']);
