<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	
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
body
{background-color: rgb(34,177,76);
}

	</style>
</head>
<body>
		<h1>Enter personal details</h1>
<form action="paymentdetails.php" method="post">

		
	<input type="text" name="email" id="email" placeholder="enter emai address"><br>
	
	<input type="text" name="uasername" id="un" placeholder="User name"><br>
	<label for="con"></label>
	<input type="text" name="contact" id="con" placeholder="Contact number"><br>
	
	<input type="text" name="address" id="add" placeholder="Address"><br>
	
	<input type="text" name="city" id="city" City><br>
	
	<input type="text" name="state" id="state" placeholder="State"><br>
	
	<input type="text" name="postal" id="pos"><br>
	<label for="">Buyer</label>
	<input type="radio" name="Buyer">
	<label for="">Seller</label>
	<input type="radio" name="Seller"><br>
	<input type="text" name="">
	<input type="submit" name="submit" class="registerbtn" placeholder="Next">


</form>

</body>
</html>