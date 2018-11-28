<!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="blog.css">
    <script src="main.js"></script>
</head>
<body>  
<h1>Blog von Samuel Sigrist</h1>

<?php
$first_name  = $_POST['vorname']    ?? '';
$second_name = $_POST['nachname']   ?? '';
$post        = $_POST['post']   ?? '';
?>
<form action="index.php" method="post">

<fieldset>
    <legend class="form-legend">Poste einen Blog eintrag</legend>
    <div class="form-group">
        <label class="form-label" for="name">Benutnamezername</label>
        <input class="form-control" type="text" id="name" name="name">
    </div>
    <br>
    <div class="form-group">
        <label class="form-label" for="textarea">Blog eintrag</label>
        <input class="form-control" type="textarea" id="blogeintrag" name="blogeintrag">
    </div>
    <div class="form-actions">
    <input class="btn btn-primary" type="submit" value="Senden">
</div>
</fieldset>
</form>


</body>
</html>
