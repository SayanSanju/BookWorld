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
             <link rel="stylesheet" href="css/page.min.css" type="text/css">

  
  <link href='http://fonts.googleapis.com/css1?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css1'>
    <link href='http://fonts.googleapis.com/css1?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css1'>
    <link rel="stylesheet" href="font-awesome/css1/font-awesome.min.css1" type="text/css1">

    <link rel="stylesheet" href="css1/animate.min.css1" type="text/css1">

    <link rel="stylesheet" href="css1/creative.css1" type="text/css1">
    <style>
        #abc:hover{
            background-color: whitesmoke;
        }
    </style>




</head>
<body align="center">
<font face="Lucida Calligraphy" color="#666699" style="font-weight:bolder;">
<div id="wrapper"> 

  <div id="header"> 

    <div class="top_banner">
      <h1>BookWorld</h1>
      <p>The Authentic Online Library</p>
    </div>
 
  </div>

  <div id="page_content">

    <div class="navigation" style="background-color:#333366;">
      <ul>
        <li id="abc"><a href="masterpage.php">Home</a></li>
        <?php if(!isset($_SESSION['uid'])) echo"<li id='abc'><a href='registration.php'>Register</a></li>";?>
        <li id="abc"><?php if(isset($_SESSION['uid']))echo"<a href='logout.php'>Logout</a>"; else echo"<a href='login.php'>Login</a>";?></li>
	<li id="abc"><a href="viewcourses.php">View Courses</a></li>
        <li id="abc"><a href="product.php">Products</a></li>
        <li id="abc"><a href="adminpanel.php">Admin Panel</a></li>
        <li id="abc"><a href="#">About Us</a></li>
        <li id="abc"><a href="#">Contact Us</a></li>
        <li id="abc"><a href="#">FAQ</a></li>
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
      
 <div id="footer" style="background-color:#FF9900;">Copyright &copy; 2014. Design by <a href="http://www.htmltemplates.net" target="_blank">htmltemplates.net</a><br>
    
    <!--DO NOT remove footer link-->
    <!--Template designed by--><a href="http://www.htmltemplates.net"><img src="images/footer.gif" class="copyright" alt="http://www.htmltemplates.net"></a></div>
	
    <!--/. end footer from here-->
  </div>

</div>
</font>
</body></html>




