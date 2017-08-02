<html>
<head><title>Register Now!!!</title>
<style>
select
 {
 background-color:pink;
 color:blue;
 width:40%;
 border-width:2px;
 border-color:green;
 text-transform:capitalize;
 }
 input
 {
 background-color:pink;
 color:blue;
 width:80%;
 border-width:2px;
 border-color:green;
 text-transform:capitalize;
 }
 textarea
 {
 background-color:pink;
 color:blue;
 width:80%;
 border-width:2px;
 border-color:green;
 text-transform:capitalize;
 }
 #sub
 {
 background-color:pink;
 color:blue;
 width:5%;
 border-width:2px;
 border-color:green;
 text-transform:capitalize;
 }
 lable
  {
  font-family:Arial;
  }
  </style></head>
  <body background="22.jpg" text="lawngreen">
  <h1 align="center"><marquee behavior="alternate"><u>Online Registration Form</u></marquee></h1>
  <b>
  <fieldset>
  <legend>Course Details</legend>
  <table>
  <tr><td width=20%><lable>Course:</lable></td>
  <td width=20%><select name="reg">
        <option selected>Select your course</option>
        <option>PHP with Wordpress</option> 
        <option>PHP with CSS</option>
        <option>Javascript</option></select></td></tr>  
  <tr><td width=20%><lable>Location:</lable></td>
  <td width=20%><select name="loc">
        <option selected>Enter Location</option>
        <option>New Delhi</option> 
        <option>Bhubaneswar</option>
        <option>Kolkata</option>
        <option>Mumbai</option>
        <option>Bengaluru</option></td></tr>
  <tr><td width=20%><lable>Month of training:</lable></td>
  <td width=20%><select name="mon">
        <option selected>Enter month</option>
        <option>May</option> 
        <option>June</option>
        <option>July</option>
                      </select></td></tr>
                      </table>
                      </fieldset>
<fieldset>
<br>
<legend>Personal Details</legend>
<table>
<tr><td width=20%><lable>Your Name:</lable></td>
        <td  width=20%><input type="text" name="txt_name" value="" placeholder="Name"/></td>  
        <td  width=20%><lable>Your Father's Name:</lable></td>  
        <td  width=20%><input type="text" name="txt_fname" value="" placeholder="Father's Name"/></td></tr>  
        <tr><td><lable>Address:</lable></td>
        
        <td><textarea name="txt_add" cols="16" rows="4" placeholder="Address"></textarea></td>
        <td  width=20%><lable>Mobile No.:</lable></td>
        <td width=20%><input type="text" name="txt_mob" value="" align="right" placeholder="Mobile"/></td></tr>
        <tr><td width=20%><lable>Your Email ID:</lable></td>
        <td width=20%><input type="text" name="txt_email" value="" align="right" placeholder="Email"/></td></tr>
<tr><td width=20%><lable>Gender:</lable></td>
<td width=20%<lable>Male</lable>   <input type="radio" name="txt_gen" value="Male"/></td>
<td width=20%><lable>Female</lable> <input type="radio" name="txt_gen" value="Female"/>
                      </td></tr>
</table>
</fieldset>
<br>
<fieldset>
<legend>Academic Details</legend>
<table>
<tr><td width=20%><lable>College Name:</lable></td>
<td width=20%><input type="text" name="txt_cname" value="" placeholder="College"/></td></tr> 
        <tr><td width=20%><lable>Semester:</lable></td>
<td width=20%><select name="sem">
        <option selected>Select your semester</option>
        <option>First</option> 
        <option>Second</option>
        <option>Third</option>
        <option>Fourth</option>
        <option>Fifth</option>      
        <option>Sixth</option>
        <option>Seventh</option> 
        <option>Eight</option>
</select></td></tr>
</table>
</fieldset>
<br>
<center>
<input type="submit" name="txt_sub" value="Submit" id="sub"/>
</body>
</html>