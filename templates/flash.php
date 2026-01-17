<?php $messages = getFlashMessages(); ?>

<?php if (!empty($messages)): ?>
<div class="flash-messages">
    <?php foreach ($messages as $type => $message): ?>
    <div class="flash-message flash-<?= htmlspecialchars($type) ?>">
        <?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>
<style>
/* --- Flash Messages Container --- */
.flash-messages {
    width: 100%;
    max-width: 700px;
    /* Matches your Hello Card & Contact Form width */
    margin: 1.5rem auto 0;
    /* Centered with top spacing */
    padding: 0 20px;
    /* Prevents touching edges on mobile */
    box-sizing: border-box;
}

/* --- Base Message Style --- */
.flash-message {
    padding: 1rem 1.25rem;
    margin-bottom: 1rem;
    border-radius: 8px;
    /* Slightly smaller radius than cards for contrast */
    border: 1px solid transparent;
    font-size: 0.95rem;
    font-weight: 500;
    display: flex;
    align-items: center;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    animation: slideDown 0.3s ease-out forwards;
    /* subtle entrance animation */
}

/* --- Success State (Green) --- */
/* Use this when $type = 'success' */
.flash-success {
    background-color: #ecfdf5;
    /* Very light emerald */
    color: #065f46;
    /* Deep emerald text */
    border-color: #a7f3d0;
    /* Soft green border */
}

/* --- Error State (Red) --- */
/* Use this when $type = 'error' */
.flash-error {
    background-color: #fef2f2;
    /* Very light rose */
    color: #991b1b;
    /* Deep red text */
    border-color: #fecaca;
    /* Soft red border */
}

/* --- Info/Default State (Indigo) --- */
/* Use this when $type = 'info' */
.flash-info {
    background-color: #eef2ff;
    /* Your theme's light indigo */
    color: #3730a3;
    /* Deep indigo text */
    border-color: #c7d2fe;
}

/* --- Animation Keyframes --- */
@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>