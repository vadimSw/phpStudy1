<?
define('ERR_DRAW_ON_LEFT_MENU', 'Izvenite...');
define('ERR_DRAW_ON_BOTTOM_MENU', 'Izvenite...');

$leftMenu = array(
	array('link'=>'Домой', 'href'=>'index.php'),
	array('link'=>'О нас', 'href'=>'index.php?id=about'),
	array('link'=>'Контакты', 'href'=>'index.php?id=contact'),
	array('link'=>'Таблица умножения', 'href'=>'index.php?id=table'),
	array('link'=>'Калькулятор', 'href'=>'index.php?id=calc'),
	);
?>

<?
$hour = (int)strftime('%H');
$welcome = '';
if($hour > 0 and $hour < 6)
	$welcome = 'Доброй ночи';
elseif($hour >= 6 and $hour < 12)
	$welcome = 'Доброй утро';
elseif($hour >= 12 and $hour < 18)
	$welcome = 'Доброй день';
elseif($hour >= 18 and $hour < 23)
	$welcome = 'Доброй вечер';
else
	$welcome = 'Доброй ночи';


setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');
?>