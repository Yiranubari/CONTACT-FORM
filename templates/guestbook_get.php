<?php
$messages = $data['messages'];
?>

<section class="guestbook-card">
    <h2>Guest Messages</h2>

    <?php if (empty($messages)): ?>
        <p class="empty-state">No messages yet. Be the first to leave a message!</p>
    <?php else: ?>
        <div class="messages-list">
            <?php foreach ($messages as $message): ?>
                <div class="message-item">
                    <div class="message-header">
                        <h3><?= htmlspecialchars($message['name']) ?></h3>
                        <span class="date"><?= htmlspecialchars($message['created_at']) ?></span>
                    </div>

                    <p class="email"><?= htmlspecialchars($message['email']) ?></p>

                    <div class="message-body">
                        <?= nl2br(htmlspecialchars($message['message'])) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>