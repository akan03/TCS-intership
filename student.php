<?php include('includes/database.php');?><!--http://jsfiddle.net/gh/get/jquery/1.7.2/highslide-software/highcharts.com/tree/master/samples/highcharts/plotoptions/box-plot-styling/-->

<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>ERP model IET Lucknow</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>ERP model IET Lucknow</title>
<link rel="stylesheet" href="../css/style.default.css" type="text/css" />

<link rel="stylesheet"  href="/css/jkmegamenu.css" type="text/css" />   <!-- ye add kara hai megamenu ke liye -->
<link rel="stylesheet"  href="/css/jkmegamenu2.css" type="text/css" />   <!-- ye add kara hai megamenu ke liye -->
<link rel="stylesheet"  href="/css/jkmegamenu3.css" type="text/css" />   <!-- ye add kara hai megamenu ke liye -->
<link rel="stylesheet"  href="/css/jkmegamenu4.css" type="text/css" />   <!-- ye add kara hai megamenu ke liye -->
<link href="//css1/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css">
<link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        
        <link href="css1/AdminLTE.css" rel="stylesheet" type="text/css" />
		
<script type="text/javascript" src="../js/jquery.newsvertical.js"></script>
<script type="text/javascript" src="../js/jquery.vticker-min.js"></script>
<script type="text/javascript">
$(function(){
	$('#upcoming-events').vTicker({ 
		speed: 800,
		pause: 1500,
		animation: 'fade',
		mousePause: false,
		showItems: 3
	});
	
	$('#recent-events').vTicker({ 
		speed: 800,
		pause: 1500,
		animation: 'fade',
		mousePause: false,
		showItems: 3
	});
       
});
</script>


<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.10.3.min.js"></script>
<script type="text/javascript" src="../js/modernizr.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="../js/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="../js/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="../js/responsive-tables.js"></script>
<script type="text/javascript" src="../js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->

<!-- <script type="text/javascript" src="js/Dev.js"></script> -->   			<!-- yaha se sahi hua hai hover ka funda  -->
<script type="text/javascript" src="../js/jkmegamenu.js"></script>


        <script src="../amcharts/amcharts.js" type="text/javascript"></script>
        <script src="../amcharts/serial.js" type="text/javascript"></script>
<script type="text/javascript">

//jkmegamenu.definemenu("anchorid", "menuid", "mouseover|click")
jkmegamenu.definemenu("megaanchor", "megamenu1", "click")
jkmegamenu.definemenu("megaanchor2", "megamenu2", "click")
jkmegamenu.definemenu("megaanchor3", "megamenu3", "click")
jkmegamenu.definemenu("megaanchor4", "megamenu4", "click")

</script>
<script type="text/javascript" src="../sources/jscharts.js"></script>
<script type="text/javascript"> 
	$("#basic-tooltip").tooltip();
</script>
<script type="text/javascript" src="../canvasjs.min.js"></script></head>

<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      theme: "theme2",
      title:{
        text: ""
      },
      axisX: {
        valueFormatString: "MMM",
        interval:1,
        intervalType: "month"
        
      },
      axisY:{
        includeZero: false
        
      },
      data: [
      {        
        type: "line",
        //lineThickness: 3,        
        dataPoints: [
        { x: new Date(2012, 00, 1), y: 55 },
        { x: new Date(2012, 01, 1), y: 57},
        { x: new Date(2012, 02, 1), y: 90, indexLabel: "highest",markerColor: "red", markerType: "triangle"},
        { x: new Date(2012, 03, 1), y: 60 },
        { x: new Date(2012, 04, 1), y: 70 },
        { x: new Date(2012, 05, 1), y: 50 },
        { x: new Date(2012, 06, 1), y: 80 },
        { x: new Date(2012, 07, 1), y: 75 },
        { x: new Date(2012, 08, 1), y: 50 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross"},
        { x: new Date(2012, 09, 1), y: 70 },
        { x: new Date(2012, 10, 1), y: 80 },
        { x: new Date(2012, 11, 1), y: 50 }
        
        ]
      }
      
      
      ]
    });

chart.render();
}
</script>

        
    </head>

    <body style="background:white">

<div id="mainwrapper" class="mainwrapper">
		<!-- Begin Header -->
		<?php include('includes/header_st.php'); ?>
		<?php include('includes/right.php'); ?>
		<!-- End Header -->
 <div class="rightpanel1">
 <div class="alert alert-info" style="margin-top:10px;margin-left:0px;">
                              <button data-dismiss="alert" class="close" type="button">&times;</button>
                              <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                            </div>	
								<section class=" connectedSortable">
                            <div class="box box-danger" id="loading-example">
					        <div class="box-header">
							<ul class="headmenu1">

						<li>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        53<sup style="font-size: 20px">%</sup>
                                    </h3>
                                    <p>
                                        Semester progress
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						</li><li>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        7
                                    </h3>
                                    <p>
                                        Test days left
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						</li>
						<li>
                        
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        2<sup style="font-size: 20px"></sup>
                                    </h3>
                                    <p>
                                       Coming events 
                                    </p>
                                </div>
                                <div class="icon" style="margin-top:10px;">
                                    <i class="ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class=" "></i>
                                </a>
                           
                        </div><!-- ./col -->
						</li>
						<li>
                        
                            <!-- small box -->
                            <div class="small-box  bg-red">
                                <div class="inner">
                                    <h3>
                                        70<sup style="font-size: 20px">%</sup>
                                    </h3>
                                    <p>
                                       Overall attendance
                                    </p>
                                </div>
                                <div class="icon" style="margin-top:10px;">
                                    <i class="ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class=" "></i>
                                </a>
                           
                        </div><!-- ./col -->
						</li>
						<!--li>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box ->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        60<sup style="font-size: 20px">%</sup>
                                    </h3>
                                    <p>
                                        Overall attendance
                                    </p>
                                </div>
                                <div class="icon ion-stats-bars">
                                    <i class="ion "></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col ->
                    </li-->
				
					     </ul>
			          </div>
			       </div>
				</section>


						<section class=" connectedSortable">
                            <div class="box box-danger" id="loading-example">
					        <div class="box-header">
							
							<div class="courses2">
						<div class="tabbable-f ">
                    <ul class="nav nav-tabs buttons-icons">
                    	
						<li style="border:0px 1px 0px 1px;border-style:solid;border-color:#BEBEBE;" class="active"><a data-toggle="tab" href="#fontawesome">Percentile Chart</a></li>
                        <li style="border:0px 1px 0px 1px;border-style:solid;border-color:#BEBEBE;"><a data-toggle="tab" href="#glyphs">Student Ratio Chart</a></li>					
                    </ul>			
			
			<div class="tab-content">
				 <div id="fontawesome" class="tab-pane active">
						<div id="personal_display" style="margin-left:-40px;margin-top:-35px" >						 
                        <?php
	/*
	 * This file is ready to run as standalone example. However, please do:
	 * 1. Add tags <html><head><body> to make a complete page
	 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder 
	 */

	$KoolControlsFolder = "../KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
        
	require $KoolControlsFolder."/KoolChart/koolchart.php";

    $chart = new KoolChart("chart");
	$chart->scriptFolder=$KoolControlsFolder."/KoolChart";	
	$chart->Width = 550;
	$chart->Height = 350;
	
    $chart->Title->Text = "";
    $chart->PlotArea->XAxis->Title = "";
    $chart->PlotArea->XAxis->Set(array("Quiz1","Mid Sem","Quiz2","End Sem"));
    $chart->PlotArea->YAxis->Title = "";
    $chart->PlotArea->YAxis->MaxValue = 100;
    $chart->PlotArea->YAxis->MinValue = 0;
    $chart->PlotArea->YAxis->MajorStep = 25;
    $chart->PlotArea->YAxis->MinorStep = 5;
    $chart->PlotArea->YAxis->LabelsAppearance->DataFormatString = "{0}%";
    
	$series = new LineSeries();
    $series->Name = "Ime672";
	$series->Appearance->BackgroundColor="#2D6B99";
	$series->TooltipsAppearance->DataFormatString = "{0}% {1}";
    
	$series->LabelsAppearance->Position = "Above";
    $series->MarkersAppearance->MarkersType = "Square";
    $series->ArrayData(array(60,80,75,70));
    $chart->PlotArea->AddSeries($series);
    
	$series = new LineSeries();
    $series->Name = "Ime476";
	$series->Appearance->BackgroundColor="#5AB7DE";
    $series->TooltipsAppearance->DataFormatString = "{0}% {1}";
   
	$series->LabelsAppearance->Position = "Above";
    $series->ArrayData(array(50,60,60,55));
    $chart->PlotArea->AddSeries($series);
	
	$series = new LineSeries();
    $series->Name = "Ime276";
	$series->Appearance->BackgroundColor="green";
    $series->TooltipsAppearance->DataFormatString = "{0}% {1}";
   
	$series->LabelsAppearance->Position = "Above";
    $series->ArrayData(array(30,60,50,45));
    $chart->PlotArea->AddSeries($series);
	
	/*$series = new LineSeries();
    $series->Name = "Ime626";
	$series->Appearance->BackgroundColor="red";
    $series->TooltipsAppearance->DataFormatString = "{0}% {1}";
   
	$series->LabelsAppearance->Position = "Above";
    $series->ArrayData(array(80,90,70,85));
    $chart->PlotArea->AddSeries($series);*/
?>

<form id="form1" method="post">
<div style="margin-left:">
	<?php echo $chart->Render();?>					
	
</div>	

</form> 
						</div>
						    
				</div><!--tab-pane-->
				
                <div id="glyphs" class="tab-pane" >
				
                  <div id="graph" style="margin-left:;">Loading...</div>   
                					                                                    
                </div><!--tab-pane-->				
				
			</div><!--tabcontent-->
			
			</div>	<!--tabbable-->	
            </div>		

<div class="news2">
						<div class="tabbable-f ">
                    <ul class="nav nav-tabs buttons-icons">
                    	
						<li style="border:0px 1px 0px 1px;border-style:solid;border-color:#BEBEBE;" class="active"><a data-toggle="tab" href="#fontawesome1">Attendance chart</a></li>
                        <li style="border:0px 1px 0px 1px;border-style:solid;border-color:#BEBEBE;"><a data-toggle="tab" href="#glyphs1">Attendance Range</a></li>					
                    </ul>			
			
			<div class="tab-content">
				 <div id="fontawesome1" class="tab-pane active">
						<div id="personal_display" style="margin-top:15px;" >						 
                       <div id="chartContainer" style="height: 300px; width: 100%;">
                        </div>
						</div>
						    
				</div><!--tab-pane-->
				
                <div id="glyphs1" class="tab-pane" ></div><!--tab-pane-->			
			  </div><!--tabcontent-->
			</div>	<!--tabbable-->	
            
			</div>		
	      </div>
		</div>
	</section>
        
		
	<section class=" connectedSortable">
        <div class="box box-danger" id="loading-example">
			<div class="box-header">
       	        <div class="divider30"></div>
					<div class="courses">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                        <tr>
                                <th>Sl. No.</th>
								<th>Courses &nbsp; Enrolled</th>
                                <th>Faculty</th>
                                <th>Reminder</th>
						
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                <td><a href="operationresearch.php">Web Technology</a></td>
                                <td><a href="akmittal.php">Mr Mahima Shankar <span class="on"></span></a></td>
                                <td><a>Assignment 2</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
								<td><a href="marketingresearch.php">IM</a></td>
                                <td><a href="nksharma.php">Ms Sonal<span class="on"></span></a></td>
                                <td><a href=../index_st.php>Quiz</a>
                                        </tr>
                                        <tr>
                                            <td>3</td>
								<td><a href="poms.php">Software Engg</a></td>
								<td><a href="">Mr Anand Kumar Singh<span class="off"></span></a></td>
                                <td><a>None</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
								<td><a href="accounting.php">Information Security</a></td>
                                <td><a href="">Mr Shashank<span class="on"></span></a></td>
                                <td><a>2nd Mid Sem</a></td>
								</tr>
								<tr>
                                <td>5</td>
								<td><a href="computing.php">Computing for Management</a></td>
                                <td><a href="">Abhiskek Jaiswal<span class="on"></span></a></td>
								<td><a>None</a></td>
                            </tr>
							<tr>
                                <td>6</td>
								<td><a href="probability.php">Probability and Statistics</a></td>
								<td><a href="">Ms. Nimisha <span class="on"></span></a></td>
                                <td><a>Assignment</a></td>
                            </tr>
                                        
                                    </table>
                                </div><!-- /.box-body -->
								
				</div>
				
				<div class="news">	
					<div class="widgettitle9"><strong>NEWS AND EVENTS</strong></div> 
						<div class="tabbable-s ">					 
                            <ul class="nav nav-tabs buttons-icons">
                                <li class="width2 active">
								<a href="#upcoming-events" data-toggle="tab" >
								<span class=""></span> &nbsp; Upcoming Events</a></li>
                                 <!--li><a href="#tabs-2"><span class="iconfa-star"></span></a></li--> 
                                <li class="width2">
								<a href="#recent-events" data-toggle="tab">
								<span class=""></span> &nbsp; Recent Events</a></li>
                            </ul>
							<div class="tab-content">
                        <div id="upcoming-events" class="tab-pane active">							
                            <!--h5 class="tabtitle">Last Logged In Users</h5--> 
                            <ul class="userlist">                                    
								<!--li>									
                                    <div class="uinfo">                                                                             
                                         <h5 style="font-family:Andalus;font-size:18px;">End Sem Exam'13</h5>
                                         <span class="pos">For Odd Sem Final, Starting Date: 18th Nov </span><br>												
                                    </div>                                          
                                </li-->
								<li>									
                                    <div class="uinfo">                                                                            
                                        <h5 style="font-family:Andalus;font-size:18px;">ENCORE 2015</h5>
                                        <span class="pos">Technical& Cultural Fest. IET Lucknopw, Starting Date: 17th March</span>                                                
									</div>                                        
                                </li>
								<li>									
                                    <div class="uinfo">
                                        <span></span>                             
                                        <h5 style="font-family:Andalus;font-size:18px;">Shauryotsava 2015</h5>
                                        <span class="pos">Sports Meet IET Lucknow, Starting Date: 3rd February.</span>                                         
                                    </div>                                        
                                </li>
								<li>									
                                    <div class="uinfo">                                                                             
										<h5 style="font-family:Andalus;font-size:18px;">My birthday</h5>
                                        <span class="pos"> 3rd June</span>
                                    </div>                                        
                                </li>							
                            </ul>
                        </div>			
						<div id="recent-events" class="tab-pane ">                                
                            
						</div>
						</div>
				</div>
				 </div>
							</div>
							   
                        </section>
						
						<?php include('includes/footer_all.php'); ?>
		</div>
		</div>
		<script type="text/javascript">
    jQuery(document).ready(function() {
        
      // simple chart
		
			
		function showTooltip(x, y, contents) {
			jQuery('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5
			}).appendTo("body").fadeIn(200);
		}
	
			
		
		
		var previousPoint = null;
		jQuery("#chartplace").bind("plothover", function (event, pos, item) {
			jQuery("#x").text(pos.x.toFixed(2));
			jQuery("#y").text(pos.y.toFixed(2));
			
			if(item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;
						
					jQuery("#tooltip").remove();
					var x = item.datapoint[0].toFixed(2),
					y = item.datapoint[1].toFixed(2);
						
					showTooltip(item.pageX, item.pageY,
									item.series.label + " of " + x + " = " + y);
				}
			
			} else {
			   jQuery("#tooltip").remove();
			   previousPoint = null;            
			}
		
		});
		
		jQuery("#chartplace").bind("plotclick", function (event, pos, item) {
			if (item) {
				jQuery("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
				plot.highlight(item.series, item.datapoint);
			}
		});
    
        
        //datepicker
        jQuery('#datepicker').datepicker();
        
        // tabbed widget
        jQuery('.tabbedwidget').tabs();
        
        
    
    });
</script>
<script type="text/javascript">
	
	var myData = new Array(['Ime625', 7, 20], ['Ime423', 22, 9], ['Ime645', 33, 6], ['Ime243', 10, 16], ['Ime275', 34, 49]);
	var myChart = new JSChart('graph', 'bar');
	myChart.setDataArray(myData);
	myChart.setTitle('MALE FEMALE RATIO');
	myChart.setTitleColor('#8E8E8E');
	myChart.setAxisNameX('');
	myChart.setAxisNameY('');
	myChart.setAxisNameFontSize(16);
	myChart.setAxisNameColor('#999');
	myChart.setAxisValuesAngle(0);
	myChart.setAxisValuesColor('#777');
	myChart.setAxisColor('#B5B5B5');
	myChart.setAxisWidth(1);
	myChart.setBarValuesColor('#2F6D99');
	myChart.setAxisPaddingTop(30);
	myChart.setAxisPaddingBottom(30);
	myChart.setAxisPaddingLeft(0);
	myChart.setTitleFontSize(11);
	myChart.setBarColor('#2D6B96', 1);
	myChart.setBarColor('#9CCEF0', 2);
	myChart.setBarBorderWidth(0);
	myChart.setBarSpacingRatio(50);
	myChart.setBarOpacity(0.9);
	myChart.setFlagRadius(6);
	myChart.setTooltip(['North America', 'Click me', 1], callback);
	myChart.setTooltipPosition('nw');
	myChart.setTooltipOffset(3);
	myChart.setLegendShow(true);
	myChart.setLegendPosition('right top');
	myChart.setLegendForBar(1, 'Male');
	myChart.setLegendForBar(2, 'Female');
	myChart.setSize(520, 300);
	myChart.setLegendPosition(10, 30);
	myChart.setGridColor('#C6C6C6');
	myChart.draw();
	
	function callback() {
		alert('User click');
	}
	
</script>

<!--script type="text/javascript">
	
	var myChart = new JSChart('graph1', 'line');
	myChart.setDataArray([[1, 80],[2, 40],[3, 60],[4, 65]], 'blue');
	myChart.setDataArray([[1, 100],[2, 55],[3, 80],[4, 115]], 'green');
	myChart.setDataArray([[1, 150],[2, 25],[3, 100],[4, 80]], 'gray');
	myChart.setSize(600, 300);
	myChart.setAxisValuesNumberY(5);
	myChart.setIntervalStartY(0);
	myChart.setIntervalEndY(200);
	myChart.setLabelX([1,'p1']);
	myChart.setLabelX([2,'p2']);
	myChart.setLabelX([3,'p3']);
	myChart.setLabelX([4,'p4']);
	
	myChart.setAxisValuesNumberX(16);
	myChart.setShowXValues(false);
	myChart.setTitleColor('#454545');
	myChart.setAxisValuesColor('#454545');
	myChart.setLineColor('#A4D314', 'green');
	myChart.setLineColor('#BBBBBB', 'gray');
	myChart.setTooltip([1,' ']);
	myChart.setTooltip([2,' ']);
	myChart.setTooltip([3,' ']);
	myChart.setTooltip([4,' ']);
	myChart.setTooltip([5,' ']);
	myChart.setTooltip([6,' ']);
	myChart.setTooltip([7,' ']);
	myChart.setTooltip([8,' ']);
	myChart.setTooltip([9,' ']);
	myChart.setTooltip([10,' ']);
	myChart.setFlagColor('#9D16FC');
	myChart.setFlagRadius(4);
	myChart.setAxisPaddingRight(100);
	myChart.setLegendShow(true);
	myChart.setLegendPosition(510, 60);
	myChart.setLegendForLine('blue', 'Click me');
	myChart.setLegendForLine('green', 'Click me');
	myChart.setLegendForLine('gray', 'Click me');
	myChart.draw();
	
</script-->
<script src="jsjs1/dip1.js" type="text/javascript"></script>
        <script src="js/js1/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <script src="jsjs1/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/js1/AdminLTE/dashboard.js" type="text/javascript"></script>
    </body>

</html>