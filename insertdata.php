<?php
	
	/*-- we included connection files--*/
	include "includes/connection.php";
	if (isset($_POST['submittologin'])) {

		$email=$_POST['email'];
		$psw=$_POST['psw'];
		$pswrepeat=$_POST['pswrepeat'];
		
		$result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
	mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
	$code= mysqli_query($result,"INSERT INTO users(email,password)
				VALUES('$email','$psw')") or die (" not inserted". mysqli_error());
	$res=mysqli_fetch_array($code);
	if ($res) {

}
else{

}
}
if ($psw==$pswrepeat) {
	?>
	<script type="text/javascript">
		window.location.href="http://localhost/auction/new/regcont.php"
	</script>

	<?php
			}
		else  {
			// code...
		
			?>
<script type="text/javascript">
		window.location.href="http://localhost/auction/new/login.php"
	</script>

		<?php	

		}?>

