<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator;

class tampilan extends Model
{

        use HasFactory;

        private static $tampilans = [

            [
                'id'=> 1,
                'subtext' => 'Prewedding by Agarta',
                'image'=> '1.jpg',
                'image1' => ['19.jpg','20.jpg','21.jpg','22.jpg'],
                'maindesc'=>'"We take photos as a return tickets to a moment otherwise gone."'

            ],
            [
                'id'=> 2,
                'subtext' => 'Wedding by Agarta',
                'image'=> '2.jpg',
                'image1' => ['16.jpg','17.jpg','18.jpg'],
                'maindesc'=>'"The cake gets eaten, the flowers will die, but the wedding photos will last forever."'
            ],
            [
                'id'=> 3,
                'subtext' => 'Enggagement by Agarta',
                'image'=> '7.jpg',
                'image1' => ['50.jpg','51.jpg','52.jpg','53.jpg'],
                'maindesc'=>'"Sometimes you will never know the value of a moment until it becomes a memory."'
            ],
            [
                'id'=> 4,
                'subtext' => 'Prewedding by Agarta',
                'image'=> '43.jpg',
                'image1' => ['39.jpg','40.jpg','41.jpg','42.jpg'],
                'maindesc'=>'"The best thing about a pictures is that it never changes, even when the people in it do."'
            ],
            [
                'id'=> 5,
                'subtext' => 'Wedding by Agarta',
                'image'=> '8.jpg',
                'image1' => ['8.jpg','9.jpg','10.jpg'],
                'maindesc'=>'"A photograph keeps a moment from running away."'
            ],
            [
                'id'=> 6,
                'subtext' => 'Enggagement by Agarta',
                'image'=> '6.jpg',
                'image1' => ['45.jpg','46.jpg','49.jpg','47.jpg'],
                'maindesc'=>'"We are making photographs to understand what our lives mean to us."'
            ]
        ];


        public static function gallery(){
            return collect(self::$tampilans);
        }

        public static function showGallery($id){
            foreach (self::$tampilans as $tampilan){
                if ($tampilan['id'] == $id){
                    return $tampilan;
                }
            }

        }
}
