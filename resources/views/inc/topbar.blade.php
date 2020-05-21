<div class="topbar">
    <div class="logo">
        <h1>
            <a href="#" title="">
                <img src="images/logo.png" alt="" height="60px" />
            </a>
        </h1>
    </div>
    <div class="topbar-data">
        <div class="usr-act">
            <i>HELLO, {{ucfirst(strtolower(Auth::user()->first_name))}}!</i>
            <span>
          <img src="images/resource/topbar-usr1.jpg" alt="" />
          <i class="sts away"></i>
        </span>
            <div class="usr-inf">
                <div class="usr-thmb brd-rd50">
                    <img class="brd-rd50" src="images/resource/usr.jpg" alt="" />
                    <i class="sts away"></i>
                    <a class="green-bg brd-rd5" href="#" title="">
                        <i class="fa fa-envelope"></i>
                    </a>
                </div>
                <h5>
                    <a href="#" title="">{{ucfirst(strtolower(Auth::user()->first_name))}}</a>
                </h5>
                <span>{{Auth::user()->network}}</span>
                <i>{{Auth::user()->email}}</i>

                <div class="usr-ft">
                    <a class="btn-danger" href="#" title="">
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