<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    



<!-- 1- Afficher une chaine de caractère dans un ECHO -->
<?php echo "Helloword <br>"; ?>
<!-- 2- Afficher une variable dans un ECHO -->
<?php 
$hello = 'Helloword2 <br>';
echo $hello; 
?>
<!-- 3-  Afficher une chaine de caractère + une variable dans le même ECHO -->
<?php 
echo 'Helloword '.$hello; 
?>
<!-- 4-  Afficher une valeur d'un tableau dans un ECHO -->
<?php 
$hello = array('nom' => 'RAVEL', 'prenom' => 'Ando', 'email' => 'contact@gmail.com');
foreach ($hello as $key => $value) {
   echo $key.' : '.$value.'<br>';
} 
?>
<!-- 5-  Afficher une valeur d'un tableau + une chaine de caractere ans un ECHO -->
<?php 
foreach ($hello as $key => $value) {
   echo $key.' : '.$value.' utilisateur<br>';
} 
?>
<!-- 6- Afficher une valeur d'un tableau + une variable ans un ECHO -->
<?php 
$bonjour = 'ok';
foreach ($hello as $key => $value) {
   echo $key.' : '.$value.' '.$bonjour.'<br>';
} 
?>

</body>
</html>