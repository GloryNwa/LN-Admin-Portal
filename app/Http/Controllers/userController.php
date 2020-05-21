<?php

namespace App\Http\Controllers;

use App\Accept_event;
use App\Network;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\User;
use App\Event;
use App\Information;
use App\Resource;
use App\Profile;
use DB;
use Hash;
use Auth;


class userController extends Controller
{
    public function loaddashboard(){



        $events = Event::orderBy('id','desc')->take(3)->get();


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
    	$data['events'] =$result;

    	
    	$data['information'] = Information::orderBy("id","desc")->first();

    	$data['resources'] = Resource::orderBy("id","desc")->take(3)->get();

    	return view('user.dashboard',$data);
        
    }


    
     public function loadProfile()
    {
        return view("user.profile");
    }





    public function doEditProfile(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
        ]);



//        Auth::user()->first_name = $request->post('first_name');
        $user  = User::where("email",'=',Auth::user()->email)->first();
        $user->first_name = $request->input("first_name");
        $user->last_name = $request->input("last_name");
        $user->about = $request->input("about");
        $user ->save();

        return redirect()->back()->with("message","Profile was successfully updated");

    } 


    


    public function doEditProfilePic(Request $request){

        $this->validate($request, [
            'pic' => 'required'

        ]);


        $file = Input::file('pic');
        $file->move('./userres/', $file->getClientOriginalName());
        $url = '/userres/'. $file->getClientOriginalName();


        $user = User::where('id',Auth::user()->id)->first();
        $user->profile_pic = $url;
        $user->save();

        return redirect()->back()->with("message","Profile Pic was successfully updated");



    }

     public function addProfile(request $request){
    	 $this->validate($request, ['name' => 'required',
    	 	'profile_pic'=> 'required'

       	]);  
       	 // return 'validation passed';
       	 $profiles = new profile;
         $profiles->name = $request->input('name');
         $profiles->user_id = Auth::user()->id;
         if(Input::hasFile('profile_pic')){
             $file = Input::file('profile_pic');
             $file->move(public_path(). '/folder/', $file->getClientOriginalName());
             $url = '/folder/'. $file->getClientOriginalName();
             // return $url;
             // exit();
         }
         $profiles->profile_pic = $url;
         $profiles->save();
         return redirect('/timeline')->with('response', 'Profile Added Successfully');

     

       // return Auth::user();
       // exit();
    }



    public function fetchProfile()
    {
        $user_id = Auth::user()->id;
        $profile = DB::table('users')
                     ->join('profiles', 'user_id','=', 'profiles.user_id')
                     ->select('users.*', 'profiles.*')
                     ->where(['profiles.user_id' => $user_id])
                     ->get();

    

        return view('timeline.timeline', ['profile' => $profile]);
    }



    public function logout(){
        Auth::logout();

     return redirect("/login");

    }


    

// This method allows the user to change password!

       public function newPassword(Request $request){

         $this->validate($request, [
           
            'oldPassword' => 'required',
            'newPassword' => 'required',
            'confirmPassword' => 'required'
        ]);
     
        

        $oldPassword = $request->input('oldPassword');
        $newPassword = $request->input('newPassword');
        $confirmPassword = $request->input('confirmPassword');

        if($newPassword != $confirmPassword ){

        	/**
				Redirect user back to the profile page if the new password and current password do not match
        	**/

   			return redirect("/profile")
   			    ->with("response","Password could not be Updated at this time, please try again latter!")
   				->with("alert","danger");

        }else{



        	if (Hash::check($oldPassword, Auth::user()->password)) {
                Auth::user()->password = Hash::make($newPassword);
                Auth::user()->save();

            return redirect("/profile")->with("response","Password  Updated Successfully!")->with("alert","success");

        }else{

        	return redirect("/profile")
   			    ->with("response","Sorry we could not validate that u own this account, Please try again with your current password")
   				->with("alert","danger");

        }

    }

        

    

}


// public function newPassword(Request $request){
//     $this->validate($request, [

//     	'email' => 'require',
//         'oldPassword' => 'required|oldPassword',
//         'newPassword' => 'required|string|min:6|confirmed',
//         'confirmPassword' => 'required'
//     ]);
//       $user  = User::where("email", "password",'=',Auth::user())->first();
//     request()->user()->fill([
//         'password' => Hash::make(request()->input('newPassword'))
//     ])->save();
  
//    return redirect("/profile")->with("alert, password updated");
//   }






    public function returnNetworks() {

        $data = Network::select('')->get();
    }



}
