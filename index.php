<?php

    require 'app/start.php';

    if(!empty($_POST)){

        //var_dump($_POST);

        $name = $_POST['name'];
        $message = $_POST['message'];

        $newMessage = $db->prepare("
            INSERT INTO message_board (name, message, sent)
            VALUES (:name, :message, NOW())
        ");

        $newMessage->execute([
            'name' => $name,
            'message' => $message
        ]);

        header('Location: ' . BASE_URL . '/index.php');

    }

    $messages = $db->query('
            SELECT name, message, sent
            FROM message_board
        ')->fetchAll(PDO::FETCH_ASSOC);

    require VIEW_ROOT . '/home.php';

?>