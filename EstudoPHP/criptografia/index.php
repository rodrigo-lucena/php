<?php
$data = [
    "nome"=>"Hcode"
];
/*
define('SECRET',pack('a16','senha')); // pack converte uma string em 16bits

$mcrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, SECRET, json_encode($data), MCRYPT_MODE_ECB);

$final = base64_encode($mcrypt); //Converte o código em string evitando corrupção dos dados originais


var_dump($final);

// Agora vamos descriptografar a mensagem:

$string = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, SECRET, base64_decode($final), MCRYPT_MODE_ECB);

var_dump(json_decode($string, TRUE));

// A partir do PHP 7.1, o método acima não funciona
*/

define('SECRET_IV', pack('a16','senha'));
define('SECRET', pack('a16','senha'));

$openssl=openssl_encrypt(json_encode($data), 'AES-128-CBC', SECRET, 0, SECRET_IV);

echo $openssl;

// Agora vamos descriptografar a mensagem:

$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);
var_dump(json_decode($string,TRUE));

?>
 
