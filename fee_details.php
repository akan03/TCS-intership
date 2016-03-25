<?php include('includes/database.php');?>
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

<script type="text/javascript" src="../js/jkmegamenu.js"></script>
<script type="text/javascript">

//jkmegamenu.definemenu("anchorid", "menuid", "mouseover|click")
jkmegamenu.definemenu("megaanchor", "megamenu1", "mouseover")
jkmegamenu.definemenu("megaanchor2", "megamenu2", "mouseover")
jkmegamenu.definemenu("megaanchor3", "megamenu3", "mouseover")
jkmegamenu.definemenu("megaanchor4", "megamenu4", "mouseover")
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
				<li class="active"><a data-toggle="tab" href="#fontawesome">Tuition Fee Receipt</a></li>                    
				<li><a data-toggle="tab" href="#glyphs">Hall Fee Receipt</a></li>
				<li><a data-toggle="tab" href="#abc">Mess Bills</a></li>
				<li><a data-toggle="tab" href="#def">Fine Receipt</a></li>
				<li><a data-toggle="tab" href="#ghi">Scholarship Receipt</a></li>
			</ul>
			<div class="tab-content">
				<div id="fontawesome" class="tab-pane active">
								
					<div class="row-fluid">                 
                    
                    <div class="span6">
                        <div class="invoice_logo"><img src="../images/123.png" height=40 width=40 alt="" class="img-polaroid" /></div>
                  
                        <table class="table table-bordered table-invoice">
                            <tr>
                                <td class="width30">Name of Depositor:</td>
                                <td class="width70"><strong>Mohd IQBAL</strong></td>
                            </tr>
                            <tr>
                                <td>Roll No:</td>
                                <td>12114006</td>
                            </tr>
                            <tr>
                                <td>Department:</td>
                                <td>CSE(B.Tech)</td>
                            </tr>
                        </table>
                    </div><!--span6-->
            
                    <div class="span6">
                        <table class="table table-bordered table-invoice">
                            <tr>
                                <td class="width30">From:</td>
                                <td class="width70">
                                    <strong>Institute of Engineering & Technology, Lucknow</strong> <br />
                                    Finance and Account Section, <br />
                                    
                                    Tel No: 0522-2508507<br />
                                    
                                </td>
                            </tr>
                        </table>
                        
                        <br />
                  
                        <table class="table table-bordered table-invoice">
                            <tr>
                                <td class="width30">Receipt No:</td>
                                <td class="width70"><strong></strong></td>
                            </tr>
                            <tr>
                                <td>Receiving Date:</td>
                                <td><strong>April 14, 2015</strong></td>
                            </tr>
                            
                        </table>
                        
						</div><!--span6-->
					</div><!--row-fluid-->
            
					<div class="clearfix"><br /></div>
            
					<table class="table table-bordered table-invoice-full">
						<colgroup>
							<col class="con0" />
							<col class="con1" />
							<col class="con0" />
							
						</colgroup>
						<thead>
							<tr>
								<th class="head0">Sr.No</th>
								<th class="head1">Particulars of Deposit</th>
								<th class="head0 right">Amount</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>01</td>
								<td>State Bank of India DD No.267144 <br />(Security Fee)</td>
								<td class="right">7000</td>
							</tr>
							<tr>
								<td>02</td>
								<td>Tution Fee <br /> (2nd semester) </td>
								<td class="right">17000<br /><!-- 1 --></td>
							</tr>
							<tr>
								<td>03</td>
								<td>Mess Bills<br />(Security fee)</td>
								<td class="right">3000</td>
							</tr>
							<tr>
								<td>03</td>
								<td>Mess Bills<br />(Security fee)</td>
								<td class="right">3000</td>
							</tr>
							<tr>
								<td><br /></td>
								<td class="right"><br />Total Rs.</td>
								<td class="right"><br />27000</td>
							</tr>
							</tbody>
					</table>
                                
					<table class="table invoice-table">
						<tbody>
							<tr>
								<td class="width65 msg-invoice">
									<!-- <h4>Message:</h4> -->
									<p> IET Lucknow recieved Rupee SEVEN THOUSAND ONLY in Bank Draft No. 267144 and credited in Account -A/c. 1,IIT , Kanpur on July 14, 2013</p>
								</td>
								
							</tr>
						</tbody>
					</table>
					<div class="errortitle">		  
						<div class="errorbtns animate4 fadeInUp">
								<a href="" class="btn btn-primary btn-large">Print</a>
						</div>
					</div>
				</div><!--tab-pane-->
				
				<div id="glyphs" class="tab-pane active">
								
					<div class="row-fluid">                 
                    
                    <div class="span6">
                        <div class="invoice_logo"><img src="../images/123.png" height=40 width=40 alt="" class="img-polaroid" /></div>
                  
                        <table class="table table-bordered table-invoice">
                            <tr>
                                <td class="width30">Name of Depositor:</td>
                                <td class="width70"><strong>Mohd. Iqbal</strong></td>
                            </tr>
                            <tr>
                                <td>Roll No:</td>
                                <td>12114006</td>
                            </tr>
                            <tr>
                                <td>Department:</td>
                                <td>CSE(B.Tech)</td>
                            </tr>
                        </table>
                    </div><!--span6-->
            
                    <div class="span6">
                        <table class="table table-bordered table-invoice">
                            <tr>
                                <td class="width30">From:</td>
                                <td class="width70">
                                    <strong>IET, Lucknow</strong> <br />
                                    Finance and Account Section, <br />
                                    
                                    Tel No: 0522-2508507<br />
                                    
                                </td>
                            </tr>
                        </table>
                        
                        <br />
                  
                        <table class="table table-bordered table-invoice">
                            <tr>
                                <td class="width30">Receipt No:</td>
                                <td class="width70"><strong></strong></td>
                            </tr>
                            <tr>
                                <td>Receiving Date:</td>
                                <td><strong>July 14, 2013</strong></td>
                            </tr>
                            
                        </table>
                        
						</div><!--span6-->
					</div><!--row-fluid-->
            
					<div class="clearfix"><br /></div>
            
					<table class="table table-bordered table-invoice-full">
						<colgroup>
							<col class="con0" />
							<col class="con1" />
							<col class="con0" />
							
						</colgroup>
						<thead>
							<tr>
								<th class="head0">Sr.No</th>
								<th class="head1">Particulars of Deposit</th>
								<th class="head0 right">Amount</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>01</td>
								<td>State Bank of India DD No.267144 <br />(Security Fee)</td>
								<td class="right">7000</td>
							</tr>
							<tr>
								<td>02</td>
								<td>Tution Fee <br /> (2nd semester) </td>
								<td class="right">17000<br /><!-- 1 --></td>
							</tr>
							<tr>
								<td>03</td>
								<td>Mess Bills<br />(Security fee)</td>
								<td class="right">3000</td>
							</tr>
							<tr>
								<td>03</td>
								<td>Mess Bills<br />(Security fee)</td>
								<td class="right">3000</td>
							</tr>
							<tr>
								<td><br /></td>
								<td class="right"><br />Total Rs.</td>
								<td class="right"><br />27000</td>
							</tr>
							</tbody>
					</table>
                                
					<table class="table invoice-table">
						<tbody>
							<tr>
								<td class="width65 msg-invoice">
									<!-- <h4>Message:</h4> -->
									<p> IET Lucknow recieved Rupee SEVEN THOUSAND ONLY in Bank Draft No. 267144 and credited in Account -A/c. 1,IIT , Kanpur on July 14, 2013</p>
								</td>
								
							</tr>
						</tbody>
					</table>
					<div class="errortitle">		  
						<div class="errorbtns animate4 fadeInUp">
								<a href="" class="btn btn-primary btn-large">Print</a>
						</div>
					</div>
				</div><!--tab-pane-->
		  
			</div><!--tabcontent--> 
		</div>  <!--tabbable-->	      
            <!-- Begin Footer -->
			<?php include('includes/footer_all.php'); ?>
			<!-- End Footer -->
    </div><!--rightpanel-->
</div><!--mainwrapper-->

</body>
</html>
