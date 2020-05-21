<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use App\Resource;
use App\Comment;
use Auth;
use DB;


class resourceController extends Controller
{

//return resource view -->
    public function resource()
    {

        return view('resources.resource');
    }

    public function addresource(Request $request)
    {

        $this->validate($request, [

            'title' => 'required',
            'file' => 'required'

        ]);



        $video = array('mp4');
        $audio = array('mp3');
        $ceflixSubscription = array('docx', 'pdf', 'doc');

        // return 'validation passed';
        $addresource = new Resource();
        $addresource->title = $request->input('title');
        $addresource->file = $request->input('file');




        $file = Input::file('file');


        $file_extension = $file->getClientOriginalExtension();

        $file_name = time() . "." . $file->getClientOriginalExtension();


        //store filepath in database for referencing
       // $addresource->file = $url;


        if (in_array($file_extension, $video)) {



            $imageName = time().'.'.$request->file->getClientOriginalExtension();
            $image = $request->file('file');
            $path = "support/".$imageName;
            $t = Storage::disk('s3')->put($path, file_get_contents($image), 'public');
            $imageName = Storage::disk('s3')->url($path);


            /**
            Start the encoding of the video
             */

            $filename = md5(time().'.'.$request->title);

            $enconding_id=$_ENV['ENCODING_ID'];
            $enconding_KEY=$_ENV['ENCODING_KEY'];

            $destination = "http://".urlencode($_ENV['AWS_KEY']).":".urlencode($_ENV['AWS_SECRET'])."@".$_ENV['AWS_BUCKET'].".s3.amazonaws.com/support/encvid/".$filename.".mp4?acl=public-read";
            $thumbnail = "http://".urlencode($_ENV['AWS_KEY']).":".urlencode($_ENV['AWS_SECRET'])."@".$_ENV['AWS_BUCKET'].".s3.amazonaws.com/support/encvid/thumb/".$filename.".jpg?acl=public-read";

            $json = '{
	                    "query" : {
	                        "userid": "'.$enconding_id.'",
	                        "userkey": "'.$enconding_KEY.'",
	                        "action": "AddMedia",
	                        "source": "'.$imageName.'",
	                        "notify_format": "json",
	                        "notify": "' .route('resource').'",
	                        "notify_encoding_errors": "' .route('resource').'",
	                        "format": [
	                            {
	                                "output" : "mp4",
	                                "size" : "1280x720",
	                                "bitrate" : "2500k",
	                                "audio_bitrate" : "192k",
	                                "audio_sample_rate" : "48000",
	                                "audio_channels_number" : "2",
	                                "framerate" : "30",
	                                "keep_aspect_ratio" : "yes",
	                                "video_codec" : "libx264",
	                                "profile" : "high",
	                                "audio_codec" : "dolby_aac",
	                                "two_pass" : "no",
	                                "turbo" : "no",
	                                "twin_turbo" : "no",
	                                "cbr" : "no",
	                                "deinterlacing" : "auto",
	                                "keyframe" : "300",
	                                "audio_volume" : "100",
	                                "rotate" : "def",
	                                "metadata_copy" : "no",
	                                "strip_chapters" : "no",
	                                "hint" : "no",
	                                "destination" : "'.$destination.'"
	                            },
	                            {
	                                "output" : "thumbnail",
	                                "time" : "11",
	                                "width" : "680",
	                                "destination" : "'.$thumbnail.'"
	                            }
	                        ]
	                    }
	                }';

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "http://manage.encoding.com/");
            curl_setopt($ch, CURLOPT_POSTFIELDS, "json=" . urlencode($json));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            $response = curl_exec($ch);

            $server_response = json_decode($response);


            if(isset($server_response->response->errors)){

                return Redirect::back()
                    ->with('message','Error! Unable to encode video file')->with("type","danger");exit;

            }


            $path_img = "support/encvid/thumb/".$filename.".jpg";
            $path_video = "support/encvid/".$filename.".mp4";

            //store the new video into the databsae

            $addresource->file_type = "video";

            $addresource->file = Storage::disk('s3')->url($path_video);
            $addresource->thumbnail =  Storage::disk('s3')->url($path_img);

            /*$video->status = 0;
            $video->enc_message =$server_response->response->message;
            $video->enc_media_id =$server_response->response->MediaID;*/

            $addresource->user_id = Auth::user()->id;
            $addresource->unix_time = time();

        

        } else if (in_array($file_extension, $audio)) {
            $addresource->file_type = "audio";

        } else if (in_array($file_extension, $document)) {
            $addresource->file_type = "document";

        } else {

            return redirect('/resource')->with('response', 'Sorry the file you uploaded is unsupported');
            exit;

        }
        $addresource->save();

        return redirect('/resource')->with('response', 'post added Successfully');

    }


//function that process the resource form-->
    public function addresource_old(Request $request)
    {

        $this->validate($request, [

            'title' => 'required',
            'file' => 'required'

        ]);


        $video = array('mp4');
        $audio = array('mp3');
        $document = array('docx', 'pdf', 'doc');

        // return 'validation passed';
        $addresource = new Resource();
        $addresource->title = $request->input('title');
        $addresource->file = $request->input('file');


        $file = Input::file('file');


        $file_extension = $file->getClientOriginalExtension();

        $file_name = time() . "." . $file->getClientOriginalExtension();

        $file->move(public_path() . '/uploads/', $file_name);

        $url = '/uploads/' . $file_name;


        $addresource->file = $url;


        if (in_array($file_extension, $video)) {

            $addresource->file_type = "video";

        } else if (in_array($file_extension, $audio)) {
            $addresource->file_type = "audio";

        } else if (in_array($file_extension, $document)) {
            $addresource->file_type = "document";

        } else {

            return redirect('/resource')->with('response', 'Sorry the file you uploaded is unsupported');
            exit;

        }
        $addresource->save();

        return redirect('/resource')->with('response', 'Message Successfully');

    }


    //return the view of resource center page-->
    public function view_resources()
    {

        // $resources = DB::table('resources')->get();
        $resources = Resource::orderBy('id', 'desc')->paginate(12);

        // dd($contacts);
        return view('resources.view_resources', ['resources' => $resources]);
    }


//return process and return a single video on watch video  page -->
   /* public function watch_resource($post_id)
    {

        $resource = Resource::where('id', '=', $post_id)->first();
        $vids = DB::table('resources')->get();
        $comment = Resource::find($post_id);
        $commentCtr = Resource::where(['id' => $comment->id])->count();

        $comments = DB::table('users')
            ->join('comments', 'users.id', '=', 'comments.user_id')
            ->join('resources', 'comments.post_id', '=', 'resources.id')
            ->where('resources.id', $post_id)
            ->orderBy('resources.id','desc')
            ->get();

        // return view('resources.watch_resource', ['resource' => $resources, 'vids' => $vids]);

        return view('resources.watch_resource', ['resource' => $resource, 'vids' => $vids, 'comments' => $comments, 'commentCtr' => $commentCtr]);
    }*/


     public function watch_resource($post_id)
    {

            $data['comments'] =   Comment::where("post_id",$post_id)->orderBy('id', 'desc')->get();
            $data['resource'] =   Resource::where('id', '=', $post_id)->first();
            $data['vids'] =       Resource::where('id', '!=', $post_id)->get();


        return view('resources.watch_resource', $data);
    }

    //This function add comment in the watch_resource page
    public function addcomment(Request $request, $post_id)
    {

        $this->validate($request, [

            'comment' => 'required'
        ]);
        $comment = new Comment;
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $post_id;
        $comment->comment = $request->input('comment');
        $comment->save();
        return redirect("/watch/resource/{$post_id}")->with('response', 'Comment Added Successfully');

    }

    public function timlineSideVideos(){

    $data['vids'] =  Resource::where('id', '!=', $post_id)->get();

     return view('timeline.readMore', $data);

    }


}
