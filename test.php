<?php
/**
 * Template/Layout file for reusable page structure
 * Usage example:
 * 
 * $title = 'Page Title';
 * $content = 'path/to/content.php';
 * Note: Sidebar is always included as an overlay (no need to set $show_sidebar)
 * $main_class = 'custom-class'; // optional
 * $additional_scripts = ['js/custom.js']; // optional
 * include 'layout.php';
 */

// Set default values if not provided
$title = $title ?? 'Gradify';
$content = $content ?? '';
// Sidebar is always included as an overlay - no need for $show_sidebar variable
$main_class = $main_class ?? 'min-h-screen';
$additional_scripts = $additional_scripts ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-slate-600 font-normal">
    <?php include 'header.php'; ?>
    
    <!-- Sidebar Component -->
    <!-- Always included as an overlay sidebar that can be toggled open/closed -->
    <?php include 'sidebar.php'; ?>

    <main class="<?= htmlspecialchars($main_class) ?>">
        <?php 
        if (is_string($content) && file_exists($content)) {
            include $content;
        } else {
            echo $content;
        }
        ?>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript for interactive components -->
    <script src="js/mobile-menu.js"></script>
    <script src="js/sidebar.js"></script>
    <?php foreach ($additional_scripts as $script): ?>
        <script src="<?= htmlspecialchars($script) ?>"></script>
    <?php endforeach; ?>
</body>
</html>
