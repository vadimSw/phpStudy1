<?
			if(!drawMenu($leftMenu,false))
				echo ERR_DRAW_ON_BOTTOM_MENU;
			?>
			<hr>
			&copy; <?= COPYRINGHT?>, 2000 - <?= $year?>
			<hr>
			<p>Powered by <?=$_SERVER['SERVER_SOFTWARE']?>/PHP<?=PHP_VERSION?> on <?=PHP_OS?></p>
