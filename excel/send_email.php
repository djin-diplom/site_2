<html>
<head>
</head>
<body>

<?php
require("../requisites.php");
set_time_limit(0);
ob_implicit_flush();
error_reporting(E_ALL);
require_once ("sender.php");

$filename = $_GET['filename'];
function readExelFile($filepath){
    require_once ("Classes/PHPExcel.php");
    $ar=array();
    $inputFileType = PHPExcel_IOFactory::identify($filepath);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($filepath);
    $ar = $objPHPExcel->getActiveSheet()->toArray();
    return $ar;
}


$file_path_excel = "files/".$filename;

$ar=readExelFile($file_path_excel);
$i = (int)$_GET['nomer'];

$count = count($ar);


if ( (int)$i >= (int)$count) {
    header("Location: log.txt");
} else {
    $ar_colls = $ar[$i];
    $j = $i % 12;
    switch ($j) {
        case 0:
            $email = $email_1;
            break;
        case 1:
            $email = $email_2;
            break;
        case 2:
            $email = $email_3;
            break;
        case 3:
            $email = $email_4;
            break;
        case 4:
            $email = $email_5;
            break;
        case 5:
            $email = $email_6;
            break;
        case 6:
            $email = $email_7;
            break;
        case 7:
            $email = $email_8;
            break;
        case 8:
            $email = $email_9;
            break;
        case 9:
            $email = $email_10;
            break;
        case 10:
            $email = $email_11;
            break;
        case 10:
            $email = $email_12;
            break;
    }
    $email_client = $ar_colls[0];
    if (strlen($email_client) > 5) {
        $name = $ar_colls[1];
        $vid_rab = $ar_colls[2];
        $pay = $ar_colls[3];
        echo "Посылаем " . $email_client . "<br>";
        require("../email/build_2.php");


        $body = $body_2;

        $subject = "Здравствуйте, " . $name . "! " . $vid_rab . " за " . $pay . " БЕЗ ПРЕДОПЛАТЫ от компании " . $site_name;

        $sender = new sender($email, $site_name, $subject, '', $password);

        $message_text = $body;

        $message_data = array(
            'to' => $email_client,//Адрес студента
            'to_name' => $name,//Имя студента
            'title' => $sender->mail_content['title'],
            'text' => $message_text,
            'alt_text' => strip_tags($message_text)
        );

        $mailSend = $sender->sendMail($sender->smtp_data, $message_data);

        if ($mailSend == 0) {
            echo "Отправка удалась!<br><br><br><br><br>";
        } else {
            echo "Ошибка при отправке :(";
        }

        unset($sender);
        $i++;
        $f = fopen('log.txt', "w");
        fwrite($f, $i . "\n");
        fclose($f);
        //sleep(9);
        //header("Location: time.php?nomer=" . $i . "&filename=" . $filename);
        ?>
        <script type="text/javascript">
            function func() {
                return location.href = "time.php?nomer=" + <?php echo $i; ?> + "&filename=" + "<?php echo $filename; ?>";
            }
            setTimeout(func, 9000);
        </script>
        <?php
} else {
        $i++;
        $f = fopen('log.txt', "w");
        fwrite($f, $i . "\n");
        fclose($f);
        //header("Location: time.php?nomer=" . $i . "&filename=" . $filename);
        ?>
        <script type="text/javascript">
            function func() {
                return location.href = "time.php?nomer=" + <?php echo $i; ?> + "&filename=" + "<?php echo $filename; ?>";
            }
            setTimeout(func, 1000);
        </script>
        <?php
    }
}

?>
</body>
</html>
