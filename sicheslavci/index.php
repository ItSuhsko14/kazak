<html>
 <head>
  <meta charset="utf-8">
  <title>Люті козаки</title>
  
  <link rel="stylesheet" type="text/css" href="style1.css" />

  <!--Скрипты меню-->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400;300" rel="stylesheet" type="text/css">
  <link href="style1.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width">

  <!--Скрипты меню-->
  <script src="scripts/menu.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript">
      /* Открытие меню */
var main = function() { //главная функция
    $('.icon-menu').click(function() { //выбираем класс icon-menu и добавляем метод click с функцией, вызываемой при клике
        $('.menu').animate({ //выбираем класс menu и метод animate
            left: '0px' //теперь при клике по иконке, меню, скрытое за левой границей на 285px, изменит свое положение на 0px и станет видимым
        }, 200); //скорость движения меню в мс
        
        $('body').animate({ //выбираем тег body и метод animate
            left: '285px' //чтобы всё содержимое также сдвигалось вправо при открытии меню, установим ему положение 285px
        }, 200); //скорость движения меню в мс
    });


/* Закрытие меню */
    $('.icon-close').click(function() { //выбираем класс icon-close и метод click
        $('.menu').animate({ //выбираем класс menu и метод animate
            left: '-285px' //при клике на крестик меню вернется назад в свое положение и скроется
        }, 200); //скорость движения меню в мс
        
    $('body').animate({ //выбираем тег body и метод animate
            left: '0px' //а содержимое страницы снова вернется в положение 0px
        }, 200); //скорость движения меню в мс
    });
};

$(document).ready(main); //как только страница полностью загрузится, будет вызвана функция main, отвечающая за работу меню
 </script>

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


<div class="menu">
      
      <!-- Иконка меню -->
      <div class="icon-close">
        <img src="img/close-btn.png">
      </div>

      <!-- Меню -->
      <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>

    <!-- Main body -->
    <div class="background">

      <div class="icon-menu">
        <img src="img/menu-ham-icon.png">
        Menu
      </div>
    </div>
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="menu.js"></script>
  
  <div class="main">
    <div class="center">
      <img class="center" src="img/logo1.jpg" alt="клуб козацького бою Січеславці" width="50%" />
    </div>
  </div>
          
  <div class="main" id="center">
    <p id="center"><a id="center" target="_blank" href="http://facebook.com/sicheslavci">facebook.com/sicheslavci</a>
    <p class="center"><a target="_blank" href="http://instagram.com/sicheslavci">instagram.com/sicheslavci</a>
	</div>

  <br>

  <div class="main" id="cen"><h1>Наші відео</div>
  <div class="main">
    <table width="10%" border="0" cellpadding="0" cellspacing="0" align="center">
      <tr>
        <td width="48%" align="center">
          <div class="video-block">
            <iframe width="410" height="315" src="https://www.youtube.com/embed/Ajf7wG4CZG8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </td>
        <td width="4%"></td>
        <td width="48%" align="center">
          <div class="video-block">
            <iframe width="410" height="315" src="https://www.youtube.com/embed/XGeqtJnIyq4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </td>
      </tr>

      <tr height="20vw"></tr>

      <tr>
        <td width="48%" align="center">
          <div class="video-block">
            <iframe width="410" height="315" src="https://www.youtube.com/embed/fZZbY3RD5LA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </td width="4%">
        <td></td>
        <td  width="48%" align="center">
          <div class="video-block">
            <iframe width="410" height="315" src="https://www.youtube.com/embed/Upb66c-M0kA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </td>
      </tr>

    </table>
  </div>

  <div class="main"><h1>Наші фото</div>
  <div class="main">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
      <tr class="gallery">
        <th width="48%" align="center"><a href="img/img1.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img1.jpg" alt="Січеславські козаки" width="100%" /></a></th>
        <th width="4%"></th>
        <th width="48%" align="center"><a href="img/img2.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img2.jpg" alt="Січеславські козаки" width="100%" /></a></th>
      </tr>

      <tr height="20vw"></tr>

      <tr class="gallery">
        <th width="48%" align="center"><a href="img/img4.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img4.jpg" alt="Січеславські козаки" width="100%" /></a></th>
        <th width="4%"></th>
        <th width="48%" align="center"><a href="img/img5.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img5.jpg" alt="Січеславські козаки" width="100%" /></a></th>
      </tr>

      <tr height="20vw"></tr>

      <tr class="gallery">
        <th width="48%" align="center"><a href="img/img6.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img6.jpg" alt="Січеславські козаки" width="100%" /></a></th>
        <th width="4%"></th>
        <th width="48%" align="center"><a href="img/img8.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img8.jpg" alt="Січеславські козаки" width="100%" /></a></th>
      </tr>

      <tr height="20vw"></tr>

      <tr class="gallery">
        <th width="48%" align="center"><a href="img/img10.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img10.jpg" alt="Січеславські козаки" width="100%" /></a></th>
        <th width="4%"></th>
        <th width="48%" align="center"><a href="img/img11.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img11.jpg" alt="Січеславські козаки" width="100%" /></a></th>
      </tr>

      <tr height="20vw"></tr>

      <tr class="gallery">
        <th width="48%" align="center"><a href="img/img12.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img12.jpg" alt="Січеславські козаки" width="100%" /></a></th>
        <th width="4%"></th>
        <th width="48%" align="center"><a href="img/img13.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img13.jpg" alt="Січеславські козаки" width="100%" /></a></th>
      </tr>

      <tr height="20vw"></tr>

      <tr class="gallery">
        <th width="48%" align="center"><a href="img/img14.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img14.jpg" alt="Січеславські козаки" width="100%" /></a></th>
        <th width="4%"></th>
        <th width="48%" align="center"><a href="img/img15.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img15.jpg" alt="Січеславські козаки" width="100%" /></a></th>
      </tr>

      <tr height="20vw"></tr>

      <tr class="gallery">
        <th width="48%" align="center"><a href="img/img17.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img17.jpg" alt="Січеславські козаки" width="100%" /></a></th>
        <th width="4%"></th>
        <th width="48%" align="center"><a href="img/img18.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img18.jpg" alt="Січеславські козаки" width="100%" /></a></th>
      </tr>

      <tr height="20vw"></tr>

      <tr class="gallery">
        <th width="48%" align="center"><a href="img/img25.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img25.jpg" alt="Січеславські козаки" width="100%" /></a></th>
        <th width="4%"></th>
        <th width="48%" align="center"><a href="img/img26.jpg" rel="lightbox-one" title="Січеславські козаки"><img src="img/img26.jpg" alt="Січеславські козаки" width="100%" /></a></th>
      </tr>

      <tr height="20vw"></tr>
    </table>
  </div>

 