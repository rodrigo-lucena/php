<!--
<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">
	<button type="submit">Send</button>

</form>
-->

<?php
require_once 'config.php';
/*
// Criando e excluindo diretórios
$filename = "images";

if (!is_dir($filename)){ // verificar se diretório existe
    mkdir($filename); // Criar diretório
    echo "Diretório criado com sucesso: $filename";
} else{
    rmdir($filename); //remover diretório
    echo "Já existe o diretório: $filename foi removido";
    }

// Consultando informações de arquivos e diretórios
$images = scandir("images"); // Retorna array com lista de arquivos e diretórios dentro da pasta de nome que entrou como parâmetro
//var_dump($images);
$data = array();
foreach ($images as $key=>$value){
    if (!in_array($value, array(".",".."))){ // se é falso que $value é igual a um dos valores "." ou "..", executa o código
        echo $key."=>".$value."<br>"; 
        $filename = "images".DIRECTORY_SEPARATOR.$value;
        $info = pathinfo($filename); // retorna array com as informações do endereço fornecido por parâmetro.
        $info["size"]=filesize($filename); // insere no array $info, o tamanho do arquivo
        $info["modified"]=date("d/m/Y H:i:s", filemtime($filename)); // insere no array $info a data de modificação do arquivo
        $info["url"]='http://localhost/Eclipse/Git/php/EstudoPHP/Dir/'.str_replace("\\","/",$filename);
        array_push($data, $info);
    }
}

echo json_encode($data, JSON_UNESCAPED_SLASHES); // O segundo parâmetro evita exibição de barras erradas.

// Exemplo de uso de in_array
$frutas = array("manga","banana","coco","amora");
if (in_array("coc",$frutas)){
    echo "1";
} else{
    echo "0";
}



//Criando arquivos

$file = fopen("log.txt","a+");

fwrite($file, date("Y-m-d H:i:s")."\r\n");

fclose($file);

echo "Arquivo criado";

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
$headers = array();
foreach ($usuarios[0] as $key => $value){
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(",", $headers)."\r\n");

//echo implode(",", $headers); // implode() converte o array em uma única string, em que o separador é dado pelo primeiro parâmetro de entrada.

foreach ($usuarios as $row){
    $data = array();
    foreach ($row as $key => $value){
        array_push($data,$value);
    }
    fwrite($file, implode(",", $data)."\r\n");
}

fclose($file);

// excluindo arquivo

$file = fopen("teste.txt", "w+");
fclose($file);

unlink("teste.txt"); // Se colocar o nome da variável $file, o arquivo não será apagado, somente a variável.

foreach (scandir("images") as $item){
    if (!in_array($item, array(".",".."))){
        unlink("images/".$item);
    }
}

// Leitura de arquivos


$filename = "usuarios.csv";

if (file_exists($filename)) {
    $data=array();
    $file = fopen($filename, "r");
    $headers = explode(",",fgets($file)); // puxa primeira linha do arquivo a partir da função fgets() e deixa o cursor na segunda linha (pode usar ele novamente para pegar as demais linhas). A função explode() transforma a linha em array().
    while ($row = fgets($file)) {
        $rowData = explode(",", $row);
        $linha = array();
        for ($i = 0; $i < count($headers); $i++) {
            $linha[$headers[$i]]=$rowData[$i];
            
        }
        array_push($data,$linha);
    }
    var_dump($headers);
    fclose($file);
    
}
//var_dump($data);
//echo json_encode($data);


// Leitura de imagens, convertendo para base64 e usando no código html

$filename = "php7.png";

$base64 = base64_encode(file_get_contents($filename)); // file_get_contents() varre todo o arquivo e retorna o conteúdo em binário. Para convertê-lo em texto, utiliza-se a função base64_encode()

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode = "data:".$mimetype.";base64,".$base64;
//usar os comandos do fim do arquivo (após o fim do fechamento da tag php)  

// upload de arquivos

IF ($_SERVER["REQUEST_METHOD"]==="POST"){
    $file = $_FILES["fileUpload"];
    if ($file["error"]){
        throw new Exception("Error: ".$file["error"]);
    }
    $dirUploads = "uploads";
    if(!is_dir($dirUploads)){
        mkdir($dirUploads);
    }
    if(move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])){
        echo "Upload realizado com sucesso!";
        
    }else{
        throw new Exception("Não foi possível realizar o upload");
    }
}

// download
$link = "https://conteudo.imguol.com.br/c/home/layout/camaleao/web/logo.png"; // endereço da imagem

$content = file_get_contents($link); // Aceita também endereço local onde está o arquivo.

$parse = parse_url($link); // Retorna um array com algumas informações sobre esse endereço e arquivo.
$parseBase = basename($parse["path"]); // Retorna somente o nome do arquivo e sua extensão a partir de seu path.

$file = fopen($parseBase, "w+"); // Cria arquivo com nome igual ao do arquivo original
fwrite($file, $content); // Adiciona nesse arquivo o conteúdo $content e esse arquivo é reconstruído na pasta onde ele foi salvo.

fclose($file);



var_dump($parseBase);

// mover arquivo 

$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

if (!file_exists($dir1.DIRECTORY_SEPARATOR.$filename)){
    $file = fopen($dir1.DIRECTORY_SEPARATOR.$filename, "w+");
    fwrite($file, date("Y-m-d H:i:s"));
    fclose($file);
}

rename($dir1.DIRECTORY_SEPARATOR.$filename, $dir2.DIRECTORY_SEPARATOR.$filename); // arquivo said do diretório 1 (primeiro parâmetro) e vai para diretório 2 (segundo parâmetro). 
// rename pode ser usado também só para renomear o nome do arquivo. Para isso, o primeiro e o segundo parâmetro terão o mesmo endereço, mas com nomes diferentes.


$cep = "03621010";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Espera-se um retorno
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // validação desativada
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response, true);
print_r($data);


// cookies

$data = array("empresa"=>"Hcode");
setcookie("nome_cookie", json_encode($data), time()+3600);

echo "ok";
*/
if (isset($_COOKIE["nome_cookie"])) {
    $obj = json_decode($_COOKIE["nome_cookie"]);
    echo $obj->empresa;
}


?>
<!-- 
<a href="<?=$base64encode?>" target="_blank">Link Para Imagem</a>
<img src="<?=$base64encode?>"> 
-->

