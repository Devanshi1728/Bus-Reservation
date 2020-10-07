
<?php
include("con1.php");
$query="select * from booking";
$result=mysql_query($query);
echo "<table align='center' border='5'>
<tr class ='th1'>
<th>id</th>
<th>name</th>
<th>address</th>
<th>email</th>
<th>contactno</th>
<th>city</th>
<th>bustype</th>
<th>date</th>
<th>ticketno</th>
<th>price</th>
<th>total</th>
<th>cardno</th>
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
	echo $row["email"];
	echo "</td><td>";
	echo $row["contactno"];
	echo "</td><td>";
	echo $row["city"];
	echo "</td><td>";
	echo $row["bustype"];
	echo "</td><td>";
	echo $row["date"];
	echo "</td><td>";
	echo $row["ticketno"];
	echo "</td><td>";
	echo $row["price"];
	echo "</td><td>";
	echo $row["total"];
	echo "</td><td>";
	echo $row["cardno"];

	

	echo "<td><a href='Bookingedit.php?id=".$row[0]."'>Edit</a></td>";
	echo "<td><a href='Bookingdelete.php?id=".$row[0]."'>Delete</a></td></tr>";

}
echo "</table>";

	?>
