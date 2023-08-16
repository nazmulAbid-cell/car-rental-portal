<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Car;
use App\Models\Booking;
use App\Models\Insurance;
use Illuminate\Http\Request;

class BookingController extends Controller
{
   public function booking(Request $request){
    $request->validate([
        'from_date' => 'required|date',
        'to_date' => 'required|after_or_equal:from_date|date',
    ]);

            $insurance = Insurance::find($request->insurance_id) ;
            $insuranQuery = $insurance->insurance_fee ?? 0;


            $car = Car::find($request->car_id);
            //DaysCalulation
            $daysCalculation = (strtotime($request->to_date)-strtotime($request->from_date));
            $daysCalculation = round($daysCalculation / (60 * 60 * 24));

            //Make Date Fomate
           $fromDate = date("Y-m-d", strtotime($request->from_date));
            $toDate = date("Y-m-d", strtotime($request->to_date));

            $checkBook = Booking::query()->where('car_id', $request->car_id);

            $checkBook->where(function ($query) use ($fromDate, $toDate) {
                $query->whereBetween('from_date', [$fromDate, $toDate])
                    ->orWhereBetween('to_date', [$fromDate, $toDate]);
            });

             $checkBook = $checkBook->get();


                if ($checkBook->count() == 0){
                    $booking = Booking::create([
                         'car_id' => $request->car_id,
                         'insurance_id' => $request->insurance_id,
                         'user_id' => auth()->user()->id,
                         'from_date' => $request->from_date,
                         'to_date' => $request->to_date,
                         'details' =>  $request->details,
                         'price_per_day' => $car->price_per_day,
                         'insurance_fee' => $insuranQuery,
                         'total_price' => ((($car->price_per_day * $daysCalculation)+$car->price_per_day ) - $car->discount_offer) + $insuranQuery ,
                         'due' => ((($car->price_per_day * $daysCalculation)+$car->price_per_day ) - $car->discount_offer) + $insuranQuery ,

                     ]);


                     session()->flash('type','success');
                     session()->flash('message','Your Booking is Successful.');
                     /* Db::commit(); */
                    return redirect()->back();
                  }else{
                     session()->flash('type','danger');
                     session()->flash('message','Sorry,This Car is Already Booked,Try Another Date .');
                    return redirect()->back();
                  }



   }
}
