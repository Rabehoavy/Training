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
 

<div class="card-deck col-8 m-3">
  <?php 
     
     class Voiture {
         public $marques;
         public $modeles;
         public $annees;
         public $images;

         public function __construct($marques, $modeles, $annees, $images)  
          {  
               $this->_marques = $marques;  
               $this->modeles = $modeles;  
               $this->annees = $annees;
               $this->images = $images;  
          } 

          public function afficheCarte()
          {
                echo '<div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="'.$this->images.'" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">'.$this->_marques.'</h5>
                        <h6 class="card-title">'.$this->modeles.'</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                        </div>
                        <div class="card-footer">
                        Sortie : '.$this->annees.'
                        </div>
                      </div>';
          }


     }
     $audi = new Voiture('Audi', 'A4 / S4 B9 (8K)', '1909','audi.jpg');
     $audi->afficheCarte();
     $bmw = new Voiture('Bmw', 'BMW 337', '1916','bmw.png');
     $bmw->afficheCarte();
     $ferrari = new Voiture('Ferrari', 'Ferrari 250', '1947','ferrari.png');
     $ferrari->afficheCarte();


     //Utilisé un composant bootstrap card pour affiché les différents éléments des différents tableau
    

  ?>
  <img src="Assets/images/demo.png" alt="">
</div>



  
</div>

</body>
</html>