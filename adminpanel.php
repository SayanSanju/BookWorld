<html>
<head><title>Admin Panel</title></head>
<?php
session_start();
?>
<html>
<head>
<meta charset="UTF-8">
<title>Template 1</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style>
        #abc:hover{
            background-color: whitesmoke;
        }
    </style>
</head>
<body align="center"><form>
<font face="Lucida Calligraphy" style="font-weight:bolder;">
<div id="wrapper"> 

  <div id="header"> 

    <div class="top_banner">
      <h1>BookWorld</h1>
      <p>The Authentic Online Library</p>
    </div>
 
  </div>

  <div id="page_content">

    <div class="navigation" style="background-color:#666699;">
      <ul>
        <li id="abc"><a href="masterpage.php">Home</a></li>
        <?php if(!isset($_SESSION['uid'])) echo"<li id='abc'><a href='registration.php'>Register</a></li>";?>
        <li id="abc"><?php if(isset($_SESSION['uid']))echo"<a href='logout.php'>Logout</a>"; else echo"<a href='login.php'>Login</a>";?></li>
	<li id="abc"><a href="viewcourses.php">View Profile</a></li>
        <li id="abc"><a href="product.php">Products</a></li>
        <li id="abc"><a href="adminpanel.php">Admin Panel</a></li>
        <li id="abc"><a href="aboutus.php">About Us</a></li>
       
      </ul>
    </div>
</font>
<fieldset>
	<legend><h2>Admin Login</h2></legend>
	<br>
	<br>
	<h4><b>Enter Email</h4><input type="text" name="ademail" value=""/><br><br>
	<h4>Enter Password</b></h4><input type="password" name="adpwd" value=""/><br><br>
	<input type="submit" name="adlogin" value="Login"/>
<?php
 if(isset($_GET['adlogin']))
       {
	mysql_connect("localhost","root","");
 	mysql_select_db("stp16");
 	$qry="select * from admin where email='$_REQUEST[ademail]' and password='$_REQUEST[adpwd]'";
	$res=mysql_query($qry);
	if(mysql_affected_rows()>0)
	header("location:adminwork.php");
	else
	echo "Invalid Email or Password";
	}
?>
</fieldset>
 <div id="footer" style="background-color:#FF9900;">Copyright &copy; 2014. Design by Sankalita Souradeep Sayan<br>
    
    <!--DO NOT remove footer link-->
    <!--Template designed by--></div>

</div></font></form>
</body></html>




