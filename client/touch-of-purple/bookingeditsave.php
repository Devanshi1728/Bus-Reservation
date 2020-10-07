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
$address=$_POST["address"];
$email=$_POST["email"];
$contactno=$_POST["contactno"];
$city=$_POST["city"];
$bustype=$_POST["bustype"];
$date=$_POST["date"];
$ticketno=$_POST["ticketno"];
$price=$_POST["price"];
$total=$_POST["total"];
$cardno=$_POST["cardno"];
$query="UPDATE `bus`.`booking` SET `name` = '$name', `address` = '$address', `city` = '$city', `contactno` = '$contactno', `email` = '$email', `bustype` = '$bustype', `date` = '$date', `cardno` = '$cardno', `price` = '$price', `total` = '$total', `ticketno` = '$ticketno' WHERE `booking`.`id` = '$id'";
//$q="UPDATE `bus`.`booking` SET `name` = '$name', `address` = '$address', `city` = '$city', `contactno` = '$contactno', `email` = '$email', `bustype` = '$bustype', `date` = '$date', `cardno` = '$cardno', `price` = '$price', `total` = '$total', `ticketno` = '$ticketno' WHERE `booking`.`id` = '$id'";
//$query="update `bus`.`booking` set  `name`='$name',`address`='$address',`email`='$email' `contactno`='$contactno' ,`city`='$city',`bustype`='$bustype',`date`='$date',`ticketno`=$ticketno,`price`='$price',`total`=$total,`cardno`='$cardno' where `booking`.`id`=$id";
mysql_query($query);
header("location:viewbooking.php");
?>                                                                               
<?php
}
?>                                                  