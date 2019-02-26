<?php
require 'helper-form.php';
$form = new form();
$d = array(
    'email' => 'contact@test.fr'
);
$form->set($d);
if (isset($_POST['data'])) {
    $errors = array(
        'email' => 'Merci de rentrer un email valide'
     );
     $form->setErrors($errors);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Helpers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form action="formulaire.php" method="post">
        <?php echo $form->input('email','Votre email : ', array('class' => 'champ')); ?>
        <input type="submit" value="Envoyer" />
    </form>
</body>
</html>