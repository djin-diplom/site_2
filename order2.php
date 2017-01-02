<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru">
<head>
    <?php
    require("head.php");
    ?>
    <title>Заказать работу</title>


</head>


<body>


<?php
require("header.php");
?>
<tr>
    <td class='work_zone' colspan='2'>
        <div class='work_div'>


            <?php
            //Если форма отправлена
            if(isset($_POST['submit'])) {


                //Проверка суммы
                if(trim($_POST['count_1']) != $_POST['count_2']) {
                    $hasError = true;
                }
                //Проверка тип работы
                if(trim($_POST['work_kind']) == '') {
                    $hasError = true;
                } else {
                    $work_kind = trim($_POST['work_kind']);
                }
                //Проверка поля email
                if(trim($_POST['email_stud']) == '') {
                    $hasError = true;
                } else {
                    $email_stud= $_POST['email_stud'];
                }
                if(trim($_POST['name']) == '') {
                    $hasError = true;
                } else {
                    $name= $_POST['name'];
                }
                if(trim($_POST['tema']) == '') {
                    $hasError = true;
                } else {
                    $tema= $_POST['tema'];
                }
                if(trim($_POST['predmet']) == '') {
                    $predmet= "пусто";
                } else {
                    $predmet= $_POST['predmet'];
                }
                if(trim($_POST['university']) == '') {
                    $university= "пусто";
                } else {
                    $university= $_POST['university'];
                }
                if(trim($_POST['add_info']) == '') {
                    $add_info= "пусто";
                } else {
                    $add_info= $_POST['add_info'];
                }


                //Если ошибок нет, отправить email
                if (!isset($hasError)) {
                    //$body = "
                    //name: $name \n\n
                    //email_stud: $email_stud \n\n
                    //work_kind: $work_kind \n\n
                    //tema: $tema \n\n
                    //predmet : $predmet \n\n
                    //university: $university \n\n
                    //add_info: $add_info \n\n
                    //";
                    $body = "
		<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
		Имя заказчика: $name <br>
		Почта заказчика: $email_stud <br>
		Вид работы: $work_kind <br>
		Тема работы: $tema <br>
		Предмет : $predmet <br>
		Университет: $university <br>
		Дополнительная информация: $add_info <br>
		</body>
</html>
		";

                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From: '.$email. "\r\n" . 'Reply-To: ' . $email_stud;
                    $subject = "Письмо от клиента ".$name;

                    mail($email2, $subject, $body, $headers);
                    $emailSent = true;

                }
                include("win.php");
            }
            ?>
        </div>

        </div>

        <?php
        require("footer.php");
        ?>
</body>
</html>