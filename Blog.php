<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Blog</title>
        <link rel="stylesheet" type="text/css" media="screen" href="Blog.css" />
    </head>
    <body>
    <div class = wrapper> 
        <h1>Blog von Samuel Sigrist</h1>

        <?php 
            $user = "root";
            $pw = "";
            $con = new PDO('mysql:host=localhost;dbname=blogdb', $user, $pw);
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $createdBy  = $_POST['name']    ?? '';
                $title = $_POST['post-title']   ?? '';
                $post = $_POST['post-text']   ?? '';
                $link = $_POST['link']   ?? '';

                $sql = "INSERT INTO posts (created_by, created_at,  post_title, post_text, link)"; 
                $sql .= " VALUES('" . $createdBy . "', Now(),'" . $title . "', '" . $post. "','" . $link . "')";

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
                    <textarea cols="40" rows="5"name="post-text">Ihr Blog Eintrag</textarea>
                    <p>Link einfügen: <input type="text" name="link" /></p></p>
                    <input class="btn" type="submit" value="Senden"/>
                </div>               
            </fieldset>
        </form>
        <?php   $stmt = $con->query('SELECT * FROM posts');
                foreach($stmt->fetchAll() as $row){
                echo 'Blogpost von:  ' . $row['created_by'] . '<br>';
                echo 'Titel:  ' . $row['post_title'] . '<br>';
                echo  $row['post_text'] . '<br>';
                echo 'Veröffentlicht am: ' . $row['created_at']. '<br>';
                echo '<img src="' . $row['link']  . '" alt="Bild" onError="this.src="https://images.obi.ch/product/DE/1500x1500/609120_2.jpg";>';
                echo '<hr>';}
                
        ?>
        
        <form method="post" action="/php/BLJ-Blog/Bloglinks.php">
            <button class="btn" type="submit">Weitere Blogs</button>
        </form>
    </div>   
    </body>
</html> 