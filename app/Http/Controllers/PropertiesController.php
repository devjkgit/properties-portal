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
		$propertydata = Property::get_property_list_data();
		$propertydata = $this->paginate($propertydata);
		return view('properties',compact('propertydata'));
	}

	public function property($reference_id){
		$property = Property::get_property_data($reference_id);
		return view('single-property',compact('property'));
	}

	public function paginate($items, $perPage = 150, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
