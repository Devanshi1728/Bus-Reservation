<?php
include("con1.php");
$username=$_POST['Username'];
$password=$_POST['Password'];

if($username==""||$password=="")
{
	header("location:login.php");
}
else
{
	$query="select * from `bus`.`registration` where username='$username' and password='$password' ";
	
	$result=mysql_query($query);
	$res=mysql_fetch_array($result);
	$count=mysql_num_rows($result);
	if($count==0)
	{
	?>
	<script type="text/javascript">
	alert("Username or Password may be wrong");
	window.location.href="login.php";
	</script>
    <?php
	}
	else
	{
	session_start();
	$_SESSION['usrnm']=$username;
	header("location:home.php");
	
	?>
	<!--<script>
	alert("login successfully");
	window.locatoin.href="admin.php";
	</script>-->
    <?php 
	}
	} 
?>