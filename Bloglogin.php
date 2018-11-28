<?php
$errors      = [];
$first_name  = $_POST['vorname']    ?? '';
$second_name = $_POST['nachname']   ?? '';
$username       = $_POST['benutzername']   ?? '';
$password      = $_POST['passwort']  ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if(feld_xy_ungültig) {
    füge_fehler_in_array_ein;
}

if(feld_yz_ungültig) {
    füge_fehler_in_array_ein;
}
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Formular</title>
    <link rel="stylesheet" href="blog.css">
</head>
<body>
    <div class="wrapper">

        <h2 class="form-title">Blog von Samuel</h2>
        <?php if (count($errors) > 0): ?>
            <ul class="errors">
                <?php foreach($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="index.php" method="post">

            <fieldset>
                <legend class="form-legend">login</legend>
                <div class="form-group">
                    <label class="form-label" for="name">Benutzername</label>
                    <input class="form-control" type="text" id="name" name="name">
                </div>
                <br>
                <div class="form-group">
                    <label class="form-label" for="email">Passwort</label>
                    <input class="form-control" type="email" id="email" name="email">
                </div>
                <div class="form-actions">
                <input class="btn btn-primary" type="submit" value="Anmelden">
                <a href="http://www.google.com" class="btn">Anmeldung abbrechen</a>
            </div>
            </fieldset>
        </form>
    </div>
</body>
</html>
