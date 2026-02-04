<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/sidebar.css">
    
    <title>Document</title>
</head>
<body>
    <div>
        <?php include __DIR__ .'/includes/sidebar.php'; ?>
    </div>
    <h1>Admin Dashboard</h1>
    <p>Welcome to the admin dashboard. Here you can manage the application settings and user accounts.</p>
    <div>
        <a href="settings.php">Projet</a>
        <a href="users.php">User Management</a>
        <a href="Messages.php">Message</a>

    </div>
</body>
</html>