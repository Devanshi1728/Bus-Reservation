<?php
include("con1.php");
session_start();
$username=$_POST['Username'];
$password=$_POST['Password'];

if($username==""||$password=="")
{
	header("location:login.php");
}
else
{
	$query="select * from `bus`.`login` where username='$username' and `login`.`password`='$password' ";
	
	$result=mysql_query($query);
	$res=mysql_fetch_array($result);
	$count=mysql_num_rows($result);
	if($count==0)
	{
	?>
	<script type="text/javascript">
	alert("username or password may be wrong");
	window.location.href="login.php";
	</script>
    <?php
	}
	else
	{
	session_start();
	$_SESSION['usrnm']=$username;
	header("location:admin.php");
	
	?>
	<!--<script>
	alert("login successfully");
	window.locatoin.href="admin.php";
	</script>-->
    <?php 
	}
	} 
?>