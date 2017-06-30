<?

if (!isset($_POST['submitted']))
{
	$fuel = 'benzin';
}

else 
{
	$fuel = $_POST['fuel'];
}

str_replace = ('###fuel###', '$fuel', 'templates/form.tpl.php');
?>