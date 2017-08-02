<?php
session_start();
if(!isset($_SESSION["uid"]))
{
header("location:login.php");
}
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
<body>
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
        <li id='abc'><a href="masterpage.php">Home</a></li>
        
       <li id="abc"><?php if(isset($_SESSION['uid']))echo"<a href='logout.php'>Logout</a>"; else echo"<a href='login.php'>Login</a>";?></li>
	<li id='abc'><a href="viewcourses.php">View Profile</a></li>
        <li id='abc'><a href="product.php">Products</a></li>
        <li id='abc'><a href="adminpanel.php">Admin Panel</a></li>
        <li id='abc'><a href="aboutus.php">About Us</a></li>
        
      
      </ul>
    </div>
<?php
$msg;
mysql_connect("localhost","root","");
mysql_select_db("stp16");
$qry="select * from book_details";
$res=mysql_query($qry);
$f=0;
echo "<table>";
while($r=mysql_fetch_array($res))
	{
	if($f==0)
	echo"<tr>";
	echo"<td>";
	echo"<table border='0'>";
	echo"<tr><td colspan='2'><a href='specification.php?pid=$r[0]'><img src='$r[7]' width='300px'></a></tr>";
	echo"<tr><td>Name</td><td>$r[1]</td></tr>";
	echo"<tr><td>Author</td><td>$r[2]</td></tr>";
	echo"</table>";
	echo"</td>";
	if($f==2)
		{
		  echo"</tr>";
		  $f=0;
		}
		else $f++;
	}
echo"</table>"
?>
  <div id="footer" style="background-color:#FF9900;">Copyright &copy; 2014. Design by Sankalita Souradeep Sayan<br>
    
    <!--DO NOT remove footer link-->
    <!--Template designed by--></div>
  </div>

</div>
</font>
</body></html>




