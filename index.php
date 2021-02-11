<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <title>Сайт игрового сервера ARK Survival Evolved</title>
        <script type='text/javascript' src='//arkservera.com/web/api/448/'></script>
        
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
            <div style="font-size: 250%; margin-top:10px;padding:10px; text-shadow: 1px 3px 3px black, 0 0 1em #44414d;">Новости</div>
            <div id="News">
                <?php
                    $host = "127.0.0.1"; // Имя сервера
                    $user = "web";          // Имя пользователя
                    $password = "";            // Пароль
                    
                    
                    // Попытка установить соединение с MySQL:
                    // подключаемся к серверу
                    $connect = mysqli_connect($host, $user, $password, 'aparshukov_ark') //соединяемся с базой
                        or die("К сожалению возникла проблема с загрузкой страницы " . mysqli_error($connect));//если проблема, то выдаем ошибку
                    mysqli_set_charset($connect,"utf8");//принудительно даем кодировку
                    
                    
                    //в разработке страницы 
                    $page=1;
                    $pageID=$page-1;
                    $post=$pageID*5;
                    $lastPost=$post+5;
                    
                    
                    // выполняем операции с базой данных
                    $query  = "SELECT * FROM ark_news ORDER BY ID DESC LIMIT $post,$lastPost"; //выбрать все id нужной страницы /в разработке
                    $result = mysqli_query($connect, $query);//вывести результат
                    $data   = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    
                    
                    
                    foreach ($data as $i => $item) {
                        if ($i==0){
                            echo 
                            '<div class ="first-content">'.
                                '<h1 style="font-size: 15pt; font-family: monospace; margin: 30px; color: white"> <a href="http://ark.aparshukov.ru/news.php?news='.$item['ID'].' " style="color: #ffffff">' . $item['Name'] . '</a></h1>'.
                                '<div style="margin:30px">' 
                                    . $item['sh_desc'] . '<br><br>'.
                                    
                                    
                                '</div>'.
                                
                            '</div>' ;	
                        }
                        else{
                            echo 
                            '<div class ="content-gen">'.
                                '<h1 style="font-size: 15pt; font-family: monospace; margin: 30px; color: white"> <a href="http://ark.aparshukov.ru/news.php?news='.$item['ID'].' " style="color: #ffffff">' . $item['Name'] . '</a></h1>'.
                                '<div style="margin:30px">' 
                                    . $item['sh_desc'] . '<br><br>'.
                                    
                                    
                                '</div>'.
                                
                            '</div>' ;	
                        }
                    }

                    // закрываем подключение
                    
                    mysqli_close($connect);
                ?>
                
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