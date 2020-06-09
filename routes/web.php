<?php
Route::get('/', function () {
    return view('home');
});
Route::get('lang/{locale}', 'LocalizationController@index');

// Route::get('/{lang}', function ($lang) {
//     App::setlocale($lang);
//     return view('home');
// });
