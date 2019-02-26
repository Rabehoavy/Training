<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Newsletter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form action="newsletter.php" method="post">
    <input type="email" name="email" id="email">
    <input type="submit" value="S'inscrire">
    </form>
    <?php
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    if (isset($_POST['email'])) {
        $txt = $_POST['email'];
        fwrite($myfile, $txt."\n");
        fclose($myfile);
    }
    ?>
</body>
</html>