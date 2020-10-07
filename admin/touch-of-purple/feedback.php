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
var a=document.forms["feedback"]["name"].value;
var b=document.forms["feedback"]["email"].value;
var c=document.forms["feedback"]["ContactNo"].value;
var d=document.forms["feedback"]["f1"].value;



if (a==null || a=="")
{
alert("Name must be filled out");
return false;
}
if (b==null || b=="")
{
alert("Email must be filled out");
return false;
}
if (c==null || c=="")
{
alert("Contact Number must be filled out");
return false;
}
if (d==null || d=="")
{
alert(" Plz give feedback");
return false;
}

}
</script>
<style type="text/css">
<!--
.style1 {font-size: 24px}
.style3 {
	color: #ff0099;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style4 {color: #FFFFFF}
.style5 {font-size: 24px; color: #FFFFFF; }
.style7 {font-size: 36px}
.style8 {font-size: 36}
.style9 {font-size: xx-large}
.style10 {
	font-family: Corbel;
	font-weight: bold;
	font-size: 18px;
	font-style: italic;
}
-->
</style>

</head>
<body id="top">
<div class="wrapper col1">
  <div id="header"> 
    <h1><a href="#"> 
     <br>
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
        <li class="active"><font face="Corbel"><a href="home.php"><strong>Home</strong></a></font></li>
        
        <li><font face="Corbel"><a href="logout.php.php"><strong>Logout</strong></a> 
          </font> 
      </ul>
    </div>
   
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="featured_intro"> 
    <div class="center"> 
      <h3 align="center" ><font size="+5"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></h3>
      <h3 align="center" ><font size="+5"><span class="style3">Feedback</span></font></h3>
      <form id="form1" name="feedback" method="post" action="feedbacksave.php"  onsubmit="return validateForm()">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p class="style1 style4"><strong>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <input type="text" name="name" id="textfield1" size="45"/>
          </strong></p>
        <span class="style5"><strong> 
        <label></label>
        </strong> </span> 
        <p class="style5"><strong>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <input type="text" name="email" size="45"id="textfield1"/>
          </strong></p>
        <p class="style5"><strong>Contactno&nbsp;&nbsp; 
          <input type="text" name="ContactNo" id="textfield1" size="45"/>
          </strong></p>
        <p class="style5"><strong>&nbsp;Feedback&nbsp;&nbsp;&nbsp;&nbsp;</strong> 
          <label> 
          <input type="text" name="f1" id="textfield1" size="45"/>
          </label>
          <span class="style4"><strong> 
          <label> </label>
          </strong> <span class="style7"> <span class="style8"> <span class="style9"> 
          <label> </label>
          </span></span></span></span> </p>
        <label> <br />
        <span class="style9"><strong> 
        <input name="button" type="submit" class="nostart" id="btn" value="Ok"  />
        </strong></span></label>
        <span class="style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <input name="button2" type="submit" class="nostart" id="btn" value="Cancel" />
        </span> 
      </form>
    </div>
    <div class="fl_right"> 
      <h2 class="style1">&nbsp;</h2>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="copyright"> 
    <marquee direction="left" behavior="scroll" scrollamount="10"> 
      <a href=""><span class="style10">Jahanvi | Ekta | Devanshee</span>
      </marquee></a>
    <br class="clear" />
  </div>
</div>
</body>

</html>
<?php
}
?>
