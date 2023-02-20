<?php
$n=[13,432,21];
if ($n[0]>$n[1])
{
	if ($n[0]>$n[2])
	{
		echo $n[0]." is the lergest value.";
	}
	else
	{
		echo $n[2]." is the lergest value.";
	}
}
else
{
	if ($n[1]>$n[2])
	{
		echo $n[1]." is the lergest value.";
	}
	else
	{
		echo $n[2]." is the lergest value.";
	}
}

?>