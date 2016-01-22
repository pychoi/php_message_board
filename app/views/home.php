<?php require VIEW_ROOT . '/templates/header.php'; ?>

<div class="message-history">
    <?php foreach($messages as $message): ?>
        <h3><?php echo $message['name']; ?> said:</h3>
        <p><?php echo $message['message']; ?></p>

        <p class="faded">
            Sent on
        <?php echo $message['sent']; ?></p>
    <?php endforeach; ?>
</div>

<div class="enter-form">
    <h2>Enter Message Here</h2>

    <form action="<?php echo BASE_URL; ?>/index.php" method="POST" autocomplete="off">
        <label for="name">
            Name
            <input type="text" name="name" id="name">
        </label>

        <label for="message">
            Message
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </label>

        <input type="submit" value="Submit Message">
    </form>
<div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>