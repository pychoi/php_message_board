<?php

    require '../app/start.php';

    $messages = $db->query('
                SELECT id, name, message, sent
                FROM message_board
            ')->fetchAll(PDO::FETCH_ASSOC);

    require VIEW_ROOT . '/admin/list.php';

?>