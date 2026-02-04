<?php
// Déterminer le chemin relatif à la racine admin
$current_file = str_replace('\\', '/', $_SERVER['PHP_SELF']);
$admin_pos = strpos($current_file, '/admin/');
if ($admin_pos !== false) {
    $relative_path = substr($current_file, $admin_pos + 7);
} else {
    $relative_path = '';
}
$depth = substr_count($relative_path, '/');
$base = str_repeat('../', $depth);
?>
<div class="sidebar">
    <div class="sidebar-header">
        <h1>Admin Panel Controler</h1>
    </div>
    <ul>
        <li><a href="<?php echo $base; ?>dashboard.php">Dashboard</a></li>
        <li><a href="<?php echo $base; ?>login.php">Login</a></li>
        <li><a href="<?php echo $base; ?>sections/home_setting.php">Home Settings</a></li>
        <li><a href="<?php echo $base; ?>sections/projects/project.php">Projects</a></li>
        <li><a href="<?php echo $base; ?>sections/services/service.php">Services</a></li>
        <li><a href="<?php echo $base; ?>messages.php">Messages</a></li>
        <li><a href="<?php echo $base; ?>setting.php">Settings</a></li>
        <li><a href="<?php echo $base; ?>logout.php">Logout</a></li>
    </ul>
</div>