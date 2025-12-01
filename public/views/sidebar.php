<?php
/**
 * Sidebar Component - Gradify (Mobile Only)
 * 
 * This is a traditional overlay sidebar that slides in from the right.
 * It is only visible on mobile screens (hidden on md and larger screens).
 * It covers the page content with a backdrop and can be closed by:
 * - Clicking the close button
 * - Clicking outside the sidebar (on the backdrop)
 * - Pressing the Escape key
 * 
 * The sidebar is hidden by default and can be toggled via JavaScript.
 * On desktop screens, users should use the desktop navigation in the header.
 */
?>

<!-- Sidebar Backdrop/Overlay (Mobile Only) -->
<!-- Dark semi-transparent overlay that covers the entire page when sidebar is open -->
<!-- Hidden on md and larger screens where desktop navigation is used -->
<div id="sidebar-backdrop" class="md:hidden fixed inset-0 bg-black/50 z-40 hidden transition-opacity duration-300" aria-hidden="true"></div>

<!-- Sidebar Container (Mobile Only) -->
<!-- Slides in from the right, positioned above the backdrop -->
<!-- Hidden on md and larger screens where desktop navigation is used -->
<aside 
    id="sidebar" 
    class="md:hidden fixed right-0 top-0 h-full w-64 bg-white shadow-xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out"
    aria-label="Sidebar navigation"
    aria-hidden="true"
>
    <!-- Sidebar Header -->
    <!-- Contains the close button and optional title -->
    <div class="flex items-center justify-between p-6 border-b border-black/5">
        <h2 class="text-lg font-semibold text-slate-800">Menu</h2>
        <!-- Close Button -->
        <button 
            id="sidebar-close-button"
            class="p-2 rounded-md hover:bg-slate-100 transition-colors"
            aria-label="Close sidebar"
        >
            <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Sidebar Navigation Content -->
    <!-- Navigation links and menu items go here -->
    <nav class="p-6">
        <ul class="space-y-2">
            <!-- Navigation Item Example -->
            <li>
                <a 
                    href="index.php" 
                    class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-700 hover:bg-slate-100 transition-colors"
                >
                    <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1V9.5z"/>
                    </svg>
                    <span class="text-sm font-medium">Home</span>
                </a>
            </li>

            <!-- Navigation Item Example -->
            <li>
                <a 
                    href="calculateCGPA.php" 
                    class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-700 hover:bg-slate-100 transition-colors"
                >
                    <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m0 0l-3-3m3 3l3-3M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-sm font-medium">Calculate CGPA</span>
                </a>
            </li>

            <!-- Navigation Item Example -->
            <li>
                <a 
                    href="table.html" 
                    class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-700 hover:bg-slate-100 transition-colors"
                >
                    <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v4H3V3zm0 7h18v4H3v-4zm0 7h18v4H3v-4z"/>
                    </svg>
                    <span class="text-sm font-medium">Table</span>
                </a>
            </li>

            <!-- Navigation Item Example -->
            <li>
                <a 
                    href="login.php" 
                    class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-700 hover:bg-slate-100 transition-colors"
                >
                    <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1118.879 6.196"/>
                    </svg>
                    <span class="text-sm font-medium">Sign In</span>
                </a>
            </li>

            <!-- Navigation Item Example -->
            <li>
                <a 
                    href="signup.php" 
                    class="flex items-center gap-3 px-4 py-3 rounded-lg text-blue-600 hover:bg-blue-50 transition-colors"
                >
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 10-8 0v4M5 21h14a2 2 0 002-2v-5a4 4 0 00-4-4H7a4 4 0 00-4 4v5a2 2 0 002 2z"/>
                    </svg>
                    <span class="text-sm font-medium">Sign up</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
