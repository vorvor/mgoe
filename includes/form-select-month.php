<?
$options = '';
$selected = $_POST['c_month'];

for($e=1;$e<=12;$e++)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $e)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $e . '</option>';
}

$output = str_replace('###month-options###', $options, $output);
?>