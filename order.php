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
                <form action='order.php' method='post' enctype='multipart/form-data'>
                    <p><strong>ФИО (или просто имя): *</strong></p>
                    <input type='text' class='input-text' name='name'>
                    <p><strong>Контактный телефон: *</strong></p>
                    <input type='text' class='input-text' name='phone'>
                    <p><strong>E-mail: *</strong></p>
                    <input type='text' class='input-text' name='email'>
                    <p><strong>ICQ</strong></p>
                    <input type='text' class='input-text' name='icq'>
                    <p><strong>ВУЗ</strong></p>
                    <input type='text' class='input-text' name='uni'>
                    <p><strong>Тип работы (диплом, курсовая, контрольная, отчет по практике, другое): *</strong></p>
                    <input type='text' class='input-text' name='type'>
                    <p><strong>Тема работы: *</strong></p>
                    <input type='text' class='input-text' name='item'>
                    <p><strong>Количество страниц: *</strong></p>
                    <input type='text' class='input-text' name='pages'>
                    <p><strong>Срок выполнения (дни, месяцы): *</strong></p>
                    <input type='text' class='input-text' name='time'>
                    <p><strong>Название предприятия - если работа носит практический характер:</strong></p>
                    <input type='text' class='input-text' name='org'>
                    <p><strong>Прикрепить методическое пособие, дополнительные материалы:</strong></p>
                    <p><input type='file' name='userfile[]' class='input-text'></p><p><input type='file' name='userfile[]' class='input-text'></p><p><input type='file' name='userfile[]' class='input-text'></p>
                    <br>

                    <br><br>
                    <input type='checkbox' name='yes'> <strong>Соглашаюсь с публичной офертой *</strong><br>
                    <p class='ofer'>Публичная оферта: "Настоящим заказом я утверждаю условия оформления моей работы,
                        которые не могут быть изменены в устной форме после подписания договора (дополнения по телефону не принимаются).
                        В процессе телефонных переговоров я обязуюсь правильно называть свой номер договора.
                        Я поставлен в известность и полностью согласен с тем, что если структура работы не согласована до начала
                        работы и не приложена с моей подписью к данному бланку заказа, то доработки по изменению структуры не
                        осуществляются, так как специфика оказания информационных услуг предусматривает различные мнения по написанию одной
                        и той же работы. Для дипломных проектов в связи с этим в течение 5 дней после подписания договора я обязуюсь
                        согласовать со своим руководителем дипломной работы структуру написания будущей дипломной работы и предоставить
                        сотруднику &laquo;<?php echo $main_name; ?>&raquo; два экземпляра (один остается у Заказчика, другой у Подрядчика).
                        Кроме того, по дипломным проектам я обязуюсь согласовать второстепенные моменты – а именно: методики, выборки,
                        гипотезы и задачи, до того момента, как к работе приступят. Если же заранее это не согласовано, то я не буду иметь
                        претензий по не мною выбранным методикам, гипотезам и задачам. По балансам и отчетам прибылях и убытков ситуация
                        аналогична. Я согласен с тем, что предоплата, вносимая мною, не возвращается, так как к работе приступают в
                        тот же день. Остальные замечания по доработке должны быть предоставлены мною в письменном виде и разборчивым
                        подчерком на бланке доработки (исправления вносимые преподавателем на самой работе не принимаются). Работу
                        Подрядчик при выполнении всех вышеперечисленных условий дорабатывает в течение 10 дней с момента передачи бланка
                        доработки (более укороченные сроки возможны только по обоюдной договоренности Сторон). Я поставлен в известность
                        что этапы работы над информационным проектом предусматривает этап доработок (не менее 3-х доработок которые
                        осуществляются бесплатно в рамках первоначальной договоренности сторон) и своей подписью заверяю то, что не буду
                        иметь претензий по этому вопросу.</p><br>
                    <input type='image' src='img/save_but.png' value='Сохранить'>
                </form>
            </div>

        </div>


<?php
    require("footer.php");
    ?>
</body>
</html>