<?php

/**
 * Lab 2, Arithmatic Lab
 *
 * This lab focuses on your understanding of arithmatic.
 * @Nolan Young
 */

/**
 * Outputs to the console a truncated float.
 *
 * Takes in a floating point number and truncates in to two places of precision.
 * Then returns to the output to the console.
 *
 * @param $float_value
 */

define('GRAVITY', 9.8);

function truncateFloat($float_value)
{
$float_value = 100.777;
$truncated_float = ((int) $float_value * 100) / 100; 

}

/**
 * @param $degrees_f
 */
function farenheit2Kelvin($degrees_f)
{
$kelvin = ($degrees_f + 459.67)× 5/9;
}

/**
 * @param $area
 */
function dodecahedronVolume($area)
{
 echo pow($area, 3) / 4 * (15 + 7 * sqrt(5));
}

/**
 * @param $height
 */
function impactVelocity($height)
{
sqrt((initialspeed * initialspeed)+($height *2)(9.8 ^2));
}
