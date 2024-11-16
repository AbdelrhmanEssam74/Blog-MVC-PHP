<?php
if (app()->session->exists('login')) {
    RedirectToView('profile');
    exit();
}
?>
<div class="form-container">
    <?php if (app()->session->hasFlash('success')): ?>
        <p class="alert alert-success text-center fw-semibold">
            <?= app()->session->getFlash('success'); ?>
        </p>
    <?php endif; ?>
    <h2 class="text-center mb-4">Welcome Back</h2>
    <form method="post">
        <div class="field">
            <div class="form-floating">
                <input type="email" class="form-control"
                    <?php if (app()->session->hasFlash('oldEmail')): ?>
                        value="
                        <?= app()->session->getFlash('oldEmail'); ?>
                              "
                    <?php endif; ?>
                       id="email" name="email" placeholder="Enter email">
                <label for="email">Email</label>

            </div>
            <?php if (app()->session->hasFlash('email')): ?>
                <p class="form-text text-danger MassageHelp">
                    <?= app()->session->getFlash('email')[0]; ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="field">
            <div class="form-floating mt-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>

            </div>
            <?php if (app()->session->hasFlash('password')): ?>
                <p class="form-text text-danger MassageHelp">
                    <?= app()->session->getFlash('password')[0]; ?>
                </p>
            <?php endif; ?>
        </div>
            <div class="form-floating mt-2">
                <button type="submit" class="w-100 btn btn-primary btn-block">Login</button>
            </div>
        <p class="mt-2 text-body-secondary text-center"><a href="/signup">Create Now Account</a></p>
    </form>
</div>