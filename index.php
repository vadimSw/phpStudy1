<?
require 'linc.inc.php';
require 'data.inc.php';

$title = 'Site nachej scool';
$header = "$welcome, gost";
$id = strtolower(trim(strip_tags($_GET['id'])));
switch($id){
	case 'about':
		$title = '0 site';
		$header = '0 nachem site'; break;
	case 'contact':
		$title = 'Contactu';
		$header = 'Obratnaja svjaz'; break;
	case 'table':
		$title = 'Table umnozenija';
		$header = 'Table umnozenija'; break;
	case 'calc':
		$title = 'onaline calculjator';
		$header = 'calculjator'; break;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<title><?=$title?></title>
		<meta http-equiv="content-type"
			content="text/html; charset=windows-1251" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- Âåðõíÿÿ ÷àñòü ñòðàíèöû -->
			<?
				switch($id){
	case 'about':
		include 'about.php'; break;
	case 'contact':
		include 'contact.php'; break;
	case 'table':
		include 'table.php'; break;
	case 'calc':
		include 'calc.php'; break;
	default: include 'index.inc.php';
}
			?>
			<!-- Âåðõíÿÿ ÷àñòü ñòðàíèöû -->
		</div>

		<div id="content">
			<!-- Çàãîëîâîê -->
			<h1><?=$header?></h1>
			<!-- Çàãîëîâîê -->
			<!-- Îáëàñòü îñíîâíîãî êîíòåíòà -->
			<?
				include 'index.inc.php';
			?>
			
			<!-- Îáëàñòü îñíîâíîãî êîíòåíòà -->
		</div>
		<div id="nav">
			<!-- Íàâèãàöèÿ -->
			<?
				require 'menu.inc.php';
			?>
			
			<!-- Ìåíþ -->
			<!-- Íàâèãàöèÿ -->
		</div>
		<div id="footer">
			<!-- Íèæíÿÿ ÷àñòü ñòðàíèöû -->
			<?
				include 'bottom.inc.php';
			?>
			<!-- Íèæíÿÿ ÷àñòü ñòðàíèöû -->
		</div>
	</body>
</html>