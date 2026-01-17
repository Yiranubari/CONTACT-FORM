<?php
$messages = getMessages(connectDb());
// throw new RuntimeException('Whoops, something went wrong!');
// echo $hey;

renderView(
    template: 'guestbook_get',
    data: ['messages' => $messages]
);
