<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings


class Bookings extends Controller
{
	public function make_bookings(Request $request){
		$booking  = new Bookings();
		$booking->prop_id = $request->prop_id;
		$booking->start_date = $request->start_date;
		$booking->end_date = $request->end_date;
		$booking->cust_name = $request->cust_name;
		$booking->cust_email = $request->cust_email;
		$booking->cust_phone = $request->cust_phone;
		if($booking->save()){
			return redirect()->back()->with('success',"Booking request saved.");
		}
		else{
			return redirect()->back()->with('error',"There is something wrong please try again later.");
		}
	}
}