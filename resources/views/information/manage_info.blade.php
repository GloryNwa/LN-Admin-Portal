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
  </style>

<body class="expand-data panel-data">
    
    <!-- Top bar -->
@include ('includes/Top_bar')



    <!-- side nav -->

   @include ('includes/nav')
   
         <div class="col-md-12 grid-item col-sm-12 col-lg-12">
      <div class="stat-box widget bg-clr3">
          <div class="wdgt-ldr">
          </div>

            <i class="fa fa-bullhorn" style="font-size: 18px;"></i>
          <div class="stat-box-innr">
           <div style="text-align:center;  color: #fff">INFORMATION DESK</div>
            <h4></h4>
          </div>
          <span></span>
      </div>
  </div>
  <div class="widget proj-order" style="padding-bottom: 80px; padding-top: 15px">
        <!-- <i class="far fa-calendar-alt" style="font-size:50px";></i><br><br>
           <h2 class="widget-title" style="text-align: center; color: #009efb">EVENTS</h2> -->
        <!--   <a class="add-proj brd-rd5" href="#" data-toggle="tooltip" title="Add Project">+</a> -->
        
<style>

div {
    line-height: 20px;
  }


.resource-holder:hover{
    /*overflow: visible; 
    white-space:none; 
    width: auto;
    position: absolute;*/
    border:1px solid #D3D3D3;
   
}
#data:hover+div {
    margin-top:20px;
}
</style>
  
        <div class="table-wrap">
             @if(session()->has('message'))
               <div class="alert alert-success">
                 {{ session()->get('message') }}
              </div>
            @endif
         <table class="table table-bordered style2 ">
            <thead>
            <tr>
                <th>S/N</th>
                <th>Title</th>
                <th>Discription</th>
                <th>Photos</th>
              <!--   <th>Date</th> -->       

         </tr>
        </thead>
        <tbody>

        @if(count($informations)>= 1)
         <?php $x = 1;?>
            @foreach($informations as $information)
                <tr class="resource-holder">
                    <td>
                        <span class="blue-bg indx">{{$x++}}</span>         
                    </td>
                   
                    <td>
                        <h4 class="date">{{$information->title}}</h4>
                           <ul class="nav nav-pills">
                          <li role="presentation">
                             <a href='{{url("/edit_info/{$information->id}")}}'>
                              <span class="fa fa-pencil" style="color:#009efb;"> Edit</span>  
                             </a><br><br><br>
                          </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <li role="presentation">
                              <a onclick="return confirm('Are you really sure?')" href='{{url("/deletePost/{$information->id}")}}'>
                               <span class="fa fa-trash" style="color:red;"> Delete</span> 
                              </a>
                          </li>
                      </ul>
                
                    </td>
                    <td>
                        <span class="name"style="font-size: 16px;">{{substr($information->description,0,210)}}</span>
                    </td>
                     <td>
                         <img class="brd-rd" src="{{ URL::to('/').$information->file}}" style="width: 150px;height: 100px; margin-right: 20px" alt="" />
                   </td>
                    <!-- <td>
                        <span class="">{{$information->created_at}}</span>
                    </td>
                   -->
                   
                </tr>

            @endforeach
        @else

            <div class="alert alert-info">No Information Found</div>
        
        @endif

         
        </tbody>
    </table>
    {{$informations->links()}}
</div>
</div>   
</div>

<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-header">
   <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
    <h5 class="modal-title" text="center" id="myModalLabel">Delete</h5>
   </div>
  <div class="modal-dialog" role="document">
    <form class="delete" action='{{route('deletePost', 'manage_info')}}'method="POST">
      {{method_field('')}}
      {{csrf_field()}}
       <div class="modal-body">
         <p class="text-center">Are you sure you really want to delete this?</p>
        <input type="hidden" name="id" value="id">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="submit" value="Delete">

        <div class="modal-footer">
         <button type="button" class="btn btn-success" data-dismiss="modal">Yes</button> 
         <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
          

        </div>
    </form>
    </div>
    </div>




@include('includes/footer')

