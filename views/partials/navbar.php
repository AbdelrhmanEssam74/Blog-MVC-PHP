<div class="container">
    <header class="border-bottom lh-1 py-3">
        <nav id="main-navbar" class="navbar navbar-expand-md  navbar-before-scroll shadow-0">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <span class="fw-bold ">CMS</span>
                </a>
                <button class="navbar-toggler border" type="button" data-bs-toggle="collapse" data-bs-target="#nav_lc"
                        aria-controls="nav_lc" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nav_lc">
                    <ul class="d-none d-lg-flex navbar-nav mx-auto  my-3 my-lg-0 position-absolute top-50 start-50 translate-middle">
                        <li class="nav-item me-4"><a class="nav-link " href="#">About</a></li>
                        <li class="nav-item me-4"><a class="nav-link " href="#">Services</a></li>
                        <li class="nav-item"><a class="nav-link " href="#">Testimonials</a></li>
                    </ul>
                    <ul class="navbar-nav my-3 my-lg-0 d-lg-none">
                        <li class="nav-item me-4"><a class="nav-link " href="#">About</a></li>
                        <li class="nav-item me-4"><a class="nav-link " href="#">Services</a></li>
                        <li class="nav-item"><a class="nav-link " href="#">Testimonials</a></li>
                    </ul>
                    <div class="ms-lg-auto">
                        <?php if (!app()->session->exists('login')): ?>
                            <a class="btn btn-outline-primary me-2 " href="/login">Login</a>
                            <a class="btn btn-primary" href="/signup">Sign Up</a>
                        <?php else: ?>
                            <a class="btn btn-danger" href="/logout">Logout</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="nav-scroller py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-between">
            <a class="nav-item nav-link link-body-emphasis active"
               href="categories/world/<?= getCurrentDate('Y') ?>/<?= getCurrentDate('m') ?>">
                World</a>
            <a class="nav-item nav-link link-body-emphasis" href="categories/us/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">U.S.</a>
            <a class="nav-item nav-link link-body-emphasis" href="categories/technology/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Technology</a>
            <a class="nav-item nav-link link-body-emphasis" href="categories/design/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Design</a>
            <a class="nav-item nav-link link-body-emphasis" href="categories/culture/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Culture</a>
            <a class="nav-item nav-link link-body-emphasis" href="categories/business/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Business</a>
            <a class="nav-item nav-link link-body-emphasis" href="categories/politics/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Politics</a>
            <a class="nav-item nav-link link-body-emphasis" href="categories/opinion/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Opinion</a>
            <a class="nav-item nav-link link-body-emphasis" href="categories/science/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Science</a>
            <a class="nav-item nav-link link-body-emphasis" href="categories/health/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Health</a>
            <a class="nav-item nav-link link-body-emphasis" href="categories/style/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Style</a>
            <a class="nav-item nav-link link-body-emphasis" href="categories/travel/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Travel</a>
        </nav>
    </div>
</div>