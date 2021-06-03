<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MemberSeeder extends Seeder
{
        public function run()
        {
                $model = model('MemberModel');


                //static::faker->create('fr_FR');
                for($i=0; $i<5; $i++){
                        $model->insert([
                                'firstname'      => static::faker()->name,
                                'lastname'      => static::faker()->name                        
                        ]);
                }

                
        }
}