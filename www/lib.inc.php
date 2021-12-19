<?php

function drawTable($a,$b)
{	$cols=$a;
	$rows=$b;
	echo"<table>";
	echo "<tr>";echo "<th></th>";
	for ($i = 1; $i < $cols; $i++)
	{
		echo "<th>$i</th>";
	} 
		echo "</tr>";
		for ($j = 1; $j < $rows; $j++)
		{
		echo "<tr>";
		echo "<td class='ts'>"; echo "$j"; echo "</td>";
		for ($i = 1; $i < $cols; $i++)
		{
			echo "<td class='tss'>";  echo $i*$j; echo "</td>";}  
			echo "</tr>";
		}
		echo"</table>";
}
?>