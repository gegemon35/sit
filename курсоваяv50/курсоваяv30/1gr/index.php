<?php

// $num = 10;
// $fl = -3.10;
// $tr = true;
// $st = "text";
// echo "num = $num <br />";
// echo "fl = $fl <br />";
// echo "tr = $tr <br />";
// $num = 100;
// echo "num = $num <br />";
// echo "st = $st <br />";
// define ('a', 5);
// echo " <br />";

// echo a;
// echo " <br />";
// if (defined ('a') == 1)
//     {
//         echo $num;
//         echo " <br />";
//         }
// else {echo $st;
//     echo " <br />";
// }
// echo a;
// echo " <br />";


// $a = 100;
// $b = 10;
// $d = $a + $b;
// $v = $d / $b;

// echo $v;

// $a = 10;
// echo $a;
// echo "<br>";
// $a = $a +10;
// echo $a;
// echo "<br>";
// $a++;
// echo "Добавления к a + 1 = $a";

// $str1 = "text1";
// $str2 = "text2";
// echo $str1." ".$str2."\"";
// echo "<br>";
// echo "...../.\..../.\\......";
// echo "<br>";
/*
$x = 10; 
$y = 20;
$z = 5;
$b1 = $x != $y;
echo $b1;
echo "<br> <hr>";
$b2 = $x > $y;
echo $b2;
echo "<br> <hr>";

$b3 = $x < $y;
echo $b3;
echo "<br> <hr>";

$b4 = $x == $y;
echo $b4;
echo "<br> <hr>";

$b5 = !($x > $y);
echo $b5;
echo "<br> <hr>";

$b6 = $x >= $y || $z < $y;
echo $b6;
echo "<br> <hr>";

$b7 = $x > $y && $z == $y;
echo $b7;
echo "<br> <hr>";

$b8 = $x < $y ^ $x <= $y;
echo $b8;
echo "<br> <hr>";

if($b1 == 1 ){
echo $b1 = "true"
}
else{

}
*/
/*
echo M_PI. "<br />";
echo M_E. "<br />";
$x = -15;
echo abs ($x). "<br />";
$y = 49.999;
echo round ($y, 3). "<br />";
$t = 49.001 . "<br />";
echo ceil ($t). "<br />";
echo floor ($y). "<br />";
echo mt_rand (1, 20). "<br />";
*/
/*
$string = "This is exemple";
echo strlen($string). "<br/>";
echo strpos($string, "is", 4). "<br/>";
if (strpos($string, "T") === false) echo "T ne naideno";
else echo "T naideno";
*/

// создание файла
// $file = fopen ("a.txt", "a+t");
// fwrite($file, "Exemple\nText\nNext");
// fclose($file);

// $file = fopen ("a.txt", "r+t");
// while (!feof($file)) {
//     echo fread ($file, 1). "</br>";
// }
//     fclose ($file);


// phpinfo();

// echo $_SERVER["REMOTE_ADDR"];

// $message = "SOOBSHENIE";
// $to = "you@example.com";
// $subject = "TEMASOOBSHENIYA";
// mail($to, $subject, $message);




?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обратная связь</title>
</head>
<body>
    <h2>Форма Обратной связи</h2>
<form name="feedback" action="" method="post"> 
    <label>От кого:</label></br>
    <input type="text" name="from"></br>
    <label>Кому:</label></br>
    <input type="text" name="to"></br>
    <label>Тема:</label></br>
    <input type="text" name="subject"></br>
    <label>Сообщение:</label></br>
    <textarea name="message" cols="0" rows="0" style=" max-width: 170px; min-width: 170px; min-height: 15px; max-height: 15px; "></textarea></br>
    <input type="submit" name="send" value="Отправить" /></br>
    
</forn>
</body>
</html> -->






<?php 
    // session_start();
    // if (isset($_POST["send"])) {
    //     $from = htmlspecialchars ($_POST["from"]);
    //     $to = htmlspecialchars ($_POST["to"]);
    //     $subject = htmlspecialchars ($_POST["subject"]);
    //     $message = htmlspecialchars ($_POST["message"]);
    //     $_SESSION["from"] = $from;
    //     $_SESSION["to"] = $to;
    //     $_SESSION["subject"] = $subject;
    //     $_SESSION["message"] = $message;
    //     // $error_from = "";
    //     // $error_to = "";
    //     // $error_subject = "";
    //     // $error_messege = "";
    //     $error = false;
    //     if($from == "" || !preg_match ("/@/", $from)){
    //         $error_from = "Введите корректный емаил";
    //         $error = true;
    //     }
    //     else $error_from = "";

    //     if($to == "" || !preg_match ("/@/", $to)){
    //         $error_to = "Введите корректный емаил";
    //         $error = true;
    //     }
    //     else $error_to = "";

    //     if(strlen($subject) == 0) {
    //         $error_subject = "Введите тему сообщения";
    //         $error = true;
    //     }
    //     else $error_subject = "";

    //     if(strlen($message) >= 10){
    //         $error_messege = "Ваше сообщение слишком длинное";
    //         $error = true;
    //     }
    //     else $error_messege = "";

    //     if(!$error){
    //         // mail ($to, $subject, $from, $message);
    //         header ("Location: success.php?send=1");
    //         exit;

    //     }
    // }
    
?>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обратная связь</title>
</head>
<body>
    <h2>Форма Обратной связи</h2>
<form name="feedback" action="" method="post"> 
    <label>От кого:</label></br>
    <input type="text" name="from" value="?=$_SESSION["from"] ?>">
    <span style="color:red;"><=$error_from?> </span></br>
    <label>Кому:</label></br>
    <input type="text" name="to" value="?=$_SESSION["to"] ?>">
    <span style="color:red;"><=$error_to?> </span></br>
    <label>Тема:</label></br>
    <input type="text" name="subject" value="<=$_SESSION["subject"] ?>">
    <span style="color:red;">?=$error_subject?> </span></br>
    <label>Сообщение:</label></br>
    <textarea name="message" cols="0" rows="0" style=" max-width: 170px; min-width: 170px; min-height: 15px; max-height: 15px; "><=$_SESSION["message"] ?></textarea>
    <span style="color:red;"><=$error_messege?> </span></br>
    <input type="submit" name="send" value="Отправить" /></br>
    
</forn>
</body>
</html>  -->

<?php


// INSERT INTO `user` (`log`, `pas`) VALUES ('Имя - $i', MD5('$i')); добавление пользователя
//$succes = $mysqli -> query("UPDATE `user` SET `log` = 'Имя - 11' WHERE `user`.`№` = 5;"); обновление
// $succes = $mysqli -> query("UPDATE `user` SET `log` = 'data',  `date_reg` = '2023-02-16 11:11:11', `pas` = MD5('data1') WHERE `user`.`№` = 15;");


 /*
    $mysqli = new mysqli('localhost', 'reg_users_1', '123321', 'mybasegr1');
    $mysqli -> query("SET NAMES 'utf8'");
 
    $succes = $mysqli -> query("INSERT INTO `user` (`log`, `pas`) VALUES ('test4', MD5('test'));");
    echo $succes;
    
    
    for($i = 1; $i < 10; $i++){
        $succes = $mysqli -> query("INSERT INTO `user` (`log`, `pas`) VALUES ('Имя - $i', MD5('$i'));");
        echo $succes."<br>";
        }
        
       $succes = $mysqli -> query("DELETE FROM `user` WHERE `№` > 10 AND `№` < 16 ");
       echo $succes."<br>";
           $mysqli -> close();

*/

//     function printResult($result_set) {
//     while (($row = $result_set->fetch_assoc()) != false) {
//     print_r($row);
//     //echo $rov["login"];
//     echo "<br>";

//     }
//         echo "Количество записей равно -".$result_set->num_rows."<br /> ------------------------------------------------------";
//     }


// $mysqli = new mysqli('localhost', 'reg_users_1', '123321', 'mybasegr1');
// $mysqli -> query("SET NAMES 'utf8'");
// $result_set = $mysqli -> query("SELECT * FROM `user` ");
// // print_r( $succes);
// printResult ($result_set);
// $mysqli -> close();

// INSERT INTO `register` (`id`, `login`, `pass`, `d-reg`, `email`, `pol`) VALUES (NULL, 'test', MD5('test'), UTC_TIMESTAMP(), '123@mail.ru', 'male'); 


?>

<?php
session_start();
$bd_gr1 = new mysqli("localhost","gr1","gr1","mybasegr1");
$bd_gr1 -> query ("SET NAME *'UTF8'");
$bd_gr1 -> close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="registration" action="post">
            <fieldset>
            <legend>Registration</legend>
    <label>Login<input name="login" type="text" placeholder="логин"></label><br>
    <label>Password<input name="pass1" type="password" placeholder="пароль"></label><br>
    <label>Reg_Password<input name="pass2" type="password" placeholder="повтор пароля"></label><br>
    <label>Email<input name="mail" type="mail" placeholder="почта"></label>
        <div>
    <input type="radio" name="pol" id="male" value="male"><label>Мужчина</label><br>
    <input type="radio" name="pol" id="male" value="male"><label>Женщина</label>
        </div>
    </fieldset>    
</form>
</body>
</html>
