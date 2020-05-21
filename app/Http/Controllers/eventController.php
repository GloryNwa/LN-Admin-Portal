<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Event;
use App\Accept_event;
use Auth;
use DB;


class eventController extends Controller
{
   public function events(){
     return view('events.event');

   }

   public function addevent(Request $request){
       $this->validate($request, [
    		'title'       => 'required',
    		'description' => 'required',
    		'date'        => 'required',
    		'venue'       => 'required'

       ]);

    	$addevent              = new Event;
    	$addevent->title       = $request->input('title');
    	$addevent->description = $request->input('description');
    	$addevent->date        = $request->input('date');
    	$addevent->venue       = $request->input('venue');
    	$addevent->save();
    	return redirect('/events')->with('response', 'Event Created Successfully ');
   }


    public function all_events(){

      $events = Event::orderBy('id','desc')->take(15)->get();


      //Fetch all events
        //check if user id matches a specific event id

   
        $result = array();
        //fetch all events
        $array_index = 0;
        foreach ($events as $event){

            //check if the logged in user Id matches the current event id
            $check_id = Accept_event::where("user_id",Auth::user()->id)
            ->where("event_id",$event->id)
            ->get();

            $result[$array_index]['id'] = $event->id;
            $result[$array_index]['title'] = $event->title;
            $result[$array_index]['description'] = $event->description;
            $result[$array_index]['date'] = $event->date;
            $result[$array_index]['venue'] = $event->venue;
            $result[$array_index]['created_at'] = $event->created_at;
            $result[$array_index]['updated_at'] = $event->updated_at;

            if(count($check_id) > 0){

                $result[$array_index]['accepted'] = "Yes";
            }else{

                $result[$array_index]['accepted'] = "No";
            }
            $array_index ++;
   

        }

     return view('events.all_events', [ 'events' => $result]);
   }


   




   public function acceptEvents($id){

//check if logged in user id matches a row with the event id
      $acceptEvents = Accept_event::where("user_id",Auth::user()->id)
      ->where("event_id",$id)
      ->first();

//if there is a match, return an error message back to the user
      if(count($acceptEvents) > 0){
            return redirect('/all_events')->with("message","You have already accepted this meeting");
      }else{



      $action = new Accept_event();
      $action ->user_id = Auth::user()->id;
      $action ->event_id = $id;
      $action ->time = time();
      $action->save();

      return redirect('/all_events')->with("message","Meeting Accepted");
    }
   }

}
