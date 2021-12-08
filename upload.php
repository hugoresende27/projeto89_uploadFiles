<?php

    echo 'UPLOAD';
    echo '<pre>';
    print_r($_POST);#SUPER GLOBAL $_POST
    print_r($_FILES);
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
    ?>
    <a href="index.php">voltar</a>