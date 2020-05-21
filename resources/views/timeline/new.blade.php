

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
 a:hover{
    text-decoration:underline;                 
  }
</style>

<body class="expand-data panel-data">
    
    <!-- Top bar -->
@include ('includes/Top_bar')
    <!-- Topbar -->


    <!-- side nav -->

   @include ('includes/nav')
   
    <!-- Side Header -->
    <!-- Topbar -->


  <!-- Topbar -->
  <!-- Side Header -->

  <div class="option-panel">
    <span class="panel-btn">
      <i class="fa ion-android-settings fa-spin"></i>
    </span>
    <div class="color-panel">
      <h4 style="color:#2faee0 ">Welcome to LoveWorld Networks Portal!</h4>
    </div>
  </div>
          
  <!-- Page Top -->


  <div class="panel-content">
    <div class="widget pad50-65">
      <div class="profile-wrp">
        <div class="row">
          <div class="col-md-12 col-sm-8 col-lg-12">
          <div class="col-md-12 grid-item col-sm-12 col-lg-12">
      <div class="stat-box widget bg-clr2">
                    <div class="wdgt-ldr">

                    </div>
                    <i class="ion-android-desktop"></i>
                    <div class="stat-box-innr">
                            <span>TimeLine
                               </span>
                        <h5></h5>
                    </div>
                    <span>
                           </span>
                </div>
  </div>
            <div class="usr-actvty-wrp widget pad50-40">
              </div>
              <form method="post" action="{{route('addtimeline')}}" enctype="multipart/form-data" >
              {{ csrf_field() }}
                <textarea name="text_body" placeholder="What's in your mind"></textarea>

                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000"> <br>            
                <div class="cnt-opt">
                  <div class="cnt-opt-lst">
                    <span>
                      <label class="fileContainer">
                        <i class="fa fa-picture-o"></i>
                        <input type="file"  name="file" />
                      </label>
                    </span>
                   <!--  <span>
                      <label class="fileContainer">
                        <i class="fa fa-microphone"></i>
                        <input type="file" />
                      </label>
                    </span> -->
                    <span>
                      <label class="fileContainer">
                        <i class="ion-upload"></i>
                        <input type="file" value="file_upload" />
                      </label>
                    </span>
                    <span>
                      <i class="fa fa-paper-plane"></i>
                    </span>
                  </div>
                  <button class="brd-rd5 green-bg" type="submit">Post</button>
                </div>
              </form><br><br><br><br><br>

  <!-- Page Top -->

     
  <div class="panel-content">
    <div class="widget pad50-40">
      <div class="timeline-wrp">
        <div class="timeline-innr">
          <div class="timeline-label">

        <!--     <span class="brd-rd5 blue-bg"></span> -->
          </div>
         <!-- <i class="fas fa-bullhorn" style="font-size: 50px"></i>
           <h2 class="widget-title" style="text-align: center; color: #009efb">Information Desk</h2><br><br> -->


@if(count($timelines) > 0)

   @foreach($timelines as $timeline)
          <div class="timeline-block">
            <span class="pst-tm">
              <i class="ion-clock"></i> {{$timeline->created_at->diffForHumans()}}</span>

   

            <i class="sts away"></i>
            <div class="brd-rd5 act-pst">
             <!--  <img class="brd-rd" src="{{ URL::to("/").$timeline->file}}" style="height: 50px;" alt="" /> -->
              <div class="act-pst-inf">
                <div class="act-pst-inr">
                  <h5>
                    <a href="#" title="">{{$timeline->user->full_name()}}</a><br>
                  </h5>
                  <a href="#" title=""></a>
                </div>
                <div class="act-pst-dta">
                   <a href='{{url("readMore/{$timeline->id}")}}'><p>{{substr($timeline->text_body, 0,82)}}</p></a><br>
                </div>
              </div>     
               @if(!empty($timeline->file))
               
                 <a href='{{url("readMore/{$timeline->id}")}}'><img src="{{$timeline->file}}" alt=""></a>
             
               @endif
             <!-- <a href='{{url("readMore/{$timeline->id}")}}'> <img src="{{$timeline->file}}" alt=""></a> -->
            </div>

          </div>

        @endforeach

      @endif  
        </div>
   
  
    </div>
  </div>
  </div>
  
  @include('includes/footer')



















  <div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="topbar-bottom-colors">
            <i style="background-color: #2c3e50;"></i>
            <i style="background-color: #9857b2;"></i>
            <i style="background-color: #2c81ba;"></i>
            <i style="background-color: #5dc12e;"></i>
            <i style="background-color: #feb506;"></i>
            <i style="background-color: #e17c21;"></i>
            <i style="background-color: #bc382a;"></i>
        </div>
    </div>
    <br><br>

    <div class="" style="margin-top:30px; max-height:30%; ">
        <div class="row">
            @if(count($vids) > 0)
                @foreach($vids as $vid)
                    @if($vid->file_type == 'video')
                        <div class="col-md-2"><a href="{{$vid->id}}">
                                <div align="center" class="embed-responsive embed-responsive-16by9">
                                    <video autoplay="false" class="embed-responsive-item" controls>
                                        <source src="{{$vid->file}}" type="video/mp4">
                                    </video>
                                </div>
                                <br>
                                <p style="color: #009efb; ">{{substr($vid->title, 0, 30)}}</p></a>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</div>
<br><br>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="topbar-bottom-colors">
            <i style="background-color: #2c3e50;"></i>
            <i style="background-color: #9857b2;"></i>
            <i style="background-color: #2c81ba;"></i>
            <i style="background-color: #5dc12e;"></i>
            <i style="background-color: #feb506;"></i>
            <i style="background-color: #e17c21;"></i>
            <i style="background-color: #bc382a;"></i>
        </div>
    </div>
</div>
<div class="col-md-8"></div>
<!--  <div style="padding-top: 100px"> -->
<!--  -->
