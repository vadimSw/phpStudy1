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


// if (!empty($_POST)) {
//  	print('<pre>' . print_r($_POST, TRUE) . '</pre>');
//  }


$a = 55 - $_POST['num'];
$b = 60 - $_POST['num'];
 if ($_POST['browser'] == 'Women'){
 	echo "Respected Women, " . $_POST['name'] . ", do penzii vam ostalos: " . $a . "age.";
 }
 	else 
 		echo "Respected Men, " . $_POST['name'] . ", do penzii vam ostalos: " . $b . "age.";

}

 ?>

