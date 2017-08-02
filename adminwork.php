<?php
session_start();
if(isset($_REQUEST['bupload']))
{
mysql_connect("localhost","root","");
mysql_select_db("stp16");
if($_FILES['image']['error']==0 && $_FILES['image']['type']=="image/jpeg")
{
    move_uploaded_file($_FILES['image']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."upload/".$_FILES['image']['name']);
    $path="upload/".$_FILES['image']['name'];

move_uploaded_file($_FILES['link']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."upload/".$_FILES['link']['name']);
$path1="upload/".$_FILES['link']['name'];

$qry="insert into book_details values('$_REQUEST[id]','$_REQUEST[bookname]','$_REQUEST[author]','$_REQUEST[pub]','$_REQUEST[reldate]','$_REQUEST[com]','$_REQUEST[gen]','$path','$path1')";
mysql_query($qry);
}
else
    echo"<font color='red'><b>Error in uploading. Check if image file is JPEG or not.</b></font><br>";
if(mysql_affected_rows()>0)

echo "<font color='green'><b>Upload Successful</b></font>";
else
echo "<font color='red'><b>Upload Unsuccessful</b></font>";
}
?>
<html>
<head>
<meta charset="UTF-8">
<title>Template 1</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script>
 function validate_form()
  {
      flag=true;
    if(document.getElementById("d1").value=="")
    {
        document.getElementById("d1").style="border-color:red";
        flag=false;
       
        }
        else
        document.getElementById("d1").style="";
     if(document.getElementById("d2").value=="")
    {
        document.getElementById("d2").style="border-color:red";
        flag=false;
       
        }
        else
        document.getElementById("d2").style="";
    if(document.getElementById("d3").value=="")
    {
        document.getElementById("d3").style="border-color:red";
        flag=false;
       
        }
        else
        document.getElementById("d3").style="";
   
    if(document.getElementById("d5").value=="")
    {
        document.getElementById("d5").style="border-color:red";
        flag=false;
       
        }
        else
        document.getElementById("d5").style="";
    if(document.getElementById("d6").value=="")
    {
        document.getElementById("d6").style="border-color:red";
        flag=false;
       
        }
        else
        document.getElementById("d6").style="";
    if(document.getElementById("d7").value=="")
    {
        document.getElementById("d7").style="border-color:red";
        flag=false;
       
        }
        else
        document.getElementById("d7").style="";
    if(document.getElementById("d8").value=="")
    {
        document.getElementById("d8").style="border-color:red";
        flag=false;
       
        }
        else
        document.getElementById("d8").style="";
    if(document.getElementById("d9").value=="")
    {
        document.getElementById("d9").style="border-color:red";
        flag=false;
       
        }
        else
        document.getElementById("d9").style="";
    return flag;
    }
</script>
<style>
        #abc:hover{
            background-color: whitesmoke;
        }
    </style>
</head>
<body align="center">
    <form method="post" enctype="multipart/form-data" onsubmit="return validate_form()">
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
  <div>
      <table align="center">
        <tr>
          <td width="20%">Book Name:</td>  <td width="20%"><input type="text" name="bookname" placeholder="Enter Name" id="d1" /></td>  <td width="20%">Authors Name:</td>  <td width="20%"><input type="text" name="author" placeholder="Author's Name" id="d9" /></td>
         </tr>
       <tr>
          <td width="20%">Publisher:</td>  <td width="20%"><input type="text" name="pub" placeholder="Publishers" id="d2" /></td>  <td width="20%">Release Date:</td>  <td width="20%"><input type="text" name="reldate" placeholder="yyyy-mm-dd" id="d3"/></td>
         </tr>
       <tr>
          <td width="20%">Comments:</td>  <td width="20%"><textarea rows="7" cols="50" name="com" id="d4"></textarea></td>  <td width="20%">Genre:</td>  <td width="20%"><input type="text" name="gen" placeholder="Enter genre" id="d5" /></td>
         </tr>
        <tr>
          <td width="20%">Image name:</td>  <td width="20%"><input type="file" name="image" placeholder="Enter image" id="d6" /></td>  <td width="20%">Link:</td>  <td width="20%"><input type="file" name="link" placeholder="Book Link" id="d7" /></td>
         </tr>
	<tr>
	<td>Enter Book ID:</td><td><input type="text" name="id" id="d8"/></td>
	</tr>
      </table>
             <input type="submit" name="bupload" value="UPLOAD" />        
  </div>
 <div id="footer" style="background-color:#FF9900;">Copyright &copy; 2014. Design by Sankalita Souradeep Sayan<br>
    
    <!--DO NOT remove footer link-->
    <!--Template designed by--></div>
</div>
    </font>
</form>

</body></html>




