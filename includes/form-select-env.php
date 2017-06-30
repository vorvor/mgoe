<?
$env_classes = array('EURO1', 'EURO2', 'EURO3', 'EURO4', 'EURO5');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['env'];
}

foreach ($env_classes as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###env-options###', $options, $output);

?>