<?php 

include_once("conexao.php");

$emailxyz = filter_input(INPUT_POST,"email-XYZ", FILTER_SANITIZE_EMAIL);
$describeabc = filter_input(INPUT_POST,"describe-ABC", FILTER_SANITIZE_STRING);



echo "email: $emailxyz <br/>"; 
echo "texto: $describeabc <br/>"; 



?>