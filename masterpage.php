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
<font face="Lucida Calligraphy" color="#FFFFFF" style="font-weight:bolder;">
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
      <h3><font color="#669900" face="Imprint MT Shadow"><b>Hello, bookworms! Presenting to you a free online library, where you'll find a vaste range of books to read and download for free! Moreover, you can upload your own writings and have a platform to showcase your talents! pen down your your thoughts and let the world know your talent!Just Register or Login and start exploring!!</b></font></h3>
<table align="center" bgcolor="#FF9900" width="100%">
<tr>
<td>    <section class="no-padding" id="events">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-6 col-sm-2">
                    <a href="action.php" class="portfolio-box"><img src="book0.jpg" width="310" height="200"/> <div class="portfolio-box-caption">
   <div class="portfolio-box-caption-content">
    <div class="project-category text-faded">
    </div>  <div class="project-name">
 
<a href="action.php">Genre: Action</a> </div>
     </div>
     </div>
     </a>
    </div></section></td><td><section class="no-padding" id="events">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-6 col-sm-2">
                    <a href="thriller.php" class="portfolio-box"><img src="book1.jpg" width="310" height="200" /><div class="portfolio-box-caption">
   <div class="portfolio-box-caption-content">
    <div class="project-category text-faded">
    </div>  <div class="project-name">
 <a href="thriller.php">Genre: Thriller</a>
 </div>
     </div>
     </div>
     </a>
    </div></section></td><td><section class="no-padding" id="events">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-6 col-sm-2">
                    <a href="romance.php" class="portfolio-box"><img src="book2.jpg" width="310" height="200"/><div class="portfolio-box-caption">
   <div class="portfolio-box-caption-content">
    <div class="project-category text-faded">
   </div>  <div class="project-name">
 
<a href="romance.php">Genre: Romance</a> </div>
     </div>
     </div>
     </a>
    </div></section></td>
</tr>
<tr>
<td> <section class="no-padding" id="events">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-6 col-sm-2">
                    <a href="contemporary.php" class="portfolio-box"><img src="book3.jpg" width="310" height="200"/><div class="portfolio-box-caption">
   <div class="portfolio-box-caption-content">
    <div class="project-category text-faded">
   </div>  <div class="project-name">
 
<a href="contemporary.php">Genre: Contemporary</a>  </div>
     </div>
     </div>
     </a>
    </div></section></td><td><section class="no-padding" id="events">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-6 col-sm-2">
                    <a href="comedy.php" class="portfolio-box"><img src="book5.jpg" width="310" height="200"/><div class="portfolio-box-caption">
   <div class="portfolio-box-caption-content">
    <div class="project-category text-faded">
   </div>  <div class="project-name">
 
<a href="comedy.php">Genre: Comedy</a>  </div>
     </div>
     </div>
     </a>
    </div></section></td><td><section class="no-padding" id="events">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-6 col-sm-2">
                    <a href="historical.php" class="portfolio-box"><img src="book4.jpg" width="310" height="200"/><div class="portfolio-box-caption">
   <div class="portfolio-box-caption-content">
    <div class="project-category text-faded">
   </div>  <div class="project-name">
 
<a href="historical.php">Genre: Historical</a>  </div>
     </div>
     </div>
     </a>
    </div></section></td>
</tr>
<tr>
<td><section class="no-padding" id="events">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-6 col-sm-2">
                    <a href="tragedy.php" class="portfolio-box"><img src="book6.jpg" width="310" height="200"/><div class="portfolio-box-caption">
   <div class="portfolio-box-caption-content">
    <div class="project-category text-faded">
   </div>  <div class="project-name">
 
       <a href="tragedy.php">Genre: Tragedy</a> </div>
     </div>
     </div>
     </a>
    </div></section></td><td><section class="no-padding" id="events">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-6 col-sm-2">
                    <a href="science.php" class="portfolio-box"><img src="book7.jpg" width="310" height="200" /><div class="portfolio-box-caption">
   <div class="portfolio-box-caption-content">
    <div class="project-category text-faded">
   </div>  <div class="project-name">
 
       <a href="science.php">Genre:Science</a>  </div>
     </div>
     </div>
     </a>
    </div></section></td><td><section class="no-padding" id="events">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-6 col-sm-2">
                    <a href="mystery.php" class="portfolio-box"><img src="book8.jpg" width="310" height="200"/><div class="portfolio-box-caption">
   <div class="portfolio-box-caption-content">
    <div class="project-category text-faded">
   </div>  <div class="project-name">
 
       <a href="mystery.php">Genre: Mystery</a> </div>
     </div>
     </div>
     </a>
    </div></section></td>
</tr>
</table>

 <div id="footer" style="background-color:#FF9900;">Copyright &copy; 2014. Design by Sankalita Souradeep Sayan<br>
    
    
    
  </div>

</div>
</font>
</body></html>




