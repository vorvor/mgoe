<?php
$c_year = $_POST['c_year'];
$c_month = $_POST['c_month'];


$n_year = (int)date('Y');
$n_month = (int)date('m');

if($n_month == $c_month)
{
	$h = (($n_year - $c_year) * 12) + 1;
}

if($n_month < $c_month)
{
	$ev = (($n_year - $c_year)- 1) * 12;
	$ho = ((12 - $c_month)+ 1) + $n_month;
	$h = $ev + $ho;
}

if($n_month > $c_month)
{
	$ev = ($n_year - $c_year) * 12;
	$ho = $n_month - $c_month;
	$h = $ev + $ho + 1;
}



$ranges[] = array('min'=>2, 'max'=>4, 'value'=>0.06);
$ranges[] = array('min'=>4, 'max'=>6, 'value'=>0.1);
$ranges[] = array('min'=>6, 'max'=>12, 'value'=>0.14);
$ranges[] = array('min'=>12, 'max'=>24, 'value'=>0.2);
$ranges[] = array('min'=>24, 'max'=>36, 'value'=>0.31);
$ranges[] = array('min'=>36, 'max'=>48, 'value'=>0.41);
$ranges[] = array('min'=>48, 'max'=>60, 'value'=>0.49);
$ranges[] = array('min'=>60, 'max'=>72, 'value'=>0.56);
$ranges[] = array('min'=>72, 'max'=>84, 'value'=>0.62);
$ranges[] = array('min'=>84, 'max'=>96, 'value'=>0.68);
$ranges[] = array('min'=>96, 'max'=>108, 'value'=>0.72);
$ranges[] = array('min'=>108, 'max'=>120, 'value'=>0.76);
$ranges[] = array('min'=>120, 'max'=>132, 'value'=>0.79);
$ranges[] = array('min'=>132, 'max'=>144, 'value'=>0.82);
$ranges[] = array('min'=>144, 'max'=>156, 'value'=>0.85);
$ranges[] = array('min'=>156, 'max'=>168, 'value'=>0.89);


$o = 100;

foreach ($ranges as $range)
{
	if($h>=$range['min'] && $h<$range['max'])
	{
		$sz = $o * $range['value'];
		$ve = $o - $sz;
		$debug['százalék'] = $sz;
		break;
	}
}


if($h>=169)
{
	$sz = $o * 0.90;
	$ve = $o - $sz;
}

if($h == 1)
{
	$ve = $o;
}
