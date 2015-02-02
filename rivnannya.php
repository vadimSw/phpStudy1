
<form action='rivnannya.php' method= 'post'>
				<label>1</label><br>
				<input size='2' name='one' type='text'/><br>
				<label>2</label><br>
				<input size='2' name='two' type='text'/><br>
				<input type='submit' value='input'>
			</form>	
<?

$a = $_POST['one'];
$b = $_POST['two'];
$c = $a + $b;
echo "Suma: " . $c;



?>


