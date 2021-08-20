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
	</style>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="money.php" method="post">

		<label for="">Credit card</label>
	<input type="radio" name="Buyer">
	<label for="">Debit card</label><br>
	<input type="text" name="email" id="email" placeholder="Enter card number"><br>
	
	<input type="text" name="uasername" id="un" placeholder="Card holder name"><br>
	<label for="con"></label>
	<input type="text" name="contact" id="con" placeholder="Security number"><br>


	<input type="submit" name="submit" class="registerbtn" placeholder="Next">


</form>

</body>
</html>