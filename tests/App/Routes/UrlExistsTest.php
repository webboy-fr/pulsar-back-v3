<?php

namespace App\Routes;

use CodeIgniter\Test\FeatureTestCase;


use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;


use App\Models\MemberModel;
use CodeIgniter\Test\Fabricator;



class UrlExistsTest extends FeatureTestCase
{
 
    use DatabaseTestTrait, FeatureTestTrait;


    //1 Créer les membre
    public function testCreate(){

        /*$fabricator = new Fabricator(MemberModel::class, null, 'fr_FR');
        $testUser   = $fabricator->create(5);
        print_r($testUser);*/


        $result = $this->call('post', 'member', [
            'firstname' => 'Pierre',
            'lastname' => 'Durand'
        ]);

        $this->assertTrue($result->isOK());



    }


    public function testURLS(){
        




//2 Taper al routes members


//3 Vérifier que les membres sont bien ceux créés



        //$this->assertTrue(true);

        $result = $this->call('get', '/member');

//$result = new \CodeIgniter\Test\TestResponse($response);

        $response = $result->response();

        



        $result->assertJSONExact([
            [
                "id" => "1", 
                "firstname" => "Pierre",
                "lastname" => "Durand",
                "instrument" => ""
            ]
        ]);


        // foreach($this->urls as $url){
        //     $result = $this->call('get', $url);        
        //     $this->assertTrue($result->isOK());
        // }
        

    }


}