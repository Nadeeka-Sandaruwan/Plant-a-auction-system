<?php
	
	/*-- we included connection files--*/
	include "includes/connection.php";
	if (isset($_POST['submittologin'])) {

		$email=$_POST['loginemail'];
		$password=$_POST['loginpsw'];
		$usertype=$_POST['user_type'];
		
		$result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
	mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
	$code= mysqli_query($result,"select * from users where password ='$password' and email='$email' and user_type='$usertype'");
	$res=mysqli_fetch_array($code);
	if ($res) {
		




		


		 
	}
	else{

		echo"failed";
	}
	}
if ($usertype=="Admin") {
	?>
	<script type="text/javascript">
		window.location.href="http://localhost/auction/adminmain.php"
	</script>

	<?php
			}
		else if ($usertype=="Seller") {
			// code...
		
			?>
<script type="text/javascript">
		window.location.href="http://localhost/auction/sellermain.php"
	</script>

		<?php	

		}
		else if ($usertype=="Buyer"){

			?>
			<script type="text/javascript">
		window.location.href="http://localhost/auction/buyer.php"
	</script>
<?php
		}
		?>		




	

