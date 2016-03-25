

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>ERP model IET Lucknow</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="css/style.shinyblue.css" type="text/css" />

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.3.min.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="js/jquery.autogrow-textarea.js"></script>
<script type="text/javascript" src="js/charCount.js"></script>
<script type="text/javascript" src="js/colorpicker.js"></script>
<script type="text/javascript" src="js/ui.spinner.min.js"></script>
<script type="text/javascript" src="js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/forms.js"></script>

</head>

<body class="loginpage">

<div class="regpanel">
    <div class="regpanelinner">
        <div class="pageheader">
            <div class="pageicon"><span class="iconfa-hand-down"></span></div>
            <div class="pagetitle">
                <h5>Your Information</h5>
                <h1>Registration Form</h1>
            </div>
        </div>
        <div class="regcontent">      
            
            
            <form action="insert.php" method="post" class="stdform">     

			
                <p><label>User Information :</label>
                <input type="text" name="first_name" id="first_name" class="input-small" placeholder="Full Name" />
				<input type="text" name="middle_name" id="middle_name" class="input-small" placeholder="Middle Name" />
				<input type="text" name="last_name" id="last_name" class="input-small" placeholder="Last Name" /></
				</p>
				
				<p><label>Position :</label>
				
                    <select name="position" id="position" class="input-small">
                        <option>Position</option>
                        <option value="Admin">Admin</option>
                        <option value="Faculty">Faculty</option>						                        
						<option value="Student">Student</option>
						<option value="Staff">Staff</option>						                        
						
                    </select>
                                       
                </p>

				
				
				<p><label>Roll No./ID No. :</label>
				<input type="text" name="rollno" id="rollno" class="input-medium" placeholder="Roll No./Id No." /></p>
				
				
				<p><label>Gender :</label>		
				<input type="radio" name="gender" id="gender" value="Male"/> Male &nbsp;&nbsp;
                    <input type="radio" name="gender" id="gender" value="Female"/> Female
                </p>
				
				
                <p><label>Marital Status. :</label>
                    <input type="radio" name="marital_status" id="marital_status" value="Married"/> Married &nbsp;&nbsp;
                    <input type="radio" name="marital_status" id="marital_status" value="Unmarried"/> Unmarried
                </p>
                
				
				
                <p><label>Date of Birth :</label>
                    <input  type="text" name="dob" id="datepicker" class="input-medium" placeholder="Date of Birth" />
                </p>
				            
				
				
                <p><label>Course :</label>
                    <select name="programme" id="programme" class="input-small">
                        <option>Programme</option>
                        <option value="B.Tech">B.Tech</option>
                        <option value="M.Tech">M.Tech</option>
                    </select>
                    <select name="department" id="department" class="input-small">
                        <option>Department</option>
                        <option value="IME">IME</option>
                        <option value="CSE">CSE</option>
                    </select>
                    
                </p>
				
				<p><label>Year of Registration :</label>
                    <select name="yr_reg" id="yr_reg" class="input-small">
                        <option>Select</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
                    </select>                                       
                </p>
				
				
				<p><label>Blood Group :</label>
                    <select name="blood_group" id="blood_group" class="input-small">
                        <option>Blood Group</option>
                        <option value="A">A+</option>
                        <option value="B">B+</option>
                    </select>
                                       
                </p>
				
				
                <p><label>Email :</label>
				<input type="text" name="college_email" id="college_email" class="input-medium" placeholder="College Email" />
				<input type="text" name="alternate_email" id="alternate_email" class="input-medium" placeholder="External Email" />
				</p>
				
				
				<p><label>Password :</label>
				<input type="password" name="password" id="password"class="input-large" placeholder="Select a Password" /></p>               
				
				
                <p><label>Contact No :</label>
					<input type="text" name="contact_number" id="contact_number" class="input-medium" placeholder="Your Contact No" />
					<input type="text" name="alternate_contact_number" id="alternate_college_email" class="input-medium" placeholder="Alternate Contact No" />				   
				</p>
				
				
                <p><label>Father's Name :</label>
					<input type="text" name="father_name" id="father_name" class="input-medium" placeholder="Father's Name" /> 
				</p>
				
				
                <p><label>Correspondence Address :</label>
					<textarea type="text" name="correspondence_address" id="correspondence_address" cols="80" rows="2"  style="resize: vertical" placeholder="Correspondence Address"></textarea>
				</p>
				
							
			
                <p><label>Permanent Address :</label>
				<textarea type="text" name="permanent_address" id="permanent_address" cols="80" rows="2" style="resize: vertical" placeholder="Permanent Address"></textarea>
                				               
                <p><button type="submit" class="btn btn-primary">Register</button></p>
                
            </form>
        
        </div><!--regcontent-->
    </div><!--regpanelinner-->
</div><!--regpanel-->

<div class="regfooter">
    <p>&copy; <?php echo date('Y'); ?>. . All Rights Reserved.</p>
</div>

</body>
</html>
