<?php include('includes/database.php');

if(isset($_POST['submit']))
{
	
	$content = $_POST['content'];
	

	
		include_once('dompdf/dompdf_config.inc.php');
		
		$html ='<!DOCTYPE html>
		<html>
		<head>
		<style>
		p
		{
		
		margin-left:30px;

		}
		</style>
		</head>

		<body>
		
		<center><h2>PDF OF FORM</h2></center>
		<p></p><br>
								<center><p><strong>Institute of Engineering and Technology,Lucknow</strong></p></center><br />
								<center><p><strong>APPLICATION FOR LEAVE</strong></p></center><br/> 
								<p></p><br>
								<p><strong>&emsp;&emsp;&emsp;The_______________________________________</strong></p><br>
								<p>&emsp;&emsp;&emsp;__________________________________________</p><br>
								<p><strong>&emsp;&emsp;&emsp;IIT Kanpur</strong></p><br>
								<p></p><br>

								<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1.&emsp;&emsp;&emsp;Name:</strong></p><br>							
								<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;2.&emsp;&emsp;&emsp;Roll No:</strong></p><br>							
								<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;3.&emsp;&emsp;&emsp;Department:</strong></p><br>
								<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;4.&emsp;&emsp;&emsp;Program:</strong></p><br>							
								<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;5.&emsp;&emsp;&emsp;Leave applied for:______days From:______________To:____________</strong></p><br>
								<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;6.&emsp;&emsp;&emsp;Purpose/comments:</strong></p><br>	
								<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;7.&emsp;&emsp;&emsp;Leave Address, if going out of Station:</strong></p><br>
								<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;_________________________________</strong></p><br>
								<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;_________________________________</strong></p><br>
								<p style="margin-left:420px;"><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Signature of applicant:</strong></p><br>
								<p style="margin-left:420px;"><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Date:</strong></p><br>
								<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;_________________________________</strong></p><br>
								<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Leave Sanctioned/ Not Sanctioned</strong></p><br>  
								<p></p><br>
								<p style="margin-left:420px;"><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Head of Dept/Section:</strong></p><br>
		'.$content.'
		
		</div>
		</body>
		</html>';
		
		$dompdf = new DOMPDF();
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Sample.pdf');
	
	
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>ERP model IET Lucknow</title>
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
<?php include('includes/header_ad.php'); ?>
<!-- End Header -->
<?php include('includes/right.php'); ?>
    <div class="rightpanel1">
	
                <div class="tabbable">
                    <ul class="nav nav-tabs buttons-icons">
                    	<li class="active"><a data-toggle="tab" href="#content">Leave Form</a></li>
                        <li><a data-toggle="tab" href="#fontawesome">Bonafide Certificate</a></li>
                    </ul>
                	<div class="tab-content">
                    	<div name="content" id="content" class="tab-pane active">
							<form method="post" action="">
							
							<p></p><br>
								<center><p class="position26"><strong>Institute of Engineering and Technology, Lucknow</strong></p></center><br />
								<center><p class="position26"><strong>APPLICATION FOR LEAVE</strong></p></center><br/> 
								<p></p><br>
								<p class="position25"><strong>The<div class="line1"></div></strong></p><br>
								<p class="position25 line2"></p><br>
								<p class="position25"><strong>IET Lucknow</strong></p><br>
								<p></p><br>

								<p class="position21"><strong>1.<p class="position22">Name:</p></strong></p><br>							
								<p class="position21"><strong>2.<p class="position22">Roll No:</p></strong></p><br>							
								<p class="position21"><strong>3.<p class="position22">Department:</p></strong></p><br>
								<p class="position21"><strong>4.<p class="position22">Program:</p></strong></p><br>							
								<p class="position21"><strong>5.<p class="position22">Leave applied for:______days From:______________To:____________</p></strong></p><br>
								<p class="position21"><strong>6.<p class="position22">Purpose/comments:</strong></p><br>	
								<p class="position21"><strong>7.<p class="position22">Leave Address, if going out of Station:</p></strong></p><br>
								<p class="position23 line3"><strong></strong></p><br>
								<p class="position23 line3"><strong></strong></p><br>
								<p class="position24"><strong>Signature of applicant:</strong></p><br>
								<p class="position24"><strong>Date:</strong></p><br>
								<p class="position23 line4"><strong></strong></p><br>
								<p class="position23"><strong>Leave Sanctioned/ Not Sanctioned</strong></p><br>  
								<p></p><br>
								<p class="position24"><strong>Head of Dept/Section:</strong></p><br>
							
							
							<br>
								
								<center><input type="submit" name="submit" class="btn btn-primary btn-large" value="Click to Download Form"></center>
							</form>					
							
                        </div><!--tab-pane-->
                        <div id="fontawesome" class="tab-pane">
                            <p></p><br>
                        	<center><p><strong>INDIAN INSTITUTE OF TECHNOLOGY, KANPUR</strong></p></center><br />
							<center><p><strong>Phone: 0512-259 0151</strong></p></center><br />
							<p></p><br>
							<center><p><strong>BONAFIDE CERTIFICATE</strong></p></center><br/> 
							<center><p><strong>This is to certify that Mr. / Ms__________________________________________________________is a bonafide </strong></p></center><br/>
							<center><p><strong>student of our college studying ______________________________year ____________________________________</strong></p></center><br/>
							<center><p><strong>( Name of the Degree) _____________________________________________________________( Discipline) during </strong></p></center><br/>
							<center><p><strong>the academic year ______________________________________________ .</strong></p></center><br/>
							<p></p><br>
							<p></p><br>
							<p></p><br>
							<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
							&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
							&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
							&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;PRINCIPAL / HEAD OF THE DEPT </strong></p><br>
							<p><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
							&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
							&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
							&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;(SEAL) </strong></p><br>
                            
							<div class="errortitle">	
							<div class="errorbtns animate4 fadeInUp">
            
								<a href="" class="btn btn-primary btn-large">Click to Download Form</a>
								
							</div>
							</div>
                           
                        </div><!--tab-pane-->
                        
                        <div id="iconsweets" class="tab-pane">
                        	<p>291 icons in sprite form, available in dark gray (default) and white, provided by <a href="http://www.iconsweets2.com/" target="_blank">IconSweets</a>.</p>
                    		<br />
                                <ul class="iconsweetslist clearfix">
                            	<li><i class="iconsweets-magnifying"></i> iconsweets-magnifying</li>
                                <li><i class="iconsweets-trashcan"></i> iconsweets-trashcan</li>
                                <li><i class="iconsweets-trashcan2"></i> iconsweets-trashcan2</li>
                                <li><i class="iconsweets-presentation"></i> iconsweets-presentation</li>
                                <li><i class="iconsweets-download"></i> iconsweets-download2</li>
                                <li><i class="iconsweets-download2"></i> iconsweets-download2</li>
                                <li><i class="iconsweets-upload"></i> iconsweets-upload</li>
                                <li><i class="iconsweets-flag"></i> iconsweets-flag</li>
                                <li><i class="iconsweets-flag2"></i> iconsweets-flag2</li>
                                <li><i class="iconsweets-finish-flag"></i> iconsweets-finish-flag</li>
                                <li><i class="iconsweets-podium"></i> iconsweets-podium</li>
                                <li><i class="iconsweets-cup"></i> iconsweets-cup</li>
                                <li><i class="iconsweets-home"></i> iconsweets-home</li>
                                <li><i class="iconsweets-home2"></i> iconsweets-home2</li>
                                <li><i class="iconsweets-link"></i> iconsweets-link</li>
                                <li><i class="iconsweets-link2"></i> iconsweets-link2</li>
                                <li><i class="iconsweets-notebook"></i> iconsweets-notebook</li>
                                <li><i class="iconsweets-book"></i> iconsweets-book</li>
                                <li><i class="iconsweets-book-large"></i> iconsweets-book-large</li>
                                <li><i class="iconsweets-books"></i> iconsweets-books</li>
                                <li><i class="iconsweets-tree"></i> iconsweets-tree</li>
                                <li><i class="iconsweets-construction"></i> iconsweets-consruction</li>
                                <li><i class="iconsweets-umbrella"></i> iconsweets-umbrella</li>
                                <li><i class="iconsweets-mail"></i> iconsweets-mail</li>
                                <li><i class="iconsweets-help"></i> iconsweets-help</li>
                                <li><i class="iconsweets-rss"></i> iconsweets-rss</li>
                                <li><i class="iconsweets-strategy"></i> iconsweets-strategy</li>
                                <li><i class="iconsweets-strategy2"></i> iconsweets-strategy2</li>
                                <li><i class="iconsweets-apartment"></i> iconsweets-apartment</li>
                                <li><i class="iconsweets-companies"></i> iconsweets-companies</li>
                                <li><i class="iconsweets-ghost"></i> iconsweets-ghost</li>
                                <li><i class="iconsweets-pacman"></i> iconsweets-pacman</li>
                                <li><i class="iconsweets-vault"></i> iconsweets-vault</li>
                                <li><i class="iconsweets-archive"></i> iconsweets-archive</li>
                                <li><i class="iconsweets-cabinet"></i> iconsweets-cabinet</li>
                                <li><i class="iconsweets-bandaid"></i> iconsweets-bandaid</li>
                                <li><i class="iconsweets-postcard"></i> iconsweets-postcard</li>
                                <li><i class="iconsweets-alert"></i> iconsweets-alert</li>
                                <li><i class="iconsweets-alert2"></i> iconsweets-alert2</li>
                                <li><i class="iconsweets-alarm"></i> iconsweets-alarm</li>
                                <li><i class="iconsweets-alarm2"></i> iconsweets-alarm2</li>
                                <li><i class="iconsweets-robot"></i> iconsweets-robot</li>
                                <li><i class="iconsweets-globe"></i> iconsweets-globe</li>
                                <li><i class="iconsweets-globe2"></i> iconsweets-globe2</li>
                                <li><i class="iconsweets-chemical"></i> iconsweets-chemical</li>
                                <li><i class="iconsweets-lightbulb"></i> iconsweets-lightbulb</li>
                                <li><i class="iconsweets-cloud"></i> iconsweets-cloud</li>
                                <li><i class="iconsweets-cloud-upload"></i> iconsweets-cloud-upload</li>
                                <li><i class="iconsweets-cloud-download"></i> iconsweets-cloud-download</li>
                                <li><i class="iconsweets-lamp"></i> iconsweets-lamp</li>
                                <li><i class="iconsweets-preview"></i> iconsweets-preview</li>
                                <li><i class="iconsweets-icecream"></i> iconsweets-icecream</li>
                                <li><i class="iconsweets-icecream2"></i> iconsweets-icecream2</li>
                                <li><i class="iconsweets-paperclip"></i> iconsweets-paperclip</li>
                                <li><i class="iconsweets-footprints"></i> iconsweets-footprints</li>
                                <li><i class="iconsweets-firefox"></i> iconsweets-firefox</li>
                                <li><i class="iconsweets-chrome"></i> iconsweets-chrome</li>
                                <li><i class="iconsweets-safari"></i> iconsweets-safari</li>
                                <li><i class="iconsweets-loadingbar"></i> iconsweets-loadingbar</li>
                                <li><i class="iconsweets-bullseye"></i> iconsweets-bullseye</li>
                                <li><i class="iconsweets-folder"></i> iconsweets-folder</li>
                                <li><i class="iconsweets-locked"></i> iconsweets-locked</li>
                                <li><i class="iconsweets-locked2"></i> iconsweets-locked2</li>
                                <li><i class="iconsweets-unlock"></i> iconsweets-unlock</li>
                                <li><i class="iconsweets-tag"></i> iconsweets-tag</li>
                                <li><i class="iconsweets-tag2"></i> iconsweets-tag2</li>
                                <li><i class="iconsweets-mac"></i> iconsweets-mac</li>
                                <li><i class="iconsweets-windows"></i> iconsweets-windows</li>
                                <li><i class="iconsweets-linux"></i> iconsweets-linux</li>
                                <li><i class="iconsweets-create"></i> iconsweets-create</li>
                                <li><i class="iconsweets-expose"></i> iconsweets-expose</li>
                                <li><i class="iconsweets-key"></i> iconsweets-key</li>
                                <li><i class="iconsweets-key2"></i> iconsweets-key2</li>
                                <li><i class="iconsweets-table"></i> iconsweets-table</li>
                                <li><i class="iconsweets-chair"></i> iconsweets-chair</li>
                                <li><i class="iconsweets-denied"></i> iconsweets-denied</li>
                                <li><i class="iconsweets-ballons"></i> iconsweets-ballons</li>
                                <li><i class="iconsweets-cat"></i> iconsweets-cat</li>
                                <li><i class="iconsweets-airplane"></i> iconsweets-airplane</li>
                                <li><i class="iconsweets-track"></i> iconsweets-track</li>
                                <li><i class="iconsweets-car"></i> iconsweets-car</li>
                                <li><i class="iconsweets-info"></i> iconsweets-info</li>
                                <li><i class="iconsweets-alarmclock"></i> iconsweets-alarmclock</li>
                                <li><i class="iconsweets-stopwatch"></i> iconsweets-stopwatch</li>
                                <li><i class="iconsweets-timer"></i> iconsweets-timer</li>
                                <li><i class="iconsweets-clock"></i> iconsweets-clock</li>
                                <li><i class="iconsweets-day"></i> iconsweets-day</li>
                                <li><i class="iconsweets-month"></i> iconsweets-month</li>
                                <li><i class="iconsweets-dress"></i> iconsweets-dress</li>
                                <li><i class="iconsweets-tshirt"></i> iconsweets-tshirt</li>
                                <li><i class="iconsweets-sportshirt"></i> iconsweets-sportshirt</li>
                                <li><i class="iconsweets-sweater"></i> iconsweets-sweater</li>
                                <li><i class="iconsweets-sleeveless"></i> iconsweets-sleeveless</li>
                                <li><i class="iconsweets-pants"></i> iconsweets-pants</li>
                                <li><i class="iconsweets-socks"></i> iconsweets-socks</li>
                                <li><i class="iconsweets-trolly"></i> iconsweets-trolly</li>
                                <li><i class="iconsweets-medical"></i> iconsweets-medical</li>
                                <li><i class="iconsweets-suitcase"></i> iconsweets-suitcase</li>
                                <li><i class="iconsweets-suitcase2"></i> iconsweets-suitcase2</li>
                                <li><i class="iconsweets-suitcase3"></i> iconsweets-suitcase3</li>
                                <li><i class="iconsweets-shoppingbag"></i> iconsweets-shoppingbag</li>
                                <li><i class="iconsweets-purse"></i> iconsweets-purse</li>
                                <li><i class="iconsweets-bag"></i> iconsweets-bag</li>
                                <li><i class="iconsweets-paypal"></i> iconsweets-paypal</li>
                                <li><i class="iconsweets-paypal2"></i> iconsweets-paypal2</li>
                                <li><i class="iconsweets-paypal3"></i> iconsweets-paypal3</li>
                                <li><i class="iconsweets-money"></i> iconsweets-money</li>
                                <li><i class="iconsweets-money2"></i> iconsweets-money2</li>
                                <li><i class="iconsweets-pricetag"></i> iconsweets-pricetag</li>
                                <li><i class="iconsweets-pricetags"></i> iconsweets-pricetags</li>
                                <li><i class="iconsweets-piggybank"></i> iconsweets-piggybank</li>
                                <li><i class="iconsweets-lemonade"></i> iconsweets-lemonade</li>
                                <li><i class="iconsweets-basket"></i> iconsweets-basket</li>
                                <li><i class="iconsweets-basket2"></i> iconsweets-basket2</li>
                                <li><i class="iconsweets-scan"></i> iconsweets-scan</li>
                                <li><i class="iconsweets-cart"></i> iconsweets-cart</li>
                                <li><i class="iconsweets-cart2"></i> iconsweets-cart2</li>
                                <li><i class="iconsweets-cart3"></i> iconsweets-cart3</li>
                                <li><i class="iconsweets-cart4"></i> iconsweets-cart4</li>
                                <li><i class="iconsweets-digg"></i> iconsweets-cart4</li>
                                <li><i class="iconsweets-digg2"></i> iconsweets-cart4</li>
                                <li><i class="iconsweets-buzz"></i> iconsweets-cart4</li>
                                <li><i class="iconsweets-delicious"></i> iconsweets-delicious</li>
                                <li><i class="iconsweets-twitter"></i> iconsweets-twitter</li>
                                <li><i class="iconsweets-twitter2"></i> iconsweets-twitter2</li>
                                <li><i class="iconsweets-tumblr"></i> iconsweets-tumblr</li>
                                <li><i class="iconsweets-plixi"></i> iconsweets-plixi</li>
                                <li><i class="iconsweets-dribbble"></i> iconsweets-dribbble</li>
                                <li><i class="iconsweets-dribbble2"></i> iconsweets-dribbble2</li>
                                <li><i class="iconsweets-stumbleupon"></i> iconsweets-stumbleupon</li>
                                <li><i class="iconsweets-lastfm"></i> iconsweets-lastfm</li>
                                <li><i class="iconsweets-mobypicture"></i> iconsweets-mobypicture</li>
                                <li><i class="iconsweets-youtube"></i> iconsweets-youtube</li>
                                <li><i class="iconsweets-youtube2"></i> iconsweets-youtube2</li>
                                <li><i class="iconsweets-vimeo"></i> iconsweets-vimeo</li>
                                <li><i class="iconsweets-vimeo2"></i> iconsweets-vimeo2</li>
                                <li><i class="iconsweets-skype"></i> iconsweets-skype</li>
                                <li><i class="iconsweets-facebook"></i> iconsweets-facebook</li>
                                <li><i class="iconsweets-like"></i> iconsweets-like</li>
                                <li><i class="iconsweets-ichat"></i> iconsweets-ichat</li>
                                <li><i class="iconsweets-myspace"></i> iconsweets-myspace</li>
                                <li><i class="iconsweets-dropbox"></i> iconsweets-dropbox</li>
                                <li><i class="iconsweets-walking"></i> iconsweets-walking</li>
                                <li><i class="iconsweets-running"></i> iconsweets-running</li>
                                <li><i class="iconsweets-exit"></i> iconsweets-exit</li>
                                <li><i class="iconsweets-male"></i> iconsweets-male</li>
                                <li><i class="iconsweets-female"></i> iconsweets-female</li>
                                <li><i class="iconsweets-user"></i> iconsweets-user</li>
                                <li><i class="iconsweets-users"></i> iconsweets-users</li>
                                <li><i class="iconsweets-admin"></i> iconsweets-admin</li>
                                <li><i class="iconsweets-malesymbol"></i> iconsweets-malesymbol</li>
                                <li><i class="iconsweets-user2"></i> iconsweets-user2</li>
                                <li><i class="iconsweets-users2"></i> iconsweets-users2</li>
                                <li><i class="iconsweets-admin2"></i> iconsweets-admin2</li>
                                <li><i class="iconsweets-femalesymbol"></i> iconsweets-femalesymbol</li>
                                <li><i class="iconsweets-usercomment"></i> iconsweets-usercomment</li>
                                <li><i class="iconsweets-cog"></i> iconsweets-cog</li>
                                <li><i class="iconsweets-cog2"></i> iconsweets-cog2</li>
                                <li><i class="iconsweets-cog3"></i> iconsweets-cog3</li>
                                <li><i class="iconsweets-cog4"></i> iconsweets-cog4</li>
                                <li><i class="iconsweets-settings"></i> iconsweets-settings</li>
                                <li><i class="iconsweets-settings2"></i> iconsweets-settings2</li>
                                <li><i class="iconsweets-hd"></i> iconsweets-hd</li>
                                <li><i class="iconsweets-hd2"></i> iconsweets-hd2</li>
                                <li><i class="iconsweets-hd3"></i> iconsweets-hd3</li>
                                <li><i class="iconsweets-sd"></i> iconsweets-sd</li>
                                <li><i class="iconsweets-sd2"></i> iconsweets-sd2</li>
                                <li><i class="iconsweets-sd3"></i> iconsweets-sd3</li>
                                <li><i class="iconsweets-dvd"></i> iconsweets-dvd</li>
                                <li><i class="iconsweets-blueray"></i> iconsweets-blueray</li>
                                <li><i class="iconsweets-record"></i> iconsweets-record</li>
                                <li><i class="iconsweets-cd"></i> iconsweets-cd</li>
                                <li><i class="iconsweets-cassette"></i> iconsweets-cassette</li>
                                <li><i class="iconsweets-image"></i> iconsweets-image</li>
                                <li><i class="iconsweets-image2"></i> iconsweets-image2</li>
                                <li><i class="iconsweets-image3"></i> iconsweets-image3</li>
                                <li><i class="iconsweets-image4"></i> iconsweets-image4</li>
                                <li><i class="iconsweets-sound"></i> iconsweets-sound</li>
                                <li><i class="iconsweets-megaphone"></i> iconsweets-megaphone</li>
                                <li><i class="iconsweets-film"></i> iconsweets-film</li>
                                <li><i class="iconsweets-film2"></i> iconsweets-film2</li>
                                <li><i class="iconsweets-headphone"></i> iconsweets-headphone</li>
                                <li><i class="iconsweets-microphone"></i> iconsweets-microphone</li>
                                <li><i class="iconsweets-printer"></i> iconsweets-printer</li>
                                <li><i class="iconsweets-radio"></i> iconsweets-radio</li>
                                <li><i class="iconsweets-television"></i> iconsweets-television</li>
                                <li><i class="iconsweets-imac"></i> iconsweets-imac</li>
                                <li><i class="iconsweets-laptop"></i> iconsweets-laptop</li>
                                <li><i class="iconsweets-mightymouse"></i> iconsweets-mightymouse</li>
                                <li><i class="iconsweets-magicmouse"></i> iconsweets-magicmouse</li>
                                <li><i class="iconsweets-mousewire"></i> iconsweets-mousewire</li>
                                <li><i class="iconsweets-monitor"></i> iconsweets-monitor</li>
                                <li><i class="iconsweets-camera"></i> iconsweets-camera</li>
                                <li><i class="iconsweets-camera2"></i> iconsweets-camera2</li>
                                <li><i class="iconsweets-ipod"></i> iconsweets-ipod</li>
                                <li><i class="iconsweets-ipodnano"></i> iconsweets-ipadnano</li>
                                <li><i class="iconsweets-ipad"></i> iconsweets-ipad</li>
                                <li><i class="iconsweets-filmcamera"></i> iconsweets-filmcamera</li>
                                <li><i class="iconsweets-calculator"></i> iconsweets-calculator</li>
                                <li><i class="iconsweets-cashregister"></i> iconsweets-cashregister</li>
                                <li><i class="iconsweets-fax"></i> iconsweets-fax</li>
                                <li><i class="iconsweets-frames"></i> iconsweets-frames</li>
                                <li><i class="iconsweets-coverflow"></i> iconsweets-coverflow</li>
                                <li><i class="iconsweets-list"></i> iconsweets-list</li>
                                <li><i class="iconsweets-list2"></i> iconsweets-list2</li>
                                <li><i class="iconsweets-list3"></i> iconsweets-list3</li>
                                <li><i class="iconsweets-list4"></i> iconsweets-list4</li>
                                <li><i class="iconsweets-wordpress"></i> iconsweets-wordpress</li>
                                <li><i class="iconsweets-wordpress2"></i> iconsweets-wordpress2</li>
                                <li><i class="iconsweets-joomla"></i> iconsweets-joomla</li>
                                <li><i class="iconsweets-expressionengine"></i> iconsweets-expressionengine</li>
                                <li><i class="iconsweets-drupal"></i> iconsweets-drupal</li>
                                <li><i class="iconsweets-arrowright"></i> iconsweets-arrowright</li>
                                <li><i class="iconsweets-arrowleft"></i> iconsweets-arrowleft</li>
                                <li><i class="iconsweets-arrowdown"></i> iconsweets-arrowdown</li>
                                <li><i class="iconsweets-arrowup"></i> iconsweets-arrowup</li>
                                <li><i class="iconsweets-refresh"></i> iconsweets-refresh</li>
                                <li><i class="iconsweets-refresh2"></i> iconsweets-refresh2</li>
                                <li><i class="iconsweets-repeat"></i> iconsweets-repeat</li>
                                <li><i class="iconsweets-shuffle"></i> iconsweets-shuffle</li>
                                <li><i class="iconsweets-refresh3"></i> iconsweets-refresh3</li>
                                <li><i class="iconsweets-refresh4"></i> iconsweets-refresh4</li>
                                <li><i class="iconsweets-recycle"></i> iconsweets-recycle</li>
                                <li><i class="iconsweets-fullscreen"></i> iconsweets-fullscreen</li>
                                <li><i class="iconsweets-fitscreen"></i> iconsweets-fitscreen</li>
                                <li><i class="iconsweets-origscreen"></i> iconsweets-origscreen</li>
                                <li><i class="iconsweets-bluetooth"></i> iconsweets-bluetooth</li>
                                <li><i class="iconsweets-bluetooth2"></i> iconsweets-bluetooth2</li>
                                <li><i class="iconsweets-wifi"></i> iconsweets-wifi</li>
                                <li><i class="iconsweets-wifi2"></i> iconsweets-wifi2</li>
                                <li><i class="iconsweets-iphone3"></i> iconsweets-iphone3</li>
                                <li><i class="iconsweets-iphone4"></i> iconsweets-iphone4</li>
                                <li><i class="iconsweets-blackberry"></i> iconsweets-blackberry</li>
                                <li><i class="iconsweets-android"></i> iconsweets-android</li>
                                <li><i class="iconsweets-mobile"></i> iconsweets-mobile</li>
                                <li><i class="iconsweets-inbox"></i> iconsweets-inbox</li>
                                <li><i class="iconsweets-outgoing"></i> iconsweets-outgoing</li>
                                <li><i class="iconsweets-incoming"></i> iconsweets-incoming</li>
                                <li><i class="iconsweets-speech"></i> iconsweets-speech</li>
                                <li><i class="iconsweets-speech2"></i> iconsweets-speech2</li>
                                <li><i class="iconsweets-speech3"></i> iconsweets-speech3</li>
                                <li><i class="iconsweets-speech4"></i> iconsweets-speech4</li>
                                <li><i class="iconsweets-phone"></i> iconsweets-phone</li>
                                <li><i class="iconsweets-phone2"></i> iconsweets-phone2</li>
                                <li><i class="iconsweets-battery"></i> iconsweets-battery</li>
                                <li><i class="iconsweets-battery2"></i> iconsweets-battery2</li>
                                <li><i class="iconsweets-battery3"></i> iconsweets-battery3</li>
                                <li><i class="iconsweets-battery4"></i> iconsweets-battery4</li>
                                <li><i class="iconsweets-batteryfull"></i> iconsweets-batteryfull</li>
                                <li><i class="iconsweets-power"></i> iconsweets-power</li>
                                <li><i class="iconsweets-electric"></i> iconsweets-electric</li>
                                <li><i class="iconsweets-plug"></i> iconsweets-plug</li>
                                <li><i class="iconsweets-brush"></i> iconsweets-brush</li>
                                <li><i class="iconsweets-brush2"></i> iconsweets-brush2</li>
                                <li><i class="iconsweets-pen"></i> iconsweets-pen</li>
                                <li><i class="iconsweets-bigbrush"></i> iconsweets-bigbrush</li>
                                <li><i class="iconsweets-pencil"></i> iconsweets-pencil</li>
                                <li><i class="iconsweets-scissor"></i> iconsweets-scissor</li>
                                <li><i class="iconsweets-eyedrop"></i> iconsweets-eyedrop</li>
                                <li><i class="iconsweets-abacus"></i> iconsweets-abacus</li>
                                <li><i class="iconsweets-ruler"></i> iconsweets-ruler</li>
                                <li><i class="iconsweets-ruler2"></i> iconsweets-ruler2</li>
                                <li><i class="iconsweets-map"></i> iconsweets-map</li>
                                <li><i class="iconsweets-maps"></i> iconsweets-maps</li>
                                <li><i class="iconsweets-post"></i> iconsweets-post</li>
                                <li><i class="iconsweets-marker"></i> iconsweets-marker</li>
                                <li><i class="iconsweets-document"></i> iconsweets-document</li>
                                <li><i class="iconsweets-documents"></i> iconsweets-documents</li>
                                <li><i class="iconsweets-pdf"></i> iconsweets-pdf</li>
                                <li><i class="iconsweets-pdf2"></i> iconsweets-pdf2</li>
                                <li><i class="iconsweets-word"></i> iconsweets-word</li>
                                <li><i class="iconsweets-word2"></i> iconsweets-word2</li>
                                <li><i class="iconsweets-word3"></i> iconsweets-word3</li>
                                <li><i class="iconsweets-zip"></i> iconsweets-zip</li>
                                <li><i class="iconsweets-zip2"></i> iconsweets-zip2</li>
                                <li><i class="iconsweets-ppt"></i> iconsweets-ppt</li>
                                <li><i class="iconsweets-ppt2"></i> iconsweets-ppt2</li>
                                <li><i class="iconsweets-excel"></i> iconsweets-excel</li>
                                <li><i class="iconsweets-excel2"></i> iconsweets-excel2</li>
                                <li><i class="iconsweets-vcard"></i> iconsweets-vcard</li>
                                <li><i class="iconsweets-vcard2"></i> iconsweets-vcard2</li>
                                <li><i class="iconsweets-address"></i> iconsweets-address</li>
                                <li><i class="iconsweets-chart"></i> iconsweets-chart</li>
                                <li><i class="iconsweets-chart2"></i> iconsweets-chart2</li>
                                <li><i class="iconsweets-chart3"></i> iconsweets-chart3</li>
                                <li><i class="iconsweets-chart4"></i> iconsweets-chart4</li>
                                <li><i class="iconsweets-chart5"></i> iconsweets-chart5</li>
                                <li><i class="iconsweets-chart6"></i> iconsweets-chart6</li>
                                <li><i class="iconsweets-chart7"></i> iconsweets-chart7</li>
                                <li><i class="iconsweets-chart8"></i> iconsweets-chart8</li>
                            </ul>
                    	</div><!--tab-pane-->
                        
                        <div id="examples" class="tab-pane">
                    		<div class="row-fluid">
                            	<div class="span4">
                                        <h4 class="subtitle">Using Glyphicons</h4>
                                        <br />
                                    	<ul class="nav nav-tabs nav-stacked samplenavs">
                                            <li class="active"><a href="#"><i class="iconfa-home"></i> &nbsp; Home</a></li>
                                            <li><a href="#"><i class="iconfa-user"></i> &nbsp; Profile</a></li>
                                            <li><a href="#"><i class="iconfa-envelope"></i> &nbsp; Messages</a></li>
                                        </ul>
                                        <div class="btn-group">
                                            <button class="btn dropdown-toggle" data-toggle="dropdown"><i class="iconfa-th"></i> &nbsp; User <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                              <li><a href="#"><i class="iconfa-music"></i> &nbsp;Music</a></li>
                                              <li><a href="#"><i class="iconfa-star"></i> &nbsp;Favorites</a></li>
                                              <li><a href="#"><i class="iconfa-globe"></i> &nbsp;Notification</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#"><i class="iconfa-arrow-right"></i> &nbsp;Signout</a></li>
                                            </ul>
                                        </div><!--btn-group-->
                                        <div class="divider30"></div>                                        
                                        <div class="btn-group">
                                          <button class="btn btn-inverse"><i class="iconfa-fast-backward icon-white"></i></button>
                                          <button class="btn btn-inverse"><i class="iconfa-backward icon-white"></i></button>
                                          <button class="btn btn-inverse"><i class="iconfa-stop icon-white"></i></button>
                                          <button class="btn btn-inverse"><i class="iconfa-play icon-white"></i></button>
                                          <button class="btn btn-inverse"><i class="iconfa-forward icon-white"></i></button>
                                          <button class="btn btn-inverse"><i class="iconfa-fast-forward icon-white"></i></button>
                                        </div>
                                        <div class="divider30"></div> 
                                        <ul class="list-nostyle list-inline">
                                        	<li><a href="" class="btn"><i class="iconfa-heart"></i></a></li>
                                            <li><a href="" class="btn btn-primary"><i class="iconfa-headphones icon-white"></i></a></li>
                                            <li><a href="" class="btn btn-warning"><i class="iconfa-signal"></i></a></li>
                                            <li><a href="" class="btn btn-danger"><i class="iconfa-book icon-white"></i></a></li>
                                            <li><a href="" class="btn btn-info"><i class="iconfa-pencil"></i></a></li>
                                        </ul>
                                        <div class="divider30"></div> 
                                        <ul class="list-nostyle list-inline">
                                        	<li><a href="" class="btn btn-circle"><i class="iconfa-heart"></i></a></li>
                                            <li><a href="" class="btn btn-primary btn-circle"><i class="iconfa-headphones icon-white"></i></a></li>
                                            <li><a href="" class="btn btn-warning btn-circle"><i class="iconfa-signal"></i></a></li>
                                            <li><a href="" class="btn btn-danger btn-circle"><i class="iconfa-book icon-white"></i></a></li>
                                            <li><a href="" class="btn btn-info btn-circle"><i class="iconfa-pencil"></i></a></li>
                                        </ul>
                                        
                                        <div class="divider30"></div> 
                                        <ul class="list-nostyle list-inline">
                                        	<li><a href="" class="btn btn-warning btn-rounded"><i class="iconfa-heart icon-white"></i> Button</a></li>
                                            <li><a href="" class="btn btn-danger btn-rounded"><i class="iconfa-headphones icon-white"></i> Another Button</a></li>
                                        </ul>
                                        
                                </div><!--span4-->
                                
                                <div class="span4">
                                	<h4 class="subtitle">Using Font Awesome</h4>
                                        <br />
                                    	<ul class="nav nav-tabs nav-stacked samplenavs">
                                        	<li class="active"><a href="#"><i class="iconfa-arrow-left"></i> &nbsp; Home</a></li>
                                            <li><a href="#"><i class="iconfa-user"></i> &nbsp; Profile</a></li>
                                            <li><a href="#"><i class="iconfa-envelope"></i> &nbsp; Messages</a></li>
                                        </ul>
                                        
                                        <div class="btn-group">
                                            <button class="btn dropdown-toggle" data-toggle="dropdown"><i class="iconfa-th"></i> &nbsp; User <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                              <li><a href="#"><i class="iconfa-music"></i> &nbsp;Music</a></li>
                                              <li><a href="#"><i class="iconfa-star"></i> &nbsp;Favorites</a></li>
                                              <li><a href="#"><i class="iconfa-globe"></i> &nbsp;Notification</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#"><i class="iconfa-remove"></i> &nbsp;Signout</a></li>
                                            </ul>
                                        </div><!--btn-group-->
                                        <div class="divider30"></div>                                        
                                        <div class="btn-group">
                                          <button class="btn"><i class="iconfa-fast-backward"></i></button>
                                          <button class="btn"><i class="iconfa-backward"></i></button>
                                          <button class="btn"><i class="iconfa-stop"></i></button>
                                          <button class="btn"><i class="iconfa-play"></i></button>
                                          <button class="btn"><i class="iconfa-forward"></i></button>
                                          <button class="btn"><i class="iconfa-fast-forward"></i></button>
                                        </div>
                                        <div class="divider30"></div> 
                                        <ul class="list-nostyle list-inline">
                                        	<li><a href="" class="btn"><i class="iconfa-heart"></i></a></li>
                                            <li><a href="" class="btn btn-primary"><i class="iconfa-off"></i></a></li>
                                            <li><a href="" class="btn btn-warning"><i class="iconfa-signal"></i></a></li>
                                            <li><a href="" class="btn btn-danger"><i class="iconfa-book"></i></a></li>
                                            <li><a href="" class="btn btn-info"><i class="iconfa-pencil"></i></a></li>
                                        </ul>
                                        
                                        <div class="divider30"></div> 
                                        <ul class="list-nostyle list-inline">
                                        	<li><a href="" class="btn btn-circle"><i class="iconfa-heart"></i></a></li>
                                            <li><a href="" class="btn btn-primary btn-circle"><i class="iconfa-off"></i></a></li>
                                            <li><a href="" class="btn btn-warning btn-circle"><i class="iconfa-signal"></i></a></li>
                                            <li><a href="" class="btn btn-danger btn-circle"><i class="iconfa-book"></i></a></li>
                                            <li><a href="" class="btn btn-info btn-circle"><i class="iconfa-pencil"></i></a></li>
                                        </ul>
                                        
                                        <div class="divider30"></div> 
                                        <ul class="list-nostyle list-inline">
                                        	<li><a href="" class="btn btn-rounded"><i class="iconfa-heart"></i> Button</a></li>
                                            <li><a href="" class="btn btn-info btn-rounded"><i class="iconfa-off"></i> Another Button</a></li>
                                        </ul>
                                        
                                        
                                </div><!--span4-->
                                
                                <div class="span4">
                                	<h4 class="subtitle">Using Icon Sweets</h4>
                                        <br />
                                    	<ul class="nav nav-tabs nav-stacked samplenavs">
                                        	<li class="active"><a href="#"><i class="iconsweets-home iconsweets-white"></i> &nbsp; Home</a></li>
                                            <li><a href="#"><i class="iconsweets-user"></i> &nbsp; Profile</a></li>
                                            <li><a href="#"><i class="iconsweets-speech"></i> &nbsp; Messages</a></li>
                                        </ul>
                                        
                                        <div class="btn-group">
                                            <button class="btn dropdown-toggle" data-toggle="dropdown"><i class="iconfa-th"></i> &nbsp; User <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                              <li><a href="#"><i class="iconsweets-sound"></i> &nbsp;Music</a></li>
                                              <li><a href="#"><i class="iconsweets-cup"></i> &nbsp;Favorites</a></li>
                                              <li><a href="#"><i class="iconsweets-globe"></i> &nbsp;Notification</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#"><i class="iconsweets-exit"></i> &nbsp;Signout</a></li>
                                            </ul>
                                        </div><!--btn-group-->
                                        
                                        <div class="divider30"></div>                                        
                                        <div class="btn-group">
                                          <button class="btn"><i class="iconsweets-twitter"></i></button>
                                          <button class="btn"><i class="iconsweets-like"></i></button>
                                          <button class="btn"><i class="iconsweets-stumbleupon"></i></button>
                                          <button class="btn"><i class="iconsweets-dribbble2"></i></button>
                                          <button class="btn"><i class="iconsweets-skype"></i></button>
                                          <button class="btn"><i class="iconsweets-youtube"></i></button>
                                        </div>
                                        <div class="divider30"></div> 
                                        <ul class="list-nostyle list-inline">
                                        	<li><a href="" class="btn"><i class="iconsweets-link"></i></a></li>
                                            <li><a href="" class="btn btn-primary"><i class="iconsweets-magnifying iconsweets-white"></i></a></li>
                                            <li><a href="" class="btn btn-warning"><i class="iconsweets-mail iconsweets-white"></i></a></li>
                                            <li><a href="" class="btn btn-danger"><i class="iconsweets-create iconsweets-white"></i></a></li>
                                            <li><a href="" class="btn btn-info"><i class="iconsweets-clock iconsweets-white"></i></a></li>
                                        </ul>
                                        
                                        <div class="divider30"></div> 
                                        <ul class="list-nostyle list-inline">
                                        	<li><a href="" class="btn btn-circle"><i class="iconsweets-link"></i></a></li>
                                            <li><a href="" class="btn btn-primary btn-circle"><i class="iconsweets-magnifying iconsweets-white"></i></a></li>
                                            <li><a href="" class="btn btn-warning btn-circle"><i class="iconsweets-mail iconsweets-white"></i></a></li>
                                            <li><a href="" class="btn btn-danger btn-circle"><i class="iconsweets-create iconsweets-white"></i></a></li>
                                            <li><a href="" class="btn btn-info btn-circle"><i class="iconsweets-clock iconsweets-white"></i></a></li>
                                        </ul>
                                        
                                        <div class="divider30"></div> 
                                        <ul class="list-nostyle list-inline">
                                        	<li><a href="" class="btn btn-rounded"> <i class="iconsweets-link"></i> &nbsp; Button</a> </li>
                                            <li><a href="" class="btn btn-primary btn-rounded"> <i class="iconsweets-magnifying iconsweets-white"></i>  &nbsp; Another Button</a></li>
                                        </ul>

                                </div><!--span4-->
                                
                            </div><!--row-fluid-->
                    	</div><!--tab-pane-->
                    </div><!--tabcontent-->
               </div><!--tabbable-->
               
          <!-- Begin Footer -->
<?php include('includes/footer_all.php'); ?>
<!-- End Footer -->
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

</body>
</html>
