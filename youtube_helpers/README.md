# Функции для построения ссылок на youtube

`youtube_embed_link` - берет на вход ссылку на youtube ролик, возвращает ссылку для встраивания в iframe:

	<iframe width="100%" height="500" src="{.youtube|youtube_embed_link|h}?rel=0" frameborder="0" allowfullscreen></iframe>

`youtube_code` - берет на вход ссылку на youtube ролик, возвращает код youtube video (для ссылки `https://www.youtube.com/watch?v=ABCDEF` вернется `ABCDEF`), для построения своих ссылок.

	<iframe width="100%" height="500" src="https://www.youtube.com/embed/{.youtube|youtube_code|h}?rel=0" frameborder="0" allowfullscreen></iframe>
	<!-- или -->
	<a href="https://www.youtube.com/watch?v={.youtube|youtube_code|h}">Смотреть видео</a>