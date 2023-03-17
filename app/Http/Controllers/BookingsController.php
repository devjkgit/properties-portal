<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;


class BookingsController extends Controller
{
	public function make_bookings($prop_id,Request $request){
		$range = explode(' - ', $request->daterange);
		$start_date = $range[0];
		$end_date = $range[1];
		$booking  = new Bookings();
		$booking->prop_id = $prop_id;
		$booking->start_date = $start_date;
		$booking->end_date = $end_date;
		$booking->cust_name = $request->cust_name;
		$booking->cust_email = $request->cust_email;
		$booking->cust_phone = $request->cust_phone;
		$booking->persons = $request->persons;
		if($booking->save()){
			return redirect()->back()->with('success',"Booking request saved.");
		}
		else{
			return redirect()->back()->with('error',"There is something wrong please try again later.");
		}
	}
}