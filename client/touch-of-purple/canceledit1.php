
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
.style3 {font-size: x-large}
.style4 {font-size: 24px}
.style5 {font-weight: bold}
-->
</style>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header"> 
    <h1><a href="#"> 
      <center>
        <img src="../Bus images/logo11.jpg" alt="" width="33%" height="89" align="center" /> 
      </center>
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
        <li class="active"><font face="Corbel"><a href="home.php"><strong>Home</strong></a></font></li>
        <li><font face="Corbel"><a href="booking.php"><strong>Book Here</strong></a></font> 
          <ul>
            <li><font face="Corbel"><a href="cancel.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Cancel</strong></a></font></li>
          </ul>
        </li>
        <li><font face="Corbel"><a href="information.php"><strong>Information</strong></a> 
          </font> 
        <li><font face="Corbel"><a href="bustype.php"><strong>Types</strong></a></font></li>
        <li><font face="Corbel"><a href="gallery.php"><strong>Gallery</strong></a> 
          </font> 
        <li><font face="Corbel"><a href="feedback.php"><strong>Feedback</strong></a> 
          </font> </li>
        <li><font face="Corbel"><a href="contactus.php"><strong>Contact us</strong></a> 
          </font> 
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="waterwheelCarousel">
    <img src="../project bus/2.jpg" alt="" />
    <img src="../project bus/download (10).jpg" alt="" />
    <img src="../project bus/download (1).jpg" alt="" />
    <img src="../project bus/4.jpg" alt="" />
    <img src="../project bus/images (35).jpg" alt="" />
    <img src="../Bus images/busphoto.jpg" alt="" />
    <img src="../project bus/download (4).jpg" alt="" />
    <img src="../project bus/download (7).jpg" alt="" />
    <img src="../project bus/images (8).jpg" alt="" />
    <img src="../project bus/th.jpg" alt="" />
    <img src="../project bus/images (16).jpg" alt="" />
  </div>
</div>
<!-- ####################################################################################################### -->
<br />
<br />

<p align="center"><font color="#FF0099" size="7" face="Verdana, Arial, Helvetica, sans-serif"><strong>Cancel 
  Your Trip ?</strong></font></p>
<p align="center">&nbsp;</p>
<p align="center"><font color="#FFFFFF" size="5"><strong><em><font color="#FFFF00"></font></em></strong></font></p>
<form name="form1" action="canceleditsave.php" method="post">
<?php
	  include("con1.php");
	  $id=$_POST['pnr'];
	
	  $query="select * from `bus`.`booking` where `booking`.`pnr`='$id'";
	  $result=mysql_query($query);
	  while($row=mysql_fetch_array($result))
	  {
	  ?>


  <p align="center"><font color="#FFFFFF" size="5"><strong><font color="#FFFF00">From</font>&nbsp;&nbsp;&nbsp; 
    <input type="text" value="<?php echo $row[0];?>"  name="from" id="dd2" placeholder="Source" >
    </strong></font></p>
  <p align="center"><strong><font color="#FFFFFF" size="5"><strong><em><font color="#FFFF00">To 
  </font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <input type="text" value="<?php echo $row[1];?>"  name="from" id="dd2" placeholder="Source" >
  </strong> 
  <p align="center" class="style4 style4 style4 style4"><strong><span class="style5"><font color="#FFFFFF">PNR 
    NO:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="text" name="pnr" size="45" id="textfield" value="<?php echo $row['13'];?>" />
    </strong></p>
  <p align="center">&nbsp;</p>
  <p align="center" class="style4 style4 style4 style4"><span class="style5"><font color="#FFFFFF">Name</font></span><strong><span class="style5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    &nbsp;</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="text" name="Name" size="45" id="textfield" value="<?php echo $row['3'];?>" />
    </strong></p>
  <p align="center" class="style4 style4 style4 style4"><strong><font color="#FFFFFF"><strong>Date 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    &nbsp; 
    <input type="text" name="Date" size="45"  id="textfield" value="<?php echo $row['9'];?>"/>
    </font></strong></strong></p>
  <p align="center" class="style4 style4 style4 style4"><strong><font color="#FFFFFF">Contact 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="text" name="Contact" size="45"   id="textfield" value="<?php echo $row['6'];?>"/>
    </font></strong></p>
  <p align="center" class="style4 style4 style4 style4"><strong><font color="#FFFFFF">Email 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="text" name="Email" size="45"  id="textfield" value="<?php echo $row['7'];?>" />
    </font></strong></p>
  <p align="center" class="style4 style4 style4 style4"><strong><font color="#FFFFFF">Ticketno 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
    <input type="text" name="Ticketno" size="45"  id="textfield" value="<?php echo $row['12'];?>"/>
    </font></strong></p>
  <p align="center" class="style4 style4 style4 style4"><strong><font color="#FFFFFF">Total 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
    <input type="text" name="Total" size="45"  id="textfield" value="<?php echo $row['11'];?>"/>
    </font></strong></p>
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
<div class="wrapper col3">
  <div id="waterwheelCarousel">
    <img src="../project bus/2.jpg" alt="" />
    <img src="../project bus/download (10).jpg" alt="" />
    <img src="../project bus/download (1).jpg" alt="" />
    <img src="../project bus/4.jpg" alt="" />
    <img src="../project bus/images (35).jpg" alt="" />
    <img src="../Bus images/busphoto.jpg" alt="" />
    <img src="../project bus/download (4).jpg" alt="" />
    <img src="../project bus/download (7).jpg" alt="" />
    <img src="../project bus/images (8).jpg" alt="" />
    <img src="../project bus/th.jpg" alt="" />
    <img src="../project bus/images (16).jpg" alt="" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer"> 
    <div class="footbox twitter"> 
      <h2><font color="#FFFFFF" face="Corbel"><strong>Latest News</strong></font></h2>
      <ul>
        <li><font size="3" face="Corbel">There are some packages are available 
          for family tour and couple tour.</font></li>
        <li><font size="3" face="Corbel">New Semi sleeper buses are n</a>ow available.</font></li>
        <li><font size="3" face="Corbel"> You can also cancle your tickets one 
          hour ago with 50% return cash.</font></li>
        <li><font size="3" face="Corbel">There are also avialbility of free wifi 
          in the buses.</font></li>
        <li><font size="3" face="Corbel">We provide best hotels in our packages 
          with good amenties.</font></li>
      </ul>
    </div>
    <div class="footbox flickr"> 
      <h2><font color="#FFFFFF" face="Corbel"><strong>Latest Bus</strong></font></h2>
      <ul>
        <li><img src="../Bus images/i1.jpg" alt="" /></li>
        <li> <img src="../project bus/i3.jpg" alt="" /></li>
        <li> <img src="../project bus/i4.jpg" alt="" /></li>
        <li><img src="../project bus/i6.jpg" alt="" /></li>
        <li><img src="../project bus/i7.jpg" alt="" /></li>
        <li><img src="../project bus/i9.jpg" alt="" /></li>
      </ul>
      <br class="clear" />
    </div>
    <div class="footbox posts"> 
      <h2><font color="#FFFFFF" face="Corbel"><strong>New Route</strong></font></h2>
      <marquee direction="up" behavior="scroll" scrollamount="5">
      <p><font face="Corbel"><strong><font size="3">Surat to Rajkot</font></strong></font></p>
      <p>&nbsp;</p>
      <p><font size="3"><strong><font face="Corbel">Mumbai to Surat</font></strong></font></p>
      <p>&nbsp;</p>
      <ul>
        <li><font size="3"><strong><font face="Corbel">Rajkot to Ahemdabad</font></strong></font></li>
        <li><font size="3"><strong><font face="Corbel">Mumbai to Ahemdabad</font></strong></font></li>
        <li><font size="3"><strong><font face="Corbel">Junadagh to Rajkot</font></strong></font></li>
        <li><font size="3"><strong><font face="Corbel">Rajkot to Surat</font></strong></font></li>
        <li><font size="3"><strong><font face="Corbel">Dhoraji to Ahemdabad</font></strong></font></li>
        <li><font size="3"><strong><font face="Corbel">pune to Rajkot</font></strong></font></li>
        <li class="last"><font size="3"><strong><font face="Corbel">Manali to 
          Rajkot</font></strong></font></li>
      </ul>
      </marquee>
    </div>
    <div class="footbox banners last"> 
      <h2><font color="#FFFFFF" face="Corbel"><strong>Most require Bus</strong></font></h2>
      <ul>
        <li> <img src="../project bus/th1.jpg" alt="" /></li>
        <li><img src="../project bus/th2.jpg" alt="" /></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="copyright"> <strong><font color="#99FFFF" size="4" face="Corbel"><a href=""> 
    <marquee behavior="scroll" scrollamount="10">
    <em> Jahanvi | Ekta | Devanshee </em> 
    </marquee>
    </a></font></strong> <br class="clear" />
  </div>
</div>
</body>
</html>