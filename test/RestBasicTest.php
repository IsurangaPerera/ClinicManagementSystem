<?php

require_once '../vendor/autoload.php';

use GuzzleHttp\Client;

class RestBasicTest extends PHPUnit_Framework_TestCase
{
    protected $client;
    
    protected function setUp() {
        $this->client = new Client([
            'base_uri' => 'http://localhost'
        ]);
    }

    protected function tearDown() {
        $this->client = null;
    }
    
    /** @test */
    public function patientProfileQueryTest() {

        $response = $this->client->request('GET', '/patient/profile/general/570V');
        $data = json_decode($response->getBody(), true);

        $this->assertEquals($response->getStatusCode(), 200);
        /*$this->assertArrayHasKey('name', $data);
        $this->assertArrayHasKey('address', $data);
        $this->assertArrayHasKey('contact', $data);
        $this->assertArrayHasKey('data', $data);
        $this->assertArrayHasKey('medication', $data);
        $this->assertArrayHasKey('treatmentplan', $data);*/
    }

    /** @test */
    public function tbRegistrationTest() {
            
        $response = $this->client->request('POST', '/patient/tb/register', [
            'json' => [], 
            'http_errors' => false
            ]);
    
        $this->assertEquals($response->getStatusCode(), 500);
    }

    /** @test */
    public function sputumDataTest() {
        $uri = '/patient/investigations/sputum/20';
        $response = $this->client->request('GET', $uri);

        $this->assertEquals($response->getStatusCode(), 200);
    }

    /** @test */
    public function investigationDataTest() {
        $uri = '/patient/investigations/sputum';
        $response = $this->client->request('GET', $uri);

        $this->assertEquals($response->getStatusCode(), 200);
    }

    /** @test */
    public function updateSputumDataTest() {
        $uri = '/patient/investigations/sputum';
        $response = $this->client->request('POST', $uri);

        $this->assertEquals($response->getStatusCode(), 200);
    }
}

?>