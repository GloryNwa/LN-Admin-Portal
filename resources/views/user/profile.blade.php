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

  <!-- Options Panel -->
  <div class="pg-tp">
    <i class="ion-android-contact"></i>
    <div class="pr-tp-inr">
      <h5>Profile Page</h5>
    </div>
  </div>
  <!-- Page Top -->

  <div class="panel-content">
    <div class="widget pad50-65">
      <div class="profile-wrp">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-lg-6">

            <div class="profile-info-wrp">
              <div class="insta-wrp">
          
                 @if(!empty(Auth::user()->profile_pic))
                    <img class="brd-rd50 img-responsive" id="image" src="{{Auth::user()->profile_pic}}" style="width: 180px" />
                  @else
                    <img class="brd-rd50" id="image" src="/images/photo.png" />
                  @endif
              
                <div class="insta-inf">
                  <h2>
                    <a href="#" title="">{{Auth::user()->full_name()}}</a>

                  </h2>
                  <p><h6 class="desg">{{Auth::user()->networkn->network_name}}</h6></p>
                </div>
               <br><br><br>
               <div style="margin-right: 100px; margin-top: 50px">
               <form method="post" action="{{route('doEditProfilePic')}}" enctype="multipart/form-data" >
                {{ csrf_field() }}
                       
                <div class="cnt-opt">
                  <div class="cnt-opt-lst">
                    <span>
                      <label class="fileContainer">
                        <i class="fa fa-picture-o"></i>
                       <input type="file" required name="pic" id="files" value="file_upload" placeholder="upload Profile" />
                      </label>
                    </span>
                  </div>
                  <button class="btn btn-success btn-xs green-bg"  type="submit" style="border: none;">Change Profile</button>
                </div>
              </form>
              </div>
              </div>



               <script>
                    document.getElementById("files").onchange = function () {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            // get loaded data and render thumbnail.
                            document.getElementById("image").src = e.target.result;
                        };

                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                    };
                </script>
                

              <div class="usr-abut">
                <h5 class="prf-edit-tl">About Me

                </h5>
                <p style="max-width:300px;">{{Auth::user()->about}}</p>
              </div>
              <div class="usr-gnrl-inf">
                <h5 class="prf-edit-tl">General Info

                </h5>
                <div class="grn-inf-lst">
                  <i class="fa fa-home"></i>Name:
                  <span class="green-clr">{{Auth::user()->full_name()}}</span>
                </div>
                <div class="grn-inf-lst">
                  <i class="fa fa-envelope"></i> Email:
                  <span>{{Auth::user()->email}}</span>
                </div>
                <div class="grn-inf-lst">
                  <i class="fa fa-building"></i>


                  <span>{{Auth::user()->networkn->network_name}}</span>
                </div>
              </div>
            </div>
          </div>



          <div class="col-md-6 col-sm-12 col-lg-6">
              <div class="profile-info-wrp edit-prf">
                  <h4> Edit Profile</h4>

                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

                @if (session('message'))
                  <div class="alert alert-success">
                    {{ session('message') }}
                  </div>
                @endif

                <form action="{{route('doEditProfile')}}" method="post">

                  {{csrf_field()}}

                  <div class="insta-wrp">
                    <div class="insta-inf">
                      <div class="grn-inf-lst">
                        <i class="fa fa-user"></i> First Name:
                        <input type="text" class="brd-rd5" placeholder="" value="{{Auth::user()->first_name}}" name="first_name" required/>
                      </div> <div class="grn-inf-lst">
                        <i class="fa fa-user"></i> Last Name:
                        <input type="text" class="brd-rd5" placeholder="" name="last_name" value="{{Auth::user()->last_name}}" required/>
                      </div>
                    </div>
                  </div>
                  <div class="usr-abut">
                    <h5 class="prf-edit-tl">About Me
                      <i class="fa fa-pencil edit-btn"></i>
                    </h5>
                    <textarea class="brd-rd5" placeholder="Write about yourself..." name="about" >{{Auth::user()->about}}</textarea>
                  </div>

                  <button class="btn btn-success">Update</button>
                </form><br><br>
                
          </div>


           <div class="profile-info-wrp">
                  <h4> Change Password</h4>

                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

               @if(session()->has('response'))
               <div class='alert alert-{{session()->get("alert")}}'>
                 {{session()->get('response')}}
              </div>
        
            @endif

                <form action="{{route('newPassword')}}" method="post">

                  {{csrf_field()}}

                  <div class="insta-wrp">
                    <div class="insta-inf">
                     
                       <div class="grn-inf-lst">
                        <i class="fa fa-pencil"></i> Old Password:
                        <input type="password" class="brd-rd5" placeholder="" name="oldPassword" required/>
                      </div>
                    </div>
                  </div>
                  <div class="grn-inf-lst">
                        <i class="fa fa-pencil"></i>New Password:
                        <input type="password" class="brd-rd5" placeholder="" name="newPassword" required/>
                      </div>
                 <div class="grn-inf-lst">
                        <i class="fa fa-pencil"></i>Confirm Password:
                        <input type="password" class="brd-rd5" placeholder="" name="confirmPassword" required/>
                      </div>
                  <button class="btn btn-success">Change Password</button>
                </form><br><br>
                
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
 </div>
  <!-- Panel Content -->
@include("includes/footer")


  <!--ssssssssss -->