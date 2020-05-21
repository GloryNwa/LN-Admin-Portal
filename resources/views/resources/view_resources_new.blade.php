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

        <i class="ion-cube"></i>
        <div class="stat-box-innr">
            <div style="text-align:center; font-size:30px; color: #fff">INFORMATION DESK</div>
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

            </div>

        </div>
    </div>
</div>




@include('includes/footer')