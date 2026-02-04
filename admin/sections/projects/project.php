<?php
            
            try{
                $db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../includes/sidebar.css">
    <title>Projects</title>
</head>
<body>
    <div class="container-project">
        <div>
            <?php include __DIR__ .'/../../includes/sidebar.php'; ?>
        </div>
        <div>
            <!-- Main content for Projects page goes here -->
             <button ><a href="add_edit.php">Add project</a></button>
            <!-- Projects listing would be here -->
            <?php
                    $stmt = $db->query('SELECT * FROM projects');
                    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
                    foreach ($projects as $project) {
                        echo '<div class="project-item">';
                        echo '<h2>' . htmlspecialchars($project['title']) . '</h2>';
                        echo '<p>' . htmlspecialchars($project['description']) . '</p>';
                        echo '<a href="add_edit.php?id=' . $project['id'] . '">Edit</a> | ';
                        echo '<a href="delete.php?id=' . $project['id'] . '" onclick="return confirm(\'Are you sure you want to delete this project?\')">Delete</a>';
                        echo '</div>';
                    };
            ?>
        </div>  
    </div>
    

</body>
</html>
