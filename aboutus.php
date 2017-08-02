p
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

<h2><b>Meet The Admins</b></h2>

<table>
<tr>
<td><h4><b>Sankalita Chakraborty</b></h4></td><td>First Year at NIT Durgapur, enrolled in CSE dept.</td>
</tr>
<tr>
<td><h4><b>Souradeep Banerjee</b></h4></td><td>First Year at NIT Durgapur, enrolled in CSE dept.</td>
</tr>
<tr>
<td><h4><b>Sayan Dutta</b></h4></td><td>First Year at NIT Durgapur, enrolled in CSE dept.</td>
</tr>
</table>
<h3><font color=blue><b> If you have any queries, doubts or suggestions about the website, feel free to reach us at sankhoneel112@gmail.com</b></font></h3>
      <div id="footer" style="background-color:#FF9900;">Copyright &copy; 2016. Website by Sankalita Souradeep Sayan<br>
    
    <!--DO NOT remove footer link-->
    <!--Template designed by--></div>
      </font>
      </form>
    
</body>
</html>
