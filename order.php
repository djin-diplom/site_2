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
            <p class='tit_work'>Заказать работу</p>
            <div class='forma_div'>
                <strong>Внимание!</strong> Поля отмеченные звездочкой ( * ) являются <strong>обязательными</strong> для заполнения!<br>


                    <form method="post" enctype="multipart/form-data" action="order2.php">



                        <p><strong>Тип работы:*</strong></p>
                        <select name="work_kind" id="id_work_kind" class='input-text'>
                            <option value="" selected="selected">---</option>
                            <option value="kontrolnaia">Контрольная работа</option>
                            <option value="referat">Реферат</option>
                            <option value="esse">Эссе</option>
                            <option value="kursovaia">Курсовая работа</option>
                            <option value="otchot">Отчет по практике</option>
                            <option value="diploma">Диплом</option>
                            <option value="magister_dissertation">Магистерская диссертация</option>
                            <option value="drawings">Чертежи</option>
                            <option value="other">Прочее</option>
                            <option value="complex">Комплексный заказ</option>
                        </select>
                        <p><strong>Тема работы:*</strong></p>
                        <textarea id="id_subject" style="width: 80%;" rows="3" cols="10" name="tema" class='input-text'></textarea>
                        <p><strong>Предмет:</strong></p>
                        <input id="id_predmet" style="width: 50%;" type="text" name="predmet" maxlength="100" class='input-text'>
                        <p><strong>Учебное заведение:</strong></p>
                        <input id="id_university" style="width: 50%;" type="text" name="university" maxlength="100" class='input-text'>
                        <p><strong>Доп. информация<br>(объем, уникальность):</strong></p>
                        <textarea id="id_add_info" style="width: 80%;" rows="3" cols="10" name="add_info" class='input-text'></textarea>
                        <p><strong>Ваше имя:*</strong></p>
                        <input style="width: 50%;" type="text" name="name" id="id_name" class='input-text'>
                        <p><strong>E-mail:*</strong></p>
                        <input style="width: 50%;" type="text" name="email_stud" id="id_email" class='input-text'>
                        <p><?php
                        $a = rand(1,10);
                        $b = rand(1,100);
                        $c = $a+$b;
                        echo $a."+".$b."=";
                        ?>*</p>
                        <input style="width: 50%;" type="text" name="count_1" class='input-text'>
                        <input style="width: 50%; display: none;" type="text" value=<?php echo $c?> name="count_2"><br>

                        <br><br>



                    <input type='image' src='img/save_but.png' value='Сохранить'>
                </form>
            </div>

        </div>


        <?php
    require("footer.php");
    ?>
</body>
</html>