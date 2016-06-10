<?php
$count = 0 ;

while($count < count($messages))

{
   $result = $messages[$count];




   require('views/chat_list.phtml');

   $count++;

}

?>
