<?
date_default_timezone_set("Europe/Budapest");

$output = file_get_contents('templates/form-table.tpl.php');

include('includes/form-select-year.php');
include('includes/form-select-month.php');
include('includes/form-select-barrel-b.php');
include('includes/form-select-env.php');
include('includes/form-select-barrel-d.php');

include('includes/calc.php');

print $output;
?>