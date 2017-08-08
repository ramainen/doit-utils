# Набор текстовых утилит

utils_mtime - выводит время изменения файла. Использование:

	<link rel="stylesheet" href={"/images/style.css"|utils_mtime}>
	<!-- или так: -->
	<link rel="stylesheet" href={{utils_mtime "/images/style.css"}}>

utils_splitphone - разбивает номер телефона на две строки. Первая - код в скобках, вторая - сам номер.