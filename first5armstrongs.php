<html>
<head><title> Arithmetic Operations</title></head>
<body>
<form method="get">
<input type="submit" name="check" value="Print First Five Armstrong no"/>
<br />
<?php
$i=0;
while($i<=5)
{$x=100;
$s=$x;
$sum=0;
$i=0;
{while($x!=0 && $x<999)
{$p=$x%10;
 $sum=$sum+($p*$p*$p);
 $x=$x/10;}
while($x!=0 &&  $x<5999 && $x>1000)
 {$q=$x%10;
 $x=$x/10;
 $sum=$sum+($q*$q*$q*$q);}
 if($sum==$s)
 {echo "$s";
$i++;}}
$x++;}

?>
</form>
</body>
</html>