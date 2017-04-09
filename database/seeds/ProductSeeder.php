<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = array(['name'=>'bocinas logitech 5.1',
                            'slug'=>'bocinas-logitech-5.1',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ratione maiores ducimus, officia cumque aspernatur.',
                            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, laudantium!',
                            'price'=>3000.00,
                            'image'=>'https://assets.logitech.com/assets/64691/10/z506-surround-sound-speaker-system.png',
                            'visible'=>1,
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                            'category_id'=>1,
                            ],
                            ['name'=>'Audifonos Beats By Dr Dree',
                            'slug'=>'audifonos-beats',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ratione maiores ducimus, officia cumque aspernatur.',
                            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, laudantium!',
                            'price'=>7999.99,
                            'image'=>'http://www.aospan.com/images/detailed/2/Beats-By-Dr-Dre-Pro-High-Performance-Professional-Over-Ear-White-Headphones_1.png',
                            'visible'=>1,
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                            'category_id'=>1,
                            ],
                            ['name'=>'Radio Despertador JBL',
                            'slug'=>'radio-despertador-jbl',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ratione maiores ducimus, officia cumque aspernatur.',
                            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, laudantium!',
                            'price'=>2500.00,
                            'image'=>'https://uk.jbl.com/on/demandware.static/-/Sites-masterCatalog_Harman/default/dwe457434d/JBLHorizon_WHT_001_dvHAMaster.png',
                            'visible'=>1,
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                            'category_id'=>1,
                            ],
                            ['name'=>'Dell XPS 8910',
                            'slug'=>'dell-8910',
                            'description'=>'Procesador Intel® Core™ i5,Windows 10 Home (Dell recomienda Windows 10 Pro.),Memoria de 8 GB,Disco duro de 1 TB',
                            'extract'=>'Procesador Intel® Core™ i5,8bg Ram, 1Tb HDD',
                            'price'=>37450.00,
                            'image'=>'http://i.dell.com/sites/imagecontent/products/PublishingImages/xps-8910-desktop/desktop-tower-xps-pdp-magnum-polaris_Module-01.jpg',
                            'visible'=>1,
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                            'category_id'=>2,
                            ],
                            ['name'=>'Dell Alienware 15',
                            'slug'=>'alienware-15',
                            'description'=>'7th Generation Intel® Core™ i5-7300HQ,Windows 10 Home 64bit English,8GB DDR4 at 2400MHz,NVIDIA® GeForce® GTX 1050Ti with 2GB GDDR5',
                            'extract'=>'I5,8Gb ram,Nvidia Gtx1050 Ti',
                            'price'=>52800.00,
                            'image'=>'http://i.dell.com/sites/imagecontent/products/PublishingImages/alienware-15-laptop/CS1703G0018_aw_laptop_alienware15_gaming_pdp_polaris_module1.jpg',
                            'visible'=>1,
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                            'category_id'=>2,
                            ],
                            ['name'=>'Huawei Nexus 6P',
                            'slug'=>'huawei-nexus-6p',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ratione maiores ducimus, officia cumque aspernatur.',
                            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, laudantium!',
                            'price'=>15000.00,
                            'image'=>'https://www.google.com/nexus/images/nexus6p/6p-usb-1024.jpg',
                            'visible'=>1,
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                            'category_id'=>2,
                            ],
                            ['name'=>'Xbox ONE',
                            'slug'=>'xbox-one',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur aspernatur, nihil nulla. Aperiam voluptatum, optio!',
                            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, libero.',
                            'price'=>20000.00,
                            'image'=>'http://compass.xbox.com/assets/2d/0c/2d0c0efa-7d89-4969-b74d-214126888908.jpg?n=Xbox_Console_MeetOne_DESKTOP_ImageModule_XBOXONE.jpg',
                            'visible'=>1,
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                            'category_id'=>3,
                            ],
                            ['name'=>'Playstation 4',
                            'slug'=>'playstation-4',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa itaque temporibus nulla ut quis, excepturi?',
                            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, nam.',
                            'price'=>20000.00,
                            'image'=>'https://images-na.ssl-images-amazon.com/images/I/51ROi4d4puL._SL1280_.jpg',
                            'visible'=>1,
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                            'category_id'=>3,
                            ],
                            ['name'=>'Nintendo Switch',
                            'slug'=>'nintendo-switch',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ratione maiores ducimus, officia cumque aspernatur.',
                            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, laudantium!',
                            'price'=>15000.00,
                            'image'=>'https://i.blogs.es/32bff5/nintendo-switch/original.jpg',
                            'visible'=>1,
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                            'category_id'=>3,
                            ],
                            ['name'=>'Jordan 13',
                            'slug'=>'jordan-13',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur aspernatur, nihil nulla. Aperiam voluptatum, optio!',
                            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, libero.',
                            'price'=>12000.00,
                            'image'=>'http://newsneakernews.wpengine.netdna-cdn.com/wp-content/uploads/2014/12/air-jordan-13-gym-red-nike-photos-01-620x415.jpg',
                            'visible'=>1,
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                            'category_id'=>4,
                            ],
                            ['name'=>'Sweater Team Solo Mid',
                            'slug'=>'sweater-tsm',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa itaque temporibus nulla ut quis, excepturi?',
                            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, nam.',
                            'price'=>800.00,
                            'image'=>'https://cdn.shopify.com/s/files/1/0128/9452/products/TSM-S4-Jacket_07f5f65b-74f9-4a13-90b3-472f43afe72a_1024x1024.png?v=1437704584',
                            'visible'=>1,
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                            'category_id'=>4,
                            ],
                            ['name'=>'Playera Nike',
                            'slug'=>'playera-nike',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ratione maiores ducimus, officia cumque aspernatur.',
                            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, laudantium!',
                            'price'=>1000.00,
                            'image'=>'https://cf-media.innovasport.com/media/catalog/product/cache/2/image/9df78eab33525d08d6e5fb8d27136e95/7/4/742671-657_1.jpg',
                            'visible'=>1,
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                            'category_id'=>4,
                            ],
                            ['name'=>'Toyota Corolla 2017',
                            'slug'=>'toyota-2017',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur aspernatur, nihil nulla. Aperiam voluptatum, optio!',
                            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, libero.',
                            'price'=>00.00,
                            'image'=>'http://corolla.mx/assets/images/galeria/4-pull3.jpg',
                            'visible'=>1,
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                            'category_id'=>5,
                            ],
                            ['name'=>'Aston Martin Vaquish',
                            'slug'=>'aston-martin',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa itaque temporibus nulla ut quis, excepturi?',
                            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, nam.',
                            'price'=>00.00,
                            'image'=>'http://static3.businessinsider.com/image/56b8f7072e5265b8008b5c72-1190-625/the-aston-martin-vanquish-is-a-300000-angry-piece-of-art-that-you-cant-stop-looking-at.jpg',
                            'visible'=>1,
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                            'category_id'=>5,
                            ],
                            ['name'=>'Honda Civic 2017',
                            'slug'=>'honda-2017',
                            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ratione maiores ducimus, officia cumque aspernatur.',
                            'extract'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, laudantium!',
                            'price'=>00.00,
                            'image'=>'http://www.autodato.com/wp-content/gallery/Honda-Civic-2017-Brasil/Honda-Civic-2017-Brasil-09.jpg',
                            'visible'=>1,
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                            'category_id'=>5,
                            ]);

        Product::insert($products);
    }
}