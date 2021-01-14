<?php

/*
// Criando imagem
header("Content-Type: image/png");

$image = imagecreate(256, 256);
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso PHP", $red);
imagepng($image);
imagedestroy($image);



// Criando a partir de uma imagem

$image = imagecreatefromjpeg("certificado.jpg");

$titlecolor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titlecolor);
imagestring($image, 5, 440, 350, "Divanei Aparecido", $titlecolor);
imagestring($image, 5, 450, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titlecolor);

header("Content-type: image/jpeg");
//imagejpeg($image, "certificado-".date("Y-m-d").".jpg",10); // Se adicionar somente primeiro parâmetro, a imagem vai pra tela, se colocar o segundo parâmetro a imagem não vai pra tela e um arquivo é salvo na pasta. O 3o parâmetro é a qualidade da imagem, variando de 0 a 100. 
imagejpeg($image);
imagedestroy($image);

// fontes externas

// google app fontes ou fazer pesquisa no google sobre fonts download ou google.com/fonts

$image = imagecreatefromjpeg("certificado.jpg");

$titlecolor = imagecolorallocate($image, 0, 0, 0);

imagettftext($image, 32, 0, 320, 250, $titlecolor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf","CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titlecolor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Divanei Aparecido");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titlecolor);

header("Content-type: image/jpeg");
imagejpeg($image); // Se adicionar somente primeiro parâmetro, a imagem vai pra tela, se colocar o segundo parâmetro a imagem não vai pra tela e um arquivo é salvo na pasta. O 3o parâmetro é a qualidade da imagem, variando de 0 a 100.
imagedestroy($image);

// Gerando Thumbnail
//header("Content-type: image/jpeg");
$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

//$data = getimagesize($file); // puxa informações sobre o arquivo
//$width = $data[0];
//$height = $data[1];

list($old_width,$old_height) = getimagesize($file); // dentro de list() estão as variáveis criadas que vão receber na sequência os valores do array que vem depois do sinal de igualdade (getimagesize($file))
$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($file);
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);
imagejpeg($new_image);
imagedestroy($new_image);
imagedestroy($old_image);
*/
//Gerando boleto - não faz parte da biblioteca GD








?>