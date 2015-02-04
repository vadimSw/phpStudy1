
<link rel="stylesheet" type="text/css" href="rivnannya.css">

<!-- Квадратне рівняння -->
<form action='rivnannya.php' method= 'post' class="form">
	<label>Rivnannya: </label>
	<input size='2' name='one' type='text'/>
	<label>* x<sup>2</sup> + </label>
	<input size='2' name='two' type='text'/>
	<label>* x + </label>
	<input size='2' name='free' type='text'/>
	<label>=</label>
	<input size='2' name='four' type='text'/><br>
	<input type='submit' value='input' class="input">
</form>

<?
if($_SERVER['REQUEST_METHOD']=='POST'){
	$one = checkNumber($_POST['one']);
	$two = checkNumber($_POST['two']);
	$free = checkNumber($_POST['free']);
	$four = checkNumber($_POST['four'], 0);
	
	if ($one === 0 && $two === 0) {
		exit("Rinannya nemae rozvjazky 1.");
	}
	elseif ($one === 0) {
		$x1 = ($four - $free) / $two;
	}
	elseif ($two === 0){
		if ($four - $free < 0) {
			exit("Rinannya nemae rozvjazky 2.");
		}
		else {
			$x1 = sqrt($four - $free);
		}
	}
	elseif ($free === 0) {
		$x1 = $four;
		$x2 = ($four - $two) / $one;
	}
	else {
		$z = $two * $two - 4 * $one * $free;
		if ($z < 0) {
			exit("Rinannya nemae rozvjazky 3.");
		}
		$d = sqrt($z);
		$x1 = (-$two + $d) / (2 * $one);
		$x2 = (-$two - $d) / (2 * $one);
	}

	echo "X1 =" . $x1;
	if (!empty($x2)) {
		echo "\nX2 = " . $x2;
	}
}

function checkNumber($item, $number = 1) {
	if (isset($item) && $item != '') {
		if (!is_numeric($item)) {
			exit('Vy vvelu bykvy');
		}
		return (int)$item;
	}
	else {
		return $number;
	}
}
?>