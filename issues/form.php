<?php
        
        // grab recaptcha library
        require_once "recaptchalib.php";
        
        ?>
<?php
if (isset($_POST)) {
    // ваш секретный ключ recaptcha
    $secret = "";
    
    // пустой ответ
    $response = null;
    
    // проверка секретного ключа
    $reCaptcha = new ReCaptcha($secret);
    $comment = $_POST['comment'];
    $type = $_POST['select'];
    $host = "127.0.0.1"; // Имя сервера
	$user = "web";          // Имя пользователя
	$password = "";            // Пароль
					
    $conn = mysqli_connect($host, $user, $password, 'aparshukov_ark');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    
    mysqli_set_charset($conn,"utf8");//принудительно даем кодировку
    
    $sql = "INSERT INTO ark_issues (comment, is_type,result) VALUES ('$comment', '$type','Новое')";
    if (mysqli_query($conn, $sql)) {
        echo 'Спасибо! Вы помогаете сделать наш сервер лучше! <a href="http://ark.aparshukov.ru" style="color: yellowgreen;">Вернуться на сайт</a>';
    } else {
        echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn).' <br> Пожалуйста свяжитесь с <a href="mailto:admin@aparshukov.ru">нами</a> и укажите проблему';
    }
    mysqli_close($conn);


}
?>
