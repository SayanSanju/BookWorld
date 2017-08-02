<html>
<head><title>file uploading</title></head>
<body>
<form method="post" enctype="multipart/form-data">
Choose File:<input type="file" name="myfile"/>
<br>
<input type="submit" name="info" value="Get Info"/>
<br>
<input type="submit" name="upload" value="Upload"/>
<br>
<?php
 
 if (isset($_REQUEST['info'])){$t=$_REQUEST["myfile"]["name"];
	$u=$_REQUEST['myfile']['type'];echo"Name:$t<br>Type:$u";}?><br>
<?php
	if(isset($_REQUEST['upload']))
		{
		  if($_FILES["myfile"]['error']==0)
			{
				$sou=$_FILES["myfile"]['tmp_name'];
				$des=$_SERVER['DOCUMENT_ROOT']."/".$_FILES['myfile']['name'];
				move_uploaded_file($sou,$des);
				echo "successful";
			}
		else echo"unsuccessful";
		}
?>
</form>
</body>
</html>
