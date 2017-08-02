<html>
<head><title>Array</title></head>
<body>
<form>
<?php
$student=array("Amit"=>array("Math"=>67,"English"=>45,"History"=>96,"C"=>56),"Ramu"=>array("Math"=>67,"English"=>45,"History"=>58,"C"=>71),"Sita"=>array("Math"=>69,"English"=>49,"History"=>56,"C"=>77));
echo"<table border='1'>";
	foreach($student as $k=>$v)
		{	echo"<tr><td>$k</td><td><table border='1'>";
						foreach($v as $k1=>$a)
				{echo"<tr><td>$k1</td><td>$a</td></tr></td>";}echo"</table></tr>";}
echo"</table>";
					

?>

  
</form>
</body>
</html>