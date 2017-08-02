<html>
<head><title> Arithmetic Operations</title></head>
<body>
<form method="get">
Enter First Number:<input type="text" name="val1" value="<?php
if (isset($_GET["val1"]))
echo $_GET["val1"];?>"/>
<br />
Enter Second Number <input type="text" name="val2" value="<?php
if (isset($_GET["val2"]))
echo $_GET["val2"];?>"/>
<br />
<input type="submit" name="add" value="ADD"/>
<input type="submit" name "subtract" value="SUBTRACT"/>
<input type="submit" name="multiply" value="MULTIPLY"/>
<input type ="submit" name="divide" value="DIVIDE"/>
<br />
Result:<input type="text" name="result" value="<?php
if(isset($_GET["val1"])&&isset($_GET["val2"]))
{
$x=$_GET["val1"];
 $y=$_GET["val2"];
if(!empty($_GET["add"])
 $z=$x+$y;
if(!empty($_GET["subtract"])
$z=$x-$y;
if(!empty($_GET["multiply"])
$z=$x*$y;
if(!empty($_GET["divide"])
$z=$x/$y;
echo $x;}

?>"/>
</form>
</body>
</html>
?>