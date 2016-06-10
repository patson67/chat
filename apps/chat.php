<?php

$message = new MessageManager($link);

$message->getAll();



$count = 0 ;

while($count < count($message))

{
   $result = $message[$count];
   require('views/chat_list.phtml');

}

require('views/chat.phtml');

?>