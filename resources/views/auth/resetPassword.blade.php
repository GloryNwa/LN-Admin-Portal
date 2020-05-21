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

  <!-- Topbar -->



  @include('includes/footer')<div class="panel-content">
    <div class="lgn-wrp grysh">
      <div class="bg-img" style="background-image: url(images/resource/bg-img1.png);"></div>
      <div class="lgn-innr">
        <div class="widget lgn-frm">
          <div class="frm-tl">
              <a href="#" title="">
                  <img src="images/logo.png" alt="" />
                </a>
          </div>
          <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

            <div class="row mrg10">
              <div class="col-md-12 col-sm-12 col-lg-12">
                <input class="brd-rd5" type="text" placeholder="Email"  name="email" value="{{ old('email') }}" required />
                @if ($errors->has('email'))
                     <span class="help-block">
                       <strong>{{ $errors->first('email') }}</strong>
                      </span>
               @endif
              </div>
              <div class="col-md-12 col-sm-12 col-lg-12">
                <input class="brd-rd5" type="password" placeholder="Password" name="password" value="" required />
                @if ($errors->has('password'))
                    <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                   </span>
                @endif
              </div>
          
              <div class="col-md-12 col-sm-12 col-lg-12">
                <button class="green-bg brd-rd5" type="submit">Resset Password</button>
              </div>
             
              
          </form>

           
        </div>
      </div>
      <footer>
        <p>Copyright
          <a href="#" title="" ></a> &amp; 2018</p>
      </footer>
    </div>
    <!-- Login Wrapper -->
  </div>