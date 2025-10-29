<div>
    @if(Route::is('home'))
    <!-- preloader -->
    <div class="preloader" id="preloader">
        <div class="loading-container">
            <div class="loading"></div>
        </div>
    </div>
    <!-- preloader -->

    <script>
        document.addEventListener("livewire:navigated", function() {
            // console.log('ok');
            const preloader = document.getElementById('preloader');

            // Check if preloader was already shown
            if (!localStorage.getItem('preloaderShown')) {
                preloader.style.display = 'block'; // Show preloader

                // Hide preloader after some time (example: 2 seconds)
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 2000);

                // Mark preloader as shown
                localStorage.setItem('preloaderShown', 'true');
            } else {
                preloader.style.display = 'none'; // Hide if already shown
            }
        });
    </script>
    @endif
</div>