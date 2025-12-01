<header class="sticky top-0 z-50 bg-white/70 backdrop-blur-md border-b border-black/5">
    <div class="mx-auto max-w-7xl flex items-center justify-between px-6 py-3">
        <!-- Left: Logo and Brand -->
        <div class="flex items-center">
            <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-green-500 text-white flex items-center justify-center rounded-full font-bold text-lg mr-3 ring-1 ring-white/30 shadow-md shadow-indigo-500/20">
                G
            </div>
            <a href="index.php" class="text-xl font-semibold tracking-wide text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-green-500">
                Gradify
            </a>
        </div>

        <!-- Right: Desktop Navigation + Mobile Sidebar Toggle -->
        <div class="flex items-center space-x-2">
            <!-- Desktop Navigation (md and up) -->
            <nav class="hidden md:flex items-center space-x-6">
                <a href="index.php" class="flex items-center text-sm text-slate-700 hover:text-slate-900 transition-colors">
                    <svg class="w-4 h-4 mr-2 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1V9.5z"/>
                    </svg>
                    Home
                </a>
                <a href="calculateCGPA.php" class="flex items-center text-sm text-slate-700 hover:text-slate-900 transition-colors">
                    <svg class="w-4 h-4 mr-2 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m0 0l-3-3m3 3l3-3M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Calculate CGPA
                </a>
                <a href="table.html" class="flex items-center text-sm text-slate-700 hover:text-slate-900 transition-colors">
                    <svg class="w-4 h-4 mr-2 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v4H3V3zm0 7h18v4H3v-4zm0 7h18v4H3v-4z"/>
                    </svg>
                    Table
                </a>
                <a href="signup.php" class="flex items-center text-sm text-blue-500 hover:text-blue-600 font-medium transition-colors">
                    <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 10-8 0v4M5 21h14a2 2 0 002-2v-5a4 4 0 00-4-4H7a4 4 0 00-4 4v5a2 2 0 002 2z"/>
                    </svg>
                    Sign up
                </a>
            </nav>

            <!-- Sidebar Toggle Button (Mobile Only, right side) -->
            <!-- 
                 Hamburger menu button that opens/closes the overlay sidebar.
                 Only visible on mobile screens (hidden on md and larger screens).
                 Placed on the right to avoid clashing with the logo on the left.
                 The sidebar is controlled by js/sidebar.js
            -->
            <button 
                id="sidebar-toggle-button" 
                class="md:hidden p-2 rounded-md hover:bg-black/5 transition-colors"
                aria-label="Toggle sidebar"
                aria-expanded="false"
                aria-controls="sidebar"
            >
                <svg class="w-6 h-6 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
</header>


