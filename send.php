<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);

    $name = urldecode($name);
    $email = urldecode($email);
    $message = urldecode($message);

    $name = trim($name);
    $email = trim($email);
    $message  = trim($message);

    // <!-- Для того, чтобы проверить, работает ли этот код, передаются ли данные можно просто их вывести на экран при помощи функции echo:
    // echo $name;
    // echo "<br>";
    // echo $email; -->

   if (mail("yuboko85@gmail.com", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email." Сообщение: ".$message ,"From: example2@mail.ru \r\n"))
    {   
        echo "сообщение успешно отправлено";
    } else {
        echo "при отправке сообщения возникли ошибки";
    }

    // <!-- Первая, наверное самая популярная ошибка, это когда вы видите пустую белую страницу без сообщений. Это означает, что вы допустили ошибку в коде страницы. Вам нужно включить отображение всех ошибок в PHP и тогда вы увидите, где допущена ошибка. Добавьте в код:Первая, наверное самая популярная ошибка, это когда вы видите пустую белую страницу без сообщений. Это означает, что вы допустили ошибку в коде страницы. Вам нужно включить отображение всех ошибок в PHP и тогда вы увидите, где допущена ошибка. Добавьте в код:  
    // ini_set('display_errors','On');    
    // error_reporting('E_ALL'); -->
?>



