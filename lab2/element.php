<?php 
$a=["abc","asdf","hridoy","sygd",32,"sjh"];
$e="hridoy";
$f=0;
//print_r($a);
for($i=0;$i<=5;$i++)
{
	if ($a[$i]==$e) {
		$f=1;
	}
}

if ($f==1) {
	echo $e." found.";
}

?>