<?php


class Arquivo{
    private $filename;
    
    public function setFilename($filename){
        $this->filename = $filename;
    }
    public function getFilename(){
        return $this->filename;
    }

    public function __construct($filename = ""){
        $this->setFilename($filename);
    }
    public static function mkdir($folder){
        if (!is_dir($folder)){ // verificar se diretório existe
            mkdir($folder); // Criar diretório
            return "Diretório criado com sucesso: ".$folder;
        } else{
            return "Já existe o diretório";
        }
    }
    public static function rmdir($folder){
        if (is_dir($folder)){ // verificar se diretório existe
            rmdir($folder); // Excluir diretório
            return "Diretório excluído com sucesso: ".$folder;
        } else{
            return "O diretório ".$folder." não existe!";
        }
    }
    public static function getScan($folder){ 
        $scan = scandir($folder);
        return $scan;
    }
    public function open() {
        
        ;
    }
}

?>

