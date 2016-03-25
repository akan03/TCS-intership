<?php include('includes/database.php');?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>e- Mangement Empowered</title>

<link rel="stylesheet" href="../css/style.default.css" type="text/css" />
<link rel="stylesheet" href="../prettify/prettify.css" type="text/css" />
<link rel="stylesheet" href="../css/responsive-tables.css">


<link rel="stylesheet"  href="../css/jkmegamenu.css" type="text/css" />   <!-- ye add kara hai megamenu ke liye -->
<link rel="stylesheet"  href="../css/jkmegamenu2.css" type="text/css" />   <!-- ye add kara hai megamenu ke liye -->
<link rel="stylesheet"  href="../css/jkmegamenu3.css" type="text/css" />   <!-- ye add kara hai megamenu ke liye -->
<link rel="stylesheet"  href="../css/jkmegamenu4.css" type="text/css" />   <!-- ye add kara hai megamenu ke liye -->

<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.10.3.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="../prettify/prettify.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../js/modernizr.min.js"></script>
<script type="text/javascript" src="../js/responsive-tables.js"></script>
<script type="text/javascript" src="../js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>

<script type="text/javascript" src="../js/jkmegamenu.js"></script>
<script type="text/javascript">

//jkmegamenu.definemenu("anchorid", "menuid", "mouseover|click")
jkmegamenu.definemenu("megaanchor", "megamenu1", "click")
jkmegamenu.definemenu("megaanchor2", "megamenu2", "click")
jkmegamenu.definemenu("megaanchor3", "megamenu3", "click")
jkmegamenu.definemenu("megaanchor4", "megamenu4", "click")
</script>


</head>

<body>

<div id="mainwrapper" class="mainwrapper">
    
<!-- Begin Header -->
<?php include('includes/header_ad.php'); ?>
<?php include('includes/right.php'); ?>
<!-- End Header -->
     <div class="rightpanel1">
           
               
		<div class="tabbable">
                    
					<ul class="nav nav-tabs buttons-icons ">
						<li class="active"><a data-toggle="tab" href="#fontawesome">Digital Library </a></li>                    
						<li><a href="http://library.iitk.ac.in/" target="_blank">Central Library</a></li>				
					
                    </ul>
		<div class="tab-content">
			<div id="fontawesome" class="tab-pane active">
						
		                
                <!-- <h4 class="widgettitle">II Sem Performance Report </h4> -->
            	<table class="table table-hover">
								<tr class="gradeX">
                            <th><b>Sl. No.</b></th>
                            <th><b>Source Name</b></th>
                            <th><b>About Source</b></th>
                            <th><b>Link</b></th>
                            <!-- <th>CSS grade</th> -->
                        </tr>
				
                   
					
						<tr class="gradeX">
                            <td>01</td>
                            <td>NPTEL</td>
                            <td>NPTEL provides E-learning through online Web and Video courses in Engineering,<br/> Science and humanities streams. The mission of NPTEL is to enhance the quality of <br/>Engineering education in the country by providing free online courseware</td>
                            <td><a href="http://nptel.iitm.ac.in/" target="_blank">Click here to access</a></td>
                           <!--  <td class="center">A</td> -->
                        </tr> 
						
                      <tr class="gradeX">
                            <td>02</td>
                            <td>IEEE Xplore</td>
                            <td>The IEEE Xplore digital library is your gateway to trusted research—journals, <br/>conferences, standards, ebooks, and educational courses—with more than<br/> 3 million articles to help you fuel imagination, build from previous research,<br/> and inspire new ideas.</td>
                            <td><a href="http://ieeexplore.ieee.org/Xplore/home.jsp" target="_blank">Click here to access</a></td>
                            <!-- <td class="center">X</td> -->
                        </tr>
                        
						<tr class="gradeX">
                            <td>03</td>
                            <td>Science Direct</td>
                            <td>ScienceDirect is website operated by the Anglo-Dutch publisher Elsevier containing<br/> (as of 2013) about 11 million articles from 2,500 journals and 6,000 e-books,<br/> reference works, book series and handbooks.</td>
                            <td><a href="http://www.sciencedirect.com/" target="_blank">Click here to access</a></td>
                            <!-- <td class="center">C</td> -->
                        </tr>
						
						<tr class="gradeX">
                            <td>03</td>
                            <td>EBSCO Publishing</td>
                            <td>EBSCO Publishing, headquartered in Ipswich, Massachusetts, is an aggregator <br/>of full-text content. EBSCO Publishing's core business is providing online<br/> databases via EBSCOhost to libraries</td>
                            <td><a href="">Click here to access</a></td>
                            <!-- <td class="center">C</td> -->
                        </tr>
                        <tr class="gradeX">
                            <td>04</td>
                            <td>Cambridge University Press</td>
                            <td>Cambridge University Press is the publishing business of the University of Cambridge.<br/> Granted letters patent by Henry VIII in 1534, it is the world's oldest <br/>publishing house, and the second largest university press in the world</td>
                            <td><a href="">Click here to access</a></td>
                            <!-- <td class="center">A</td> -->
                        </tr>
                        
                       
                   
                </table>
				
			</div><!--tab-pane-->
		  
        </div><!--tabcontent--> 
        </div>  <!--tabbable-->	      
        <!-- Begin Footer -->
<?php include('includes/footer_all.php'); ?>
<!-- End Footer -->
    </div><!--rightpanel-->
	
	
	
</div><!--mainwrapper-->
<script type="text/javascript">
jQuery(document).ready(function(){
    
    prettyPrint();
    
    // check all checkboxes in table
    if(jQuery('.checkall').length > 0) {
	jQuery('.checkall').click(function(){
            var parentTable = jQuery(this).parents('table');										   
            var ch = parentTable.find('tbody input[type=checkbox]');										 
            if(jQuery(this).is(':checked')) {
			
                //check all rows in table
                ch.each(function(){ 
                    jQuery(this).attr('checked',true);
                    jQuery(this).parent().addClass('checked');	//used for the custom checkbox style
                    jQuery(this).parents('tr').addClass('selected'); // to highlight row as selected
                });
			
            } else {
				
		//uncheck all rows in table
		ch.each(function(){ 
                    jQuery(this).attr('checked',false); 
                    jQuery(this).parent().removeClass('checked');	//used for the custom checkbox style
                    jQuery(this).parents('tr').removeClass('selected');
		});	
				
	    }
	});
    }
    
    // delete row in a table
    if(jQuery('.deleterow').length > 0) {
        jQuery('.deleterow').click(function(){
            var conf = confirm('Continue delete?');
	    if(conf)
                jQuery(this).parents('tr').fadeOut(function(){
		jQuery(this).remove();
		// do some other stuff here
	    });
	    return false;
	});	
    }
        
});
</script>
</body>
</html>
