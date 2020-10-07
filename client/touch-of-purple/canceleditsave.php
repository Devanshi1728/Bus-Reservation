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
$from=$_POST["from1"];
$to=$_POST["to1"];
$Name=$_POST["Name"];
$Date=$_POST["Date"];
$Email=$_POST["Email"];
$Contact=$_POST["Contact"];
$Ticketno=$_POST["Ticketno"];
$Total=$_POST["Total"];
$pnr=$_POST["pnr"];
$query="INSERT INTO `bus`.`cancel` (`from1`, `to1`,`Name`, `Date`, `Contact`, `Email`, `Ticketno`, `total`,`pnr`) VALUES ('$from', '$to','$Name', '$Date', '$Email', '$Contact', '$Ticketno', '$Total','$pnr')";
mysql_query($query);
$q="delete from `bus`.`booking` where `booking`.`pnr`='$pnr'";
mysql_query($q);
//header("location:viewcancel.php");
?>
<script type="text/javascript">
	alert("Your ticket is canceled");
	window.location.href="home.php";
	</script>
<?php
}
?>