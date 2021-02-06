<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <title>Сайт игрового сервера ARK Survival Evolved</title>
    </head>
    <body>
        <header>
			<?php include "header.php"; ?>
			<div class=mobile>
                <h3>[RU]ClassicServer</h3>
                62.165.30.122:7777
            <div>
        </header>
		<article> 
			<div class="content" style="padding-left:5px;">
				<?php
					//echo 'Новость'. $_GET['news']. '!';
					$host = "127.0.0.1"; // Имя сервера
					$user = "web";          // Имя пользователя
					$password = "";            // Пароль
					
					// Попытка установить соединение с MySQL:
					// подключаемся к серверу
					$connect = mysqli_connect($host, $user, $password, 'aparshukov_ark') //соединяемся с базой
						or die("К сожалению возникла проблема с загрузкой страницы " . mysqli_error($connect));//если проблема, то выдаем ошибку
					mysqli_set_charset($connect,"utf8");//принудительно даем кодировку
					// выполняем операции с базой данных
					$query  = "SELECT * FROM ark_news WHERE ID='".$_GET['news']."'";//выбрать все таблицы
					$result = mysqli_query($connect, $query);//вывести результат
					if($result)
						{
							while ($row = mysqli_fetch_row($result)) {
								echo ' <h1 style="font-size: 20pt; font-family: monospace; margin: 30px; color: #ffffff">'. $row[1].
								'</h1>'. $row[2] .'';
								$author = $row[3];
								$heading= $row[4];
								$date= $row[5];
							} 
							mysqli_free_result($result);
						}
						
				
					// закрываем подключение
					mysqli_close($connect);
				?>
				<?php 
					echo 
					'<div style="width:25%; float: left; background:rgba(0,0,0, 0.5);">Раздел: '.$heading.'</div>'.
					'<div style="width:25%; float: left; background:rgba(0,0,0, 0.5);">'.$author.'</div>'.
					'<div style="width:25%; float: left; background:rgba(0,0,0, 0.5);">'.$date.'</div>';
					
				?>
				<div id="vk_like" style="margin:10px" >
					<script type="text/javascript">
						VK.Widgets.Like("vk_like", {type: "button"});
					</script>
				</div>
					
				<div id="vk_comments" style="margin-top:10px"><script type="text/javascript">
					VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
					</script>
				</div>
					
			</div>
		</article>
        <aside>
			<?php include "aside.php"; ?>
        </aside>
        <footer>
            <div> 
                Разработано <a href="http://aparshukov.ru" style="color: yellowgreen;">aparshukov</a> 2020
            </div>
        </footer>
    </body>
</html>