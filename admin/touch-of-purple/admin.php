<?php
session_start();
if(!isset($_SESSION['usrnm']))
{
	header("location:login.php");
}
else
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Touch of Purple</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.waterwheelCarousel.js"></script>
<script type="text/javascript" src="scripts/jquery.waterwheelCarousel.setup.js"></script>
<script type="text/javascript">

</script>
<style type="text/css">
<!--
.style6 {
	font-family: Corbel;
	font-style: italic;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
</head>
<body id="top">
<div class="wrapper col6"> 
  <img src="images/Volvo_Buses_in_India_756X34w9.jpg" width="1673" height="341"> 

</div>

<div class="wrapper col1">
  <div id="header"> 
    <h1><a href="#"> 
   
      <marquee direction="left" behavior="alternate" scrollamount="10">
      <font size="7" face="Corbel"><strong> Online Bus Reservation</strong></font> 
      </marquee>
      <br>
      </a></h1>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar"> 
    <div id="topnav"> 
      <ul>
        <li class="active"><font face="Corbel"><a href="admin.php"><strong>Home</strong></a></font></li>
        <li><font face="Corbel"><a href="logout.php"><strong>Logout</strong></a> 
          </font> 
      </ul>
    </div>
  </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<br><br><br>
<p align="center">
 <table  id="table" align="center" border="15" bordercolor="#FFFFFF" background="images/Purple_Space_Background_by_YuniNaoki.jpg">
   <tr>
        
    <td><div align="center" ><font color="#CC6633"  size="6" face="Corbel"><a href="viewlogin.php" ><strong>Login</strong></a></font></font></div></td>
      </tr>
      <tr>
    <td><div align="center" ><font  size="6" face="Corbel"><a href="registrationview.php" size="6" face="corbel"><strong>Registration</strong></a></font></font></div></td>
      </tr>
      <tr>
     <td><div align="center" ><font size="6" face="Corbel"><a href="viewbooking.php" size="6" face="corbel"><strong>Booking</strong></a></font></font></div></td>
      </tr>
      <tr>
    <td><div align="center" ><font size="6" face="Corbel"><a href="viewcancel.php" size="6" face="corbel"><strong>Cancel</strong></a></font></font></div></td>
      </tr>
      <tr>
        
   <td><div align="center" ><font size="6" face="Corbel"><a href="viewfeedback.php" size="6" face="corbel"><strong>Feedback</strong></a></font></font></div></td>
      </tr>
      
</table>
</p>

<!-- ####################################################################################################### -->
<br>
<br>
<br>
<div class="wrapper col6">
  <div id="copyright"> 
    <marquee direction="left" behavior="scroll" scrollamount="10"> 
      <a href=""><span class="style6">Jahanvi | Ekta | Devanshee</span> </marquee></a>
    <br class="clear" />
  </div>
</div>


</body>
</html>
<?php
}
?>