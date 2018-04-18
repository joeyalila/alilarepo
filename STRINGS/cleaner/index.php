<?php
//valid strings
$welcome_message = "Eric showed joey a string";
//declare the above in 2 more ways

$welcome_message1= 'June is a goo girl';
$welcome_message2= <<<EOL
Awrings showed Paul an arrary
EOL;
//dispplay the baove on a new line
//split the strings
$welcome_message_array = explode (' ',$welcome_message);
foreach ($welcome_message_array as $word){
  echo "{$word}<br/>";

}

 ?>
