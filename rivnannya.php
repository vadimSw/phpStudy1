


<!-- Квадратне рівняння -->
<form action='rivnannya.php' method= 'post'>
				<label>Rivnannya: </label>
				<input size='2' name='one' type='text'/>
				<label>* x^2 + </label>
				<input size='2' name='two' type='text'/>
				<label>* x + </label>
				<input size='2' name='free' type='text'/>
				<label>=</label>
				<input size='2' name='four' type='text'/><br>
				<input type='submit' value='input'>
			</form>

<?
$one = (int)$_POST['one'];
$two = (int)$_POST['two'];
$free = (int)$_POST['free'];
$four = (int)$_POST['four'];


$y = $two * $two;
$x = 2 * $one;
$z = $y - 4 * $one * $free;
$d = sqrt($z);
$x1 = (-$two + $d) / $x;
$x2 = (-$two - $d) / $x;
	echo "x1 = " . $x1 . ", x2 = " . $x2;
?>