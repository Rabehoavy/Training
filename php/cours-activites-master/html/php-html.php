<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des éléves qui sont présent dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php foreach ($students as $nom => $value) {
         echo '<li>'. $value. '</li>';
     } ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day">
       <?php
       // Variable qui ajoutera l'attribut selected de la liste déroulante
        $selected = '';
        // Parcours du tableau
        for ($i=1; $i<=31; $i++) {
            // Le jour est-il le jour courant?
            if ($i == date('d')) {
                $selected = ' selected="selected"';
            }
            // Affichage de la ligne
            echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
            // Remise à zéro de $selected
            $selected='';
        }
       ?>
       </select>
       <label for="month">Month</label>
       <select  name="month">
       <?php
       $selected = '';
       // Parcours du tableau
       for ($i=1; $i<=12; $i++) {
           // Le mois est-il le mois courant?
           if ($i == date('m')) {
               $selected = ' selected="selected"';
           }
           // Affichage de la ligne
           echo "\t",'<option value="', $i ,'"', $selected ,'>', $i,'</option>',"\n";
           // Remise à zéro de $selected
           $selected='';
       }
       ?>
       </select>
       <label for="year">Year</label>
       <select  name="year"><?php
       
       $selected = '';
// Parcours du tableau
for ($i=2009; $i<=2030; $i++) {
    // L'année est-elle l'année courante ?
    if ($i == date('Y')) {
        $selected = ' selected="selected"';
    }
    // Affichage de la ligne
    echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
    // Remise à zéro de $selected
    $selected='';
}
       ?></select>
     </form>
     <hr>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
     <p>
       Je suis une fille
     </p>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
     <p>
       Je suis un garçon
     </p>
     <!-- Instruction : Afficher ce bloc dans les autres cas -->
     <p>
       Je suis indéfini
     </p>
  </body>
</html>
