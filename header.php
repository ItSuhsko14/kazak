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
	
</head>

<body>

<table border="0" width="800" height="130" align="center" background="img/up.jpg" cellpadding="0" cellspacing="0">
	<tr><td>
	
		<table border="0" width="800" height="30" align="center" cellpadding="0" cellspacing="0">
			<tr class="little">
				<td align="right" style="font-size:14; color:white; font-weight:bold; text-shadow: black 1px 1px 0, black -1px -1px 0, black -1px 1px 0, black 1px -1px 0;">тел.(067)630-93-42</td>
			</tr>
		</table>
	
		<table border="0" width="800" height="80" align="center">
			<tr><td align="center"><a href="index.php"><img src="img/index.gif" alt="козак Андрій Лютий"><a></td></tr>
		</table>
		
		<table border="0" width="440" height="30" align="center" valign="middle" cellpadding="0" cellspacing="0">
			<tr>
				<td width="100" align="center"><a href="poslugi.php" class="menu">послуги</td>
				<td width="70" align="center"><a href="foto.php" class="menu">фото</td>
				<td width="80" align="center"><a href="video.php" class="menu">відео</td>			
				<td width="85" align="center"><a href="blog.php" class="menu">блог</td>
				<td width="105" align="center"><a href="kontakti.php" class="menu">контакти</td>			
			</tr>
		</table>
				<?php echo "$menu"; ?>		
	
		<table border="0" width="800" valign="top" align="center" class="main" cellspacing="0" cellpadding="0">
			<tr valign="top">
				<td width="60" valign="top"></td>

				<td width="800" valign="top">	
					<table border="0" width="700" align="center">
						<tr><td align="center" valign="middle"><h1><?php echo "$text1"; ?></h1></td></tr>
					</table> 
		
					<?php echo "$main"; ?> </td>

				<td width="60"></td>
			</tr>
		</table>