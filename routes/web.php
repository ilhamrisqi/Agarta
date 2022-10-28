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
            'desc'=> 'We’re a group of passionate young people – photographers, videographers and editors – working together to create beautiful masterpieces.
Every day we step into AGARTA house feeling inspired – ignited by
passion, fueled by laughter, challenged by creativity. We find ourselves fascinated by the love stories and mesmerized by the twinkle of an eye,
the sincerity of a smile and the miracle of a hug. It’s how we create pages
of captured moments.
We are in love with love and in constant affair with life. We love bold colors, Simpson clouds, bright lights and happy people.
And this team here, this is our family. It’s where our paths cross professionally that touch our lives personally. It’s where freedom is encouraged and
relationship is inspired. It’s where we feel at home.',


        ]);
});

Route::get('/contact', function () {
    return view('contact',
        [
            'contactdesc'=> 'We’re very approachable and would love to speak to you
            .feel free to ask, call, chat, & send us an email.'

        ]);
});
