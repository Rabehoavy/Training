<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulaire</title>

</head>
<body>
    
<!-- ///////////////////////// UTILISATION DU PHP pour l'affichage du champs //////////// !-->


<form action="explication.php" method="post">
    Nom : <input type="text" name="nom"><br>
          <input type="submit">
</form>


<!--  Récupération de la valeur qui se trouve dans le champ avec le "name" de l'input!-->
Bonjour <?php if (isset($_POST["nom"])) {
    echo $_POST["nom"];
} ?> <br>

<!-- ///////////////////////// UTILISATION DU JAVASCRIPT pour l'affichage du champs //////////// !-->

<h2>Récupérer un élement grace à son id</h2>

<p id="intro">Hello World!</p> 
<p>This example demonstrates the <b>getElementsById</b> method.</p>

<p id="demo"></p>

<script>

    // Je récupère l'élément qui à l'id "intro" pour pouvoir accéder àtoutes ces informations via la variable "myElement"

    var myElement = document.getElementById("intro");


    // Ici je récupère l'élément qui a l'id "demo" et 
    // je lui assigne une valeur à son innerHTML qui permet de remplir l'élément html avec ce qu'on lui donne en chaine de caractère
    // Tout à la fin de la ligne 42, je récupère le contenu de l'élément "myElement" qui a pour ID "intro" et avec le innerHTML j'affiche son contenu
    document.getElementById("demo").innerHTML = "The text from the intro paragraph is " + myElement.innerHTML;

</script>










</body>
</html>