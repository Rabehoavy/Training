<!-- Renseigner sur comment se connecter la base de données via le lien https://www.w3schools.com/php/php_mysql_connect.asp -->
<!-- Ensuite placer le code concernant la connexion tout en haut avant le DOCTYPE -->
<!-- Créer la table utilisateur https://www.w3schools.com/php/php_mysql_create_table.asp -->
<!-- Insérer des données dans la table utilisateur https://www.w3schools.com/php/php_mysql_insert.asp -->

<!-- Connection base de données -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simplon";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])) {
        $sql = $conn->prepare('INSERT INTO utilisateur (Nom, Prenom, Email)
    VALUES (:nom, :prenom, :email)');
        $sql->execute(array('nom' => $_POST['nom'], 'prenom' => $_POST['prenom'], 'email' => $_POST['email']));
        // use exec() because no results are returned
        echo "<div class='text-success'>New record created successfully</div>";
    }
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Utilisaeur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    
    <!--Créer votre formulaire pour ajouter les utilisateurs ICI-->
    <div class="row">
      <div class="offset-md-3 col-md-2">
        <h3>INSCRIPTION</h3>
      </div>
      <div class="col-md-3">
        <form class="form-horizontal" action="utilisateur.php" method="post">
          <div class="form-group">
            <label for="nom">Nom*:</label>
            <input class="form-control" type="text" name="nom" id="nom" placeholder="Enter votre Nom" required>
          </div>
          <div class="form-group">
            <label for="prenom">Prénom*:</label>
            <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Enter votre Prénom" required>
          </div>
          <div class="form-group">
            <label for="email">Email*:</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="Enter votre Email" required>
          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
      </div>
    </div>


      <?php
echo "<div class='row'><div class='offset-md-3 col-md-6'><table  class='table table-dark'>";
echo "<tr><th scope='col'>Nom</th><th scope='col'>Prénom</th><th scope='col'>Email</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simplon";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT nom, prenom, email FROM utilisateur"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table></div></div>";
?>


</body>
</html>