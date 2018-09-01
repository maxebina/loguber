<?php

if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $content = $_POST['subject'];
    $body = 'Nome: '.$firstname.PHP_EOL;
    $body .= 'Email: '.$email.PHP_EOL;
    $body .= 'Mensagem: '.$content.PHP_EOL;
    $image_name = $_FILES["ypicture"]["name"];
    $image = $_FILES["ypicture"]["tmp_name"];
    $content = file_get_contents($image);
    $content = chunk_split(base64_encode($content));
    $uid = md5(uniqid(time()));
    $name = basename($image_name);
    $replyto = $from_mail = ['email'];
    // header
    $header = "From: ".$firstname." <".$email.">\r\n";
    $header .= "Reply-To: <".$email.">\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
    // message & attachment
    $nmessage = "--".$uid."\r\n";
    $nmessage .= "Content-type:text/plain; charset=iso-8859-1\r\n";
    $nmessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $nmessage .= $body."\r\n\r\n";
    $nmessage .= "--".$uid."\r\n";
    $nmessage .= "Content-Type: application/octet-stream; name=\"".$name."\"\r\n";
    $nmessage .= "Content-Transfer-Encoding: base64\r\n";
    $nmessage .= "Content-Disposition: attachment; filename=\"".$name."\"\r\n\r\n";
    $nmessage .= $content."\r\n\r\n";
    $nmessage .= "--".$uid."--";
    try {
        $subject = 'Tenho interesse em fazer parte da LOGUBER';
        mail("maxebina@gmail.com", $subject, $nmessage, $header);
        echo json_encode(
            [
                'massage' => 'Obrigado por entrar em contato',
                'flag' => '1'
            ]
        );
    } catch (Exception $e) {
        echo json_encode(
            [
                'massage' => 'Ocorreu um erro ao enviar sua mensagem '.$e->getMessage().'\nTente outra vez.',
                'flag' => '0'
            ]
        );
    }
}

// mail("operacional@loguber.com.br , maxebina@gmail.com", $subject, $nmessage, $header);