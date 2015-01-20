<?
// $output = '';
// if($_SERVER['REQUEST_METHOD']=='POST'){
// 	// Проверить все ли поля пришли?
// 	$n1 = (int)$_POST['num1'];
// 	$n2= (int)$_POST['num2'];
// 	$op = trim(strip_tags($_POST['operator']));
// 	$output = "$n1 $op $n2 = ";
// 	switch ($op) {
// 		case '+':
// 			$output .= $n1 + $n2; break;
// 		case '-':
// 			$output .= $n1 - $n2; break;
// 		case '*':
// 			$output .= $n1 * $n2; break;
// 		case '/':
// 			if($n2 === 0)
// 				$output = 'Деление на 0 запрещено!';
// 			 else 
// 			 	$output .= $n1 / $n2;
// 			 break;
// 		default: $output = "Неизвестный оператор '$op'";
// 	}
// }
// if($output)
// 	echo "<h3>Результат:" . $output "</h3>";

?>
			<form action='task1.php' method= 'post'>
				<label>Name:</label><br />
				<input name='name' type='text'/><br />
				<label>Age: </label><br />
				<input name='num' type='text'/><br /><br />
				<input type="radio" name="browser" value="Women"></input>
				<label>Women </label><br />
				<input type="radio" name="browser" value="Men"></input>
				<label>Men </label><br />
				<input type='submit' value='input'>
			</form>	
<?

if($_SERVER['REQUEST_METHOD']=='POST'){
$n1 = trim(strip_tags($_POST['name']));
$n2 = (int)trim(strip_tags($_POST['num']));


if (!empty($_POST)) {
 	print('<pre>' . print_r($_POST, TRUE) . '</pre>');
 }

 echo "Privit " . $_POST['name'] . ", do penzii vam ostalos: " . $_POST['num'] . " age<br>";

 if ($_POST['browser'] == 'Women'){
 	echo "Respected Women";
 }
 	else 
 		echo "Respected Men";
}

 ?>

