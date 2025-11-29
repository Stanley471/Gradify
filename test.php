<?php
/**
 * Template/Layout file for reusable page structure
 * Usage example:
 * 
 * $title = 'Page Title';
 * $content = 'path/to/content.php';
 * $show_sidebar = false; // optional
 * $main_class = 'custom-class'; // optional
 * $additional_scripts = ['js/custom.js']; // optional
 * include 'layout.php';
 */

// Set default values if not provided
$title = $title ?? 'Gradify';
$content = $content ?? '';
$show_sidebar = $show_sidebar ?? false;
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
    
    <?php if ($show_sidebar): ?>
        <?php include 'sidebar.php'; ?>
    <?php endif; ?>

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

    <script src="js/mobile-menu.js"></script>
    <?php foreach ($additional_scripts as $script): ?>
        <script src="<?= htmlspecialchars($script) ?>"></script>
    <?php endforeach; ?>
</body>
</html>
