<?php
session_start();
$msg;
if (isset($_REQUEST['id']))
{
	$h=mysql_connect("localhost","root","");
	mysql_select_db("stp16");
	$qry="select * from student where email='$_REQUEST[id]'";
	$res=mysql_query($qry);
	$row=mysql_fetch_array($res);
	if(mysql_affected_rows()>0)
	   {
	    $msg="";
	    if (isset($_REQUEST['reg'])  && isset($_REQUEST['checkbox']))
		{
		  $h=mysql_connect("localhost","root","");
		  mysql_select_db("stp16");
		  $qry="UPDATE student set name='$_REQUEST[txt]', email='$_REQUEST[mail]', contact='$_REQUEST[num]', address='$_REQUEST[add1]', pwd='$_REQUEST[pwwd]', location='$_REQUEST[city]', pwd1='$_REQUEST[pwwd1]',genre='$_REQUEST[genre]',personal='$_REQUEST[personal]' where email='$_REQUEST[id]'";
		  mysql_query($qry);
		  if(mysql_affected_rows()>0)
			{
			  $msg="<b><font-color=red>Record Successfully Updated</font></b>";
			}
		else
			{
			  $msg="<b><font-color=red> Error In Updating</font></b>";
			}
		echo $msg;
		}
		
	   }
}

	else 
	 {
	  $msg="";
	  if (isset($_REQUEST['reg'])  && isset($_REQUEST['checkbox']))
		{
                         if ($_REQUEST['pwwd']==$_REQUEST['pwwd1'])
                                     {
                                    $str=$_REQUEST['mail'];
                                    $s=strstr($str,"@");
                                  if(strstr($s,"."))
                                         {
		  $h=mysql_connect("localhost","root","");
	          mysql_select_db("stp16");
		  $qry="insert into student values('$_REQUEST[txt]','$_REQUEST[mail]','$_REQUEST[num]','$_REQUEST[add1]','$_REQUEST[pwwd]','$_REQUEST[city]','$_REQUEST[pwwd1]','$_REQUEST[genre]','$_REQUEST[personal]')";
		  mysql_query($qry);
		  if(mysql_affected_rows()>0)
			{
			  $msg="<b><font color=red>Record Successfully Inserted</font></b>";
			}
		
		  else
			{
		  	  $msg="<b><font color=red> Error In Inserting</font></b>";
			}
                                            }
                                          else
                                          echo "<font color=red><b>Not a valid email id</b></font>";
                                       }
                                 else
                                 echo "Password and Confirm Password are not same";
		}
	echo $msg;
	}

?>
<html>
    <head> <title>Registration Form</title><meta name="description" content="A description of your website">
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
     if(document.getElementById("d4").value=="")
    {
        document.getElementById("d4").style="border-color:red";
        flag=false;
       
        }
        else
        document.getElementById("d4").style="";
     if(document.getElementById("d5").value=="")
    {
        document.getElementById("d5").style="border-color:red";
        flag=false;
       
        }
        else
        document.getElementById("d5").style="";
     if(document.getElementById("d7").value=="")
    {
        document.getElementById("d7").style="border-color:red";
        flag=false;
       
        }
        else
        document.getElementById("d7").style="";
   
    return flag;
    }
    </script>
    <style>
        #abc:hover{
            background-color: whitesmoke;
        }
    </style>

</head><font face="Lucida Calligraphy" style="font-weight:bolder;">
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
        <li id="abc"><a href="adminpanel.php">Admin Panel</a></li>
        <li id="abc"><a href="product.php">Product</a></li>
        <li id="abc"><a href="aboutus.php">About Us</a></li>
   
       
      </ul>
    </div>
    <body background="book0.jpg" align="center">
	<form action="" method="post" onsubmit="return validate_form()">
        <fieldset>
            <legend><h1><b> Registration Form</b></h1></legend>
		<table width="100%" valign="top">
			<tr>
				<td><h3>Enter Your Name</h3></td><td><input type="text" name="txt" value="<?php if(isset($_REQUEST['id'])){echo "$row[0]";}?>" placeholder="Enter Name" id="d1"/></td>
				<td><h3>Enter Email ID</h3></td><td><input type="text" name="mail"  value="<?php if(isset($_REQUEST['id'])){echo "$row[1]";}?>" placeholder="Enter Email" id="d2"/></td>
			</tr>
			<tr>
				<td><h3>Enter Contact Number</h3></td><td><input type="text" name="num" value="<?php if(isset($_REQUEST['id'])){echo "$row[2]";}?>" placeholder="Enter Number" id="d3"/></td>
				<td><h3>Enter Address</h3></td><td><textarea columns=300 rows=5 name="add1" value="" placeholder="Enter Address" id="d4"><?php if(isset($_REQUEST['id'])){echo "$row[3]";}?></textarea></td>
	
			</tr>

			<tr>
				<td><h3>Enter Password</h3></td><td><input type="password" name="pwwd" value="<?php if(isset($_REQUEST['id'])){echo "$row[4]";}?>" placeholder="Enter Password" id="d5"/></td><td><label><h3>Select Gender</h3></label></td>
		<td><select name="city" id="d6">
				<option selected>Select Gender</option>
				<option <?php if(isset($_REQUEST['id'])){if($row[5]=='Female') echo 'selected';}?>> Female </option>
				<option <?php if(isset($_REQUEST['id'])){if($row[5]=='Male') echo 'selected';}?>>Male</option>
				</select>
		</td>

			</tr>	
			<tr>	
				<td><h3>Confirm Password</h3></td><td><input type="password" name="pwwd1" value="<?php if(isset($_REQUEST['id'])){echo "$row[6]";}?>"placeholder="Confirm Password" id="d7"/></td>				
			</tr>
		</table>
        </fieldset>
	<fieldset>
            <legend><h1><b>Your Interests</b></h1></legend><center>
		<table>
			<tr>
				<td><h3><b>Which Genres are you interested in?</b></h3></td>
			</tr><b>
                                               <tr><td align="center"><input type="text" name="genre" value="<?php if(isset($_REQUEST['id'])){echo "$row[7]";}?>"/></td></tr>
                                                <tr>
				<td><h3><b>Tell us something about yourself!!</b></h3></td>
			</tr><b>
                                               <tr><td align="center"><textarea rows="7" cols="60" name="personal" ><?php if(isset($_REQUEST['id'])){echo "$row[8]";}?></textarea></td></tr>

			
		</table>
		<b><font size="5">I Agree to the Terms and Conditions</b><input type="checkbox" name="checkbox" id="d8" /></font>
	</fieldset>
		
	<input type="submit" name="reg" value="<?php if(isset($_REQUEST['id'])) echo'Update'; else echo'Register';?>" id="register"/>
<div id="footer" style="background-color:#FF9900;">Copyright &copy; 2014. Design by Sankalita Souradeep Sayan<br>
    
    <!--DO NOT remove footer link-->
    <!--Template designed by--></div>
	
    <!--/. end footer from here-->
  </div>

</div>
   </form>
    </body></font>
</html> 