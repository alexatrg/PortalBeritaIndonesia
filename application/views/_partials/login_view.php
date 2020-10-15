<!-- Default form login -->
<form class="form-control text-center border border-info p-3" action="<?php echo base_url('Login/Login'); ?>"  method="post">

    <p class="h4 mb-4">Sign in</p>
    <?= $this->session->flashdata('message'); ?>

    <!-- Email -->
    <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

    <!-- Password -->
    <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

    <!-- Sign in button -->
    <button class="btn btn-primary btn-block my-4" type="submit">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a href="<?php echo SITE_URL . "/Register" ?>">Register</a>
    </p>

    <!-- Social login -->
    <p>or sign in with:</p>

    <a href="https://www.facebook.com/" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="https://twitter.com/" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="https://www.google.com/" class="mx-2" role="button"><i class="fab fa-google light-blue-text"></i></a>

</form>
<!-- Default form login -->
