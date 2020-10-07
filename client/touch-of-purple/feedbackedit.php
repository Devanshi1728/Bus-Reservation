
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
<style type="text/css">
<!--
.style1 {font-size: 24px}
.style7 {color: #FFFFFF}
.style8 {font-size: 24px; color: #FFFFFF; }
.style9 {font-family: Corbel}
.style11 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #FF0099;}
-->
</style>

<!-- ####################################################################################################### -->
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
  <div id="featured_intro"> 
    <div class="center"> 
      <h3 align="center" ><font size="+5"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></h3>
      <h3 align="center" ><strong><font size="+5"><span class="style11">Feedback</span></font></strong></h3>
      <?php
	  include("con1.php");
	  $id=$_GET['id'];
	  $query="select * from feedback where id=$id";
	  $result=mysql_query($query);
		  while($row=mysql_fetch_array($result))
	  {
	  ?>
      <form id="form1" name="form1" method="post" action="feedbackeditsave.php">
        <p>&nbsp;</p>
        <p> <span class="style7"><strong><span class="style5"><span class="style1">Id</span></strong><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span> 
          <span class="style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <input type="text" name="id" id="textfield1" size="45"value="<?php echo $row['id'];?>" />
          <br />
          </span> 
        <p align="center" class="style8"><strong>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <label> 
          <input type="text" name="name" id="textfield1" size="45"value="<?php echo $row['1'];?>" />
          </label>
          </strong></p>
        <span class="style8"><strong> 
        <label></label>
        </strong> </span> 
        <p class="style8"><strong>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <label> 
          <input type="text" name="email" size="45"value="<?php echo $row['2'];?>" />
          </label>
          </strong></p>
        <p class="style8"><strong>ContactNo&nbsp;&nbsp; 
          <label> 
          <input type="text" name="ContactNo" size="45" id="textfield1" value="<?php echo $row['3'];?>" />
          </label>
          </strong></p>
        <p class="style8"><strong>Feedback&nbsp;&nbsp; &nbsp; 
          <input type="text" name="f1" id="textfield1" size="45"  value="<?php echo $row['4'];?>"/>
          </strong></p>
        <strong> </strong><strong></strong><strong> 
        <label> </label>
        </strong> 
        <label> <span class="style9"><strong> 
        <input name="button" type="submit" class="nostart" id="btn" value="Ok"  />
        </label>
        <strong> <span class="style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input name="button2" type="submit" class="nostart" id="btn" value="Cancel" />
        </span> </strong> 
      </form>
      <?php
      }
	  ?>
    </div>
    <div class="fl_right"> 
      <h2 class="style1">&nbsp;</h2>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer"> 
    <div class="footbox twitter"> 
      <h2><font color="#FFFFFF">Latest News</font></h2>
      <ul>
        <li><font color="#999999" size="3"><strong><font face="Corbel">There are 
          some packages are available for family tour and couple tour.</font></strong></font></li>
        <li><font color="#999999" size="3"><strong><font face="Corbel">New Semi 
          sleeper buses are now available.</font></strong></font></li>
        <li><font color="#999999" size="3"><strong><font face="Corbel"> You can 
          also cancle your tickets one hour ago with 50% return cash.</font></strong></font></li>
        <li><font color="#999999" size="3"><strong><font face="Corbel">There are 
          also avialbility of free wifi in the buses.</font></strong></font></li>
        <li><font color="#999999" size="3"><strong><font face="Corbel">We provide 
          best hotels in our packages with good amenties.</font></strong></font></li>
      </ul>
    </div>
    <div class="footbox flickr"> 
      <h2><font color="#FFFFFF">Latest Bus</font></h2>
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
      <h2><font color="#FFFFFF">New Route</font></h2><marquee direction="up" behavior="scroll" scrollamount="5"> 
      <p><font color="#FFFFFF" size="3" face="Corbel"><strong><font color="#999999">Surat 
        to Rajkot</font></strong></font></p>
      <p>&nbsp;</p>
      <p><font color="#999999" size="3" face="Corbel"><strong>Mumbai to Surat</strong></font></p>
      <p>&nbsp;</p>
      <ul>
        <li><font color="#999999" size="3"><strong><font face="Corbel">Rajkot 
          to Ahemdabad</font></strong></font></li>
        <li><font color="#999999" size="3"><strong><font face="Corbel">Mumbai 
          to Ahemdabad</font></strong></font></li>
        <li><font color="#999999" size="3"><strong><font face="Corbel">Junadagh 
          to Rajkot</font></strong></font></li>
        <li><font color="#999999" size="3"><strong><font face="Corbel">Rajkot 
          to Surat</font></strong></font></li>
        <li><font color="#999999" size="3"><strong><font face="Corbel">Dhoraji 
          to Ahemdabad</font></strong></font></li>
        <li><font color="#999999" size="3"><strong><font face="Corbel">pune to 
          Rajkot</font></strong></font></li>
        <li class="last"><font color="#999999" size="3"><strong><font face="Corbel">Manali 
          to Rajkot</font></strong></font></li></marquee>
        
      </ul>
    </div>
    <div class="footbox banners last"> 
      <h2><font color="#FFFFFF">Most require Bus</font></h2>
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