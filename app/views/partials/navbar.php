<nav class="navbar navbar-expand-lg navbar-dark shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASEURL; ?>/home">
      <h5 class="px-3 fw-bold pt-1">PALKON</h5>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-2">
        <li class="nav-item">
          <a class="nav-link <?= ($data['title'] == 'Home') ? 'active' : '' ?>" href="<?= BASEURL; ?>/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($data['title'] == 'Books') ? 'active' : '' ?>" href="<?= BASEURL; ?>/book">Book</a>
        </li>
      </ul>
      <div class="navbar-nav d-flex align-items-center ms-auto">
        <?php if( !isset($_SESSION['login']) ) : ?>
          <div>
            <a href="<?= BASEURL; ?>/login" class="btn btn-sm btn-outline-light btn-login font-weight-bold px-4 py-2 mr-2">MASUK</a>
            <a href="<?= BASEURL; ?>/register" class="btn btn-sm btn-light btn-register font-weight-bold px-4 py-2">DAFTAR</a>
          </div>
          
          <?php else : ?>
            <ul class="navbar-nav">
              <li class="nav-item dropdown me-3">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="user-icon"><i class="bi bi-person-circle"></i></span>Hi, <strong><?= $_SESSION['login']; ?></strong>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="<?= BASEURL; ?>/dashboard">Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="<?= BASEURL; ?>/login/userLogout">Logout</a></li>
                </ul>
              </li>
            </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>