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
$from1=$_POST["from"];
$to1=$_POST["to"];
$name=$_POST["name"];
$address=$_POST["address"];
$email=$_POST["email"];
$contactno=$_POST["contactno"];
$city=$_POST["city"];
$bustype=$_POST["bustype"];
$date=$_POST["date"];
$ticketno=$_POST["ticketsno"];
$price=$_POST["price"];
$total=$_POST["total"];

$query="INSERT INTO `bus`.`booking` (`from1`, `to1`, `name`, `address`, `city`, `contactno`, `email`, `bustype`, `date`, `price`, `total`, `ticketno`, `pnr`) VALUES ('$from1', '$to1', '$name', '$address', '$email', '$contactno', '$city', '$bustype', '$date', '$ticketno', '$price', '$total','')";
mysql_query($query);
	
		

//header("location:viewbooking.php");
?>
	<script type="text/javascript">
	alert("Your ticket is booked");
	window.location.href="printticket.php";
	</script>

<?php
}
?>                                                                                                                                       