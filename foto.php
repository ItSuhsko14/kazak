<?php 
	$title='Фотографії козаків';
	$text1='Наші світлини';
	$script='<script type="text/javascript" src="scripts/jquery-1.2.6.js"></script>
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
				of: "из",
				close: "Закрыть",
				closeInfo: "Завершить просмотр",
				help: {
				close: "Закрыть",
				interact: "Нажмите, чтобы завершить просмотр"
				}
				}
				});
				});
			</script>';

	$main='
	
	';
	
	require 'header.php'; ?>
	
<br>
<table width="640" border="0" cellpadding="0" cellspacing="0" align="center">
		<tr>
			<td colspan="4" class="p" align="center">
				<p>Більше нових та цікавих світлин дивіться на каналі Лютих козаків - <a href="https://www.instagram.com/a.lutiy/" target="_blank">instagram.com/a.lutiy/</a>
			</td>
			<td colspan="1">
				<a href="https://www.instagram.com/a.lutiy/" target="_blank"><img src="img/instagram.png" alt="інстаграм лютих козаків" width="200"/></a>
			</td>
		</tr>

		<tr height="20"></tr> 
		
		<tr class="gallery">
			<th width="200" align="center"><a href="img/1.jpg" rel="lightbox-one" title="козаки в Днепропетровске"><img src="img/1s.jpg" alt="Люті козаки" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/2.jpg" rel="lightbox-one" title="козаки Киев"><img src="img/2s.jpg" alt="Лютые козаки" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/3.jpg" rel="lightbox-one" title="козаки Одесса"><img src="img/3s.jpg" alt="Запорожские казаки" width="200" height="133" /></a></th>
		</tr>
		
		<tr height="20"></tr> 
		
		<tr class="gallery">
			<th width="200" align="center"><a href="img/6.jpg" rel="lightbox-one" title="козаки в Харькове"><img src="img/6s.jpg" alt="козаки в Харькове" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/5.jpg" rel="lightbox-one" title="козаки в Запорожье"><img src="img/5s.jpg" alt="козаки в Запорожье" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/4.jpg" rel="lightbox-one" title="козаки у Львові"><img src="img/4s.jpg" alt="козаки у Львові" width="200" height="133" /></a></th>
		</tr>
		
		<tr height="20"></tr>
		
		<tr class="gallery">
			<th width="200" align="center"><a href="img/7.jpg" rel="lightbox-one" title="українські козаки"><img src="img/7s.jpg" alt="українські козаки" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/9.jpg" rel="lightbox-one" title="козацьке шоу"><img src="img/9s.jpg" alt="козацьке шоу" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/8.jpg" rel="lightbox-one" title="заказать козаков на праздник"><img src="img/8s.jpg" alt="заказать козаков на праздник" width="200" height="133" /></a></th>
		</tr>

		<tr height="20"> </tr>
		
		<tr class="gallery">
			<th width="200" align="center"><a href="img/10.jpg" rel="lightbox-one" title="украинское шоу"><img src="img/10s.jpg" alt="украинское шоу" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/11.jpg" rel="lightbox-one" title="шоу програма киев"><img src="img/11s.jpg" alt="шоу программа киев" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/12.jpg" rel="lightbox-one" title="оригинальный жанр"><img src="img/12s.jpg" alt="оригинальный жанр" width="200" height="133" /></a></th>
		</tr>
		
		<tr height="20"></tr> 
		
		<tr class="gallery">
			<th width="200" align="center"><a href="img/13.jpg" rel="lightbox-one" title="боевое шоу"><img src="img/13s.jpg" alt="боевое шоу" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/14.jpg" rel="lightbox-one" title="заказать шоу Киев"><img src="img/14s.jpg" alt="заказать шоу Киев" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/15.jpg" rel="lightbox-one" title="лучный тир"><img src="img/15s.jpg" alt="лучный тир" width="200" height="133" /></a></th>
		</tr>
		
		<tr height="20"></tr>
		
		<tr class="gallery">
			<th width="200" align="center"><a href="img/16.jpg" rel="lightbox-one" title="метание ножей"><img src="img/16s.jpg" alt="метание ножей" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/18.jpg" rel="lightbox-one" title="козацьке шоу Київ"><img src="img/18s.jpg" alt="козацьке шоу Київ" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/17.jpg" rel="lightbox-one" title="организация праздника Киев"><img src="img/17s.jpg" alt="организация праздника Киев" width="200" height="133" /></a></th>
		</tr>

		<tr height="20"> 
		</tr>
		
		<tr class="gallery">
			<th width="200" align="center"><a href="img/19.jpg" rel="lightbox-one" title="козаки на праздник в Киеве"><img src="img/19s.jpg" alt="козаки на праздник в Киеве" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/20.jpg" rel="lightbox-one" title="козаки на свадьбу"><img src="img/20s.jpg" alt="козаки на свадьбу" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/21.jpg" rel="lightbox-one" title="екстремальне козацьке шоу"><img src="img/21s.jpg" alt="екстремальне козацьке шоу" width="200" height="133" /></a></th>
		</tr>
	
		<tr height="20"> 
		</tr>
		
		<tr class="gallery">
			<th width="200" align="center"><a href="img/22.jpg" rel="lightbox-one" title="бої на шаблях"><img src="img/22s.jpg" alt="бої на шаблях" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/23.jpg" rel="lightbox-one" title="козаки на масляну"><img src="img/23s.jpg" alt="козаки на масляну" width="200" height="133" /></a></th>
			<td width="20"> </td>
			<th width="200" align="center"><a href="img/24.jpg" rel="lightbox-one" title="козацькі бої"><img src="img/24s.jpg" alt="козацькі бої" width="200" height="133" /></a></th>
		</tr>
		<tr><td><br></td></tr>
	</table>	
	
<?php require 'footer.php'; ?>