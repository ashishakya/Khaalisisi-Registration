<html>

<head>

</head>
<body>

<?php

$link=mysqli_connect('localhost','root','','khaali_sisi');
if(!$link)
	die("error".mysqli_error());

$text=$_POST['suggestion'];
$insert="INSERT INTO `tbl_suggestion`(`SN`,`Suggestion`) VALUES (null,'$text')";

$run=mysqli_query($link,$insert);
if($run)
	// // echo "<h2>THANK YOU</h2>";
	// echo "<img src="thanku.jpg" style="margin-left: auto; margin-right: auto;">";
	

?>


<img src="minion.jpg" style="position: absolute; left:200px;" >

</body>
</html> 