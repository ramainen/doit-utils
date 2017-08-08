<?php 


d()->route('/cron/run_daily', function(){
	set_time_limit(0);
	d()->emit('cron.daily',array());
	print 'Cron OK';
	exit;
});

 