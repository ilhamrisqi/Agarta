<?php

namespace App\Http\Controllers;

use App\Models\tampilan;
use Illuminate\Http\Request;

class TampilansController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(tampilan $tampilan)
    {
    }

    public function edit(tampilan $tampilan)
    {
    }

    public function update(Request $request, tampilan $tampilan)
    {
    }

    public function destroy(tampilan $tampilan)
    {
    }

    public function gallery(){
        return view('gallery',
            [
                'subtext1' => 'Prewedding by Agarta',
                'subtext2' => 'Wedding by Agarta',
                'subtext3' => 'Enggagement by Agarta',
                'tampilan' => tampilan::gallery()
            ]
        );
    }
    public function subgallery($id){
        return view('subgallery',
            [
                'title' => 'Gallery',
                'tampilan' => tampilan::showGallery($id)
            ]
        );
    }

    public function contact(){
        return view('contact',
            [
                'contactdesc'=> 'We’re very approachable and would love to speak to you
                             .feel free to ask, call, chat, & send us an email.'

            ]);
    }

    public function aboutus(){
        return view('about',
            [
                'desc'=> 'We’re a group of passionate young people photographers, videographers and editors working together to create beautiful masterpieces.
                        Every day we step into AGARTA house feeling inspired & ignited by
                        passion, fueled by laughter, challenged by creativity. We find ourselves fascinated by the love stories and mesmerized by the twinkle of an eye,
                        the sincerity of a smile and the miracle of a hug. It’s how we create pages
                        of captured moments.
                        We are in love with love and in constant affair with life. We love bold colors, Simpson clouds, bright lights and happy people.
                        And this team here, this is our family. It’s where our paths cross professionally that touch our lives personally. It’s where freedom is encouraged and
                        relationship is inspired. It’s where we feel at home.',
                'text'=> 'Who we are ?'

            ]);
    }
    public function home(){
        return view('home',
            [
                'title'=> 'Agarta',
                'maincontnt'=>'Great photography is about depth of feeling, not depth of field',
                'subcontnt'=>'Get In Touch With Us',
                'subimg'=>'image/prewed1BZZ3743.jpg',
                'contactbtn'=>'Contact',


            ]);
    }
}
