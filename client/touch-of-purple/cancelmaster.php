<?php
session_start();
if(!isset($_SESSION['usrnm']))
{
	header("location:login.php");
}
else
{
?>
<?php
include("con1.php");
$query="select * from cancel";
$result=mysql_query($query);
echo "<table align='center' border='10'>
<tr class ='th1'>
<th>id</th>
<th>Name</th>
<th>Date</th>
<th>Contact</th>
<th>Email</th>
<th>Ticketno</th>
<th>Referenceno</th>
<th>Edit</th>
<th>Delete</th></tr>";
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>";
	echo $row["id"];
	echo "</td><td>";
	echo $row["Name"];
	echo "</td><td>";
	echo $row["Date"];
	echo "</td><td>";
	echo $row["Contact"];
	echo "</td><td>";
	echo $row["Email"];
	echo "</td><td>";
	echo $row["Ticketno"];
	echo "</td><td>";
	echo $row["Referenceno"];
	echo "<td><a href='canceledit1.php?id=".$row[0]."'>Edit</a></td>";
	echo "<td><a href='canceldelete.php?id=".$row[0]."'>Delete</a></td></tr>";	
	
}
echo "</table>";
?>
<?php
}
?>