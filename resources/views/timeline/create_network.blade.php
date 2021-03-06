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

<!-- Options Panel -->
<div class="pg-tp">
    <!-- <i class="ion-cube"></i> -->
    <!-- <div class="pr-tp-inr"> -->
    <!-- <h4>LoveWorld Networks</h4> -->
    @if(session()->has('response'))
       <div class="alert alert-success">
       {{ session()->get('response') }}
       </div>
   @endif



    <!-- @if(session('response'))
        <div class="alert alert-{{session('type')}}">{{session('response')}}</div>
    @endif -->
    <span></span>
</div>

</div><br><br>
<!-- Page Top -->

<!-- Page Top -->
<div class="container" style="max-width: 700px; padding-top:70px ">
    <div class="panel-content">
        <div class="widget pad40-50">
            <div class="widget-title2">
                <h4>Create Networks</h4>
                <span></span>
            </div>
            <form class="form-wrp" method="POST" action="{{route('addNetwork')}}">
                {{ csrf_field() }}
        <div class="form-group">
         <div class="row mrg20">
          <div class="col-md-12 col-sm-12 col-lg-12">
            <input class="brd-rd5" type="text" name="network_name" placeholder="Networks*" required="required" />
          </div>
          
          
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-lg-12">
        <!--   <div class="col-md-6 col-md-offset-4"> -->
           <button type="submit" class="btn btn-primary btn-large btn-block" style="border: none">
           Create
           </button>
          </div>
      </div>
      </div>
    </div>
   </form>
  </div>
  </div>
 </div>
    <!-- Panel Content -->


    <!-- Vendor: Javascripts -->
@include('includes/footer')