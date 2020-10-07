
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
$id=$_GET['id'];

$query="delete from `bus`.`cancel` where `cancel`.`id`= $id";
mysql_query($query);
header("location:viewcancel.php");
?>
<?php
}
?>