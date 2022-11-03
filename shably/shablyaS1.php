<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Cache-Control" content="no-cache">

  <title>Шаблі</title>
 
  <link rel="stylesheet" type="text/css" href="style1.css">

  

 

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
 
  <div class="center">
    <h1>Шабля стандартна Ш1.
  </div>

  <div class="container">
    <table>
      <tr>
        <td width="33.3%">
          <a href="img/Sh1-1.jpg" rel="lightbox-one" title="Січеславські козаки">
            <img width="150" src="img/sh1-1m.jpg">
          </a>
        </td>  
        <td width="33.3%">
          <a href="img/Sh1-1.jpg" rel="lightbox-one" title="Січеславські козаки">
            <img width="150" src="img/sh1-1m.jpg">
          </a>
        </td>
        <td width="33.3%">
          <a href="img/Sh1-1.jpg" rel="lightbox-one" title="Січеславські козаки">
            <img width="150" src="img/sh1-1m.jpg">
          </a>
        </td>
      </tr>
    </table>
 
  </div>

 
</body>
