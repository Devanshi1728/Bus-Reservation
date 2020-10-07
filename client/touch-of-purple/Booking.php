
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Touch of Purple</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="styles/jquery.datetimepicker.min.css">

<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.waterwheelCarousel.js"></script>
<script type="text/javascript" src="scripts/jquery.waterwheelCarousel.setup.js"></script>

<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jquery.datetimepicker.full.js"></script>

<script>
$("#datetime").datetimepicker();
</script>
<script type="text/javascript">
function sum()
{
 var x = document.getElementById('ticketsno').value;
            var y = document.getElementById('price').value;
            var result = parseInt(x) * parseInt(y);
            if (!isNaN(result)) {
                document.getElementById('total').value = result;
				}
				}
</script>
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

<script language="JavaScript" src="ts_picker.js">

//Script by Denis Gritcyuk: tspicker@yahoo.com
//Submitted to JavaScript Kit (http://javascriptkit.com)
//Visit http://javascriptkit.com for this script

</script>

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

<div class="wrapper col4">
  <div id="featured_intro"> <div class="fl_center"> <br />
    <br />
    <br />
    <br />
    <h3 align="justify" class="center"> <span class="style5">&nbsp;<span class="style12">Book 
      Your Ticket</span></span></h3>
    <div align="center" class="style7"><br />
    </div>
    <form name="form1" action="bookingsave.php" method="post" onsubmit="return validateForm()">
      <p align="center"><font color="#FFFFFF" size="5"><strong><em><font color="#FFFF00"></font></em></strong></font></p>
      <p align="center"><font color="#FFFFFF" size="5"><strong><em> <font color="#FFFF00">From</font>&nbsp;&nbsp;&nbsp; 
        <select id="dd2" placeholder="Source" name="from">
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
        <select id="dd2" name="to">
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
      <p align="center" class="style1 style16"><strong>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label> 
        <input type="text" name="name" id="textfield"  size=40/>
        </label>
        </strong></p>
      <div align="center" class="style16"> </div>
      <span class="style17"><strong> 
      <label></label>
      </strong> </span> 
      <p align="center" class="style17"><strong>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label> 
        <input type="text" name="address" id="textfield" size=40 />
        </label>
        </strong></p>
      <p align="center" class="style17"><strong>City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        &nbsp;&nbsp;&nbsp;&nbsp; 
        <label> 
        <input type="text" name="city" id="textfield" size=40 />
        </label>
        </strong></p>
      <p align="center" class="style18">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label> 
        <input type="text" name="email" id="textfield"size=40 />
        </label>
      </p>
      <p align="center" class="style17"><strong>Contactno&nbsp; &nbsp; &nbsp; 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label> 
        <input type="text" name="contactno" id="textfield" size=40/>
        </label>
        </strong></p>
      <p align="center" class="style17"><strong>BusType &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> 
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
      
       <input type="text" name="date" id="textfield" size=40/>
        </label>
      </p>
      <p align="center" class="style18"> Ticketno &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
        &nbsp; 
        <label> 
        <input type="text" name="ticketsno" id="ticketsno"  size=55 onkeyup="sum();"/>
        </label></label>
        
      <div align="center" class="style16"></div>
      <span class="style16"><strong> </span> 
      <p align="center" class="style18"> Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label> 
        <input type="text" name="price" id="price" size=55 onkeyup="sum();" />
        </label>
      </p>
      <p align="center" class="style18"> Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label> 
        <input type="text" name="total" id="total" size=55  onclick="return sum()"  />
        </label>
      </p>
      <p align="center" class="style15">&nbsp;</p></div>
      <p align="center" class="style2"> 
        <label><span class="style11"> 
        <input type="submit" name="button" id="btn" value="Ok"  style="font-size:16px;" />
        </span></label>
      </p>
    </form>
  </div>
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
  <div id="copyright"> 
    <strong><font color="#99FFFF" size="4" face="Corbel"><a href=""> 
      <marquee behavior="scroll" scrollamount="10">
      <em> Jahanvi | Ekta | Devanshee </em> 
      </marquee>
      </a></font></strong>
    <br class="clear" />
  </div>
</div>
</body>
</html>
                                                                                                                                     