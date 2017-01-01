<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru">
<head>
    <?php
    require("head.php");
    ?>
    <title>Контакты</title>

   
</head>


<body>


<?php
require("header.php");
?>
<tr>
    <td class='work_zone' colspan='2'>
        <div class='work_div'>
            <p class='tit_work'>Контакты</p>
            <p><b>Адрес:</b><?php echo $adres; ?></p>
            <p><b>E-mail:</b> <?php echo $email2; ?></p>
            <p><b>E-mail:</b> <?php echo $email; ?></p>
            <p><b>E-mail:</b> <?php echo $email3; ?></p>
            <p><b>Время работы:</b> <?php echo $time_work; ?></p>
            <br>
            <p><b>Схема проезда:</b></p>
            <?php echo $url_adres_yandex_frame; ?>

        </div>


<?php
    require("footer.php");
    ?>
</body>
</html>