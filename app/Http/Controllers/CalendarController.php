<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Calendar;
use App\Calendarr;
use Carbon;

//use App\Calendar;
use MaddHatter\LaravelFullcalendar\Event;

class CalendarController extends Controller
{
public function index()
{
   $events = [];
   $data = Calendarr::all();
   if($data->count()){
     foreach ($data as $key => $value) {
      $events[] = Calendar::event(
         $value->vrsta_odsustva,
         false,
         new \DateTime($value->datum_odsustva),
         new \DateTime($value->datum_odsustva)
      );
     }
   }
   $calendar = Calendar::addEvents($events);

   return view('calendar.index', compact('calendar'));
 }
 public function create ()
  {
    return view('calendar.create');
  }
  public function store(Request $request)
   {
      $this->validate(request(), [
			'vrsta_odsustva'   => 'required',
			'datum_odsustva'   => 'required',
		]);
     $input = $request->all();
     $calendar = new Calendar;
     $calendar->vrsta_odsustva = $input['vrsta_odsustva'];
     $calendar->datum_odsustva = $input['datum_odsustva']. ':00';
     /*
     $scheduleReview->schedule_review_start = $input['schedule_review_start']. ':00';
     $scheduleReview->schedule_review_finish = $input['schedule_review_finish']. ':00';
     */
     $calendar->save();
     return Redirect::back()->with('success', 'Uspješno ste zabilježili događaj na kalndaru');
   }
}
