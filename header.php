<center>
    <table cellpadding="0" cellspacing="0" class="all_tab">
        <tbody>



        <tr>
            <td class="left_head">
                <div class="logo"><a href="<?php echo $site_url; ?>"><img src="./index_files/logo.jpg" ></a></div>
            </td>
            <td class="right_head">
                <div class="head_phone"><img src="./index_files/head_phone.png"></div>
                <a href="mailto:2452802@mail.ru"><div class="head_email"><?php echo $email2; ?></div></a>
                <?php if (empty($_SESSION['client_email'])): ?>
                    <form name="callback" action="check_login.php" method="get" >

                        <div class='zak_job_head'><button type="submit" name="submit" style="background: none; border: none;"><a></a></button></div>

                    <div class="top_right_menu">

                            <input type="hidden" name="callback" value="">
                            <span></span>
                            <section>
                                <div>

                                    <input type="text" name="client_email" value="Почта" style=" margin-top: 13px;"><br>
                                    <input type="text" value="Пароль" name="client_pass" style=" margin-top: 10px;"><br>
                                </div>
                            </section>
                        </form>
                        <br>

                    </div>
                <?php else: ?>
                    <button class='zak_job_head' style="background: none; border: none;"><a href="kabinet/profile.php"></a></button>
                <div class="top_right_menu">
                    <br>Здравствуйте, <?php echo $_SESSION['client_name']; ?>!<br>
                    Это вход в личный кабинет
                    </div>
                <?php endif ?>



            </td>
        </tr>




        <tr>
            <td class="main_menu" colspan="2">
                <div class="block_menu"><a href="index.php">Главная</a></div>
                <div class="block_menu"><a href="special.php">&nbsp;&nbsp;Специальности</a></div>
                <div class="block_menu"><a href="price.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Прайс</a></div>
                <div class="block_menu"><a href="consult.php">Отзывы</a></div>
                <div class="block_menu_li"><a href="kak_zakaz.php">Как заказать</a>
                    <div class="vyp_men"><a href="kak_zakaz.php">Заказ-онлайн</a>
                        <a href="zak_ofice.php">Заказ в офисе</a>
                    </div>
                </div>
                <div class="block_menu"><a href="order.php">&nbsp;&nbsp;Заказать</a></div>
                <div class="block_menu"><a href="pay.php">&nbsp;&nbsp;&nbsp;&nbsp;Оплата</a></div>
                <div class="block_menu"><a href="dogovor.php">Оферта</a></div>
                <div class="block_menu"><a href="articles.php">Статьи</a></div>
                <div class="block_menu"><a href="contact.php">Контакты</a></div>

            </td>
        </tr>

