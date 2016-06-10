<?php

$message = new MessageManager($link);

$messages = $message->getAll();





$count = 0 ;

while($count < count($messages))

{
   $result = $messages[$count];




   require('views/chat_list.phtml');

   $count++;

}

require('views/chat.phtml');

?>