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
function validateForm()
{
var a=document.forms["cancel"]["Name"].value;
var b=document.forms["cancel"]["Date"].value;
var c=document.forms["cancel"]["Contact"].value;
var d=document.forms["cancel"]["Email"].value;
var e=document.forms["cancel"]["Ticketno"].value;
var f=document.forms["cancel"]["Referenceno"].value;
	

if (a==null || a=="")
{
alert("Name must be filled out");
return false;
}
if (b==null || b=="")
{
alert("Date must be filled out");
return false;
}
if (c==null || c=="")
{
alert("Contact must be filled out");
return false;
}
if (d==null || d=="")
{
alert("Email must be filled out");
return false;
}

if (e==null || e=="")
{
alert("Ticket no must be filled out");
return false;
}		
if (f==null || f=="")
{
alert("Reference no must be filled out");
return false;
}
}
</script>
<style type="text/css">
<!--
.style2 {
	font-family: Corbel;
	font-weight: bold;
	font-style: italic;
	font-size: 18px;
}
-->
</style>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header"> 
    <h1><a href="#"> 
	<br>
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
    <div id="search"> </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<br />
<br />

<p align="center"><font color="#FF0099" size="7" face="Verdana, Arial, Helvetica, sans-serif"><strong>Cancel 
  Your Trip ?</strong></font></p>
<p align="center">&nbsp;</p>
<p align="center"><font color="#FFFFFF" size="5"><strong><em><font color="#FFFF00"></font></em></strong></font></p>
<p align="center"><font color="#FFFFFF" size="5"><strong><em> <font color="#FFFF00">From</font>&nbsp;&nbsp;&nbsp; 
 <select id="ddl" placeholder="Source">
 <option>Junagadh</option>
 <option>Rajkot</option>
 <option>Baroda</option>
 <option>Ahemdabad</option>
 <option>Surat</option>
 <option>Jamnagar</option>
 <option>Indore</option>
 <option>Mumbai</option>
 <option>Jaipur</option>
 <option>Vapi</option>
 <option>Navsari</option>
 <option>Udaipur</option>
 <option>Aanand</option>
 <option>Nathdwara</option>
 <option>Vidhyanagar</option>
 <option>Valsad</option>
 <option>Chikhli</option>
 </select>
  </em></strong></font></p>
<p align="center"><font color="#FFFFFF" size="5"><strong><em><font color="#FFFF00">To 
  </font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select id="ddl">

 <option>Junagadh</option>
 <option>Rajkot</option>
 <option>Baroda</option>
 <option>Ahemdabad</option>
 <option>Surat</option>
 <option>Jamnagar</option>
 <option>Indore</option>
 <option>Mumbai</option>
 <option>Jaipur</option>
 <option>Vapi</option>
 <option>Navsari</option>
 <option>Udaipur</option>
 <option>Aanand</option>
 <option>Nathdwara</option>
 <option>Vidhyanagar</option>
 <option>Valsad</option>
 <option>Chikhli</option>
 </select>
  </em></strong></font> </p>
<p align="center">&nbsp;</p>
<form id="form1" name="cancel" method="post" action="canceleditsave.php" onsubmit="return validateForm()">
<?php
	  include("con1.php");
	  $id=$_GET['id'];
	  $query="select * from cancel where id=".$id;
	  $result=mysql_query($query);
	  while($row=mysql_fetch_array($result))
	  {
	  ?>

	  <p align="center"><font color="#FFFFFF" size="4"><strong>Id</strong></font>&nbsp;&nbsp&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <input type="text" name="id"  size="45" value="<?php echo $row['2'];?>" />
         </p>
<p align="center"><font color="#FFFFFF" size="4"><strong>Name</strong></font>&nbsp;&nbsp;&nbsp; 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Name" size="45" value="<?php echo $row['3'];?>" />
</p>
<p align="center"><font color="#FFFFFF" size="4"><strong>Date 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Date" size="45" value="<?php echo $row['4'];?>"/>
  </font></strong></p>
<p align="center"><strong><font color="#FFFFFF" size="4">Contact 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Contact" size="45" value="<?php echo $row['5'];?>"/>
  </font></strong></p>
<p align="center"><strong><font color="#FFFFFF" size="4">Email 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Email" size="45" value="<?php echo $row['6'];?>" />
  </font></strong></p>
<p align="center"><strong><font color="#FFFFFF" size="4">Ticketno
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="text" name="Ticketno" size="45" value="<?php echo $row['7'];?>"/>
  </font></strong></p>
<p align="center"><strong><font color="#FFFFFF" size="4">Referenceno 
  &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Referenceno" size="45" value="<?php echo $row['8'];?>"/>
  </font></strong></p>
<p align="center">&nbsp; </p>
<p align="center"> 
  <input name="Ok" type="submit" id="btn" value="Ok" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input name="Cancel" type="submit" id="btn" value="Cancel" />
</p>

<p align="center">&nbsp;</p>

</form>
<?php
      }
	  ?>

<p align="center"><strong></strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="copyright"> <marquee direction="left" behavior="scroll" scrollamount="10"> 
    <a href=""><span class="style2">Jahanvi | Ekta | Devanshee</span> </marquee></a> 
    <br class="clear" />
  </div>
</div>
</body>
</html>
<?php
}
?>