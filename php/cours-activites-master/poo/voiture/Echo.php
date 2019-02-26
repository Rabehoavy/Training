<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ECHO - ça résonne</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Le FRAMEWORK BOOTSTRAP A ÉTÉ AJOUTÉ POUR AVOIR UN BEL AFFICHAGE -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>
<body>
    



<!-- 1- Afficher un bouton rouge (danger) avec comme texte "Ceci est du php" dans un ECHO -->
<button class="btn-danger"><?php echo 'Ceci est du php'; ?></button>
<!-- 2- Afficher une "Dropdowns" de bootstrap avec les prénoms de tous le monde dans la liste "Ando","Mangualam","William","Bruno","Stéphane","Sébastien","Jonathan","Eglantine","Georgine","Bilal" dans un "FOR" et un "ECHO" -->
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php $prenom = ['Ando', 'Mangualam', 'William', 'Bruno', 'Stéphane', 'Sébastien', 'Jonathan', 'Eglantine', 'Georgine', 'Bilal']; 
    for ($i=0; $i < count($prenom); $i++) { 
        echo '<a class="dropdown-item" href="#">'.$prenom[$i].'</a>';
    }
    ?>
  </div>
</div>

</body>
</html>