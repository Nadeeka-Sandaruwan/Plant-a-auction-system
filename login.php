<?=template_header('My account')?>


<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
#posi{

	position: relative;
	left: 600px;
	top: 0px;}
	#posit{

	position: relative;
	left: 100px;
	top: 0px;}

</style>
	</style>
	<link rel="stylesheet" type="text/css" href="css/body/loginfile.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
</head>
<body>
<div id="posit">	
<form  action = "insertdata.php"method = "post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    
    <input type="password" placeholder="Repeat Password" name="pswrepeat" id="psw-repeat" required>


    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="submit"class="registerbtn">Register</button>
  </div>
  
 
  </div>
</form>
</div>
<div id="posi">
<form action="loginvalidation.php" method="post">
	<div class="up">
	<h1>Login</h1>
    <p>Please fill in this form to login to your account.</p>
    <hr>

    
    <input type="text" placeholder="Enter Email" name="loginemail" id="email" required>
    
    <input type="password" placeholder="Enter Password" name="loginpsw" id="psw" required>

    <input type="text" placeholder="Enter Email" name="user_type" id="user_type" required>
    <button type="submit" name="submittologin"class="registerbtn">Login</button>

</div>
</form>
</div>
</body>
</html>