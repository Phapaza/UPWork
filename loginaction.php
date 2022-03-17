<html>
	<body>
			<?php
				session_start();
				$text1 = $_POST['text1'];
				$text2 = $_POST['text2'];
				$text3 = md5($text2);
				/*echo $text1."<br>";
				echo $text2."<br>";
				echo $text3."<br>";*/
				$link = mysqli_connect('localhost','root','','UPWork') or die ('Unable To connect');
					$sql = "SELECT * FROM main WHERE UserName='$text1' and Password='$text3'";
				//echo $sql."<br>";
				$result = mysqli_query($link,$sql);
				$N = mysqli_num_rows($result);
				//echo $N."<br>";
				if($N == 1)
				{
					$data = mysqli_fetch_array($result);
					$_SESSION['ID'] = $data['ID'];
					$_SESSION['Name'] = $data['Name'];
					echo "Welcome to My website";
					echo "<br>";					
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='logout.php'>logout</a>";
				}
				else
				{
					echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!!User not found !!<br>";
					echo "<a href='login.html'>Login again</a>&nbsp;&nbsp;&nbsp;";
					echo "<br><a href='forgot.html'>Forgot your password?</a>";	
				}
			?>
	</body>
</html>