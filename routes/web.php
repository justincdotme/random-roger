<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::resource('roger', 'RogerController', [
    'only' => [
        'index',
        'create',
        'store',
        'destroy'
    ]
]);