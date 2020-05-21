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



    <!-- side nav -->

   @include ('includes/nav')
   
        <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                       <div class="stat-box widget bg-clr4">
                        <i class="fa fa-calendar" style="font-size: 18px;"></i>
                        <div class="stat-box-innr">
                            <div style="text-align:center; color: #fff">EVENTS</div>
                            <h5></h5>
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
                <th>Date</th>
                <th>Venue</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

        @if(count($events) > 1)


        <?php $x = 1;?>
            @foreach($events as $event)


                <tr class="resource-holder">
                    <td>
                        <span class="blue-bg indx">{{$x++}}</span>
                    </td>
                    <td>
                        <h4 class="date">{{$event['title']}}</h4>
                    </td>
                    <td>
                        <span class="name">{{substr($event['description'],0,200)}}</span>
                    </td>
                    <td>
                        <span class="ph#">{{$event['date']}}</span>
                    </td>
                    <td>
                        <span class="addr">{{$event['venue']}}</span>
                    </td>


                    @if($event['accepted'] == 'No')
                        <td>
                            <span class="addr"><a href='{{url("acceptEvents/{$event['id']}")}}'><button class="btn btn-danger btn-xs" >Accept</button></a></span>
                        </td>
                    @else
                        <td>
                            <span class="addr"><button class="btn btn-success btn-xs" >Accepted</button></span>
                        </td>
                    @endif
                    
                </tr>
                
            @endforeach
        @else

            <div class="alert alert-info">No Event Found</div>
        
        @endif

       
        </tbody>

    </table>

</div>
</div>   
</div>



@include('includes/footer')

