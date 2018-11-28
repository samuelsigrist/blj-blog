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
            $user = "root";
            $pw = "";
            $con = new PDO('mysql:host=localhost;dbname=blogdb', $user, $pw);

            if($_SERVER['REQUEST_METHOD'] === 'POST') {

                $createdBy  = $_POST['name']    ?? '';
                $title = $_POST['post-title']   ?? '';
                $post = $_POST['post-text']   ?? '';
                /* echo $createdBy . '/' . $postTitle . '/' . $post; */

                $sql = "INSERT INTO posts (created_by, created_at,  post_title, post_text)"; 
                $sql .= " VALUES('" . $createdBy . "', Now(),'" . $title . "', '" . $post. "')";

                $con->exec($sql);
            }
        ?>

        <form action="Blog.php" method="post">
                <fieldset>
                <legend class="form-legend">Poste einen Blog eintrag</legend>
                <div 
                    action="action.php" method="post">
                    <p>Ihr Name: <input type="text" name="name" required/></p>
                    <p>Titel: <input type="text" name="post-title" required/></p>
                    <textarea cols="40" rows="5"name="post-text">Ihr Blog eintrag</textarea>
                    <p>Bild einfügen</p>
                    <p><input type="submit" /></p> 
                </div>               
            </fieldset>
        </form>

        <?php 
            $stmt = $con->query('SELECT * FROM posts');
            foreach($stmt->fetchAll() as $row) {
               
                echo 'Blogpost von:  ' . $row['created_by'] . '<br>';
                echo 'Titel:  ' . $row['post_title'] . '<br>';
                echo  $row['post_text'];
                echo '<hr>';
            }
        ?>

    </body>
</html> 