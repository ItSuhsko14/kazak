
<html>
<head>
	<title><?php echo "$title"; ?></title>
	<meta name ="keywords" content="<?php echo "$keywords"; ?>">
	<meta name="description" content="<?php echo "$description"; ?>">
	<meta http-equiv="Content-language" content="ru" /> 
		
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="img/favicon.png"/>
	
	<!--Google-->	
	<meta property="business:contact_data:phone_number" content="+38 097 7163393"/>
	<meta property="business:contact_data:website" content="http://www.ogon.com.ua"/>
	
	<!--Facebook-->	
	<meta property="og:url" content="http://www.ogon.com.ua"/>
	<meta property="og:site_name" content="фаер шоу Evolution"/>
	<meta property="og:see_also" content="http://www.kazak.zp.ua/>
	<meta property="og:description" content="Фаер шоу в Днепре, Днепропетровске, Запорожье, Кривом Роге, Харькове, Одессе, Киеве"/>
		

	<!--Скрипты картинок-->
	<script type="text/javascript" src="scripts/jquery-1.2.6.js"></script>
	<script type="text/javascript" src="scripts/jquery.lightbox.js"></script>
	<link rel="stylesheet" type="text/css"  href="scripts/lightbox.css" />
	<script type="text/javascript">
		$(document).ready(function(){
		$("gallery a").lightbox(); // Выбор всех ссылок, содержащих lightbox в атрибуте rel
		$.Lightbox.construct({
		"speed": 500, // скорость разворачивания изображений (мс)
		"opacity": 0.5, // прозрачность фона (от 0 до 1)
		text: {
		image: "Фото",
		of: "з",
		close: "вийти",
		closeInfo: "Завершити перегляд",
		help: {
		close: "вийти",
		interact: "натиснiсть, щоб завершити перегляд"
		}
		}
		});
		});
	</script>
	<!--виджет ВКонтакте-->
	<script type="text/javascript" src="http://vk.com/js/api/openapi.js?101"></script>
	<script type="text/javascript">
	  VK.init({apiId: 3951536, onlyWidgets: true});
	</script>
</head>

<body>
/*
<div id="img"
	border-width:1;
    border-color: rgb(190,190,190);
    border-style: solid;>
	<a href="menu/lk.png" rel="lightbox-one" title="козацька кухня"><img src="menu/lk.png" alt="Люті козаки" width="200" height="200" /></a>
</div>
<div id="title"
	border-width:1;
    border-color: rgb(190,190,190);
    border-style: solid;>
		<p><h2>Люта кухня.<h2>
		<p>Меню.
</div> */

<div id="container">
	<div id="header">
	<h2>Шапка</h2>
	</div>
		 
	<div id="navigation">
	<h2>Блок навигации</h2>
	</div>
		 
	<div id="menu">
	<h2>Меню</h2>
	</div>
		 
	<div id="content">
	<h2>Контент</h2>
	</div>
		 
	<div id="clear">
		 
	</div>
							   
	<div id="footer">
	<h2>Подвал сайта</h2>
	</div>
</div>