<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="thanks.php" method="post">
        <ul>
            <li>
                <label for="first_name">Prénom&nbsp;:</label>
                <input type="text" id="first_name" name="user_first_name" />
            </li>
            <li>
                <label for="last_name">Nom&nbsp;:</label>
                <input type="text" id="last_name" name="user_last_name" />
            </li>
            <li>
                <label for="mail">E-mail&nbsp;:</label>
                <input type="email" id="mail" name="user_mail" />
            </li>
            <li>
                <label for="phone_number">Téléphone&nbsp;:</label>
                <input type="text" id="phone_number" name="user_phone_number">
            </li>
            <li>
                <label for="subject">Sujet&nbsp;:</label>
                <select name="msg_subject" id="subject">
                    <option value="contact">Contact</option>
                    <option value="help">Aide</option>
                    <option value="yes">Oui</option>
                    <option value="cheese">Fromage</option>
                </select>
            </li>
            <li>
                <label for="msg">Message&nbsp;:</label>
                <textarea id="msg" name="user_message"></textarea>
            </li>
        </ul>

        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
    </form>

    <!-- <?php
    var_dump($_POST);
    echo $_POST["user_message"];
    ?> -->
</body>

</html>