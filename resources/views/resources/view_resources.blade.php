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

    .video {
        display: grid;
    }

</style>


<body class="expand-data panel-data">
<!-- Topbar -->
@include ('includes/Top_bar')

<!-- side nav -->
@include ('includes/nav')

<!-- Side Header -->

    <div class="panel-content">
        <div class="filter-items">
            <div class="row grid-wrap mrg20">
                <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                    <div class="stat-box widget bg-clr1">
                       
                           <i class="fa fa-book" style="font-size: 18px;"></i>
                        <div class="stat-box-innr">
                            <div style="text-align:center;  color: #fff">RESOURCE CENTER</div>
                            <h5></h5>
                        </div>
                        <span></span>
                    </div>
                </div>  
               <div class="widget pad50-65">
                 <div class="widget-title2">
                  <!--  <i class="fab fa-osi" style="font-size: 50px"></i>
                    <h4 class="widget-title">Resource Center</h4> -->
              </div>
              <div class="rmv-ext6">
                <div class="row mrg20">


<style>

div {
    line-height: 20px;
  }


.resource-holder:hover{
    /*overflow: visible; 
    white-space:none; 
    width: auto;
    position: absolute;*/
    border:1px solid #D3D3D3;
   
}
#data:hover+div {
    margin-top:20px;
}
</style>
  
         @if(count($resources) > 0)
            @foreach($resources as $resource)

                <?php if($resource->file_type == 'video')
                        
                         $fonticon = "fa-file-video-o";

                    else if($resource->file_type == 'audio')
                         $fonticon = "fa-file-audio-o";

                     else if($resource->file_type == 'document')
                         $fonticon = "fa-file";
                ?>

              <div class="col-md-4 col-sm-6 col-lg-4 resource-holder">
                <div class="serv-bx styl2 brd-rd5">
                  <i class="fa {{$fonticon}}" style="font-size:48px;color:black"></i>
                  <div class="serv-inkkkf">
                  <div id="data">
                    <p>{{str_limit($resource->title,'60','...')}}</p>
                  </div>


                     @if($resource->file_type == 'video')
                <a href='{{route("watch_resource",["id"=>$resource->id,"title"=>str_slug($resource->title)])}}'>
                    <button  class="btn btn-danger btn-xs" style="background-color: #009efb;border:none; max-height: 70px">Play Video  <i class="fa fa-play"></i></button> 
                    </a>
<!-- 
                          <a href="/watch/resource/{{$resource->id}}" ><button class="btn btn-danger" style="background-color: #009efb;border:none;">Play Video <i class="fa fa-play"></i></button></a> -->
                
                     @elseif($resource->file_type == 'audio')
                        <button class="btn btn-danger">Listen <i class="fa fa-earphone"></i></button>

                     @elseif($resource->file_type == 'document')

                       <a href="{{URL::to("/")."/".$resource->file}}" download="{{$resource->file}}"><button class="btn btn-danger btn-xs" style="background-color: #009efb; border: none ">Download  <i class="fa fa-download"></i></button></a>
                     @endif
              
                   
                  </div>
                </div>
              </div>
              @endforeach
          @else
                <div class="alert alert-info"></div>
        @endif
       {{$resources->links()}}

              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Panel Content -->
@include('includes/footer')