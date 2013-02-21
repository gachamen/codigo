<?php

/**
 *   show array values
 * 
 * @param array $array
 * 
 */
function muestraArray($array)
{
	foreach ($array as $key=> $value)
	{
		if (is_array($value))
		{
			echo $key.": ".implode($value,',');
			echo "<br/>";
		}
		else
		{
			echo $key.": ".$value;
			echo "<br/>";
		}
	}
}

?>