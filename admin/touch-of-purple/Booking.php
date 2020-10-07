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
var a=document.forms["form1"]["name"].value;
var b=document.forms["form1"]["address"].value;
var c=document.forms["form1"]["city"].value;
var d=document.forms["form1"]["email"].value;
var e=document.forms["form1"]["contactno"].value;
var f=document.forms["form1"]["bustype"].value;
var g=document.forms["form1"]["date"].value;
var i=document.forms["form1"]["ticketsno"].value;
var k=document.forms["form1"]["price"].value;
var l=document.forms["form1"]["total"].value;
var m=document.forms["form1"]["cardno"].value;
	


if (a==null || a=="")
{
alert("Name must be filled out");
return false;
}
if (b==null || b=="")
{
alert("Address must be filled out");
return false;
}
if (c==null || c=="")
{
alert("City must be filled out");
return false;
}
if (d==null || d=="")
{
alert("Email must be filled out");
return false;
}

if (e==null || e=="")
{
alert("Contactno must be filled out");
return false;
}		
if (f==null || f=="")
{
alert("Bus type must be filled out");
return false;
}
if (g==null || g=="")
{
	alert("Date must be filled out");
	return false;
}
	
if (k==null || k=="")
{
alert("Price must be write");
return false;
}
if (i==null || i=="")
{
	alert("No of Tickets must be filled out");
	return false;
}
if (l==null || l=="")
{
alert("Total must be filled out");
return false;
}	
if (m==null || m=="")
{
alert("Card No must be filled out");
return false;
}
}
</script>
<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {font-size: 24px; font-weight: bold; }
.style3 {
	font-size: 36px;
	font-weight: bold;
	font-style: italic;
}
.style5 {
	font-size: 50px;
	font-weight: bold;
	color: #FF0099;
}
.style7 {
	color: #FFFF00;
	font-style: italic;
	font-weight: bold;
}
.style11 {font-size: 70px; font-weight: bold; color: #FF0099; }
.style12 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style15 {
	font-size: 24px;
	font-weight: bold;
	color: #FFFF00;
	font-style: italic;
}
.style16 {color: #FFFFFF}
.style17 {font-size: 24px; color: #FFFFFF; }
.style18 {font-size: 24px; font-weight: bold; color: #FFFFFF; }
.style19 {
	font-family: Corbel;
	font-size: 18px;
	font-weight: bold;
	font-style: italic;
}
-->
</style>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header"> 
    <h1><a href="#"> <br>
      <br>
      <marquee direction="left" behavior="alternate" scrollamount="10">
      <font size="7" face="Corbel"><strong> Online Bus Reservation</strong></font> 
      </marquee>
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
</div><!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper col4">
  
<div id="featured_intro"> 
  <div class="fl_center"> <br />
    <br />
    <br />
    <br />
    <h3 align="justify" class="center"> <span class="style5">&nbsp;<span class="style12">Book 
      Your Ticket</span></span></h3>
    <div align="center" class="style7"><br />
    </div>
    <p align="center"><font color="#FFFFFF" size="5"><strong><em><font color="#FFFF00"></font></em></strong></font></p>
    <p align="center"><font color="#FFFFFF" size="5"><strong><em> <font color="#FFFF00">From</font>&nbsp;&nbsp;&nbsp; 
      <select id="ddl" placeholder="Source" name="from">
        <option>Junagadh</option>
        <option>Rajkot</option>
        <option>Vadodara</option>
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
      </font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <select id="ddl" name="to">
        <option>Junagadh</option>
        <option>Rajkot</option>
        <option>Vadodara</option>
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
    <p class="style3">&nbsp;</p>
    <p class="style3"> 
      <label></label>
    </p>
    <form name="form1" action="checklogin.php" method="post" onsubmit="return validateForm()">
      <p align="center" class="style1 style16"><strong>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label> 
        <input type="text" name="name" id="textfield1"  size=40/>
        </label>
        </strong></p>
      <div align="center" class="style16"> </div>
      <span class="style17"><strong> 
      <label></label>
      </strong> </span> 
      <p align="center" class="style17"><strong>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label> 
        <input type="text" name="address" id="textfield2" size=40 />
        </label>
        </strong></p>
      <p align="center" class="style17"><strong>City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        &nbsp;&nbsp;&nbsp;&nbsp; 
        <label> 
        <input type="text" name="city" id="textfield5"size=40 />
        </label>
        </strong></p>
      <p align="center" class="style18">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label> 
        <input type="text" name="email" id="textfield7"size=40 />
        </label>
      </p>
      <p align="center" class="style17"><strong>Contactno&nbsp; &nbsp; &nbsp; 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label> 
        <input type="text" name="contactno" id="textfield3" size=40/>
        </label>
        </strong></p>
      <p align="center" class="style17"><strong>BusType&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> 
        <select id="dd2" name="bustype">
          <option>AC</option>
          <option >Volvo</option>
          <option>Non AC</option>
          <option>Isuzu</option>
          <option>Sleeper AC</option>
          <option>Semi Sleeper</option>
          <option>Non AC Sleeper</option>
        </select>
      </p>
      <p align="center" class="style18">Date&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label> 
        <input type="text" name="date" id="textfield9"size=40 />
        </label>
      </p>
      <p align="center" class="style18">NoofTickets&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        &nbsp; 
        <label> 
        <input type="text" name="ticketsno" id="textfield4"  size=40/>
        </label></label>
        
      <div align="center" class="style16"></div>
      <span class="style16"><strong> </span> 
      <p align="center" class="style18">Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label> 
        <input type="text" name="price" id="textfield10"size=40 />
        </label>
      </p>
      <p align="center" class="style18">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label> 
        <input type="text" name="total" id="textfield11"size=40 />
        </label>
      </p>
      <p align="center" class="style2"><span class="style16">Card Number&nbsp;&nbsp;&nbsp;&nbsp; 
        <label> </label>
        </span> 
        <label> 
        <input type="text" name="cardno" id="textfield6"size="40" />
        </label>
      </p>
      <p align="center" class="style15">&nbsp;</p>
      <p align="center" class="style15">Payment Type:</p><p align="center" class="style1"> <label> <div align="left"> <strong> 
      <div align="center"></div>
      <div align="center"><strong> </strong><strong></strong><strong></strong><strong></strong></div>
      <strong> 
      <label> </label>
      </strong> <label> 
      <div align="center"><strong> </strong> 
        <p class="style17" ><strong> 
          <select id="ddl">
            <option>Credit</option>
            <option>Debit</option>
          </select>
        </p>
      </div>
      <p align="center" class="style2"> 
        <label><span class="style11"> 
        <input name="button" type="submit" class="style2" id="button" value="Ok"  />
        </span></label>
      </p>
    </form>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="copyright"> <marquee direction="left" behavior="scroll" scrollamount="10"> 
    <a href=""><span class="style6 style19">Jahanvi | Ekta | Devanshee</span> </marquee> 
    </a> <br class="clear" />
  </div>
</div>
</body>

</html>
<?php
}
?>                                                                                                                                       