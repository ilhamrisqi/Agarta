<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',
    [
        'title'=> 'Agarta'

    ]);
});

Route::get('/about', function () {
    return view('about',
        [
            'desc'=> 'Lorem ipsum dolor sit amet,
             consectetur adipiscing elit. Nulla
             sodales elit sed posuere vulputate.
             Nulla porttitor erat non diam venenatis
              hendrerit. Cras a dapibus lorem, quis
               fermentum mi. Praesent nec commodo nibh
               , at congue velit. Suspendisse commodo
               augue nec nisl faucibus, bibendum gravida
                orci facilisis. Aenean vitae luctus turpis.',


        ]);
});

Route::get('/contact', function () {
    return view('contact',
        [
            'contactdesc'=> 'We’re very approachable and would love to speak to you
            .feel free to ask, call, chat, & send us an email.'

        ]);
});
