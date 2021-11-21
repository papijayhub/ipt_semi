<?php

use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [    
              'id'=> 1,
              'name'=> 'San Juan',
              'location'=> 'Tubigon, Bohol',
              'owner'=> 'Kizyl Montana',
              'net_worth'=> 195675.50,
  
          ],
          [

            'id'=> 2,
            'name'=> 'Manduay',
            'location'=> 'Clarin, Bohol',
            'owner'=> 'Lufy D. Monkey',
            'net_worth'=> 345342,
  


          ],
          [

            'id'=> 3,
              'name'=> 'Awhshop',
              'location'=> 'Tagbilaran, Bohol',
              'owner'=> 'Ussop Pinoch',
              'net_worth'=> 54647,
   
            ],
            [

              'id'=> 4,
              'name'=> 'Maria-eh',
              'location'=> 'Calape, Bohol',
              'owner'=> 'Chopper D. Reinder',
              'net_worth'=> 675733,

            ],
            [

              'id'=> 5,
              'name'=> 'Wa-ah-ahshopp',
              'location'=> 'Clarin, Bohol',
              'owner'=> 'Yami D. Licious',
              'net_worth'=> 189756,

            ],
        ];
  
        foreach($data as $s){
            \App\Store::create($s);
        }

    }
}
