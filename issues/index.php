<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <title>Обратная связь ARK Survival Evolved</title>
        
        <script src="https://www.google.com/recaptcha/api.js"></script>
    </head>
    <script type="text/javascript">
        var y = document.documentElement.clientWidth ;
        var x = document.documentElement.clientHeight;
        
    </script>
    <body style=";">
        <aside>
            <form name="feedback" method="POST" action="form.php">
                <label><strong>Выберите где возникла проблема</strong> </label>
                <select name="select">
                    <option>Сайт</option>
                    <option>Игра</option>
                </select><br>
                <p><label><strong>Полное описание проблемы</strong></label><br><textarea name="comment" placeholder ="Пожалуйста введите подробно как проявляется проблема." style="width:300px; height:150px;"></textarea></p>
                <!--<div class="g-recaptcha" data-sitekey=""></div>-->
                <p><input type="submit" name="send"></p>
                
                
                
            </form>
            
        </aside>

        <footer>
            <div> 
                Разработано <a href="http://aparshukov.ru" style="color: yellowgreen;">aparshukov</a> 2020
            </div>
        </footer>
    </body>
</html>