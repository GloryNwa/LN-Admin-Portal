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
@include ('includes/Top_bar')
<!-- Topbar -->
<!-- side nav -->
@include ('includes/nav')

<!-- Side Header -->

<div class="panel-content">
    <div class="filter-items">
        <div class="row grid-wrap mrg20" >
            <div class="col-md-12 grid-item col-sm-12 col-lg-12" >
                <div class="traffic-src widget" >
                    <div class="row">


                        <div class="col-md-9">
                            @if(count($resource)==1)
                                <div class="traffic-chart-wrp" style="background: #272c33;">

                                    <div align="center" class="embed-responsive embed-responsive-16by9">
                                        <video autoplay loop class="embed-responsive-item" controls  style="width:100%border-radius: 15px;">
                                            <source src="{{$resource->file}}" type="video/mp4">
                                        </video>
                                    </div>
                                    <br>
                                   
                                </div> <br>
                                 <h6 style="">{{$resource->title}}</h6>
                        
                            @endif
                               <hr>
                        </div>
                     
                        <style>
                            .comment_box{
                                padding-top:30px;
                            }
                        </style>

                        <div class="col-md-3">
                            <div class="comment_box_holder" style="background: #272c33;padding:20px;border-radius: 7px;">
                            <div style="min-height:200px;max-height:390px;overflow: scroll;overflow-x: hidden">
                                @if(count($comments)> 0)


                                    @foreach($comments->all() as $comment)


                                        <div class="comment_box row">
                                            <div class="col-md-3">

                                                @if(!empty($comment->author->profile_pic))
                                               <img class="brd-rd50" src="{{$comment->author->profile_pic}}"  width="50px;" />
                                                    @else

                                                    <img class="brd-rd50" src="/images/photo.png" width="50px;" />

                                                @endif
                                            </div>
                                            <div class="col-md-9 ">
                                                <div style="color:#b1bfd2;font-size:13px;">{{$comment->author->full_name()}} <br>
                                               <span style="font-size:11px; color: gray"><i class="ion-clock"> {{$comment->created_at->diffForHumans()}}</i></span>
                                                </div>
                                            <p style="line-height: 120%;padding-top: 10px;">{{$comment->comment}}
                                            </div>
                                            <hr />
                                        </div>
                                    @endforeach
                                    @endif
                                   </div>
                                    <form method="POST" action='{{ url("/addcomment/{$resource->id}") }}'>
                                      {{ csrf_field() }}
                                      <div class="form-group">
                                          <textarea class="form-control" id="comment" name="comment" value="comment"  placeholder="Add comments"></textarea>
                                    </div>
                                     <div class="form-group">
                                     <button type="submit" class="btn btn-danger btn-xs" style="">
                                      Post Comment
                                     </button>
                                 </div>
                              </form>
                            </div>
                            <i class="fa fa-calendar-alt" style="font-size:50px" ;></i><br><br>
                        </div>
                    </div>
                </div>
            </div>
          <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                <div class="traffic-src widget">
                     <h4 class="widget-title "><a href="#" class=""></a></h4>
                       <div class="trfc-cnt">

                        <div class="row">
                      @if(count($vids) > 0)
                          @foreach($vids as $vid)
                              @if($vid->file_type == 'video')
                              <div class="col-md-3"><a href="{{$vid->id}}">
                                 <div align="center" class="" style="max-height: 310px;overflow: hidden;">
                                   @if(!empty($vid->thumbnail)) 
                                      <img src="{{$vid->thumbnail}}" style="width:100%;" class="img-thumbnail">
                                   @else
                                        <img src="/img/no-thumbnail.png" style="width:100%;" class="img-thumbnail">
                                    @endif
                                </div>
                                <br>
                                <span style="color: #009efb; "> {{substr($vid->title, 0, 30)}}</span></a><hr>
                            </div>
                                @endif
                            @endforeach
                        @endif
                  </div>        
            </div>
        </div>
    </div>
</div>





@include('includes/footer')






































