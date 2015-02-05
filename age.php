<link rel="stylesheet" type="text/css" href="age.css">

<p>Vvedit daty Vachogo narodzennja i imja!</p>
<form action='age.php' method= 'post' class="form">
	<label>Day: </label>
	<input size='2' name='one' type='text'/><br>
	<label>Minth: </label>
	<input size='2' name='two' type='text'/><br>
	<label>Age: </label>
	<input size='2' name='free' type='text'/><br>
	<label>Name: </label>
	<input class="name" size='2' name='name' type='text'/><br>
	<input type='submit' value='input' class="input">
</form>
<?

if($_SERVER['REQUEST_METHOD']=='POST'){
	$one = $_POST['one'];
	$two = $_POST['two'];
	$free = $_POST['free'];
	$name = $_POST['name'];

	if ($one > 30){
		exit ("Minth imeet tolko 31 dey");
	}

	elseif ($two > 12){
		exit ("Age imeet tolko 12 minth");
	}

	elseif ($one <= 31 && $two <= 12){

		$today3 = date("Y");
		$x = $today3 - $free;
		$today2 = date("m");
		$y = $today2 - $two;
		$today1 = date("d");
		$z = $today1 - $one;
		$day = (30 - $one) + ((12 - $two) * 31) + ($x * 365);
		switch ($two){
			case 1: $m='January'; break;
			case 2: $m='February'; break;
			case 3: $m='March'; break;
			case 4: $m='April'; break;
			case 5: $m='May'; break;
			case 6: $m='June'; break;
			case 7: $m='July'; break;
			case 8: $m='August'; break;
			case 9: $m='September'; break;
			case 10: $m='October'; break;
			case 11: $m='November'; break;
			case 12: $m='December'; break;
			}
		echo "<p>" . $name . ", Vu narodylysja " . $one . " " . $m . " " . $free . " roky i progili " . $day . " dniv." . "</p><br>";
	}

}
?>
