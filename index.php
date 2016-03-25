<?php include('includes/database.php');
if($_POST)
{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
	$password = mysql_real_escape_string(md5($password));
    if(is_null($username) || is_null($password))
    {
        //error
    }
    else
    {
        //$query = @"SELECT * FROM users where userid='$username' and password=sha1('$password')";
		$query = @"SELECT rollno,position,first_name FROM register where rollno='$username' and password='$password'";
        $connection = new Database();
        $result = $connection->query($query);
        if($result != null && count($result) > 0)
        {
           // echo $result[0]['first_name'];
             $_SESSION['username'] = $result[0]['first_name'];
			 $_SESSION['rollno'] = $result[0]['rollno'];
			// $_SESSION['mailid']=$_GET['mailid']
            // $_SESSION['rollnumber'] = $result[0]['rollnumber'];
            // $_SESSION['email'] = $result[0]['email'];
			if($result[0]['position']=="Admin")
			{
            header('Location: ./admin/admin.php');//redirct to inner page
			}
			if($result[0]['position']=="Student")
			{
			header('Location: ./student/student.php');//redirct to inner spage
			}
			if($result[0]['position']=="Faculty")
			{
			header('Location: ./faculty/faculty.php');//redirct to inner spage
			}
			
			
        }
        else
        {
            $msg='show';//error
        }
    }
}

 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>ERP model IET Lucknow</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="css/style.shinyblue.css" type="text/css" />
</head>

<body class="loginpage">
<div class="loginpanel">
    <div class="loginpanelinner">
        <div class="logo animate0 bounceIn"><img src="images/123.png" alt="" /></div>
        <form id="login" action="" method="POST">
            <div class="inputwrapper <?php echo isset($msg)?'show':'login-alert'; ?>">
                <div class="alert alert-error">Invalid username or password</div>
            </div>
            <div class="inputwrapper animate1 bounceIn">
                <input type="text" name="username" id="username" placeholder="Enter any username" />
            </div>
            <div class="inputwrapper animate2 bounceIn">
                <input type="password" name="password" id="password" placeholder="Enter any password" />
            </div>
            <div class="inputwrapper animate3 bounceIn">
                <button name="submit">Sign In</button>
            </div>
            <div class="inputwrapper animate4 bounceIn">
                <div class="pull-right">Register <a href="registration.php"> here</a></div>
            </div>
            
        </form>
    </div><!--loginpanelinner-->
</div><!--loginpanel-->

<!-- Begin Footer -->
<?php include('includes/footer.php'); ?>
<!-- End Footer -->

<?php include('includes/footerjs.php'); ?>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#login').submit(function(){
            var u = jQuery('#username').val();
            var p = jQuery('#password').val();
            if(u == '' && p == '') {
                jQuery('.login-alert').fadeIn();
                return false;
            }
        });
    });
</script>
</body>
</html>
