<?php
/**
 * Example page showing how to use the reusable layout components
 * 
 * This demonstrates the clean way to create new pages using
 * the header, footer, sidebar, and layout components.
 */

// Set page variables
$title = 'Example Page - Gradify';
$show_sidebar = false; // Set to true if you want sidebar
$main_class = 'min-h-screen px-4 py-10'; // Custom main container classes

// Page content (can be inline or from a separate file)
ob_start();
?>
<div class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold text-slate-800 mb-4">Example Page</h1>
    <p class="text-slate-600 mb-6">
        This is an example page demonstrating how to use the reusable layout components.
    </p>
    
    <div class="bg-white rounded-xl shadow-lg border border-black/5 p-8">
        <h2 class="text-xl font-semibold text-slate-800 mb-4">Features</h2>
        <ul class="space-y-2 text-slate-600">
            <li>✅ Reusable header component</li>
            <li>✅ Reusable footer component</li>
            <li>✅ Optional sidebar component</li>
            <li>✅ Clean, organized Tailwind classes</li>
            <li>✅ Mobile-responsive design</li>
        </ul>
    </div>
</div>
<?php
$content = ob_get_clean();

// Optional: Add additional scripts if needed
$additional_scripts = [
    // 'js/custom-script.js'
];

// Include the layout
include 'layout.php';
?>



