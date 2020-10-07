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
$name=$_POST["name"];
$em=$_POST["email"];
$contactno=$_POST["ContactNo"];
$feedback=$_POST["f1"];
$query="insert into `bus`.`feedback`(`name`,`email`,`contactno`,`feedback`) values('$name','$em','$contactno','$feedback')";
mysql_query($query);
header("location:feedbackmaster.php");
?> 
<?php
}
?>                                                                                                                                       