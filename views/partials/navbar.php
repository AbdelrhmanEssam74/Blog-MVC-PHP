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
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <?= app()->session->get('username') ?>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item d-flex gap-2 align-items-center" href="/<?=
                                    app()->session->get('profile-link')
                                    ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                            <path fill-rule="evenodd"
                                                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                        </svg>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item d-flex gap-2 align-items-center" href="/logout">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                                            <path fill-rule="evenodd"
                                                  d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                                        </svg>
                                        Logout
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="nav-scroller py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-between">
            <a class="nav-item nav-link link-body-emphasis active"
               href="/categories/world/<?= getCurrentDate('Y') ?>/<?= getCurrentDate('m') ?>">
                World</a>
            <a class="nav-item nav-link link-body-emphasis" href="/categories/us/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">U.S.</a>
            <a class="nav-item nav-link link-body-emphasis" href="/categories/technology/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Technology</a>
            <a class="nav-item nav-link link-body-emphasis" href="/categories/design/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Design</a>
            <a class="nav-item nav-link link-body-emphasis" href="/categories/culture/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Culture</a>
            <a class="nav-item nav-link link-body-emphasis" href="/categories/business/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Business</a>
            <a class="nav-item nav-link link-body-emphasis" href="/categories/politics/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Politics</a>
            <a class="nav-item nav-link link-body-emphasis" href="/categories/opinion/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Opinion</a>
            <a class="nav-item nav-link link-body-emphasis" href="/categories/science/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Science</a>
            <a class="nav-item nav-link link-body-emphasis" href="/categories/health/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Health</a>
            <a class="nav-item nav-link link-body-emphasis" href="/categories/style/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Style</a>
            <a class="nav-item nav-link link-body-emphasis" href="/categories/travel/<?= getCurrentDate(
                'Y') ?>/<?= getCurrentDate('m') ?>">Travel</a>
        </nav>
    </div>
</div>