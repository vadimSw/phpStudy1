<!-- Задача номер 1 -->
<!-- <form action='rivnannya.php' method= 'post'>
				<label>Chislo 1:</label><br>
				<input size='2' name='one' type='text'/><br>
				<label>Chislo 2:</label><br>
				<input size='2' name='two' type='text'/><br>
				<input type='submit' value='input'>
			</form>
<?
$a = $_POST['one'];
$b = $_POST['two'];
$c = $a + $b;
echo "Suma: " . $c;
?>

<hr> -->

 <!-- "Лінійне рівняння" -->

<!-- <form action='rivnannya.php' method= 'post'>
				<label>Rivnannya: </label>
				<input size='2' name='one' type='text'/>
				<label>* x + </label>
				<input size='2' name='two' type='text'/>
				<label>=</label>
				<input size='2' name='free' type='text'/><br>
				<input type='submit' value='input'>
			</form>
<?

$one = $_POST['one'];
$two = $_POST['two'];
$free = $_POST['free'];
$x = $free - $two;
$y = $x / $one;
echo "x = " . $y;
?> -->


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
$one = $_POST['one'];
$two = $_POST['two'];
$free = $_POST['free'];
$four = $_POST['four'];
$y = $two * $two;
$x = 2 * $one;
$z = $y - 4 * $one * $free;
$d = sqrt($z);
	$x1 = (-$two + $d) / $x;
	$x2 = (-$two - $d) / $x;
	echo "x1 = " . $x1 . ", x2 = " . $x2;

?>