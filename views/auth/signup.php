<?php
if (app()->session->exists('login')) {
    RedirectToView('profile');
    exit();
}
?>
<div class="form-container">
    <h2 class="text-center mb-4">Sign Up</h2>
    <form method="post" action="/store">
        <div class="field">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingFullName" name="full_name"
                       placeholder="Enter username">
                <label for="floatingFullName">Full Name</label>
            </div>
            <?php if (app()->session->hasFlash('errors')): ?>
                <p id="emailHelp" class="form-text text-danger">
                    <?= (isset(app()->session->getFlash('errors')['full_name'][0])) ? app()->session->getFlash('errors')['full_name'][0] : "" ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="field">
            <div class="form-floating mt-2">
                <input type="text" class="form-control" id="floatingUsername" name="username"
                       placeholder="Enter username">
                <label for="floatingUsername">Username</label>
            </div>
            <?php if (app()->session->hasFlash('errors')): ?>
                <p id="emailHelp" class="form-text text-danger">
                    <?= (isset(app()->session->getFlash('errors')['username'][0])) ? app()->session->getFlash('errors')['username'][0] : "" ?>                </p>
            <?php endif; ?>
        </div>
        <div class="field">
            <div class="form-floating  mt-2">
                <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="name@example.com">
                <label for="floatingEmail">Email address</label>
            </div>
            <?php if (app()->session->hasFlash('errors')): ?>
                <p id="emailHelp" class="form-text text-danger">
                    <?= (isset(app()->session->getFlash('errors')['email'][0])) ? app()->session->getFlash('errors')['email'][0] : "" ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="field">
            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="floatingPassword" name="password"
                       placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <?php if (app()->session->hasFlash('errors')): ?>
                <p id="emailHelp" class="form-text text-danger">
                    <?= (isset(app()->session->getFlash('errors')['password'][0])) ? app()->session->getFlash('errors')['password'][0] : "" ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="field">
            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="floatingConfirmPassword" name="password_confirmation"
                       placeholder="Confirm Password">
                <label for="floatingConfirmPassword">Confirm Password</label>
            </div>
            <?php if (app()->session->hasFlash('errors')): ?>
                <p id="emailHelp" class="form-text text-danger">
                    <?= (isset(app()->session->getFlash('errors')['password_confirmation'][0])) ? app()->session->getFlash('errors')['password_confirmation'][0] : "" ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <button type="submit" class=" mt-3 w-100 btn btn-primary btn-block">Sign Up</button>
        </div>
        <p class="mb-3 text-body-secondary text-center"><a href="/login">Do You Have An Account? Sign In</a></p>
    </form>
</div>