<?php

namespace App\Routes;

use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestCase;
use CodeIgniter\Test\FeatureTestTrait;

class MemberTest extends FeatureTestCase {

    use DatabaseTestTrait, FeatureTestTrait;

    //1 Créer les membre
    public function testAddMember() {

        $result = $this->call('post', 'member', [
            'firstname' => 'Pierre',
            'lastname'  => 'Durand',
        ]);

        $this->assertTrue($result->isOK());

    }

    public function testMemberCreated() {

        $result = $this->call('get', '/member');

        $response = $result->response();

        $result->assertJSONExact([
            [
                "id"         => "1",
                "firstname"  => "Pierre",
                "lastname"   => "Durand",
                "instrument" => "",
            ],
        ]);

    }

}