


<?
if($_SERVER['REQUEST_METHOD']=='POST'){
	$cols = abs((int)$_POST['cols']);
	$rows = abs((int)$_POST['rows']);
	$color = trim(strip_tags($_POST['color']));
}

$cols = ($cols) ? $cols : 10;
$rows = ($rows) ? $rows : 10;
$color = ($color) ? $color : 'yellow';
?>

			<form action='<?=$_SERVER['REQUEST_URI']?>' method='post'>
				<label>Êîëè÷åñòâî êîëîíîê: </label><br />
				<input name='cols' type='text' value="" /><br />
				<label>Êîëè÷åñòâî ñòðîê: </label><br />
				<input name='rows' type='text' value="" /><br />
				<label>Öâåò: </label><br />
				<input name='color' type='text' value="" /><br /><br />
				<input type='submit' value='Ñîçäàòü' />
			</form>
			<?
				drawTable($cols, $rows, $color);
			?>
			