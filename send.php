<?php
$mail_addr = "ltslg@ukr.net";
$mail_sender = "airsofa@ukr.net";

$phone = trim($_POST['phone']);
$name = trim($_POST['name']);
$email = trim($_POST['email']);

$emailto = $mail_addr;
$emailfrom = $mail_sender;
$emailfromtitle ="air_sofa_message";
$subject = "Air Sofa : Заявка";

    
    if($name)  $send ="<html><body><p><b>Имя:</b> ".$name."</p>";
    if($phone)   $send.="<p><b>Телефон:</b> ".$phone."</p>";
    if($email)   $send.="<p><b>Email:</b> ".$email."</p>";

     $send .="</body></html>";


    $headers  = "Content-type: text/html; charset=utf-8 \r\n";

    $mail=mail ($emailto, $subject, $send,'From:'.$emailfromtitle.' <'.$emailfrom.'>' . "\r\n" . $headers);

    if ($mail) { ?>
    <script language="javascript" type="text/javascript">
        $('empty-span').text('Thank you!');
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">

        alert("Сообщение не было отправлено! Повторире запрос!");
    </script>
<?php
}
?>











