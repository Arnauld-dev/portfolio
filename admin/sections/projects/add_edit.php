<?php
        try{
            $db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        };
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $title = $_POST['title'];
       $description = $_POST['description'];
       $image = $_POST['image'];
       $link_git = $_POST['link_git'];
       $link_live = $_POST['link_live'];
       $category = $_POST['category'];

       $stmt = $db->prepare('INSERT INTO projects (title, description, image, link_git, link_live, category) VALUES (?, ?, ?, ?, ?, ?)');
       $stmt->execute([$title, $description, $image, $link_git, $link_live, $category]);

       header('Location: add_edit.php');
       exit();
   };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../includes/sidebar.css">
    <title>Add/Edit Project</title>
</head>
<body>
    <div class="container-project">
        <div>
        <?php include __DIR__ .'/../../includes/sidebar.php'; ?>

        </div>
        <div class="main-content">
            <form action="" method="POST">
                <label for="title" >Title:</label>
                <input type="text" id="title" name="title" required ><br>

                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea><br>
                <label for="link_git">GitHub Link:</label>
                <input type="text" id="link_git" name="link_git"><br>

                <label for="link_live">Live Link:</label>
                <input type="text" id="link_live" name="link_live"><br>

                <label for="category">Category:</label>
                <input type="text" id="category" name="category"><br>
                <label for="image">Image URL:</label>
                <input type="file" id="image" name="image"><br>

                <button type="submit">Save Project</button>
            </form>
        </div>
    </div>

</body>
</html>
