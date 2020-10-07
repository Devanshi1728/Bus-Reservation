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

<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="copyright"> 
    <p class="fl_right"> <marquee direction="left" behavior="scroll" scrollamount="10"> 
      <a href=""><strong>Jahanvi | Ekta | Devanshee</strong></marquee></a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
<?php
}
?>