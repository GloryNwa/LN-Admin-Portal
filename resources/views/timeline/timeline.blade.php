<!DOCTYPE html>
<html>

<head>
    <!-- Meta-Information -->
    <title>LoveWorld Networks | Portal</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="{{ URL::to("/")}}/css/bootstrap.min.css" type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="/css/icons.min.css" type="text/css">
    <link rel="stylesheet" href="{{ URL::to("/")}}/css/main.css" type="text/css">
    <link rel="stylesheet" href="{{ URL::to("/")}}/css/responsive.css" type="text/css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="{{ URL::to("/")}}/css/color-schemes/color.css" type="text/css" title="color3">
    <link rel="alternate stylesheet" href="{{ URL::to("/")}}/css/color-schemes/color1.css" title="color1">
    <link rel="alternate stylesheet" href="{{ URL::to("/")}}/css/color-schemes/color2.css" title="color2">
    <link rel="alternate stylesheet" href="{{ URL::to("/")}}/css/color-schemes/color4.css" title="color4">
    <link rel="alternate stylesheet" href="{{ URL::to("/")}}/css/color-schemes/color5.css" title="color5">
</head>


<style>
    a:hover {
        text-decoration: underline;
    }
</style>

<body class="expand-data panel-data">
<!-- Top bar -->
@include ('includes/Top_bar')
<!-- Topbar -->


<!-- side nav -->

@include ('includes/nav')


<div class="panel-content" style="margin-right: 10px; margin-left: auto; padding-left:70px;padding-right: 50px;">
    <div class="widget pad50-65">
        <div class="profile-wrp">
            <div class="row">
                <div class="col-md-7">

                  

                    <div class="usr-actvty-wrp widget pad50-40">
                        <img src="" class="" alt="" id="image" style="display:none;width:100px;"/>
                    </div>
                    <!--      <div style="padding-right: 900px"> -->
                    <form method="post" action="{{route('addtimeline')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <textarea name="text_body" placeholder="What's in your mind" required="required"
                                  style="width:100% !important;"></textarea>
                        <div class="cnt-opt">
                            <div class="cnt-opt-lst">
                    <span>
                      <label class="fileContainer">
                        <i class="fa fa-picture-o"></i>
                        <input type="file" id="files" name="file" value="file_upload"/>
                      </label>
                    </span>
                   </div>
                      <button class="brd-rd5 green-bg" type="submit">Post</button>
                   </div>
                  </form>
                 <br><br><br><br><br>
                    <!--    </div> -->

               <script>
                  document.getElementById("files").onchange = function () {
                      var reader = new FileReader();

                      reader.onload = function (e) {
                          // get loaded data and render thumbnail.
                          $("#image").show();
                          document.getElementById("image").src = e.target.result;
                      };

                      // read the image file as a data URL.
                      reader.readAsDataURL(this.files[0]);
                  };
               </script>
             <div class="col-md-4">
                @if(!empty($profile))
                    <img src="{{$profile->profile_pic}}" id="image" width="300px" class="avatar" alt="">
                @else
                <!--  <img src="{{url('images/gil_1.jpg')}}" class="avatar" alt="" > -->
                    <img src="" class="avatar" alt="">
                @endif

                @if(!empty($profile))
                    <p class=""> {{$profile->name}}</p>
                @else
                    <p></p>
                @endif
          </div>

        <div class="act-pst-lst">
            <div class="act-pst">
                @if(count($timelines) > 0)

                    @foreach($timelines as $timeline)

                        <div class="act-pst-lst">
                            <!-- <div class="act-pst"> -->
                           
                                @if(!empty(Auth::user()->profile_pic))
                                    <img class="brd-rd50 img-responsive" src="{{Auth::user()->profile_pic}}"
                                         style="max-width: 60px"/>
                                @else
                                    <img class="brd-rd50" src="/images/photo.png"/>
                                @endif
                                <div style="color:#009efb">{{Auth::user()->full_name()}}</div>
                                <span style="font-size:11px; color: gray"><i class="ion-clock"> {{$timeline->created_at->diffForHumans()}}</i></span>
                                   <div class="act-pst-inf">
                                    <div class="act-pst-inr"></div>
                                     <div class="act-pst-dta">
                                        <a href='{{url("readMore/{$timeline->id}")}}'><p style="font-size: 18px">{{substr($timeline->text_body, 0,50)}}</p></a>
                                    </div>
                                    <span class="spnd-tm"></span><br><br>
                                   
                                    @if(!empty($timeline->file))
                                        <div class="act-pst-dta">
                                            <a href='{{url("readMore/{$timeline->id}")}}'><img id="image"
                                                                                               src="{{$timeline->file}}"
                                                                                               alt=""
                                                                                               class="img-responsive"
                                                                                               style="width:100%;"></a><br><br>
                                        <span class="spnd-tm" style="float:left"> comments | {{count($timeline->comments)}}</span>
                                        </div>
                                    @endif
                                   
                                     <!-- <ul class="nav nav-pills">    
                                    <li role="presentation">
                                         <a href='{{url("/delete/{$timeline->id}")}}'>
                                          <span class="fa fa-trash"> Delete</span>  
                                        </a><br>
                                     </li>
                                  </ul> -->
                                </div>
                          <!--     </div> -->
                              </div>
                              @endforeach
                              @else
                                  <div class="col-md-3">
                                      <div class="alert alert-info">
                                          No post available
                                      </div>
                                  </div>
                              @endif
                          </div>
                             <!--  -->
                        </div>
                        <!-- Activity Post List -->
                        <!-- <div class="vw-mr-act">
                            <a href="#" title="">View More Activity</a>
                        </div>
 -->
                    </div>
                    
                <div class="col-md-2 col-sm-2 col-lg-3 xs-hidden" style="position:fixed; margin:0 0 0 600px;">
                    <div class="col-md-10 offset-2" >
                        @if(count($informations) > 0)
                           <div style="background:red !important;">
                               @foreach($informations as $information)
                                   <div class="timeline-block resource-holder">
                                       <div class="pst-tm">
                                           <span style="float:right"><i class="ion-clock"></i> {{$information->created_at->diffForHumans()}}</span></div>
                                       <div class="brd-rd5 act-pst" style="background: #2c3e50;">
                                           <img class="brd-rd" src="{{ URL::to("/").$information->file}}" style="max-height: 250px;overflow: hidden;width:100%;"
                                                alt=""/>
                                           <div class="act-pst-inf">
                                               <div class="act-pst-inr">
                                                   <br />
                                                   <h5>
                                                   
                                                       <a href='#' style="color:#b1bfc8">{{$information->title}}</a>
                                                   </h5>
                                                   <a href="#" title=""></a>
                                               </div>
                                             <!--   <div class="act-pst-dta">
                                                   <p  style="color:#b1bfc8;">{{substr($information->description, 0,420)}}</p>
                                               </div> -->
                                           </div>
                                           <a href='{{route("moreInfo",["id"=>$information->id,"title"=>str_slug($information->title)])}}'>
                                             <span class="fa fa-eye"style="text-align: center;color: #009efb;"> View More</span></a>
                                        </a>
                                       </div>
                                   </div>
                               @endforeach
                           </div>
                        @else
                            <div><img src="{{ URL::to("/")}}/images/sneeze1.png" style="height: 50px;"></div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Panel Content -->
@include ('includes/footer')


  




























































