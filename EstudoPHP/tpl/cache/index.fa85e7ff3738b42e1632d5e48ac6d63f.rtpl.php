<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Olá! <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></title>
</head>
<body>
<p> Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
</body>
</html>