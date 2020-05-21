<div class="topbar">
    <div class="logo">
        <h6 >
            <h5 style="color: #009efb;">LoveWorld Networks Portal</h5>
               
            </a>
        </h6>
    </div>
    <div class="topbar-data">
        <div class="usr-act">
            <i>Hello, <a href="{{route("loadProfile")}}">{{ucfirst(strtolower(Auth::user()->first_name))}}!</a></i>
            <span>
           @if(!empty(Auth::user()->profile_pic))
                    <img class="brd-rd10 img-responsive"  src="{{Auth::user()->profile_pic}}" style="max-width: 30px" />
                  @else
                    <img class="brd-rd50"  src="/images/photo.png" />
                  @endif
          <i class="sts away"></i>
        </span>
            <div class="usr-inf">
                <div class="usr-thmb brd-rd50">
                     @if(!empty(Auth::user()->profile_pic))
                    <img class="brd-rd50 img-responsive"   src="{{Auth::user()->profile_pic}}" style="max-width: 60px" />
                  @else
                    <img class="brd-rd50"  src="/images/photo.png" />
                  @endif
                    <i class="sts away"></i>
                    <a class="green-bg brd-rd5" href="{{route("loadProfile")}}" title="">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
                <h5>
                    <a href="{{route("loadProfile")}}" title="">{{ucfirst(strtolower(Auth::user()->first_name))}}</a>
                </h5>
                <span>{{Auth::user()->network}}</span>
                <i><a href="#">{{Auth::user()->email}}</a></i>

             
                    <div class="usr-ft">
                        <a class="btn-danger" href="/logout" title="">
                            <i class="fa fa-sign-out"></i> Logout</a>
                    </div>
        

            </div>
        </div>


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




















