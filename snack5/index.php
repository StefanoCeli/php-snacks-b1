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

$paragrafo="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi autem optio magni atque voluptatum tempora architecto. Aliquam quae dignissimos exercitationem, eaque ipsum eveniet neque dicta esse recusandae voluptatum delectus cum velit asperiores tempora fuga aut molestiae corrupti quam. Ullam sequi qui totam! Quasi quos inventore quas recusandae numquam accusantium dicta.";
var_dump($paragrafo);

$elenco= explode('.',$paragrafo);
var_dump($porzione);

?>

<ul>
   <?php 
     foreach($elenco as $valore){
         if(!empty($valore)){
   ?>
    <li><?php echo $valore ?>.</li>
    <?php }
    } ?>
</ul>

</body>
</html>