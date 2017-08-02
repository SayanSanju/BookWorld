
<?php
session_start();
?>
<html>
<head> <meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style>
        #abc:hover{
            background-color: whitesmoke;
        }
    </style>
</head>
<body bgcolor>
        <form>

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
        <li id="abc"><a href="registration.php">Register</a></li>
        <li id="abc"><a href="login.php">Login</a></li>
	<li id="abc"><a href="viewcourses.php">View Profile</a></li>
        <li id="abc"><a href="adminpanel.php">Admin Panel</a></li>
        <li id="abc"><a href="product.php">Product</a></li>
        <li id="abc"><a href="aboutus.php">About Us</a></li>
        
        
      </ul>
    </div>

<center>
<fieldset>
    <legend><h1 align="center"><u>Login</u></h1>
</legend>
<br>
<h4 align="center"> </h4>
<br>
<h3><lable>Enter Your UserID:</lable><br><input type="text" name="userid" value="" placeholder="Enter UserID" id="d1"/></h3>
<br>
<h4><lable>Password:</lable><br><input type="password" name="pwd" value="" placeholder="Enter Password"/></h4>
</fieldset>
<input type="submit" name="login" value="Login" class="submit submit1" style="color:red font-size:30px border-radius:2px width:100px height:30px" />
<?php
$msg="";
if(isset($_REQUEST['login']))
{
$h=mysql_connect("localhost","root","");
mysql_select_db("stp16");
$qry="select name,email,pwd from student where email='$_REQUEST[userid]' and pwd='$_REQUEST[pwd]'";
$res=mysql_query($qry);
if(mysql_affected_rows()>0)
{
$row=mysql_fetch_array($res);
$_SESSION['uid']=$row[1];
$_SESSION['name']=$row[0];
header("location:masterpage.php");
}
else
echo "<br><font color='red'>Invalid Username and Password</font>";
}
?>
</center>
      <div id="footer" style="background-color:#FF9900;">Copyright &copy; 2014. Design by Sankalita Souradeep Sayan<br>
    
    <!--DO NOT remove footer link-->
    <!--Template designed by--></div>
      </font>
      </form>
    
</body>
</html>
