<?php

function checkMin($array)
{
    $min = $array[0];
for($i=0;$i<count($array);$i++)
    {
        if($array[$i] < $min)
            {
                $min = $array[$i];
            }
    }
return $min;
}

function checkMax($array)
{
    $max = $array[0];
    for($i=0;$i<count($array);$i++)
    {
        if($array[$i] > $max)
        {
            $max = $array[$i];
        }
    }
    return $max;
}

$arr = [1,3,5,7,9,2,10,14,80,0,22,96];
$min = checkMin($arr);
$max = checkMax($arr);
echo '<pre>';
echo 'NumberMin: '." ".$min;
echo '</br>';
echo 'NumberMax: '." ".$max;