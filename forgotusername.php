<?php
	$email = $_POST['Email'];
		//echo $email;
	$link = mysqli_connect("localhost","root","","UPWork") or die ('Unable To connect');
	$sql = "SELECT * FROM main WHERE Email ='$email'";
		//echo $sql."<br>";
	$result = mysqli_query($link,$sql);

			if(	!$hint = mysqli_fetch_array($result))
				{   
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!! not found !!<br>";
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='forgot.html'>try again</a>&nbsp;&nbsp;&nbsp;";

				}
				else
				{
					
					echo "<form name='form1' method='post' action='forgotaction.php?ID={$hint['ID']}'>"; 
						echo "Hint of Code Modification Request is : ".$hint['Question'] ,"&nbsp;!";
						echo "<br><br>Your answer is : ";
						echo "&nbsp;<input type='text' name='ans'>";
						echo "&nbsp;<input type='submit' name='submit' value='Submit'>";
						echo "&nbsp;<input type='reset'>";
					echo "</form>"; 	
				}
?>