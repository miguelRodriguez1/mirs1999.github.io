<?php
$to="mirodriguezs@academia.usbbog.edu.co";
$suject="asunto";
$menssage="mensaje";
$from="mirodriguezs@academia.usbbog.edu.co";
$headers="From:" . $from;
$mail=mail($to,$subject,$message, $headers ,$from);
if($mail)
{
echo "Email sent to ".$to
}
?>

