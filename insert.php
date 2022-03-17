<?php
$username = $_POST['textusername'];
$password = $_POST['textpassword'];
$pas1 = md5($password);
$email = $_POST['textemail'];
$name = $_POST['textname'];
$phonenumber = $_POST['textphonenumber'];
$question = $_POST['textquestion'];
$answer = $_POST['textanswer'];
$link = mysqli_connect("localhost","root","","UPWork");
if(!$link)
{
	exit("cannot connect database");
}
$sql = "INSERT INTO main VALUES ('','$username','$pas1','$email','$name','$phonenumber','$question','answer')";
//echo $sql;
echo "<br>";
$result = mysqli_query($link,$sql);
if(!$result)
{
	exit("cannot insert data");
}
echo "insert completed<br>";
echo "<a href=database.php>show data</a>";
mysqli_close($link);
?>