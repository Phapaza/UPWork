<html>
<body>
	<?php
		$id = $_GET['ID'];
		$ans = $_POST['ans'];
		$ans2 = md5($ans);
		$link = mysqli_connect("localhost","root","","UPWork");
			if(!$link)
				{
					exit("cannot connect database");
				}
		$sql = "UPDATE main SET Password='$ans2' WHERE ID='$id'";
		//echo $sql;
		//echo "<br>";
		$result = mysqli_query($link,$sql);
			if(!$result)
				{
					exit("cannot insert data");
				}
		echo "change password completed<br>";
		echo "<a href=database.php>show data</a>";
		mysqli_close($link);
	?>
</body>
</html>