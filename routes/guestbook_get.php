<?php
$entries = getMessages(connectDb());
renderView(
    template: 'guestbook_get',
    data: ['messages' => $entries]
);
