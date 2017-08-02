
<form>
<?php
$msg;
if (isset($_REQUEST['id']))
		{
		  $h=mysql_connect("localhost","root","");
		  mysql_select_db("stp16");
		  $qry="delete from student where email='$_REQUEST[id]'";
		  mysql_query($qry);
		  header("location:viewcourses.php");
		  }

?>
</form>