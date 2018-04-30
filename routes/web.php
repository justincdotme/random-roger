<?php

Auth::routes();

Route::resource('roger', 'RogerController', [
    'only' => [
        'index',
        'create',
        'store',
        'destroy'
    ]
]);