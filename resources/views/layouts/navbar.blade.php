<nav class="navbar navbar-expand-lg nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">        
            <img src="images/JCA Fitness-logos_transparent2.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end nav text-bg-dark" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a href="/"
                        class="{{ request()->is('/') ? 'active' : '' }} nav-link">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="nutrition"
                        class="{{ request()->is('nutrition') ? 'active' : '' }} nav-link">
                            Nutrition
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="personal-training"
                        class="{{ request()->is('personal-training') ? 'active' : '' }} nav-link">
                            Personal Training
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="contact"
                        class="{{ request()->is('contact') ? 'active' : '' }} nav-link">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>