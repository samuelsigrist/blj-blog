<!<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Blog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="blog.css" />
    </head>
    <body>  
        <h1>Blog von Samuel Sigrist</h1>

        <?php
          $first_name  = $_POST['vorname']    ?? '';
            $second_name = $_POST['nachname']   ?? '';
                $post        = $_POST['post']   ?? '';
                ?>
                <form action="Blog.php" method="post">


            <fieldset>
                <legend class="form-legend">Blogeintrage</legend>
                <div>
                    <p> Blog eintrag </p>
                    Blogeintrag von <?php echo htmlspecialchars($_POST['name']); ?><br>
                    Eintrag:<?php echo $_POST['Blog']; ?><br>
                    <!--Der Eintrag wurde am <?php echo ((int)$_POST['Datum']); ?> veröffentlicht.-->
                </div>
            </fieldset>

            <fieldset>
                <legend class="form-legend">Poste einen Blog eintrag</legend>
                <div 
                    action="action.php" method="post">
                    <p>Ihr Name: <input type="text" name="name" required/></p>
                    <textarea cols="40" rows="5"name="Blog">Ihr Blog eintrag</textarea>
                    <p><input type="submit" /></p> 
                </div>               
            </fieldset>
        </form>
    </body>
</html>

<?php  /*
$servername = "localhost";
$user = "root";
$pw = "";
$db = "blogdb";

$con = new mysqli($servername, $user, $pw, $db);

if($con->connect_error){
    die("Fehler".$con->connect_error);
}
$sql = "INSERT INTO User (Name, Passwort)  VALUES ('Samuel SIgrist', 'es funktioniert');

if ($con->query($sql) === TRUE){
    while($i = $res->fetch_assoc)
    echo "Die Anmeldung war erfolgreich";
}
else {
    echo "Anmeldung fehlgeschlagen" . $con->error;
}
$con->close();
?>



<?php
$servername = "localhost";
$user = "root";
$pw = "";
$db = "blogdb";

$con = new mysqli($servername, $user, $pw, $db);

if($con->connect_error){
    die("Fehler".$con->connect_error);
}
$sql = "INSERT INTO User (Name, Passwort)  VALUES ('Samuel SIgrist', 'es funktioniert');

if ($con->query($sql) === TRUE){
    while($i = $res->fetch_assoc)
    echo "Die Anmeldung war erfolgreich";
}
else {
    echo "Du bist ein Lappen" . $con->error;
}
$con->close();
?> */