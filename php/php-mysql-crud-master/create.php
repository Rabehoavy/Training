<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reunion_island";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST['name']) && isset($_POST['difficulty']) && isset($_POST['distance']) && isset($_POST['duration']) && isset($_POST['height_difference'])) {
        $sql = $conn->prepare('INSERT INTO hiking (name, difficulty, distance, duration, height_difference)
    VALUES (:name, :difficulty, :distance, :duration, :height_difference)');
        $sql->execute(array('name' => $_POST['name'], 'difficulty' => $_POST['difficulty'], 'distance' => $_POST['distance'], 'duration' => $_POST['duration'], 'height_difference' => $_POST['height_difference']));
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
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-primary bg-light">
  <a class="navbar-brand" href="#">Randonnée</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="read.php">Liste des données <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Ajouter des données</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	<div class="row">
      <div class="offset-md-3 col-md-2">
		<h1>Ajouter</h1>
		<form action="create.php" method="post" class="form-horizontal">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" name="name" value="">
			</div>

			<div class="form-group">
				<label for="difficulty">Difficulté</label>
				<select name="difficulty" class="form-control">
					<option value="très facile">Très facile</option>
					<option value="facile">Facile</option>
					<option value="moyen">Moyen</option>
					<option value="difficile">Difficile</option>
					<option value="très difficile">Très difficile</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="distance">Distance</label>
				<input type="text" class="form-control" name="distance" value="">
			</div>
			<div class="form-group">
				<label for="duration">Durée</label>
				<input type="duration" class="form-control" name="duration" value="">
			</div>
			<div class="form-group">
				<label for="height_difference">Dénivelé</label>
				<input type="text" class="form-control" name="height_difference" value="">
			</div>
			<button class="btn btn-primary" type="submit" name="button">Envoyer</button>
		</form>
	</div>
	</diV>
</body>
</html>
