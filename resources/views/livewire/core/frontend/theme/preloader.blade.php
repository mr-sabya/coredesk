<div>
    @if (Route::is('home'))
    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="loading-container">
            <div class="loading"></div>
        </div>
    </div>
    <!-- /Preloader -->

    <script>
        document.addEventListener("livewire:navigated", function() {
            // Find preloader safely
            const preloader = document.getElementById('preloader');
            if (!preloader) return; // Exit if not found

            // Run only once per browser session
            if (!localStorage.getItem('preloaderShown')) {
                preloader.style.display = 'block'; // Show preloader

                setTimeout(() => {
                    preloader.style.display = 'none';
                    // Mark as shown after hiding
                    localStorage.setItem('preloaderShown', 'true');
                }, 2000);
            } else {
                preloader.style.display = 'none';
            }
        });

        // Also handle the first page load
        document.addEventListener("DOMContentLoaded", function() {
            const preloader = document.getElementById('preloader');
            if (!preloader) return;

            if (!localStorage.getItem('preloaderShown')) {
                preloader.style.display = 'block';

                setTimeout(() => {
                    preloader.style.display = 'none';
                    localStorage.setItem('preloaderShown', 'true');
                }, 2000);
            } else {
                preloader.style.display = 'none';
            }
        });
    </script>
    @endif
</div>