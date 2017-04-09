<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = array(['name'=>'Audio & Musica',
                            'slug'=>'audio-musica',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, sit.',
                            'color'=>'#c62828',
                            ],
                            ['name'=>'Computadoras, Laptops y smartDevices',
                            'slug'=>'pc-laptops-smartdevices',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, sit.',
                            'color'=>'#0d47a1',
                            ],
                            ['name'=>'Video Juegos',
                            'slug'=>'video-juegos',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, sit.',
                            'color'=>'#1a237e',
                            ],
                            ['name'=>'Ropas y calzados',
                            'slug'=>'ropa-calzado',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, sit.',
                            'color'=>'#1b5e20',
                            ],
                            ['name'=>'Vehiculos',
                            'slug'=>'vehiculos',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, sit.',
                            'color'=>'#006064',
                            ]);

        Category::insert($categories);
    }
}