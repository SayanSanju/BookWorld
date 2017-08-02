<html>
<head>
<script>
function select(str)
{
obj=new XMLHttpRequest();
obj.open("get","state1.php?cid="+str,true);
obj.send();
obj.onreadystatechange=function()
{
if(obj.readyState==4 && obj.state==200)
{
document.getElementById("state").innerHTML=obj.responseText;
}
}
}
</script></head>
<?php
$h=mysql_connect("localhost","root","");
mysql_select_db("stp16");
$qry="select * from country";
$res=mysql_query($qry);
echo"<select name='coun' id='id' onChange='select(this.value)'>";
while($row= mysql_fetch_array($res))
{echo"<option value=$row[0]>$row[1]</option>";
 }
echo"</select>";
?>
Select State<select id="state">
</select>
</html>