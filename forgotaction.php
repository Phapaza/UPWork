<?php
	$ans = $_POST['ans'];
	$id = $_GET['ID'];
		//echo $ans;
	$link = mysqli_connect("localhost","root","","UPWork") or die ('Unable To connect');
	$sql = "SELECT * FROM main WHERE ID ='$id' and  Answer ='$ans'";
		//echo $sql."<br>";
	$result = mysqli_query($link,$sql);
	if(	$hint = mysqli_fetch_array($result))
				{   
					echo "<form method='post' action='forgot2.php?ID={$hint['ID']}'>";
					echo "Please enter a new password.";
					echo "<br><br>Your answer is : ";
					echo "&nbsp;<input type='password' name='ans'>";
					echo "&nbsp;<input type='submit' value='Submit'>";
					echo "</form>";
				}
				else
				{
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!! not found !!<br>";
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='forgot.html'>try again</a>";	
				}
?>