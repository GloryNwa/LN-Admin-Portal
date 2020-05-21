
    <header class="side-header expand-header">
       <div class="nav-head">
            <span class="menu-trigger">
                <i class="ion-android-menu"></i>
            </span>
        </div>
        <nav class="custom-scrollbar">
            <ul class="drp-sec">
                <li class="has-drp">
                <li >
                    <a href="{{route("loaddashboard")}}" title="">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                    
                </li> 
                 <li>
                      <a href="{{route("view_resources")}}" title="">
                          <i class="fa fa-book"></i>
                          <span>Resource Center</span>
                      </a>
                </li>

                <li>
                     <a href="{{route("all_events")}}" title="">
                          <i class="fa fa-calendar"></i>
                          <span>Events</span>
                      </a>
                </li>


                 <li>
                      <a href="{{route("info_page")}}" title="">
                          <i class="fa fa-bullhorn  "></i>
                          <span>Information Desk</span>
                      </a>
                </li>
                  

                <li>
                    <a href="{{route("timeline")}}" title="">
                        <i class="fa fa-list-ul "></i>
                        <span>TimeLine</span>
                    </a>
                </li>

                 <li>
                    <a href="{{route("loadProfile")}}" title="">
                        <i class="fa fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>

                <!-- <li>
                   <a href="{{route("uploadProfile")}}" title="">
                        <i class="ion-home"></i>
                        <span>Upload Profile</span>
                    </a>
                </li> -->

                <li>
                    <div class="usr-ft">
                        <a class="btn-danger" href="/logout" title="">
                            <i class="fa fa-sign-out"></i> Logout</a>
                    </div>
                </li>

            </ul>
            <h4>Admin Section</h4>
             <ul class="drp-sec">
                <li>
                  <a href="{{route("resource")}}" title="">
                          <i class="fa fa-book"></i>
                          <span>Create Resource</span>
                  </a>
                </li>

                 <li>
                     <a href="{{route("events")}}" title="">
                          <i class="fa fa-calendar"></i>
                          <span>Create Events</span>
                      </a>
                </li>
                 <li>
                      <a href="{{route('create')}}" title="">
                          <i class="fa fa-bullhorn"></i>
                          <span>Create Information</span>
                      </a>
                </li>
                <li>
                      <a href="{{route('manage_info')}}" title="">
                          <i class="fa fa-modx"></i>
                          <span>Manage Information</span>
                      </a>
                </li>

                <!--  <li>
                     <a href="{{route("timelineForm")}}" title="">
                         <i class="fa fa-list-ul"></i>
                         <span>Create TimeLine</span>
                     </a>
                 </li> -->

                 <li>
                     <a href="{{route("create_network")}}" title="">
                         <i class="fa fa-signal"></i>
                         <span>Add Network</span>
                     </a>
                 </li>
               


            </ul>
            
        </nav>
    </header>