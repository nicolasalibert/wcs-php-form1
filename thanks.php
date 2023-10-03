<?php

$firstName = $_POST["user_first_name"];
$lastName = $_POST["user_last_name"];
$mail = $_POST["user_mail"];
$phoneNumber = $_POST["user_phone_number"];
$subject = $_POST["msg_subject"];
$msg = $_POST["user_message"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Merci
        <?= $firstName . " " . $lastName ?> de nous avoir contacté à propos de "
        <?= $subject ?>”.
    </p>

    <p>Un de nos conseillers vous contactera soit à l'adresse
        <?= $mail ?> ou par téléphone au
        <?= $phoneNumber ?> dans les plus
        brefs
        délais pour traiter votre demande :
    </p>

    <p>
        <?= $msg ?>
    </p>
</body>

</html>