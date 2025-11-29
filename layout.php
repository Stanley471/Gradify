<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Gradify' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-slate-600 font-normal">
    <?php include 'header.php'; ?>
    
    <?php if (isset($show_sidebar) && $show_sidebar): ?>
        <?php include 'sidebar.php'; ?>
    <?php endif; ?>

    <main class="<?= isset($main_class) ? $main_class : 'min-h-screen' ?>">
        <?= $content ?? '' ?>
    </main>

    <?php include 'footer.php'; ?>

    <script src="js/mobile-menu.js"></script>
    <?php if (isset($additional_scripts)): ?>
        <?php foreach ($additional_scripts as $script): ?>
            <script src="<?= $script ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>



