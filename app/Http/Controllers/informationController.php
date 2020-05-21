<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Information;
use App\create;
use Auth;
use DB;




class informationController extends Controller
{
    public function create(Request $request){
         return view('information.create');


    }


     public function form(Request $request){

    	 $this->validate($request, [
    	 	'title'   => 'required',
    	 	'message'=> 'required',
           
    	 	]);

       	 // return 'validation passed';
       	 $form = new Information() ;
         $form->title = $request->input('title');
         // $form->user_id = Auth::user()->id;
         $form->description = $request->input('message');

         //Check if the user uploaded a file, else continue
         if(Input::hasFile('file')){
             $file = Input::file('file');
             $file->move(public_path(). '/uploads/', $file->getClientOriginalName());
             $url ='/uploads/'. $file->getClientOriginalName();
             // return $url;

             $form->file = $url;
         }
         
         $form->save();
         return redirect('/create')->with('response', 'Information created successfully!');


    }

    

     public function info_page(){
      $informations = DB::table('informations')->get();
      $informations = Information::orderBy('id','desc')->paginate(15);

              // dd($contacts);
       return view('information.info_page', [ 'informations' => $informations]);   
   }

   public function manage_info(){
         $informations = DB::table('informations')->get();
         $informations = Information::orderBy('id','desc')->paginate(10);

       return view('information.manage_info', ['informations' => $informations]);


  }


    public function view_info($id){
        $informations  = Information::where('id', '=', $id)->get();

        	return view('information.view_info', ['informations' => $informations]);

}

    public function moreInfo($id){
        $informations  = Information::where('id', '=', $id)->first();

        	return view('information.moreInfo', ['information' => $informations]);

}


  public function edit_info($id){
            $informations = Information::all();
            $informations = Information::find($id);

            $data['information'] = $informations;
        

             return view('information.edit_info', $data);
    }



    public function editInfo(Request $request, $id){

      $this->validate($request, [
            // 'title'  => 'required',
            // // 'description' => 'required',
            'file' => 'required'
            ]);

         // var_dump( $request->input('post_title'));exit;
         
         $informations              = new Information;
         $informations->title  = $request->input('title');
         $informations->description  = $request->input('description');
         $informations ->file = $request->input('file');

         if(Input::hasFile('file')){
             $file = Input::file('file');
             $file->move(public_path(). '/uploads/', $file->getClientOriginalName());
             $url = '/uploads/'. $file->getClientOriginalName();
             // return $url;
             // exit();
         }
            $informations->file = $url;
             $data = array(
                  'title' =>  $informations->title,
                  'description' => $informations->description,
                  'file'  => $informations->file
                 

             );
             Information::where('id', $id)->update($data);
              $informations->update();
             return redirect('/manage_info')->with('message', 'Information updated successfully');
           // return Auth::user();
           // exit();

    }



    public function deletePost($id){

         Information::where('id', $id)->delete($id);
         return redirect('/manage_info')->with('message', 'Post deleted duccessfully');
   }

  // public function destroy($id){
  //   DB::table("information")->delete($id);
  //     return redirect('/manage_info')->with('message', 'Post deleted duccessfully');
  // }

}
