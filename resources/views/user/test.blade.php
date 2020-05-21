

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

<!-- Side Header -->

<div class="option-panel">
  <span class="panel-btn">
      <i class="fa ion-android-settings fa-spin"></i>
 </span>
    <div class="color-panel">
        <h4 style="color:#2faee0">WELCOME TO LOVEWORLD NETWORKS PORTAL!</h4>
    </div>
</div>

<!-- Page Top -->

<div class="panel-content">
    <div class="filter-items">
        <div class="row grid-wrap mrg20">
            <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                <div class="stat-box widget bg-clr1">
                    <div class="wdgt-ldr">

                    </div>
                    <i class="ion-arrow-graph-up-right"></i>
                    <div class="stat-box-innr">
                            <span>Training Resources
                            </span>
                        <h5></h5>
                    </div>
                    <span></span>
                </div>
            </div>
            <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                <div class="stat-box widget bg-clr2">
                    <div class="wdgt-ldr">

                    </div>
                    <i class="ion-android-desktop"></i>
                    <div class="stat-box-innr">
                            <span>TimeLine
                               </span>
                        <h5></h5>
                    </div>
                    <span>
                           </span>
                </div>
            </div>
            <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                <div class="stat-box widget bg-clr3">
                    <div class="wdgt-ldr">
                    </div>

                    <i class="ion-cube"></i>
                    <div class="stat-box-innr">
                        <span><h5 style="color: #fff"> Information Desk</h5></span>
                        <h4></h4>
                    </div>
                    <span></span>
                </div>
            </div>

            <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                <div class="stat-box widget bg-clr4">
                    <div class="wdgt-ldr">

                    </div>
                    <i class="ion-android-upload"></i>
                    <div class="stat-box-innr">
                        <span >Events</span>
                        <h5></h5>
                    </div>
                    <span></span>
                </div>
            </div>

            <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                <div class="traffic-src widget">


                    <div class="row">
                        @if(count($information)==1)

                            <div class="col-md-5 col-sm-12 col-lg-5">
                                <i class="fa fa-calendar-alt" style="font-size:50px";></i><br><br>
                                <h4 class="widget-title "><a href="#" class="">Information Desk</a></h4>


                                <div class="trfc-cnt">


                                    <h5>{{$information->title}}</h5>
                                    <p>{{$information->description}}</p>
                                    <a href='{{route("moreInfo",["id"=>$information->id,"title"=>str_slug($information->title)])}}'><br><button class="btn btn-info" style="background-color: #009efb;border:none;">Read More</button></a>

                                </div>

                            </div>
                            <div class="col-md-7 col-sm-12 col-lg-7">
                                <div class="traffic-chart-wrp"><br><br>
                                    @if(!empty($information->file))
                                        <div><img src="{{ URL::to("/").$information->file}}" class="img-responsive"/></div>
                                    @else

                                        <div><img src="{{ URL::to("/")}}/images/sneeze1.png" style="height: 250px;"></div>
                                    @endif
                                </div>
                            </div>
                        @else

                            <div class="alert alert-info">No information found</div>
                    @endif



                    <!--    <div><img src="images/sneeze1.png" style="height: 250px;"></div> -->

                    </div>
                </div>
            </div>
            <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                <div class="widget pad50-65">
                    <div class="widget-title2">
                        <i class="fab fa-osi" style="font-size: 50px"></i>
                        <h4 class="widget-title">Training Resources</h4>
                    </div>
                    <div class="rmv-ext6">
                        <div class="row mrg20">


                            @if(count($resources) > 0)
                                @foreach($resources as $resource)

                                    <?php if($resource->file_type == 'video')

                                        $fonticon = "fa-file-video-o";

                                    else if($resource->file_type == 'audio')
                                        $fonticon = "fa-file-audio-o";

                                    else if($resource->file_type == 'document')
                                        $fonticon = "fa-file";
                                    ?>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="serv-bx styl2 brd-rd5">
                                            <i class="fa {{$fonticon}}" style="font-size:48px;color:black"></i>
                                            <div class="serv-inkkkf">
                                                <p>{{str_limit($resource->title,50,"...")}}</p>


                                                @if($resource->file_type == 'video')


                                                    <a href="/watch/resource/{{$resource->id}}" ><button class="btn btn-danger" style="background-color: #009efb;border:none;">Play Video <i class="fa fa-play"></i></button></a>

                                                @elseif($resource->file_type == 'audio')
                                                    <button class="btn btn-danger">Listen <i class="fa fa-earphone"></i></button>

                                                @elseif($resource->file_type == 'document')

                                                    <a href="{{URL::to("/")."/".$resource->file}}" download="{{$resource->file}}"><button class="btn btn-danger" style="background-color: #009efb;border:none;">Download  <i class="fa fa-download"></i></button></a>
                                                @endif



                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="alert alert-info"></div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                <div class="widget proj-order pad50-40">
                    <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>
                    </div>

                    <i class="fa fa-calendar-alt" style="font-size:50px";></i><br><br>
                    <h4 class="widget-title"><a href="#">Events</a></h4>
                    <!--   <a class="add-proj brd-rd5" href="#" data-toggle="tooltip" title="Add Project">+</a> -->

                    <div class="table-wrap">
                        <table class="table table-bordered style2">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Title</th>
                                <th>Discription</th>
                                <th>Date</th>
                                <th>Venue</th>

                            </tr>
                            </thead>
                            <tbody>

                            @if(count($events) > 0)
                                <?php $x = 1;?>
                                @foreach($events as $event)
                                    <tr>
                                        <td>
                                            <span class="blue-bg indx">{{$x++}}</span>
                                        </td>
                                        <td>
                                            <span class="date">{{$event->title}}</span>
                                        </td>
                                        <td>
                                            <h4 class="name">{{$event->description}}</h4>
                                        </td>
                                        <td>
                                            <span class="ph#">{{$event->date}}</span>
                                        </td>
                                        <td>
                                            <span class="addr">{{$event->venue}}</span>
                                        </td>

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

            <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                <div class="widget calndr-wdgt pad50-40">
                    <div class="wdgt-opt">
                            <span class="wdgt-opt-btn">
                                <i class="ion-android-more-vertical"></i>
                            </span>
                        <div class="wdgt-opt-lst brd-rd5">
                            <a class="delt-wdgt" href="#" title="">Delete</a>
                            <a class="expnd-wdgt" href="#" title="">Expand</a>
                            <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                        </div>
                    </div>
                    <div class="wdgt-ldr">
                        <div class="ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <h4 class="widget-title">Calendar</h4>
                    <div class="calndr-wrp">
                        <a class="blue-bg brd-rd5" href="#" title="">Add Event</a>
                        <span class="slct-bx">
                                <i class="ion-android-funnel"></i>
                                <span>
                                    <select>
                                        <option>Monthly</option>
                                        <option>Yearly</option>
                                        <option>Weekly</option>
                                    </select>
                                </span>
                            </span>
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>



            <!--  <div class="col-md-12 grid-item col-sm-12 col-lg-12">
               <div class="totl-revnu widget pad20-15">
              <i class="fab fa-osi" style="font-size: 50px"></i>
               <h4 class="widget-title">Resource Center</h4>
                  <div class="panel-content">
                <div class="widget pad20-30"> -->
            <!--  <div class="widget-title2"> -->



        </div>
    </div>
</div>

<!-- Panel Content -->
<footer>
    <p>Copyright@
        <a href="#" title="">LoveWorld Networks</a> 2018</p>
    <span>USA</span>
</footer>

<!-- Vendor: Javascripts -->
<script src="/js/jquery.min.js" type="text/javascript"></script>
<!-- Vendor: Followed by our custom Javascripts -->
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/select2.min.js" type="text/javascript"></script>
<script src="/js/slick.min.js" type="text/javascript"></script>

<!-- Our Website Javascripts -->
<script src="/js/isotope.min.js" type="text/javascript"></script>
<script src="/js/isotope-int.js" type="text/javascript"></script>
<script src="/js/jquery.counterup.js" type="text/javascript"></script>
<script src="/js/waypoints.min.js" type="text/javascript"></script>
<script src="/js/highcharts.js" type="text/javascript"></script>
<script src="/js/exporting.js" type="text/javascript"></script>
<script src="/js/highcharts-more.js" type="text/javascript"></script>
<script src="/js/moment.min.js" type="text/javascript"></script>
<script src="/js/jquery.circliful.min.js" type="text/javascript"></script>
<script src="/js/fullcalendar.min.js" type="text/javascript"></script>
<script src="/js/jquery.downCount.js" type="text/javascript"></script>
<script src="/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="/js/jquery.formtowizard.js" type="text/javascript"></script>
<script src="/js/form-validator.min.js" type="text/javascript"></script>
<script src="/js/form-validator-lang-en.min.js" type="text/javascript"></script>
<script src="/js/cropbox-min.js" type="text/javascript"></script>
<script src="/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/js/ion.rangeSlider.min.js" type="text/javascript"></script>
<script src="/js/jquery.poptrox.min.js" type="text/javascript"></script>
<script src="/js/styleswitcher.js" type="text/javascript"></script>
<script src="/js/main.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        'use strict';

        $.getJSON(
            'https://cdn.rawgit.com/highcharts/highcharts/057b672172ccc6c08fe7dbb27fc17ebca3f5b770/samples/data/usdeur.json',
            function (data) {
                Highcharts.chart('chrt1', {
                    chart: {
                        zoomType: 'x'
                    },

                    legend: {
                        enabled: false
                    },
                    title: {
                        style: {
                            display: 'none'
                        }
                    },
                    plotOptions: {
                        area: {
                            fillColor: {
                                linearGradient: {
                                    x1: 0,
                                    y1: 0,
                                    x2: 0,
                                    y2: 1
                                },
                                stops: [
                                    [0, Highcharts.getOptions().colors[0]],
                                    [1, Highcharts.Color(Highcharts.getOptions().colors[
                                        0]).setOpacity(0).get('rgba')]
                                ]
                            },
                            marker: {
                                radius: 2
                            },
                            lineWidth: 1,
                            states: {
                                hover: {
                                    lineWidth: 1
                                }
                            },
                            threshold: null
                        }
                    },
                    series: [{
                        type: 'area',
                        name: 'USD to EUR',
                        data: data
                    }]
                });
            });

        Highcharts.chart('chrt2', {
            chart: {
                type: 'area',
                backgroundColor: "#FFFFFF",
                borderColor: "#335cad"
            },
            legend: {
                enabled: false
            },
            title: {
                style: {
                    display: 'none'
                }
            },
            xAxis: {
                categories: ['1', '2', '3', '4', '5', '6', '7']
            },
            credits: {
                enabled: false
            },
            tooltip: {
                pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
            },
            plotOptions: {
                area: {
                    categories: ['1', '2', '3', '4', '5', '6', '7'],
                    marker: {
                        enabled: false,
                        symbol: 'circle',
                        radius: 2,
                        states: {
                            hover: {
                                enabled: true
                            }
                        }
                    }
                }
            },
            series: [{
                data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369, 640, 1005,
                    1436, 2063, 3057, 4618, 6444, 9822, 15468, 20434,
                    24126, 27387, 29459, 31056, 31982, 32040, 31233, 29224, 27342,
                    26662, 26956, 27912, 28999, 28965, 27826, 25579, 25722, 24826,
                    24605, 24304, 23464, 23708, 24099, 24357, 24237, 24401, 24344,
                    23586, 22380, 21004, 17287, 14747, 13076, 12555, 12144, 11009,
                    10950, 10871, 10824, 10577, 10527, 10475, 10421, 10358, 10295,
                    10104, 9914, 9620, 9326, 5113, 5113, 4954, 4804, 4761, 4717,
                    4368, 4018
                ]
            }, {
                data: [null, null, null, null, null, null, null, null, null, null, 5, 25,
                    50, 120, 150, 200, 426, 660, 869, 1060, 1605,
                    2471, 3322, 4238, 5221, 6129, 7089, 8339, 9399, 10538, 11643, 13092,
                    14478, 15915, 17385, 19055, 21205, 23044, 25393, 27935,
                    30062, 32049, 33952, 35804, 37431, 39197, 45000, 43000, 41000,
                    39000, 37000, 35000, 33000, 31000, 29000, 27000, 25000, 24000,
                    23000, 22000, 21000, 20000, 19000, 18000, 18000, 17000, 16000,
                    15537, 14162, 12787, 12600, 11400, 5500, 4512, 4502, 4502,
                    4500, 4500
                ]
            }]
        });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('#chrt3').highcharts({
                chart: {
                    type: 'area',
                    backgroundColor: "#FFFFFF",
                    borderColor: "#335cad"
                },
                legend: {
                    enabled: false
                },
                title: {
                    style: {
                        display: 'none'
                    }
                },
                xAxis: {
                    categories: ['1', '2', '3', '4', '5', '6', '7']
                },
                credits: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
                },
                plotOptions: {
                    area: {
                        categories: ['1', '2', '3', '4', '5', '6', '7'],
                        marker: {
                            enabled: false,
                            symbol: 'circle',
                            radius: 2,
                            states: {
                                hover: {
                                    enabled: true
                                }
                            }
                        }
                    }
                },
                series: [{
                    data: [null, null, null, null, null, null, null, null, null,
                        null, 5, 25, 50, 120, 150, 200, 426, 660, 869, 1060,
                        1605,
                        2471, 3322, 4238, 5221, 6129, 7089, 8339, 9399, 10538,
                        11643, 13092, 14478, 15915, 17385, 19055, 21205, 23044,
                        25393, 27935,
                        30062, 32049, 33952, 35804, 37431, 39197, 45000, 43000,
                        41000, 39000, 37000, 35000, 33000, 31000, 29000, 27000,
                        25000, 24000,
                        23000, 22000, 21000, 20000, 19000, 18000, 18000, 17000,
                        16000, 15537, 14162, 12787, 12600, 11400, 5500, 4512,
                        4502, 4502,
                        4500, 4500
                    ]
                }, {
                    data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369,
                        640, 1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468,
                        20434,
                        24126, 27387, 29459, 31056, 31982, 32040, 31233, 29224,
                        27342, 26662, 26956, 27912, 28999, 28965, 27826, 25579,
                        25722, 24826,
                        24605, 24304, 23464, 23708, 24099, 24357, 24237, 24401,
                        24344, 23586, 22380, 21004, 17287, 14747, 13076, 12555,
                        12144, 11009,
                        10950, 10871, 10824, 10577, 10527, 10475, 10421, 10358,
                        10295, 10104, 9914, 9620, 9326, 5113, 5113, 4954, 4804,
                        4761, 4717,
                        4368, 4018
                    ]
                }]
            });
        });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('#chrt4').highcharts({
                chart: {
                    type: 'area',
                    backgroundColor: "#FFFFFF",
                    borderColor: "#335cad"
                },
                legend: {
                    enabled: false
                },
                title: {
                    style: {
                        display: 'none'
                    }
                },
                xAxis: {
                    categories: ['1', '2', '3', '4', '5', '6', '7']
                },
                credits: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
                },
                plotOptions: {
                    area: {
                        categories: ['1', '2', '3', '4', '5', '6', '7'],
                        marker: {
                            enabled: false,
                            symbol: 'circle',
                            radius: 2,
                            states: {
                                hover: {
                                    enabled: true
                                }
                            }
                        }
                    }
                },
                series: [{
                    data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369,
                        640, 1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468,
                        20434,
                        24126, 27387, 29459, 31056, 31982, 32040, 31233, 29224,
                        27342, 26662, 26956, 27912, 28999, 28965, 27826, 25579,
                        25722, 24826,
                        24605, 24304, 23464, 23708, 24099, 24357, 24237, 24401,
                        24344, 23586, 22380, 21004, 17287, 14747, 13076, 12555,
                        12144, 11009,
                        10950, 10871, 10824, 10577, 10527, 10475, 10421, 10358,
                        10295, 10104, 9914, 9620, 9326, 5113, 5113, 4954, 4804,
                        4761, 4717,
                        4368, 4018
                    ]
                }, {
                    data: [null, null, null, null, null, null, null, null, null,
                        null, 5, 25, 50, 120, 150, 200, 426, 660, 869, 1060,
                        1605,
                        2471, 3322, 4238, 5221, 6129, 7089, 8339, 9399, 10538,
                        11643, 13092, 14478, 15915, 17385, 19055, 21205, 23044,
                        25393, 27935,
                        30062, 32049, 33952, 35804, 37431, 39197, 45000, 43000,
                        41000, 39000, 37000, 35000, 33000, 31000, 29000, 27000,
                        25000, 24000,
                        23000, 22000, 21000, 20000, 19000, 18000, 18000, 17000,
                        16000, 15537, 14162, 12787, 12600, 11400, 5500, 4512,
                        4502, 4502,
                        4500, 4500
                    ]
                }]
            });
        });

        Highcharts.chart('chart5', {
            title: {
                style: {
                    display: 'none'
                }
            },
            xAxis: {
                categories: ['Apples', 'Oranges', 'Pears',
                    'Bananas', 'Plums'
                ]
            },
            labels: {
                items: [{
                    style: {
                        left: '50px',
                        top: '18px',
                        color: (Highcharts.theme &&
                            Highcharts.theme.textColor) || 'black'
                    }
                }]
            },
            series: [{
                type: 'column',
                name: 'Jane',
                data: [3, 2, 1, 3, 4]
            }, {
                type: 'column',
                name: 'John',
                data: [2, 3, 5, 7, 6]
            }, {
                type: 'column',
                name: 'Joe',
                data: [4, 3, 3, 9, 0]
            }, {
                type: 'spline',
                name: 'Average',
                data: [3, 2.67, 3, 6.33, 3.33],
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[3],
                    fillColor: 'white'
                }
            }, {
                type: 'pie',
                name: 'Total consumption',
                data: [{
                    name: 'Jane',
                    y: 13,
                    color: Highcharts.getOptions().colors[0]
                }, {
                    name: 'John',
                    y: 23,
                    color: Highcharts.getOptions().colors[1]
                }, {
                    name: 'Joe',
                    y: 19,
                    color: Highcharts.getOptions().colors[2]
                }],
                center: [100, 80],
                size: 100,
                showInLegend: false,
                dataLabels: {
                    enabled: false
                }
            }]
        });

        //===== ToolTip =====//
        if ($.isFunction($.fn.tooltip)) {
            $('[data-toggle="tooltip"]').tooltip();
        }

        //===== Full Calendar =====//

    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        'use strict';

        Highcharts.chart('chrt2', {
            chart: {
                zoomType: 'xy'
            },
            title: {
                style: {
                    display: 'none'
                }
            },
            xAxis: [{
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                ],
                crosshair: true
            }],
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '{value}°C',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                },
                title: {
                    text: 'Temperature',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: 'Rainfall',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                labels: {
                    format: '{value} mm',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                opposite: true
            }],
            tooltip: {
                shared: true
            },
            legend: {
                layout: 'horizontal',
                align: 'left',
                x: 30,
                verticalAlign: 'bottom',
            },
            series: [{
                name: 'Rainfall',
                type: 'column',
                yAxis: 1,
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1,
                    95.6, 54.4
                ],
                tooltip: {
                    valueSuffix: ' mm'
                }

            }, {
                name: 'Temperature',
                type: 'spline',
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
                tooltip: {
                    valueSuffix: '°C'
                }
            }]
        });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('#chrt3').highcharts({
                chart: {
                    zoomType: 'xy'
                },
                title: {
                    style: {
                        display: 'none'
                    }
                },
                xAxis: [{
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                    ],
                    crosshair: true
                }],
                yAxis: [{ // Primary yAxis
                    labels: {
                        format: '{value}°C',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    },
                    title: {
                        text: 'Temperature',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    }
                }, { // Secondary yAxis
                    title: {
                        text: 'Rainfall',
                        style: {
                            color: Highcharts.getOptions().colors[0]
                        }
                    },
                    labels: {
                        format: '{value} mm',
                        style: {
                            color: Highcharts.getOptions().colors[0]
                        }
                    },
                    opposite: true
                }],
                tooltip: {
                    shared: true
                },
                legend: {
                    layout: 'horizontal',
                    align: 'left',
                    x: 30,
                    verticalAlign: 'bottom',
                },
                series: [{
                    name: 'Rainfall',
                    type: 'column',
                    yAxis: 1,
                    data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5,
                        216.4, 194.1, 95.6, 54.4
                    ],
                    tooltip: {
                        valueSuffix: ' mm'
                    }

                }, {
                    name: 'Temperature',
                    type: 'spline',
                    data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3,
                        13.9, 9.6
                    ],
                    tooltip: {
                        valueSuffix: '°C'
                    }
                }]
            });
        });

        Highcharts.chart('chrt4', {
            title: {
                style: {
                    display: 'none'
                }
            },
            xAxis: {
                gridLineWidth: 1,
                title: {
                    enabled: true,
                    text: 'Height (cm)'
                },
                startOnTick: true,
                endOnTick: true,
                showLastLabel: true
            },
            yAxis: {
                title: {
                    text: 'Weight (kg)'
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            },
            series: [{
                name: 'Target',
                type: 'polygon',
                data: [
                    [153, 42],
                    [149, 46],
                    [149, 55],
                    [152, 60],
                    [159, 70],
                    [170, 77],
                    [180, 70],
                    [180, 60],
                    [173, 52],
                    [166, 45]
                ],
                color: Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0.5).get(),
                enableMouseTracking: false

            }, {
                name: 'Observations',
                type: 'scatter',
                color: Highcharts.getOptions().colors[1],
                data: [
                    [161.2, 51.6],
                    [167.5, 59.0],
                    [159.5, 49.2],
                    [157.0, 63.0],
                    [155.8, 53.6],
                    [170.0, 59.0],
                    [159.1, 47.6],
                    [166.0, 69.8],
                    [176.2, 66.8],
                    [160.2, 75.2],
                    [172.5, 55.2],
                    [170.9, 54.2],
                    [172.9, 62.5],
                    [153.4, 42.0],
                    [160.0, 50.0],
                    [147.2, 49.8],
                    [168.2, 49.2],
                    [175.0, 73.2],
                    [157.0, 47.8],
                    [167.6, 68.8],
                    [159.5, 50.6],
                    [175.0, 82.5],
                    [166.8, 57.2],
                    [176.5, 87.8],
                    [170.2, 72.8],
                    [174.0, 54.5],
                    [173.0, 59.8],
                    [179.9, 67.3],
                    [170.5, 67.8],
                    [160.0, 47.0],
                    [154.4, 46.2],
                    [162.0, 55.0],
                    [176.5, 83.0],
                    [160.0, 54.4],
                    [152.0, 45.8],
                    [162.1, 53.6],
                    [170.0, 73.2],
                    [160.2, 52.1],
                    [161.3, 67.9],
                    [166.4, 56.6],
                    [168.9, 62.3],
                    [163.8, 58.5],
                    [167.6, 54.5],
                    [160.0, 50.2],
                    [161.3, 60.3],
                    [167.6, 58.3],
                    [165.1, 56.2],
                    [160.0, 50.2],
                    [170.0, 72.9],
                    [157.5, 59.8],
                    [167.6, 61.0],
                    [160.7, 69.1],
                    [163.2, 55.9],
                    [152.4, 46.5],
                    [157.5, 54.3],
                    [168.3, 54.8],
                    [180.3, 60.7],
                    [165.5, 60.0],
                    [165.0, 62.0],
                    [164.5, 60.3],
                    [156.0, 52.7],
                    [160.0, 74.3],
                    [163.0, 62.0],
                    [165.7, 73.1],
                    [161.0, 80.0],
                    [162.0, 54.7],
                    [166.0, 53.2],
                    [174.0, 75.7],
                    [172.7, 61.1],
                    [167.6, 55.7],
                    [151.1, 48.7],
                    [164.5, 52.3],
                    [163.5, 50.0],
                    [152.0, 59.3],
                    [169.0, 62.5],
                    [164.0, 55.7],
                    [161.2, 54.8],
                    [155.0, 45.9],
                    [170.0, 70.6],
                    [176.2, 67.2],
                    [170.0, 69.4],
                    [162.5, 58.2],
                    [170.3, 64.8],
                    [164.1, 71.6],
                    [169.5, 52.8],
                    [163.2, 59.8],
                    [154.5, 49.0],
                    [159.8, 50.0],
                    [173.2, 69.2],
                    [170.0, 55.9],
                    [161.4, 63.4],
                    [169.0, 58.2],
                    [166.2, 58.6],
                    [159.4, 45.7],
                    [162.5, 52.2],
                    [159.0, 48.6],
                    [162.8, 57.8],
                    [159.0, 55.6],
                    [179.8, 66.8],
                    [162.9, 59.4],
                    [161.0, 53.6],
                    [151.1, 73.2],
                    [168.2, 53.4],
                    [168.9, 69.0],
                    [173.2, 58.4],
                    [171.8, 56.2],
                    [178.0, 70.6],
                    [164.3, 59.8],
                    [163.0, 72.0],
                    [168.5, 65.2],
                    [166.8, 56.6],
                    [172.7, 105.2],
                    [163.5, 51.8],
                    [169.4, 63.4],
                    [167.8, 59.0],
                    [159.5, 47.6],
                    [167.6, 63.0],
                    [161.2, 55.2],
                    [160.0, 45.0],
                    [163.2, 54.0],
                    [162.2, 50.2],
                    [161.3, 60.2],
                    [149.5, 44.8],
                    [157.5, 58.8],
                    [163.2, 56.4],
                    [172.7, 62.0],
                    [155.0, 49.2],
                    [156.5, 67.2],
                    [164.0, 53.8],
                    [160.9, 54.4],
                    [162.8, 58.0],
                    [167.0, 59.8],
                    [160.0, 54.8],
                    [160.0, 43.2],
                    [168.9, 60.5],
                    [158.2, 46.4],
                    [156.0, 64.4],
                    [160.0, 48.8],
                    [167.1, 62.2],
                    [158.0, 55.5],
                    [167.6, 57.8],
                    [156.0, 54.6],
                    [162.1, 59.2],
                    [173.4, 52.7],
                    [159.8, 53.2],
                    [170.5, 64.5],
                    [159.2, 51.8],
                    [157.5, 56.0],
                    [161.3, 63.6],
                    [162.6, 63.2],
                    [160.0, 59.5],
                    [168.9, 56.8],
                    [165.1, 64.1],
                    [162.6, 50.0],
                    [165.1, 72.3],
                    [166.4, 55.0],
                    [160.0, 55.9],
                    [152.4, 60.4],
                    [170.2, 69.1],
                    [162.6, 84.5],
                    [170.2, 55.9],
                    [158.8, 55.5],
                    [172.7, 69.5],
                    [167.6, 76.4],
                    [162.6, 61.4],
                    [167.6, 65.9],
                    [156.2, 58.6],
                    [175.2, 66.8],
                    [172.1, 56.6],
                    [162.6, 58.6],
                    [160.0, 55.9],
                    [165.1, 59.1],
                    [182.9, 81.8],
                    [166.4, 70.7],
                    [165.1, 56.8],
                    [177.8, 60.0],
                    [165.1, 58.2],
                    [175.3, 72.7],
                    [154.9, 54.1],
                    [158.8, 49.1],
                    [172.7, 75.9],
                    [168.9, 55.0],
                    [161.3, 57.3],
                    [167.6, 55.0],
                    [165.1, 65.5],
                    [175.3, 65.5],
                    [157.5, 48.6],
                    [163.8, 58.6],
                    [167.6, 63.6],
                    [165.1, 55.2],
                    [165.1, 62.7],
                    [168.9, 56.6],
                    [162.6, 53.9],
                    [164.5, 63.2],
                    [176.5, 73.6],
                    [168.9, 62.0],
                    [175.3, 63.6],
                    [159.4, 53.2],
                    [160.0, 53.4],
                    [170.2, 55.0],
                    [162.6, 70.5],
                    [167.6, 54.5],
                    [162.6, 54.5],
                    [160.7, 55.9],
                    [160.0, 59.0],
                    [157.5, 63.6],
                    [162.6, 54.5],
                    [152.4, 47.3],
                    [170.2, 67.7],
                    [165.1, 80.9],
                    [172.7, 70.5],
                    [165.1, 60.9],
                    [170.2, 63.6],
                    [170.2, 54.5],
                    [170.2, 59.1],
                    [161.3, 70.5],
                    [167.6, 52.7],
                    [167.6, 62.7],
                    [165.1, 86.3],
                    [162.6, 66.4],
                    [152.4, 67.3],
                    [168.9, 63.0],
                    [170.2, 73.6],
                    [175.2, 62.3],
                    [175.2, 57.7],
                    [160.0, 55.4],
                    [165.1, 104.1],
                    [174.0, 55.5],
                    [170.2, 77.3],
                    [160.0, 80.5],
                    [167.6, 64.5],
                    [167.6, 72.3],
                    [167.6, 61.4],
                    [154.9, 58.2],
                    [162.6, 81.8],
                    [175.3, 63.6],
                    [171.4, 53.4],
                    [157.5, 54.5],
                    [165.1, 53.6],
                    [160.0, 60.0],
                    [174.0, 73.6],
                    [162.6, 61.4],
                    [174.0, 55.5],
                    [162.6, 63.6],
                    [161.3, 60.9],
                    [156.2, 60.0],
                    [149.9, 46.8],
                    [169.5, 57.3],
                    [160.0, 64.1],
                    [175.3, 63.6],
                    [169.5, 67.3],
                    [160.0, 75.5],
                    [172.7, 68.2],
                    [162.6, 61.4],
                    [157.5, 76.8],
                    [176.5, 71.8],
                    [164.4, 55.5],
                    [160.7, 48.6],
                    [174.0, 66.4],
                    [163.8, 67.3]
                ]

            }],
        });

        Highcharts.chart('chart5', {
            chart: {
                type: 'column'
            },
            title: {
                style: {
                    display: 'none'
                }
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Rainfall (mm)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Tokyo',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1,
                    95.6, 54.4
                ]

            }, {
                name: 'New York',
                data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6,
                    92.3
                ]

            }, {
                name: 'London',
                data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3,
                    51.2
                ]

            }, {
                name: 'Berlin',
                data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8,
                    51.1
                ]

            }]
        });


        //===== To DO List Add Task Field =====//
        $('.add-tsk-btn').on('click', function () {
            $('div.add-tsk').slideToggle();
            return false;
        });

        //===== To Do List =====//
        $('.td-lst > li').on('click', function () {
            $(this).toggleClass('completed');
            return false;
        });

        //===== To Do List Deleted =====//
        $('.td-lst > li > a').on('click', function () {
            $(this).parent('li').slideUp();
            return false;
        });

        $('.add-tsk form > button').on('click', function () {
            var task_list = $('ul.td-lst');
            var task_item = $('.add-tsk form > input').val();
            var date = new Date();
            var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul",
                "Aug", "Sep", "Oct", "Nov", "Dec"
            ];
            var current_date = date.getDate() + ' ' + months[date.getMonth()] + ' ' + date.getFullYear();
            if (task_item !== '' && task_item !== 'undefined') {
                $(task_list).prepend('<li><h5>' + task_item +
                    '</h5> <span><i class="ion-ios-stopwatch"></i>' + current_date +
                    '</span> <a href="#" title=""><i class="ion-android-delete"></i></a></li>');
                $('.td-lst > li').on("click", function () {
                    $(this).toggleClass('active');
                });
                $('.add-tsk form > input').addClass('null');
                $('.add-tsk form > input').val('');
                $('.add-tsk form > input').focus();
                var attribute = $("ul.td-lst").children('li').eq(0).children('i');
                return false;
            }
        });

        //===== Circliful =====//
        if ($.isFunction($.fn.circliful)) {
            $('#circl-prg').circliful({
                animation: 1,
                animationStep: 3,
                foregroundBorderWidth: 5,
                backgroundBorderWidth: 5,
                percent: 66,
                textSize: 35,
                foregroundColor: '#50b8aa',
                backgroundColor: "#96d5f7",
                textStyle: 'font-size: 20px;',
                textColor: '#555555',
            });
        }

        //===== Full Calendar =====//
        if ($.isFunction($.fn.fullCalendar)) {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev',
                    center: 'title',
                    right: 'next'
                },
                height: 530,
                defaultDate: '2017-09-12',
                editable: true,
                eventLimit: true,
                events: [{
                    title: 'Long Event...',
                    start: '2017-09-04'
                },
                    {
                        title: 'Repeating Event',
                        start: '2017-09-09',
                        end: '2017-09-10'
                    },
                    {
                        title: 'Word Show...',
                        start: '2017-09-21'
                    }
                ]
            });
        }
    });
</script>
</body>

</html>