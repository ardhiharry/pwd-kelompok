<nav class="navbar navbar-expand-lg navbar-dark shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASEURL; ?>/home">
      <img src="<?= BASEURL; ?>/img/logo.svg" alt="Logo" width="45" height="45">
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
      <div class="d-flex align-items-center ms-auto">
        <div>
          <a href="<?= BASEURL; ?>/login" class="btn btn-sm btn-outline-light btn-login font-weight-bold px-4 py-2 mr-2">MASUK</a>
          <a href="<?= BASEURL; ?>/register" class="btn btn-sm btn-light btn-register font-weight-bold px-4 py-2">DAFTAR</a>
        </div>
      </div>
    </div>
  </div>
</nav>