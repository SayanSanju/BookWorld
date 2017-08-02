<html>
<head> <title> Calaulator</title> </head>
<body>
<form method="get">
	<input type="text" name="result" value="<?php
	if(isset($_GET["1"]))
		{
		  $t=$_GET['result'].$_GET["1"];
		 echo $t;}
	if(isset($_GET["+"]))
		{$t=$_GET["result"].$_GET["+"];
		 echo $t;
		}
	if(isset($_GET["="]))
		{ 	$t=$_GET["result"];
			echo $_GET["result"]."=";
			if(strstr($t,"+"))
			 	{$substr=explode("+",$t);
				  $p=$substr[1]+$substr[0];
					echo $p ;
				}
			if(strstr($t,"-"))
			 	{$substr=explode("-",$t);
				  $p=$substr[0]-$substr[1];
					echo $p ;
				}
			if(strstr($t,"*"))
			 	{$substr=explode("*",$t);
				  $p=$substr[1]*$substr[0];
					echo $p ;
				}
			if(strstr($t,"/"))
			 	{$substr=explode("/",$t);
				  $p=$substr[0]/$substr[1];
					echo $p ;
				}

					
		}	
		 
		?>"/>
	<br>
	<input type="submit" name="1" value="1"/>
	<input type="submit" name="1" value="2"/>
	<input type="submit" name="1" value="3"/>
	<br>
	<input type="submit" name="1" value="4"/>
	<input type="submit" name="1" value="5"/>
	<input type="submit" name="1" value="6"/>
	<br>
	<input type="submit" name="1" value="7"/>
	<input type="submit" name="1" value="8"/>
	<input type="submit" name="1" value="9"/>
	<<br>
	<input type="submit" name="+" value="+"/>
	<input type="submit" name="+" value="0"/>
	<input type="submit" name="+" value="-"/>
	<br>
	<input type="submit" name="+" value="/"/>
	<input type="submit" name="+" value="*"/>
	<input type="submit" name="=" value="="/>
</form>
</body>
</html> 