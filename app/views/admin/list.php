<?php require VIEW_ROOT . '/templates/header.php'; ?>

<div class="message-history">
    <?php foreach($messages as $message): ?>
        <h3><?php echo $message['name']; ?> said:</h3>
        <p><?php echo $message['message']; ?></p>

        <p class="faded">
            Sent on
        <?php echo $message['sent']; ?></p>

        <a href="<?php echo BASE_URL; ?>/admin/delete.php?id=<?php echo e($message['id']); ?>">Delete</a>

    <?php endforeach; ?>
</div>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>