<?php

    require '../app/start.php';

    if(isset($_GET['id'])){

    	$deleteMessage = $db->prepare("
    		DELETE FROM message_board
    		WHERE id = :id
    	");

    	$deleteMessage->execute(['id' => $_GET['id']]);

    }

    header('Location: ' . BASE_URL . '/admin/list.php');

?>