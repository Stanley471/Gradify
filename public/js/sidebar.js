(function() {
    // Get references to sidebar elements
    const sidebar = document.getElementById('sidebar');
    const sidebarBackdrop = document.getElementById('sidebar-backdrop');
    const sidebarToggleButton = document.getElementById('sidebar-toggle-button');
    const sidebarCloseButton = document.getElementById('sidebar-close-button');

    // Exit early if sidebar elements don't exist
    if (!sidebar || !sidebarBackdrop) return;

    /**
     * Check if we're on a mobile screen (below md breakpoint)
     * @returns {boolean} True if on mobile, false if on desktop
     */
    function isMobileScreen() {
        return window.innerWidth < 768; // md breakpoint is 768px
    }

    /**
     * Opens the sidebar
     * - Shows the backdrop overlay
     * - Slides the sidebar in from the left
     * - Updates ARIA attributes for accessibility
     * - Prevents body scrolling when sidebar is open
     */
    function openSidebar() {
        // Show backdrop
        sidebarBackdrop.classList.remove('hidden');
        sidebarBackdrop.setAttribute('aria-hidden', 'false');
        
        // Slide sidebar in (remove translate-x-full to show it from the right)
        sidebar.classList.remove('translate-x-full');
        sidebar.setAttribute('aria-hidden', 'false');
        
        // Update toggle button ARIA attributes
        if (sidebarToggleButton) {
            sidebarToggleButton.setAttribute('aria-expanded', 'true');
        }
        
        // Prevent body scrolling when sidebar is open
        document.body.style.overflow = 'hidden';
        
        // Focus management: focus the close button for keyboard navigation
        if (sidebarCloseButton) {
            sidebarCloseButton.focus();
        }
    }

    /**
     * Closes the sidebar
     * - Hides the backdrop overlay
     * - Slides the sidebar out to the left
     * - Updates ARIA attributes for accessibility
     * - Restores body scrolling
     */
    function closeSidebar() {
        // Hide backdrop
        sidebarBackdrop.classList.add('hidden');
        sidebarBackdrop.setAttribute('aria-hidden', 'true');
        
        // Slide sidebar out (add translate-x-full to hide it off the right side)
        sidebar.classList.add('translate-x-full');
        sidebar.setAttribute('aria-hidden', 'true');
        
        // Update toggle button ARIA attributes
        if (sidebarToggleButton) {
            sidebarToggleButton.setAttribute('aria-expanded', 'false');
        }
        
        // Restore body scrolling
        document.body.style.overflow = '';
        
        // Return focus to the toggle button for keyboard navigation
        if (sidebarToggleButton) {
            sidebarToggleButton.focus();
        }
    }

    /**
     * Toggles the sidebar open/closed state
     */
    function toggleSidebar() {
        // Check if sidebar is currently open (not translated off-screen to the right)
        const isOpen = !sidebar.classList.contains('translate-x-full');
        
        if (isOpen) {
            closeSidebar();
        } else {
            openSidebar();
        }
    }

    // Open sidebar when toggle button is clicked
    if (sidebarToggleButton) {
        sidebarToggleButton.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent event bubbling
            toggleSidebar();
        });
    }

    // Close sidebar when close button is clicked
    if (sidebarCloseButton) {
        sidebarCloseButton.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent event bubbling
            closeSidebar();
        });
    }

    // Close sidebar when clicking on the backdrop
    sidebarBackdrop.addEventListener('click', function(e) {
        // Only close if clicking directly on the backdrop (not on child elements)
        if (e.target === sidebarBackdrop) {
            closeSidebar();
        }
    });

    // Close sidebar when pressing Escape key
    document.addEventListener('keydown', function(e) {
        // Check if sidebar is open and Escape key was pressed
        if (e.key === 'Escape' && !sidebar.classList.contains('-translate-x-full')) {
            closeSidebar();
        }
    });

    // Close sidebar when clicking on a navigation link (optional - for better UX)
    const sidebarLinks = sidebar.querySelectorAll('nav a');
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Close sidebar after a short delay to allow navigation
            setTimeout(() => {
                closeSidebar();
            }, 100);
        });
    });

    /**
     * Handle window resize - close sidebar if resized to desktop size
     * This ensures the sidebar doesn't stay open when switching from mobile to desktop view
     */
    let resizeTimer;
    window.addEventListener('resize', function() {
        // Debounce resize events
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // If resized to desktop size and sidebar is open, close it
            if (!isMobileScreen() && !sidebar.classList.contains('translate-x-full')) {
                closeSidebar();
            }
        }, 150);
    });
})();

