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
$query="select * from feedback";
$result=mysql_query($query);
echo "<table align='center' border='5'>
<tr class ='th1'>
<th>Id</th>
<th>name</th>
<th>email</th>
<th>contactno</th>
<th>feedback</th>
<th>Edit</th>
<th>Delete</th></tr>";
while($row=mysql_fetch_array($result))
{
	echo "<tr><td>";
	echo $row["id"];
	echo "</td><td>";
	echo $row["name"];
	echo "</td><td>";
	echo $row["email"];
	echo "</td><td>";
	echo $row['3'];
	echo "</td><td>";
	echo $row["feedback"];

	echo "<td><a href='feedbackedit.php?id=".$row[0]."'>Edit</a></td>";
	echo "<td><a href='feedbackdelete.php?id=".$row[0]."'>Delete</a></td></tr>";

	
}
echo "</table>";


?>
<?php
}
?>