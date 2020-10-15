<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo SITE_URL . "/BeritaKhusus" ?>">Berita Khusus</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo SITE_URL . "/BeritaRegional" ?>">Berita Regional</a>
              </li>
             <li class="nav-item active">
                <a class="nav-link" href="<?php echo SITE_URL . "/BeritaHarian" ?>">Berita Harian</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo SITE_URL . "/BeritaViral" ?>">Berita Viral</a>
              </li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="<?php echo SITE_URL ?>"><?php echo SITE_NAME ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li cass="nav-item">
                <form class="form-inline" action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Cari Berita" required>
                    <button class="btn btn-dark border border-primary" type="submit">Search</button>
                </form>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo SITE_URL . "/Contact" ?>">Contact</a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Login/Register
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo SITE_URL . "/Login"?>">Login</a>
                  <a class="dropdown-item" href="<?php echo SITE_URL . "/Register"?>">Register</a>
                </div>
            </li>
        </ul>
    </div>
</nav>