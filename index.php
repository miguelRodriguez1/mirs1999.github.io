<?php
$to="mirodriguezs@academia.usbbog.edu.co";
$subject="asunto";
$menssage="mensaje";
$from="mirodriguezs@academia.usbbog.edu.co";
$headers="From:" . $from;
$mail=mail($to,$subject,$menssage, $headers ,$from);
if($mail)
{
echo "Email sent to ".$to;
}
?>

