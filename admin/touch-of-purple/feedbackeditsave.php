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
$id=$_POST["id"];
$name=$_POST["name"];
$em=$_POST["email"];
$contactno=$_POST["ContactNo"];
$feedback=$_POST["f1"];
$query="update `bus`.`feedback` set `name`='$name',`email`='$em', `contactno`='$contactno' ,`feedback`='$feedback' where `feedback`.`id`=$id";
mysql_query($query);
header("location:viewfeedback.php");
?>   
<?php
}
?>                                                                                                                                     