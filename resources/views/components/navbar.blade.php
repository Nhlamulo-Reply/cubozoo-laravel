<nav class="fixed-top w-100 bg-transparent border-bottom" style="z-index: 10;">
    <div class="container-fluid px-3 px-md-4">
        <div class="d-flex justify-content-between align-items-center py-3">
            <!-- Logo -->
            <div>
                <a href="#">
                    <img src="{{ asset('img/logo.jpg') }}" alt="High Five Videos Logo" style="height: 40px;">

                </a>
            </div>
            <!-- Navigation Links (Desktop) -->
            <div class="d-none d-md-flex flex-grow-1 justify-content-center">
                <a href="#" class="mx-3 text-white">Home</a>
                <a href="#" class="mx-3 text-white">Browse</a>
                <a href="#" class="mx-3 text-white">Pricing</a>
            </div>
            <!-- Right Section -->
            <div class="d-flex align-items-center">
                <a href="#" class="fs-2 text-white me-3">🛒</a>
                <a href="#" class="btn btn-warning text-dark me-2">Sign Up</a>
                <a href="#" class="btn btn-outline-warning text-white">Login</a>
                <!-- Mobile Menu Button -->
                <button id="menu-toggle" class="d-md-none btn btn-link text-white fs-2">☰</button>
            </div>
        </div>
        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="d-none d-md-none flex-column align-items-center py-3 border-top">
            <a href="#" class="text-white mb-2">Home</a>
            <a href="#" class="text-white mb-2">Browse</a>
            <a href="#" class="text-white">Pricing</a>
        </div>
    </div>
</nav>
