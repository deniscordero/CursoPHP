<?php

$color = 'green';

// if ($color == 'black')
// {
//     echo $color;
// } elseif ($color == 'white')
// {
//     echo 'Color is white';
// } else
// {
//     echo 'Color---';
// 

switch ($color)
{
    case 'blue':
        echo 'Color is blue';
        break;
    
    case 'red':
        echo 'Color is red';
        break;
    
    default:
        echo 'Other';
        break;
}