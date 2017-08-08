# purifier - очистка HTML от javascript

Использование:
	
	<?php
	d()->purify('<a onlick="evil()">Нажми меня</a>'); //javascript будет очищен
