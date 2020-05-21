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

  <div class="pg-tp">
    
       @if(count($errors) >0)
       @foreach($errors->all() as $error)
         <div class="alert alert-danger">{{$error}}</div>
           @endforeach
       @endif 
     @if(session('response'))
      <div class="alert alert-success">{{session('response')}}</div>
     @endif
      <span></span>
    </div>

  </div><br><br>

  
  <!-- Page Top -->
 <div class="container" style="max-width: 700px; padding-top:70px ">
  <div class="panel-content">
    <div class="widget pad50-65">
      <div class="widget-title2">
        <h4>Create Resource:</h4>
        <span></span>
      </div>
      <form class="form-wrp" method="POST" action="{{url('/addresource')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <br>
        <div class="row mrg20">
          <div class="col-md-12 col-sm-12 col-lg-12">
            <input class="brd-rd5" type="text" name="title" placeholder="Title*" required="required" />
          </div>
          
           <div class="col-md-12 col-sm-12 col-lg-12">
           <div class="form-group">
            <label class="sr-only" for="name">File</label>
            <input class="form-control" type="file" id="file" name="file" value="file_upload" placeholder="file*" required="required" data-validation-required-message="Please chose a photo."/>
            <p class="help-block text-danger"></p>
          </div>
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
      </form>
    </div>
  </div>
  <!-- Panel Content -->
 

@include('includes/footer')