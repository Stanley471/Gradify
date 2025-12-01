<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Gradify' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-slate-600 font-normal">
    <!-- Header Component -->
    <!-- 
         Includes navigation, logo, and sidebar toggle button.
         - Desktop navigation: Visible on md and larger screens
         - Sidebar toggle button: Onbly visible on mobile screens (hidden on desktop)
         - The sidebar toggle button opens the overlay sidebar on mobile devices
    -->
    <?php include 'header.php'; ?>
    
    <!-- Sidebar Component (Mobile Only) -->
    <!-- 
         Always included as an overlay sidebar that can be toggled open/closed.
         The sidebar is ONLY visible on mobile screens (hidden on md and larger screens).
         On desktop, users should use the desktop navigation in the header.
         
         The sidebar slides in from the left and covers the page content with a backdrop.
         It can be closed by:
         - Clicking the close button (X) in the sidebar
         - Clicking outside the sidebar (on the backdrop)
         - Pressing the Escape key
         - Clicking on any navigation link inside the sidebar
         - Automatically closes when window is resized to desktop size
         
         The sidebar is hidden by default and only appears when the toggle button is clicked.
         Controlled by js/sidebar.js which is included at the bottom of this layout.
    -->
    <?php include 'sidebar.php'; ?>

    <main class="<?= isset($main_class) ? $main_class : 'min-h-screen' ?>">
        <?= $content ?? '' ?>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript for interactive components -->
    <!-- 
         Mobile menu functionality - handles the mobile navigation dropdown
    -->
    <script src="js/mobile-menu.js"></script>
    <!-- 
         Sidebar functionality - handles the overlay sidebar toggle, backdrop clicks, and keyboard navigation
         This script is required for the sidebar to work properly.
    -->
    <script src="public/js/sidebar.js"></script>
    <?php if (isset($additional_scripts)): ?>
        <?php foreach ($additional_scripts as $script): ?>
            <script src="<?= $script ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>



