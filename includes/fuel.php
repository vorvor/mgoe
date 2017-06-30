<?php

if (!isset($_POST['submitted']))
{
	$fuel = 'benzin';
}

else 
{
	$fuel = $_POST['fuel'];
}

$output = str_replace('###fuel###', $fuel, $output);
