<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Phone validation</title>
</head>
<body>
<?php

$phone =  htmlspecialchars($_POST["phone"]);
$exp = '/\+?7-?([0-9]{3})-?([0-9]{3})-?(([0-9]{2})|([0-9]{3}))-?(([0-9]{2})|([0-9]{4}))/';
$digits = preg_match_all( "/[0-9]/", $phone );
/*if(iseet($phone)){
    echo 'Заполните поле!';
}*/
if($phone == '') {
    echo 'Заполните поле!';
}
else{
        if (!preg_match($exp, $phone) || $digits >= 12) {
            echo 'Неправильный формат номера!';
        } else {
            echo 'Успех!';
        }
    }
/*var_dump($digits)."<br />";*/
/*echo $phone."<br />";*/
?>
    <form method="post" action="">
        <p>Введите Ваш номер телефона:</p>
        <p><input name="phone"></p>
        <p><input type="submit" value="Отправить"></p>
    </form>
</body>
</html>
