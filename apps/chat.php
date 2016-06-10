<?php

$message = new MessageManager($link);

$messages = $message->getAll();

require('views/chat.phtml');

?>