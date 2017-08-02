<html>
<head><title>Open File</title></head>
<body>
<form>
Select Drive:<select name="root">
	<option <?php if (isset($_GET['sub'])){if(isset($_GET['root'])=="C:\\") echo "selected";} ?>>C:\\</option>
	<option <?php if (isset($_GET['sub'])){if(isset($_GET['root'])=="D:\\") echo "selected";} ?>>D:\\</option>
	<option <?php if (isset($_GET['sub'])){if(isset($_GET['root'])=="E:\\") echo "selected";} ?>>E:\\</option>
	<option <?php if (isset($_GET['sub'])){if(isset($_GET['root'])=="F:\\") echo "selected";} ?>>F:\\</option>
</select>
<input type="submit" name="sub" value="Open"/><br>
select sub directory:<select name="root1"><?php
	if(isset($_GET["sub"]))
		{
$s=opendir($_GET["root"]);
		 while($file=readdir($s))
			{
			  echo "<option>".$file."</option>";
			}
		}
?>
<input type="submit" name="sub1" value="Open"/><br>
</select>
</form>
</body>
</html>