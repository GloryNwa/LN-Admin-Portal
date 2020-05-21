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

<!-- Side Header -->
<!-- Topbar -->

<div class="panel-content" style="margin-right: 10px; margin-left: auto; padding-left:70px;padding-right: 50px">
    <div class="widget pad50-65">
        <div class="profile-wrp">
            <div class="row">
                <div class="col-md-12">

                    <div class="usr-actvty-wrp widget pad20-10">
                    </div>
                    <div class="act-pst-lst">
                        <div class="act-pst">

                            <img src="{{ $post->file}}" style="width: 100%; " alt=""/>
                            <div class="act-pst-inf">
                                <div class="act-pst-inr">
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="act-pst-dta">
                                            <p>{{$post->text_body}}</p><br>
                                            <span class="spnd-tm"><i class="ion-clock">  {{$post->created_at->diffForHumans()}}</i></span>
                                            <a href="{{url("/timeline")}}">
                                                <!-- <button class="btn btn-info btn-xs" style="text-align: center;background-color: #009efb;border:none;">
                                                    Go Back
                                                </button> -->
                                            </a>
                                        </div>
                                    </div>
                                     

                                    <!-- <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                                         <div class="traffic-src widget">
                                              <h4 class="widget-title "><a href="#" class=""></a></h4>
                                                <div class="trfc-cnt">
                          -->

                                    <!--  -->
                                    <!-- </div>
                                </div> -->

                                </div>
                                <br><br>
                                <!--  <div class="row">
                                    <div class="col-md-8 col-sm-8 col-lg-8">
                                    <div class="act-pst-lk-stm">
                                      <a class="brd-rd5 blue-bg-hover" href="#" title="">
                                      <i class="ion-thumbsup"></i> Like</a>
                                 </div>
                                </div>
                              </div> -->

                            </div>
                            <!-- Timeline Comment Form -->
                            <div class="row">
                                <div class="col-md-11 col-sm-10 col-lg-11">
                                    <form method="POST" action="/add/comment/timeline">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <textarea id="comment" rows="3" cols="" style="border-radius: 10px"
                                                      class="form-control" name="comment" value="comment"
                                                      placeholder="Write Comment" required autofocus></textarea>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="timeline_id" value ="{{$timeline_id}}"/>

                                            <!--  <div class="col-md-6 col-md-offset-4"> -->
                                             <button class="btn btn-info btn-lg" style="text-align: center;background-color: #009efb;border:none;">
                                                Post Comment
                                            </button>
                                        </div>
                                    </form>
                                    <div class="col-md-12">

                                        <div class="col-md-12">
                                            @if(count($comments)> 0)
                                                @foreach($comments as $comment)
                                                    <p>{{$comment->comment}}</p>
                                                    <p>Posted By: {{$comment->user->full_name()}}</p>
                                                    <hr>
                                                @endforeach
                                            @endif


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
       </div>

        <!-- Panel Content -->
@include ('includes/footer')


  