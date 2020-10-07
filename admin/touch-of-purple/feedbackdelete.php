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
$id=$_GET["id"];
$query="delete from `bus`.`feedback` where `feedback`.`id`= $id";
mysql_query($query);
header("location:viewfeedback.php");
?>
<?php
}
?>