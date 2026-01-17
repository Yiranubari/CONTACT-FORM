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
    <style>
    /* --- Guestbook Container --- */
    .guestbook-card {
        background-color: #ffffff;
        width: 100%;
        max-width: 700px;
        /* Matches your other cards */
        margin: 2rem auto;
        padding: 2.5rem;
        border-radius: 12px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        box-sizing: border-box;
        font-family: system-ui, -apple-system, sans-serif;
    }

    .guestbook-card h2 {
        margin-top: 0;
        margin-bottom: 1.5rem;
        font-size: 1.5rem;
        color: #111827;
        border-bottom: 2px solid #e5e7eb;
        padding-bottom: 0.75rem;
    }

    /* --- Individual Message Styling --- */
    .messages-list {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        /* Space between messages */
    }

    .message-item {
        background-color: #f9fafb;
        /* Light gray background for each message */
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        padding: 1.25rem;
        transition: transform 0.2s ease;
    }

    .message-item:hover {
        transform: translateY(-2px);
        /* Subtle lift effect on hover */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    /* Header: Name and Date on the same line */
    .message-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.25rem;
    }

    .message-item h3 {
        margin: 0;
        font-size: 1.1rem;
        color: #4f46e5;
        /* Your Indigo Theme Color */
        font-weight: 600;
    }

    .message-item .date {
        font-size: 0.75rem;
        color: #9ca3af;
    }

    /* Email Styling */
    .message-item .email {
        font-size: 0.85rem;
        color: #6b7280;
        margin-bottom: 0.75rem;
        font-style: italic;
    }

    /* The Actual Message Text */
    .message-body {
        color: #374151;
        line-height: 1.6;
        font-size: 0.95rem;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        color: #6b7280;
        font-style: italic;
        padding: 2rem 0;
    }
    </style>
</section>