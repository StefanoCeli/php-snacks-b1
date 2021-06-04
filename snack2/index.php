<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$name= $_GET['name'];
$mail= $_GET['mail'];
$age= $_GET['age'];

if(empty($name) || empty($mail) || empty($age)){
    echo 'Errore';}
elseif(strlen($name) > 3){
    echo 'Erroe: nome troppo corto';
}elseif( strpos($mail, '.') === false || strpos($mail, '@') === false){
    echo 'Errore: mail non valida';
}elseif(!is_numeric($age)){
    echo 'Erroe: eta non valida';
}else{
    echo "Accesso riuscito";
}
?>
    
</body>
</html>