<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Information;
use App\Timeline_comment;
use Illuminate\Http\Request;
use App\Timeline;
use App\Like;
use App\Profile;
use App\Network;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;

class timelineController extends Controller
{
    public function timeline(Request $request)
    {
      $timelines = Timeline::all();
        $timelines = Timeline::orderBy('id','desc')->paginate(30);

        $informations = Information::take(2)->orderBy('id','desc')->get();

        // dd($contacts);
          return view('timeline.timeline',
              [ 'timelines' => $timelines,
                  'informations' => $informations
              ]);

    }

    public function timelineForm(Request $request)
    {
        return view('timeline.timelineForm');

    }



    public function addtimeline(Request $request){

       $this->validate($request, [

    	 
    	 	]);



	   $image = array('jpeg', 'jpg', 'png', 'gif');
	  
       	 // return 'validation passed';
       	 $addtimeline  = new  Timeline() ;
       	 $addtimeline->user_id = Auth::user()->id;
         $addtimeline->network_id = Auth::user()->network;
         $addtimeline->text_body = $request->input('text_body');
       
     
           if(Input::hasFile('file')){
             $file = Input::file('file');

             $file_extension = $file->getClientOriginalExtension();

             $file_name = time().".".$file->getClientOriginalExtension();

             $file->move(public_path(). '/timelineFiles/', $file_name);

             $url ='/timelineFiles/'.$file_name;


             $addtimeline->file = $url;

	    
             if(in_array($file_extension, $image)){

             	$addtimeline->file_extension = "image";

             }else{

             	 return redirect('/timeline')->with('response', 'Sorry the file you uploaded is unsupported')->with("type","danger");

             }



     }
        $addtimeline->save();

        return redirect(route("timeline"))->with('response', 'Post added successfully')->with("type","success");

}





     public function timelinePost($id){


     	 $user_id = Auth::user()->id;
     

         $data['timelines'] = Timeline::orderBy('id','ASC')->paginate(12);
         $data['network_id'] = $id;
          return view('timeline.timeline', $data);
     }


      public function readMore($id){

        $data['post'] = Timeline::where('id', '=', $id)->first();
        $data['timeline_id'] = $id;
       
        $data['comments'] = Timeline_comment::where('timeline_id', '=', $id)
            ->orderBy("id",'desc')
            ->get();

        	return view('timeline.readMore', $data);

}
// public function deletePost($post_id){

//          Timeline::where('id', $post_id)->delete();
//          return redirect('/timeline')->with('response', 'Post Deleted Successfully')->with("type","success");
//   }



     public function addTimelineComment(Request $request){
                 
              $this->validate($request, [

                'comment' => 'required'
              ]);

                 $comment = new Timeline_comment();
                 $comment->user_id = Auth::user()->id;
                 $comment->timeline_id = $request->input('timeline_id');
                 $comment->comment = $request->input('comment');
                 $comment->save();

                 $id = $request->input('timeline_id');

                 return redirect("/readMore/$id")->with('response', 'Comment Added Successfully');
    
     }

     public function create_network(Request $request)
    {
        return view('timeline.create_network');

    }


    public function addNetwork(Request $request){
                 
              $this->validate($request, [

                'network_name' => 'required'
              ]);

                 $network = new Network();
                 // $network->network_name = Auth::user()->id;
                 // $network->network_id = $request->input('network_id');
                 $network->network_name = $request->input('network_name');
                 $network->save();

          

                 return redirect("/create_network")->with('response', 'Network created successfully');
    
     }


  
}