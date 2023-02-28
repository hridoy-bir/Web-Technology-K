<?php 
echo "<table border=1>
  		<td>";
for ($i=0; $i <=2 ; $i++) { 
	for ($j=0; $j <=$i ; $j++) { 
		echo "*";
	}
	echo" <br>";
}
echo "</td>
		<td>";

for ($i=3; $i >=1 ; $i--) { 
	for ($j=1; $j <=$i ; $j++) { 
		echo $j;
	}
	echo" <br>";
}
echo "</td>
		<td>";
$a=65;
for ($i=0; $i <=2 ; $i++) { 
	for ($j=0; $j <=$i ; $j++) { 
		echo chr($a++);
	}
	echo" <br>";
}
echo "</td>
</table>";

?>