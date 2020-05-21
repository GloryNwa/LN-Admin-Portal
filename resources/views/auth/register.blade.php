@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-6 control-label">E-Mail Addrss</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('network') ? ' has-error' : '' }}">
                                this is the right page
                                <label for="password" class="col-md-4 control-label">Network</label>

                                <?php $networks  = \App\Network::all();?>
                                <div class="col-md-6">




                                    <select name="network" required class="form_control">

                                        <option value="">Select Network</option>
                                        @foreach($networks as $network)
                                          <option value="{{$network->id}}">{{$network->network_name}}</option>
                                        @endforeach


                                    </select>

                                    @if ($errors->has('network'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('network') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-6 control-label" style="font-size: 15px">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




<!DOCTYPE html>
<html>

<head>
    <!-- Meta-Information -->
    <title>LogIn Page</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="css/icons.min.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="css/color-schemes/color.css" type="text/css" title="color3">
    <link rel="alternate stylesheet" href="css/color-schemes/color1.css" title="color1">
    <link rel="alternate stylesheet" href="css/color-schemes/color2.css" title="color2">
    <link rel="alternate stylesheet" href="css/color-schemes/color4.css" title="color4">
    <link rel="alternate stylesheet" href="css/color-schemes/color5.css" title="color5">
</head>

<body class="expand-data panel-data">
<div class="topbar">
    <div class="logo">
        <h1>
            <a href="#" title="">
                <img src="images/logo1.png" alt=""/>
            </a>
        </h1>
    </div>
    <div class="topbar-data">
        <div class="usr-act">
            <i>HELLO, JOHN SMITH!</i>
            <span>
          <img src="images/resource/topbar-usr1.jpg" alt=""/>
          <i class="sts away"></i>
        </span>
            <div class="usr-inf">
                <div class="usr-thmb brd-rd50">
                    <img class="brd-rd50" src="images/resource/usr.jpg" alt=""/>
                    <i class="sts away"></i>
                    <a class="green-bg brd-rd5" href="#" title="">
                        <i class="fa fa-envelope"></i>
                    </a>
                </div>
                <h5>
                    <a href="#" title="">John Smith</a>
                </h5>
                <span>Co Worker</span>
                <i>076 9477 4896</i>
                <div class="act-pst-lk-stm">
                    <a class="brd-rd5 green-bg-hover" href="#" title="">
                        <i class="ion-heart"></i> Love</a>
                    <a class="brd-rd5 blue-bg-hover" href="#" title="">
                        <i class="ion-forward"></i> Reply</a>
                </div>
                <div class="usr-ft">
                    <a class="btn-danger" href="#" title="">
                        <i class="fa fa-sign-out"></i> Logout</a>
                </div>
            </div>
        </div>
        <form class="topbar-search">
            <button type="submit">
                <i class="ion-ios-search-strong"></i>
            </button>
            <input type="text" placeholder="Type and Hit Enter"/>
        </form>
        <ul class="tobar-links">
            <li>
                <a href="#" title="">
                    <i class="ion-ios-bell"></i>
                    <span class="blue-bg">02</span>
                </a>
                <div class="nti-drp-wrp">
                    <h5 class="blue-bg">
                        <span>You Have</span> 7 Notifications</h5>
                    <div class="nti-lst">
                        <div class="nti-usr">
                <span class="brd-rd50 rd-bg">
                  <i class="fa fa-cog"></i>
                </span>
                            <div class="nti-usr-inr">
                                <h5>
                                    <a href="#" title="">Sadi Orlaf</a>
                                </h5>
                                <span class="pst-tm">Just Now</span>
                                <i>Privacy settings changed</i>
                            </div>
                        </div>
                        <div class="nti-usr">
                <span class="brd-rd50 drkblu-bg">
                  <i class="ion-ios-personadd"></i>
                </span>
                            <div class="nti-usr-inr">
                                <h5>
                                    <a href="#" title="">Katti Smith</a>
                                </h5>
                                <span class="pst-tm">Just Now</span>
                                <i>Mike has added you as friend</i>
                            </div>
                        </div>
                        <div class="nti-usr">
                <span class="brd-rd50 orng-bg">
                  <i class="ion-thumbsup"></i>
                </span>
                            <div class="nti-usr-inr">
                                <h5>
                                    <a href="#" title="">Willimes Domson</a>
                                </h5>
                                <span class="pst-tm">Just Now</span>
                                <i>like your timeline photo</i>
                            </div>
                        </div>
                        <div class="nti-usr">
                <span class="brd-rd50 grn-bg">
                  <i class="ion-information-circled"></i>
                </span>
                            <div class="nti-usr-inr">
                                <h5>
                                    <a href="#" title="">Holli Doe</a>
                                </h5>
                                <span class="pst-tm">Just Now</span>
                                <i>Curabitur id eros limes suscipit blandit.</i>
                            </div>
                        </div>
                    </div>
                    <div class="nt-ftr">
                        <a href="#" title="">View All</a>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" title="">
                    <i class="ion-android-drafts"></i>
                    <span class="green-bg">10</span>
                </a>
                <div class="nti-drp-wrp">
                    <h5 class="green-bg">
                        <span>You Have</span> 7 New Messages</h5>
                    <div class="nti-lst">
                        <div class="nti-usr">
                            <img class="brd-rd50" src="images/resource/acti-thmb2.jpg" alt=""/>
                            <div class="nti-usr-inr">
                                <h5>
                                    <a href="#" title="">Sadi Orlaf</a>
                                </h5>
                                <span class="pst-tm">Just Now</span>
                                <i>Privacy settings changed</i>
                            </div>
                        </div>
                        <div class="nti-usr">
                            <img class="brd-rd50" src="images/resource/acti-thmb1.jpg" alt=""/>
                            <div class="nti-usr-inr">
                                <h5>
                                    <a href="#" title="">Katti Smith</a>
                                </h5>
                                <span class="pst-tm">Just Now</span>
                                <i>Mike has added you as friend</i>
                            </div>
                        </div>
                        <div class="nti-usr">
                            <img class="brd-rd50" src="images/resource/acti-thmb3.jpg" alt=""/>
                            <div class="nti-usr-inr">
                                <h5>
                                    <a href="#" title="">Willimes Domson</a>
                                </h5>
                                <span class="pst-tm">Just Now</span>
                                <i>like your timeline photo</i>
                            </div>
                        </div>
                        <div class="nti-usr">
                            <img class="brd-rd50" src="images/resource/acti-thmb4.jpg" alt=""/>
                            <div class="nti-usr-inr">
                                <h5>
                                    <a href="#" title="">Holli Doe</a>
                                </h5>
                                <span class="pst-tm">Just Now</span>
                                <i>Curabitur id eros limes suscipit blandit.</i>
                            </div>
                        </div>
                    </div>
                    <div class="nt-ftr">
                        <a href="#" title="">View All</a>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" title="">
                    <i class="ion-android-settings"></i>
                </a>
                <div class="set-lst">
                    <div class="set-bd">
                        <h4>General Settings</h4>
                        <ul class="sett-lst">
                            <li>
                  <span class="chck-bx">
                    <input id="set1" type="checkbox">
                    <label for="set1">Report Panel Usage</label>
                  </span>
                                <i>General Settings information</i>
                            </li>
                            <li>
                  <span class="chck-bx">
                    <input id="set2" type="checkbox">
                    <label for="set2">Mail Redirect</label>
                  </span>
                                <i>General Settings information</i>
                            </li>
                            <li>
                  <span class="chck-bx">
                    <input id="set3" type="checkbox">
                    <label for="set3">Expose Author Name</label>
                  </span>
                                <i>General Settings information</i>
                            </li>
                        </ul>
                        <h4>Chat Settings</h4>
                        <ul>
                            <li>
                  <span class="chck-bx">
                    <input id="set4" type="checkbox">
                    <label for="set4">Show Me As Online</label>
                  </span>
                            </li>
                            <li>
                  <span class="chck-bx">
                    <input id="set5" type="checkbox">
                    <label for="set5">Turn Off Notifications</label>
                  </span>
                            </li>
                        </ul>
                    </div>
                    <div class="set-ft">
                        <a class="btn-danger" href="#" title="">
                            <i class="fa fa-trash"></i> Delete Chat History</a>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" title="">
                    <i class="ion-android-contacts"></i>
                </a>
                <div class="cnt-lst">
                    <ul>
                        <li>
                            <div class="usr">
                                <img class="brd-rd50" src="images/resource/acti-thmb1.jpg" alt=""/>
                                <div class="usr-innr">
                                    <h5>
                                        <a href="#" title="">Smith Doe</a>
                                    </h5>
                                    <span>Co Worker</span>
                                    <a class="green-bg brd-rd5" href="#" title="">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="usr">
                                <img class="brd-rd50" src="images/resource/acti-thmb2.jpg" alt=""/>
                                <div class="usr-innr">
                                    <h5>
                                        <a href="#" title="">Katti Smith</a>
                                    </h5>
                                    <span>Graphic Designer</span>
                                    <a class="green-bg brd-rd5" href="#" title="">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="usr">
                                <img class="brd-rd50" src="images/resource/acti-thmb3.jpg" alt=""/>
                                <div class="usr-innr">
                                    <h5>
                                        <a href="#" title="">Willimes Domson</a>
                                    </h5>
                                    <span>Family Adviser</span>
                                    <a class="green-bg brd-rd5" href="#" title="">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="usr">
                                <img class="brd-rd50" src="images/resource/acti-thmb4.jpg" alt=""/>
                                <div class="usr-innr">
                                    <h5>
                                        <a href="#" title="">Holli Doe</a>
                                    </h5>
                                    <span>Company CEO</span>
                                    <a class="green-bg brd-rd5" href="#" title="">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
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
<!-- Topbar -->

<header class="side-header expand-header">
    <div class="nav-head">Main Navigation
        <span class="menu-trigger">
        <i class="ion-android-menu"></i>
      </span>
    </div>
    <nav class="custom-scrollbar">
        <ul class="drp-sec">
            <li class="has-drp">
                <a href="#" title="">
                    <i class="ion-home"></i>
                    <span>Dashboard</span>
                </a>
                <ul class="sb-drp">
                    <li>
                        <a href="dashboard.html" title="">Dashboard 1</a>
                    </li>
                    <li>
                        <a href="dashboard2.html" title="">Dashboard 2</a>
                    </li>
                    <li>
                        <a href="dashboard3.html" title="">Dashboard 3</a>
                    </li>
                    <li>
                        <a href="dashboard4.html" title="">Background Header</a>
                    </li>
                </ul>
            </li>
        </ul>
        <h4>Features</h4>
        <ul class="drp-sec">
            <li class="has-drp">
                <a href="#" title="">
                    <i class="ion-briefcase"></i>
                    <span>UI Elements</span>
                </a>
                <ul class="sb-drp">
                    <li>
                        <a href="pricing-plan.html" title="">Pricing Plan</a>
                    </li>
                    <li>
                        <a href="grids.html" title="">Grids</a>
                    </li>
                    <li>
                        <a href="calendar.html" title="">Calendar</a>
                    </li>
                    <li>
                        <a href="pagination.html" title="">Pagination</a>
                    </li>
                    <li>
                        <a href="buttons.html" title="">Button Styles</a>
                    </li>
                    <li>
                        <a href="dropdowns.html" title="">Dropdown Styles</a>
                    </li>
                    <li>
                        <a href="tabs&accordians.html" title="">Tabs & Accordians</a>
                    </li>
                    <li>
                        <a href="progressbars.html" title="">Progress Bars</a>
                    </li>
                    <li>
                        <a href="tooltips.html" title="">Tooltips</a>
                    </li>
                    <li>
                        <a href="popovers.html" title="">Popovers</a>
                    </li>
                    <li>
                        <a href="alerts.html" title="">Alerts</a>
                    </li>
                    <li>
                        <a href="list-group.html" title="">List Group</a>
                    </li>
                    <li>
                        <a href="models.html" title="">Models</a>
                    </li>
                    <li>
                        <a href="loaders.html" title="">CSS Loaders</a>
                    </li>
                    <li>
                        <a href="cards.html" title="">Cards</a>
                    </li>
                    <li>
                        <a href="range-slider.html" title="">Range Slider</a>
                    </li>
                </ul>
            </li>
            <li class="has-drp">
                <a href="#" title="">
                    <i class="ion-fireball"></i>
                    <span>Icons</span>
                </a>
                <ul class="sb-drp">
                    <li>
                        <a href="font-awesome-icons.html" title="">Font Awesome Icons</a>
                    </li>
                    <li>
                        <a href="themify-icons.html" title="">Themify Icons</a>
                    </li>
                    <li>
                        <a href="ionicons.html" title="">Ionicons</a>
                    </li>
                </ul>
            </li>
            <li class="has-drp">
                <a href="#" title="">
                    <i class="ion-images"></i>
                    <span>Gallery Styles</span>
                </a>
                <ul class="sb-drp">
                    <li>
                        <a href="gallery1.html" title="">Gallery Style 1</a>
                    </li>
                    <li>
                        <a href="gallery2.html" title="">Gallery Style 2</a>
                    </li>
                    <li>
                        <a href="gallery3.html" title="">Gallery Style 3</a>
                    </li>
                </ul>
            </li>
            <li class="has-drp">
                <a href="#" title="">
                    <i class="ion-android-settings"></i>
                    <span>Form Stuff</span>
                </a>
                <ul class="sb-drp">
                    <li>
                        <a href="form-layouts.html" title="">Form Layouts</a>
                    </li>
                    <li>
                        <a href="form-wizard.html" title="">Form Wizard</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="tables.html" title="">
                    <i class="ion-crop"></i> Tables</a>
            </li>
            <li>
                <a href="charts.html" title="">
                    <i class="ion-podium"></i> Charts</a>
            </li>
        </ul>
        <h4>Pages</h4>
        <ul class="drp-sec">
            <li class="has-drp">
                <a href="#" title="">
                    <i class="ion-android-clipboard"></i>
                    <span>General</span>
                </a>
                <ul class="sb-drp">
                    <li>
                        <a href="404.html" title="">404</a>
                    </li>
                    <li>
                        <a href="505.html" title="">505</a>
                    </li>
                    <li>
                        <a href="contact.html" title="">Contact Us</a>
                    </li>
                    <li>
                        <a href="coming-soon.html" title="">Coming Soon</a>
                    </li>
                    <li>
                        <a href="under-maintenance.html" title="">User Maintenance</a>
                    </li>
                    <li>
                        <a href="login.html" title="">Login</a>
                    </li>
                    <li>
                        <a href="register.html" title="">Register</a>
                    </li>
                    <li>
                        <a href="search-result.html" title="">Search Result</a>
                    </li>
                    <li>
                        <a href="faq.html" title="">Faq's</a>
                    </li>
                    <li>
                        <a href="services.html" title="">Services</a>
                    </li>
                    <li>
                        <a href="invoice.html" title="">Invoice Page</a>
                    </li>
                    <li>
                        <a href="typography.html" title="">Typography</a>
                    </li>
                    <li>
                        <a href="live-chat.html" title="">Live Chat</a>
                    </li>
                    <li>
                        <a href="timeline.html" title="">Timeline</a>
                    </li>
                    <li>
                        <a href="cropbox.html" title="">Cropbox</a>
                    </li>
                    <li>
                        <a href="calculator.html" title="">Calculator</a>
                    </li>
                </ul>
            </li>
            <li class="has-drp">
                <a href="#" title="">
                    <i class="ion-android-contact"></i>
                    <span>User</span>
                </a>
                <ul class="sb-drp">
                    <li>
                        <a href="profile.html" title="">Profile Page</a>
                    </li>
                    <li>
                        <a href="profile-edit.html" title="">Profile Edit</a>
                    </li>
                </ul>
            </li>
            <li class="has-drp">
                <a href="#" title="">
                    <i class="ion-bag"></i>
                    <span>eCommerce</span>
                </a>
                <ul class="sb-drp">
                    <li>
                        <a href="products.html" title="">Products</a>
                    </li>
                    <li>
                        <a href="product-details.html" title="">Product Details</a>
                    </li>
                    <li>
                        <a href="checkout.html" title="">Checkout</a>
                    </li>
                    <li>
                        <a href="order-received.html" title="">Order Received</a>
                    </li>
                </ul>
            </li>
            <li class="has-drp">
                <a href="#" title="">
                    <i class="ion-android-map"></i>
                    <span>Maps</span>
                </a>
                <ul class="sb-drp">
                    <li>
                        <a href="google-map.html" title="">Google Map</a>
                    </li>
                    <li>
                        <a href="vector-map.html" title="">Vector map</a>
                    </li>
                </ul>
            </li>
            <li class="has-drp">
                <a href="#" title="">
                    <i class="ion-email"></i>
                    <span>Email's</span>
                </a>
                <ul class="sb-drp">
                    <li>
                        <a href="email-composer.html" title="">Email Compose</a>
                    </li>
                    <li>
                        <a href="inbox.html" title="">Inbox</a>
                    </li>
                    <li>
                        <a href="email.html" title="">Email</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<!-- Side Header -->

<div class="option-panel">
    <span class="panel-btn">
      <i class="fa ion-android-settings fa-spin"></i>
    </span>
    <div class="color-panel">
        <h4>Text Color</h4>
        <span class="color1" onclick="setActiveStyleSheet('color1'); return false;">
        <i></i>
      </span>
        <span class="color2" onclick="setActiveStyleSheet('color2'); return false;">
        <i></i>
      </span>
        <span class="color3" onclick="setActiveStyleSheet('color'); return false;">
        <i></i>
      </span>
        <span class="color4" onclick="setActiveStyleSheet('color4'); return false;">
        <i></i>
      </span>
        <span class="color5" onclick="setActiveStyleSheet('color5'); return false;">
        <i></i>
      </span>
    </div>
</div>
<!-- Options Panel -->
<div class="panel-content">
    <div class="lgn-wrp grysh">

        <div class="bg-img" style="background-image: url(images/resource/bg-img1.png);"></div>

        <div class="lgn-innr">
            <div class="widget lgn-frm">
                <div class="frm-tl">
                    <a href="#" title="">
                        <img src="images/logo.png" alt=""/>
                    </a>
                        <h4>Welcome to Loveworld Networks Portal</h4>
                </div>
                <h4 style="color: #009efb">Fill in your details:</h4>
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">First Name</label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}"
                                   required autofocus>

                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Last Name</label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}"
                                   required autofocus>

                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-6 control-label">E-Mail Address</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('network') ? ' has-error' : '' }}">
                        <label for="network">Select Network</label>
                        <div class="col-md-12">


                            <?php $networks  = \App\Network::all();?>


                                <select name="network" required class="form_control">

                                    <option value="">Select Network</option>
                                    @foreach($networks as $network)
                                        <option value="{{$network->id}}">{{$network->network_name}}</option>
                                    @endforeach


                                </select>


                            @if ($errors->has('network'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('network') }}</strong>
                                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-6 control-label">Confirm Password</label>

                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 ">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>


                </form>

                <div class="col-md-12 col-sm-12 col-lg-12">
                    Already have an account ?<a class="n" href="/login" title="">Login</a>
                </div>


            </div>
        </div>
        <footer>
            <p>Copyright
                <a href="#" title="">LoveWorld Networks</a>  - 2018</p>
        </footer>
    </div>
    <!-- Login Wrapper -->
</div>

<!-- Vendor: Javascripts -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<!-- Vendor: Followed by our custom Javascripts -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/select2.min.js" type="text/javascript"></script>
<script src="js/slick.min.js" type="text/javascript"></script>

<!-- Our Website Javascripts -->
<script src="js/isotope.min.js" type="text/javascript"></script>
<script src="js/isotope-int.js" type="text/javascript"></script>
<script src="js/jquery.counterup.js" type="text/javascript"></script>
<script src="js/waypoints.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script src="js/exporting.js" type="text/javascript"></script>
<script src="js/highcharts-more.js" type="text/javascript"></script>
<script src="js/moment.min.js" type="text/javascript"></script>
<script src="js/jquery.circliful.min.js" type="text/javascript"></script>
<script src="js/fullcalendar.min.js" type="text/javascript"></script>
<script src="js/jquery.downCount.js" type="text/javascript"></script>
<script src="js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="js/jquery.formtowizard.js" type="text/javascript"></script>
<script src="js/form-validator.min.js" type="text/javascript"></script>
<script src="js/form-validator-lang-en.min.js" type="text/javascript"></script>
<script src="js/cropbox-min.js" type="text/javascript"></script>
<script src="js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="js/ion.rangeSlider.min.js" type="text/javascript"></script>
<script src="js/jquery.poptrox.min.js" type="text/javascript"></script>
<script src="js/styleswitcher.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
</body>

</html>