<header class="site-header">
    <div class="container mx-auto max-w-6xl px-4">
        <div class="header-inner">
            <h1 class="brand">
                <a href="<?= url('/') ?>">
                    <span class="brand-text">Prosple</span>
                </a>
            </h1>

            <nav class="main-nav">
                <a href="<?= url('/login') ?>" class="nav-link">Login</a>
                <a href="<?= url('/register') ?>" class="nav-link">Register</a>
                <a href="<?= url('/listings/create') ?>" class="btn btn-primary nav-cta">
                    <i class="fa fa-edit"></i>
                    <span>Post a Job</span>
                </a>
            </nav>
        </div>
    </div>
</header>