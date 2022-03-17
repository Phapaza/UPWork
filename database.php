<?php
$link = mysqli_connect("localhost","root","","UPWork");
if(!$link)
{
	exit("cannot connect database");
}

$sql = "select * from main";
$result = mysqli_query($link,$sql);

echo "<table border = '1'>";
while($data = mysqli_fetch_array($result))
{
	echo "<tr?>";
	echo "<td>{$data['ID']}</td>";
	echo "<td>{$data['UserName']}</td>";
	echo "<td>{$data['Password']}</td>";
	echo "<td>{$data['Email']}</td>";
	echo "<td>{$data['Name']}</td>";
	echo "<td>{$data['PhoneNumber']}</td>";
	echo "<td>{$data['Question']}</td>";
	echo "<td>{$data['Answer']}</td>";
	echo "</tr>";
}
echo "</table>";
echo "<a href=insert.html>insert new data</a>";
mysqli_close($link);
?> 