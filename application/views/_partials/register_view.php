<!-- Default form register -->
<form class="form-control text-center border border-info p-3" action="<?php echo base_url('Register/Register'); ?>"  method="post">

    <p class="h4 mb-4">Sign up</p>

    <!-- Username -->
    <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>

    <!-- E-mail -->
    <input type="email" name="email" class="form-control mb-2" placeholder="E-mail" required>
    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

    <!-- Password -->
    <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

    <!-- Nama -->
    <input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>
    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

    <!-- Alamat -->
    <input type="text" name="alamat" class="form-control mb-2" placeholder="Alamat" required>
    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>

    <!-- Sign up button -->
    <button class="btn btn-primary my-4 btn-block bg-primary" type="submit">Sign Up</button>

    <!-- Login -->
    <p>Is a member?
        <a href="<?php echo SITE_URL . "/Login" ?>">Login</a>
    </p> 

    <!-- Social register -->
    <p>or sign up with:</p>

    <a href="https://www.facebook.com/" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="https://twitter.com/" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="https://www.google.com/" class="mx-2" role="button"><i class="fab fa-google light-blue-text"></i></a>

</form>
<!-- Default form register -->
