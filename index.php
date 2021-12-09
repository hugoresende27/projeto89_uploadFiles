<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files em PHP</title>
</head>
<body>
    <form action="upload.php" method="post" enctype='multipart/form-data'>
        <p>
            <input type="text" name="name">
        </p>
        <p>
            <input type="password" name="senha">
        </p>
        <p>
            <p>TODOS OS TIPOS DE FICHEIRO</p>
            <input type="file" name="file">
        </p>
        <p>
            <p>TIPOS DE FICHEIRO application/pdf ou image/jpeg</p>
            <input type="file" name="file" accept="application/pdf, image/jpeg">
        </p>

        <input type="submit" value="Enviar">

    </form>
    
</body>
</html>