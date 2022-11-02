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
                'image1' => ['19.jpg','20.jpg','21.jpg','22.jpg']


            ],
            [
                'id'=> 2,
                'subtext' => 'Wedding by Agarta',
                'image'=> '2.jpg',
                'image1' => ['16.jpg','17.jpg','18.jpg']
            ],
            [
                'id'=> 3,
                'subtext' => 'Enggagement by Agarta',
                'image'=> '7.jpg',
                'image1' => ['50.jpg','51.jpg','52.jpg','53.jpg']
            ],
            [
                'id'=> 4,
                'subtext' => 'Prewedding by Agarta',
                'image'=> '43.jpg',
                'image1' => ['39.jpg','40.jpg','41.jpg','42.jpg']
            ],
            [
                'id'=> 5,
                'subtext' => 'Wedding by Agarta',
                'image'=> '8.jpg',
                'image1' => ['8.jpg','9.jpg','10.jpg']
            ],
            [
                'id'=> 6,
                'subtext' => 'Enggagement by Agarta',
                'image'=> '6.jpg',
                'image1' => ['45.jpg','46.jpg','49.jpg','47.jpg']
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
