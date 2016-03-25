<?php //include('includes/database.php');?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>e- Mangement Empowered</title>
<link rel="stylesheet" href="../css/style.default.css" type="text/css" />




<link rel="stylesheet"  href="../css/jkmegamenu.css" type="text/css" />   <!-- ye add kara hai megamenu ke liye -->
<link rel="stylesheet"  href="../css/jkmegamenu2.css" type="text/css" />   <!-- ye add kara hai megamenu ke liye -->
<link rel="stylesheet"  href="../css/jkmegamenu3.css" type="text/css" />   <!-- ye add kara hai megamenu ke liye -->
<link rel="stylesheet"  href="../css/jkmegamenu4.css" type="text/css" />   <!-- ye add kara hai megamenu ke liye -->


<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.10.3.min.js"></script>
<script type="text/javascript" src="../js/modernizr.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>
<script tyle="text/javascript">
  jQuery(document).ready(function(){
		  
		  var heightArray = jQuery(".gridblog .inner").map( function(){ return  jQuery(this).height();}).get();
		  var maxHeight = Math.max.apply( Math, heightArray);
		  jQuery(".gridblog .inner").height(maxHeight);
		  
  });
</script>

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
		<?php include('includes/header_st.php'); ?>
	<!-- End Header -->
  
    <div class="rightpanel">
        
			<div class="tabbable">
                <ul class="nav nav-tabs buttons-icons">
                    	
                        <li class="active"><a href="blog.php">Blog List</a></li>
						
                    </ul>
		     </div>
            
                <ul class="gridblog">
                    <!-- start of loop here -->
                    <li>
                        <div class="inner">
                       <div class="gridthumb">
                           <div class="gridimg"><img src="../images/image33.png" alt="" style="width:100%; height:145px;" /></div>
                       </div>
                       <h3><a href="sampletable.html">Narayan Murty Blog</a></h3>
                       <div class="blogmeta">Blogged by: <a href="">Narayan Murty</a> / <a href="">1 Comment</a></div>
                       <p>As Narayana Murthy bid adieu to Infosys, what is surprising is the kind of risks he took in the early stages of the company's growth.His successors need to rediscover that original risk-taking ability.</p>
                       <p><a class="readmore" href="">Continue reading..</a></p>
                        </div>
                    </li>
                    <!-- end of loop here -->
                    <li>
                        <div class="inner">
                       <div class="gridthumb">
                           <div class="gridimg"><img src="../images/image22.png" alt="" style="width:100%; height:145px;" /></div>
                       </div>
                       <h3><a href="sampletable2.html">Narender Modi Blog</a></h3>
                       <div class="blogmeta">Blogged by: <a href="">Narender Modi</a> / <a href="">1 Comment</a></div>
                       <p>Shri Narendra Modi started blogging on 14th April 2009, the 118th birth anniversary of Dr. Babasaheb Ambedkar. Shri Narendra Modi’s blog is a platform for people around the World to read his opinion on myriad issues in his own words.</p>
                       <p><a class="readmore" href="">Continue reading..</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                       <div class="gridthumb" >
                           <div class="gridimg"><img class="image" src="../images/image44.png" alt="" style="width:100%; height:145px;"></div>
                       </div>
                       <h3><a href="sampletable3.html">Dr. Abdul Kalam Blog</a></h3>
                       <div class="blogmeta">Posted by: <a href="">Abdul Kalam</a> / <a href="">1 Comment</a></div>
                       <p>Bharat Ratna Avul Pakir Jainulabdeen Abdul Kalam usually referred to as Dr. A. P. J. Abdul Kalam, is an Indian scientist and administrator who served as the 11th President of India from 2002 to 2007

 </p>
                       <p><a class="readmore" href="">Continue reading..</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                       <div class="gridthumb">
                           <div class="gridimg"><img src="../images/blog.png" alt="" style="width:100%; height:145px;"/></div>
                       </div>
                       <h3><a href="">This Is A Blog Title</a></h3>
                       <div class="blogmeta">Posted by: <a href="">ThemePixels</a> / <a href="">1 Comment</a></div>
                       <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                       <p><a class="readmore" href="">Continue reading..</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                       <div class="gridthumb">
                           <div class="gridimg"><img src="../images/blog.png" alt="" style="width:100%; height:145px;" /></div>
                       </div>
                       <h3><a href="">This Is A Blog Title</a></h3>
                       <div class="blogmeta">Posted by: <a href="">ThemePixels</a> / <a href="">1 Comment</a></div>
                       <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                       <p><a class="readmore" href="">Continue reading..</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                       <div class="gridthumb">
                           <div class="gridimg"><img src="../images/blog.png" alt="" style="width:100%; height:145px;" /></div>
                       </div>
                       <h3><a href="">This Is A Blog Title</a></h3>
                       <div class="blogmeta">Posted by: <a href="">ThemePixels</a> / <a href="">1 Comment</a></div>
                       <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                       <p><a class="readmore" href="">Continue reading..</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                       <div class="gridthumb">
                           <div class="gridimg"><img src="../images/blog.png" alt="" style="width:100%; height:145px;" /></div>
                       </div>
                       <h3><a href="">This Is A Blog Title</a></h3>
                       <div class="blogmeta">Posted by: <a href="">ThemePixels</a> / <a href="">1 Comment</a></div>
                       <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                       <p><a class="readmore" href="">Continue reading..</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                       <div class="gridthumb">
                           <div class="gridimg"><img src="../images/blog.png" alt="" style="width:100%; height:145px;" /></div>
                       </div>
                       <h3><a href="">This Is A Blog Title</a></h3>
                       <div class="blogmeta">Posted by: <a href="">ThemePixels</a> / <a href="">1 Comment</a></div>
                       <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                       <p><a class="readmore" href="">Continue reading..</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                       <div class="gridthumb">
                           <div class="gridimg"><img src="../images/blog.png" alt="" style="width:100%; height:145px;" /></div>
                       </div>
                       <h3><a href="">This Is A Blog Title</a></h3>
                       <div class="blogmeta">Posted by: <a href="">ThemePixels</a> / <a href="">1 Comment</a></div>
                       <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                       <p><a class="readmore" href="">Continue reading..</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                       <div class="gridthumb">
                           <div class="gridimg"><img src="../images/blog.png" alt="" style="width:100%; height:145px;" /></div>
                       </div>
                       <h3><a href="">This Is A Blog Title</a></h3>
                       <div class="blogmeta">Posted by: <a href="">ThemePixels</a> / <a href="">1 Comment</a></div>
                       <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                       <p><a class="readmore" href="">Continue reading..</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                       <div class="gridthumb">
                           <div class="gridimg"><img src="../images/blog.png" alt="" style="width:100%; height:145px;" /></div>
                       </div>
                       <h3><a href="">This Is A Blog Title</a></h3>
                       <div class="blogmeta">Posted by: <a href="">ThemePixels</a> / <a href="">1 Comment</a></div>
                       <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                       <p><a class="readmore" href="">Continue reading..</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                       <div class="gridthumb">
                           <div class="gridimg"><img src="../images/blog.png" alt="" style="width:100%; height:145px;" /></div>
                       </div>
                       <h3><a href="">This Is A Blog Title</a></h3>
                       <div class="blogmeta">Posted by: <a href="">ThemePixels</a> / <a href="">1 Comment</a></div>
                       <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                       <p><a class="readmore" href="">Continue reading..</a></p>
                        </div>
                    </li>
                </ul>
                
                <br />
                 <div class="footer">
                        <div class="footer-left">
                            <span>&copy; 2013. e- Mangement Empowered Admin Template. All Rights Reserved.</span>
                        </div>
                        <div class="footer-right">
                            <span><marquee>Designed by: <a href="http://e- Mangement Empowered.com/">e- Mangement Empowered</a></marquee></span>
                        </div>
                    </div><!--footer-->
    
        
    </div><!--rightpanel-->
	
	 
				
				
</div><!--mainwrapper-->

</body>
</html>
