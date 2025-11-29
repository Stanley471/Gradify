<header class="sticky top-0 z-50 bg-white/70 backdrop-blur-md border-b border-black/5">
    <div class="mx-auto max-w-7xl flex items-center justify-between px-6 py-3">
        <!-- Logo and Brand -->
        <div class="flex items-center">
            <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-green-500 text-white flex items-center justify-center rounded-full font-bold text-lg mr-3 ring-1 ring-white/30 shadow-md shadow-indigo-500/20">
                G
            </div>
            <a href="index.php" class="text-xl font-semibold tracking-wide text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-green-500">
                Gradify
            </a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="index.php" class="flex items-center text-sm text-slate-700 hover:text-slate-900 transition-colors">
                <svg class="w-4 h-4 mr-2 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1V9.5z"/>
                </svg>
                Home
            </a>
            <a href="calculateCGPA.html" class="flex items-center text-sm text-slate-700 hover:text-slate-900 transition-colors">
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
            <a href="signup.html" class="flex items-center text-sm text-blue-500 hover:text-blue-600 font-medium transition-colors">
                <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 10-8 0v4M5 21h14a2 2 0 002-2v-5a4 4 0 00-4-4H7a4 4 0 00-4 4v5a2 2 0 002 2z"/>
                </svg>
                Sign up
            </a>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden flex flex-col justify-center items-center w-9 h-9 rounded-md hover:bg-black/5 transition" aria-label="Open navigation menu" aria-expanded="false" aria-controls="mobile-menu">
            <span class="block w-5 h-px bg-slate-800/80 rounded my-0.5"></span>
            <span class="block w-5 h-px bg-slate-800/80 rounded my-0.5"></span>
            <span class="block w-5 h-px bg-slate-800/80 rounded my-0.5"></span>
        </button>
    </div>

    <!-- Mobile Menu Panel -->
    <div id="mobile-menu" class="md:hidden hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white/95 backdrop-blur-sm rounded-lg shadow-xl p-3 w-full max-w-sm mx-auto mt-2">
                <nav class="flex flex-col">
                    <a href="index.php" class="flex items-center gap-3 py-2 px-2 rounded hover:bg-slate-50 transition-colors">
                        <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1V9.5z"/>
                        </svg>
                        <span class="text-slate-700 text-sm">Home</span>
                    </a>
                    <a href="calculateCGPA.html" class="flex items-center gap-3 py-2 px-2 rounded hover:bg-slate-50 transition-colors">
                        <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m0 0l-3-3m3 3l3-3M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-slate-700 text-sm">Calculate CGPA</span>
                    </a>
                    <a href="table.html" class="flex items-center gap-3 py-2 px-2 rounded hover:bg-slate-50 transition-colors">
                        <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v4H3V3zm0 7h18v4H3v-4zm0 7h18v4H3v-4z"/>
                        </svg>
                        <span class="text-slate-700 text-sm">Table</span>
                    </a>
                    <a href="login.php" class="flex items-center gap-3 py-2 px-2 rounded hover:bg-slate-50 transition-colors">
                        <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1118.879 6.196"/>
                        </svg>
                        <span class="text-slate-700 text-sm">Sign In</span>
                    </a>
                    <a href="signup.html" class="flex items-center gap-3 py-2 px-2 rounded hover:bg-slate-50 transition-colors">
                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 10-8 0v4M5 21h14a2 2 0 002-2v-5a4 4 0 00-4-4H7a4 4 0 00-4 4v5a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-blue-500 text-sm font-medium">Sign up</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>


