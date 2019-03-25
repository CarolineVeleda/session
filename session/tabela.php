<?php

include_once(upload.php);



$path = "\Users\ivon\Desktop\session\uploads";
$diretorio = dir($path);
 
echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
while($arquivo = $diretorio -> read()){
echo $arquivo."<br />";
//echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
}
$diretorio -> close();





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<a href="pdf.php">BAIXAR PDF</a>
<a href="logout.php">Sair da conta</a>

</body>
</html>