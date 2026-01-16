// Supplemental hamburger menu enhancements
// This script works WITH Bootstrap, not instead of it

(function() {
    'use strict';
    
    // Wait for DOM and ensure jQuery/Bootstrap are loaded
    function init() {
        // Close menu when clicking a navigation link
        var navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                // Check if we're on mobile (menu should be collapsible)
                if (window.innerWidth < 900) {
                    var navbarCollapse = document.querySelector('.navbar-collapse');
                    if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                        // Use Bootstrap's collapse if available
                        if (typeof jQuery !== 'undefined' && jQuery.fn.collapse) {
                            jQuery(navbarCollapse).collapse('hide');
                        } else {
                            // Fallback
                            navbarCollapse.classList.remove('show');
                        }
                    }
                }
            });
        });
        
        // Close menu when clicking outside on mobile
        document.addEventListener('click', function(event) {
            if (window.innerWidth < 900) {
                var navbar = document.querySelector('.navbar');
                var navbarCollapse = document.querySelector('.navbar-collapse');
                var toggler = document.querySelector('.navbar-toggler');
                
                if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                    // Check if click is outside navbar and not on toggler
                    if (!navbar.contains(event.target)) {
                        if (typeof jQuery !== 'undefined' && jQuery.fn.collapse) {
                            jQuery(navbarCollapse).collapse('hide');
                        } else {
                            navbarCollapse.classList.remove('show');
                        }
                    }
                }
            }
        });
        
        // Update aria-expanded attribute on toggle
        var toggler = document.querySelector('.navbar-toggler');
        if (toggler) {
            toggler.addEventListener('click', function() {
                var expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !expanded);
            });
        }
        
        // Handle window resize - close menu if resizing to desktop
        var resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth >= 900) {
                    var navbarCollapse = document.querySelector('.navbar-collapse');
                    if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                        if (typeof jQuery !== 'undefined' && jQuery.fn.collapse) {
                            jQuery(navbarCollapse).collapse('hide');
                        } else {
                            navbarCollapse.classList.remove('show');
                        }
                    }
                }
            }, 250);
        });
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
