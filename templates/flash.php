<?php $messages = getFlashMessages(); ?>

<?php if (!empty($messages)): ?>
<div class="flash-messages">
    <?php foreach ($messages as $type => $message): ?>
    <?php foreach ($msgs as $msg): ?>
    <div class="flash-message flash-<?= htmlspecialchars($type) ?>">
        <?= htmlspecialchars($msg) ?>
    </div>
    <?php endforeach; ?>
    <?php endforeach; ?>
</div>
<?php endif; ?>