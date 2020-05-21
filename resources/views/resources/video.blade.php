<div class="row">

<div class=""style="margin-top:30px; max-height:30%; ">
   <div class="row">   
   @if(count($vids) > 0)
      @foreach($vids as $vid)
         @if($vid->file_type == 'video')  
  <div class="col-md-2"><a href="{{$vid->id}}">
    <div align="center" class="embed-responsive embed-responsive-16by9" >
        <video autoplay="false" class="embed-responsive-item" controls >
         <source src="{{$vid->file}}" type="video/mp4">
        </video>
       </div><br>
       <p style="color: #009efb; ">{{substr($vid->title, 0, 30)}}</p></a>
      </div>                   
   @endif
      @endforeach
 @endif
      </div> 
    </div>  
  </div><br><br>

    <div class="col-md-8"></div>