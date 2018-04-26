
<html>
<head>
	<style>
		
		body {
			background: url("tq.png");
			background-size: 100% 100%;
			background-repeat: no-repeat;
			padding-top: 40px;
			}
	h2{
			color:#eb4e11;
			color: #DC143C;
			/*position: absolute; 
			top:350px; 
			left:1000px; */
			margin: 0px;
			font-family: Courier New;
			
			
		}

		h1{
			
			/*text-align:right;*/
			color:#8A2BE2;
			/*position: absolute; 
			top:378px; 
			left:945px; */
			margin: 0px;
			width:2px;
			height:25px;
			font-family: Courier New;
			
		}
		
		h3{
			color:#DC143C;
			/*position: absolute; 
			top:420px; 
			left:900px; */
			margin: 0px;
			
			font-family: Courier New;
		}
		
	</style>
	<body>
		<center><a href="index.php"><input type="button" value="------CLICK HERE FOR NEW REGISTRATION------" style= "height: 30px ;background:black; color:#ADFF2F;font-family: Courier New;"></a></center>
		<?php
			
			function upper($str)
			{
				return strtoupper($str);
			}
			function lower($str)
			{
				return strtolower($str);
			}
			include 'connection.php';
			$fname=upper($_POST['fname']);
			$lname=upper($_POST['lname']);
			$email=lower($_POST['email']);
			$phone=$_POST['phone'];
			$colz=upper($_POST['colz']);
			$faculty=upper($_POST['faculty']);
			$sem=upper($_POST['sem']);

			$insert="INSERT INTO `tbl_registration`(`SN`, `First Name`, `Last Name`, `Email`, `Contact`, `College/Organisation`, `Faculty`, `Semester`) VALUES (null,'$fname','$lname','$email','$phone','$colz','$faculty','$sem')";
			$run=mysqli_query($link,$insert);

			if($run)
			
				
				// echo "<h1>THANK YOU</h1>"."<h2>$fname $lname</h2>"."<h1>FOR PARTICIPATING IN THIS EVENT</h1>"."<br>";

		?>
		
	</body>

</html>












