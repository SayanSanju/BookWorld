
<?php
session_start();
if(!isset($_SESSION["uid"]))
{
header("location:login.php");
}
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
<?php
    $h=  mysql_connect("localhost","root","");
    mysql_select_db("stp16");
    $qry="select * from book_details";
    $res=  mysql_query($qry);
    while($r=  mysql_fetch_array($res))
    {
        if(stristr($r[6],"mystery"))
        {
            echo "<table>";

	
	echo"<tr>";
	echo"<td colspan='2'><img src='$r[7]' width='200' height='200'/></tr></table><table><tr>";
	echo"<td>Name</td><td>$r[1]</td>";
	echo"</tr>";
	echo"<tr>";
	
	echo"<td>Author</td><td>$r[2]</td>";
	echo"</tr>";
	echo"<tr>";
	
	echo"<td>Publisher</td><td>$r[3]</td>";
	echo"</tr>";
echo "<tr>";
	echo"<td>Comment</td><td>$r[5]</td>";
echo "</tr>";
echo"<tr>";
	
	echo"<td>$r[6]</td><td><a href='$r[8]'><input type='submit' name='buy' value='Read Now'/></a></td>";
echo"</tr>";
	
	
	
echo"</table>";
        }
    }
    ?>

      <div id="footer" style="background-color:#FF9900;">Copyright &copy; 2014. Design by Sankalita Souradeep Sayan<br>
    
    <!--DO NOT remove footer link-->
    <!--Template designed by--></div>
      </font>
      </form>
    
</body>
</html>
