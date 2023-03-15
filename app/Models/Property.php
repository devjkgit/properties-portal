<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class Property extends Model
{
    use HasFactory;

    // To get property data from api
    public function get_property_list_data(){
    	$client = new Client();
		$response = $client->request('GET', 'https://ms.veeve.com/api/properties');
		$content = $response->getBody();
		$propertiesdata = json_decode($content, true);
		return $propertiesdata;
    }

    // To get single property data from api
    public function get_property_data($reference_id){
    	$client = new Client();
		$response = $client->request('GET', 'https://ms.veeve.com/api/property/'.$reference_id);
		$content = $response->getBody();
		$property = json_decode($content, true);
		return $property;
    }
}
