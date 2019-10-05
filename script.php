<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto'; 
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

// var_dump($nome);
// var_dump($idade);

if(empty($nome)){
    echo "O nome não pode ser vazio";
    return;
}

if(strlen($nome) < 3){
    echo 'O nome deve conter mais de 3 caracteres';
    return;
}

if(strlen($nome)> 40){
    echo "O nome é muito extenso";
}

if(!is_numeric($idade)){
    echo "Informe um número para idade";
    return;
}
if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'infantil')
            echo "O nadador ".$nome. " Compete na categoria " .$categorias[$i];
        
    }
}
else if($idade >= 13 && $idade <= 18){
    for($i = 0;$i <= count($categorias); $i++ ){
        if($categorias[$i] == 'adolescente')
            echo "O nadador " .$nome. " Compete na categoria adolescente";

    }
    

}
else{
    for($i = 0; $i <= count($categorias) ; $i++){
        if($categorias[$i] == 'adulto')
            echo "O nadador " .$nome. " Compete na categoria Adulto";
    }

}


?>