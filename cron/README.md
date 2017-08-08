# cron - единая точка входа

Добавляет роут /cron/run_daily

В коде сайта можно добавить чтото вроде этого:

	<?php
	d()->on('cron.daily', function() {
		d()->generate_sitemap();
		print ' sitemap OK ';
	});
