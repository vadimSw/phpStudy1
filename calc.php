<?
$output = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
	// Проверить все ли поля пришли?
	$n1 = (int)$_POST['num1'];
	$n2= (int)$_POST['num2'];
	$op = trim(strip_tags($_POST['operator']));
	$output = "$n1 $op $n2 = ";
	switch ($op) {
		case '+':
			$output .= $n1 + $n2; break;
		case '-':
			$output .= $n1 - $n2; break;
		case '*':
			$output .= $n1 * $n2; break;
		case '/':
			if($n2 === 0)
				$output = 'Деление на 0 запрещено!';
			 else 
			 	$output .= $n1 / $n2;
			 break;
		default: $output = "Неизвестный оператор '$op'";
	}
}
if($output)
	echo "<h3>Результат: $output</h3>";

?>
			<form action='' method= 'post'>
				<label>×èñëî 1:</label><br />
				<input name='num1' type='text'/><br />
				<label>Îïåðàòîð: </label><br />
				<input name='operator' type='text'/><br />
				<label>×èñëî 2: </label><br />
				<input name='num2' type='text'/><br /><br />
				<input type='submit' value='Ñ÷èòàòü'>
			</form>	
			