<?php
$messages = $data['messages'];
var_dump($messages);
?>

<section>
    <h2>
        Guest Messages
    </h2>
    <?php if (empty($messages)): ?>
        <p>No messages yet. Be the first to leave a message!</p>
    <?php else: ?>
        <?php foreach ($messages as $messages): ?>
        <?php endforeach; ?>
    <?php endif; ?>
</section>