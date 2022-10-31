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
                'image'=> '1.jpg'
            ],
            [
                'id'=> 2,
                'subtext' => 'Wedding by Agarta',
                'image'=> '2.jpg'
            ],
            [
                'id'=> 3,
                'subtext' => 'Enggagement by Agarta',
                'image'=> '3.jpg'
            ],
            [
                'id'=> 4,
                'subtext' => 'Prewedding by Agarta',
                'image'=> '8.jpg'
            ],
            [
                'id'=> 5,
                'subtext' => 'Wedding by Agarta',
                'image'=> '4.jpg'
            ],
            [
                'id'=> 6,
                'subtext' => 'Enggagement by Agarta',
                'image'=> '6.jpg'
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
