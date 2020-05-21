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
    
  <div class="col-md-12 grid-item col-sm-12 col-lg-12">
      <div class="stat-box widget bg-clr3">
          <div class="wdgt-ldr">
          </div>

          <i class="fa fa-bullhorn" style="font-size: 18px;"></i>
          <div class="stat-box-innr">
           <div style="text-align:center;  color: #fff">INFORMATION DESK</div>
            <h4></h4>
          </div>
          <span></span>
      </div>
  </div>

  <div class="panel-content">
    <div class="widget pad50-40">
      <div class="timeline-wrp">
        <div class="timeline-innr">
          <div class="timeline-label">
        <!--     <span class="brd-rd5 blue-bg"></span> -->
          </div>





          <div class="timeline-block">
            <span class="pst-tm">
              <span style="font-size:13px; color: gray"><i class="ion-clock">{{$information->created_at->diffForHumans()}}</i></span>

                 </span>

            <i class="sts away"></i>
            <div class="brd-rd5 act-pst">
              <p><img class="brd-rd" src="{{ URL::to('/').$information->file}}" style="margin: 0 auto; width:100%;" alt="" /></p><br><br>
              <div class="act-pst-inf">
                <div class="act-pst-inr">
                  <h5>
                    <h5>{{$information->title}}</h5><br><br>
                  </h5>
                  <a href="#" title=""></a>
                </div>
                <div class="act-pst-dta">
                  <p>{{$information->description}}</p>
                </div>
              </div>
              <a href="{{route("info_page")}}">
                 <button  class="btn btn-info btn-xs" style="text-align: center;background-color: #009efb;border:none;" >Go Back</button> 
             </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  



@include('includes/footer')