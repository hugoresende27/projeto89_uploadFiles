<?php

    // echo 'UPLOAD';
    // echo '<pre>';
    // print_r($_POST);#SUPER GLOBAL $_POST
    // print_r($_FILES);
    /*
UPLOAD
Array
(
    [name] => wirolo1283@geekale.com
    [senha] => 1234
)
Array
(
    [file] => Array
        (
            [name] => ss423.png
            [type] => image/png #A media type (Multipurpose Internet Mail Extensions or MIME type) indicates nature/ format
            [tmp_name] => C:\Users\Hugo\AppData\Local\Temp\php7D43.tmp #localhost, poderia ser num servidor online
            [error] => 0
            [size] => 31504

    */         

    //TRATAR O FICHEIRO
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_temporaryName = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];

    $tmp = explode('.',$_FILES['file']['name']);
    $file_extension = $tmp[count($tmp)-1];//para ir sempre buscar o último index depois do ., -1 pra não ficar offset no count, index 0 tbm conta

    echo 'EXTENSION::'.$file_extension.'<br>';
    echo 'FILE SIZE::'.$file_size.'<br>';

    //VERIFICAR SE EXTENSÃO É PERMITIDA
    $listExtensions = array('pdf','jpg','jpeg');//array com a lista de extensões

    #if ($file_extension != 'pdf' && $file_extension != 'jpeg'){
    if (!in_array($file_extension, $listExtensions)){ //not in array, função 
        die('ERRO EXTENSÂO INVÁLIDA!');
    }

    //VERIFICAR SE TEM TAMANHO MÁXIMO > PERMITIDO
    if($file_size>500000){ //0.5 megas 1 mg = 1000000 bytes
        die('ERRO TAMANHO MUITO GRANDE!');
    }


    //FINALIZAR O UPLOAD DO FICHEIRO
    move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.$_FILES['file']['name']);
    // echo '<pre>';
    // print_r($_FILES);
    // die();


    echo 'File uploaded with success!';
    ?>
    <a href="index.php">voltar</a>