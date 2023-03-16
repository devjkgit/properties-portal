<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class PropertiesController extends Controller
{
	// To show properties list
	public function index(){
		$p_content = Property::get_property_list_data();
		// $p_content = array_slice($p_content, 0,19);
		// foreach ($p_content as $key => $value) {
		// 	$property = Property::get_property_data($value['reference']);
		// 	$value['name'] = $property['name'];
		// 	$propertydata[] = $value;
		// }
		// dd($propertydata);
		$propertydata = $this->paginate($p_content);
		return view('properties',compact('propertydata'));
	}

	public function property($reference_id){
		$property = Property::get_property_data($reference_id);
		return view('single-property',compact('property'));
	}

	public function testproperty($reference_id){
		$property = Property::get_property_data($reference_id);
		dd($property);
	}

	public function paginate($items, $perPage = 100, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}