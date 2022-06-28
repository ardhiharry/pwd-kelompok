<?php $this->view('layouts/main', $data); ?>

<?php startblock('container') ?>
  <div class="row justify-content-center">
    <div class="col-md-4 mt-3">
      <?php Flasher::flashUser(); ?>
    </div>
  </div>

  <div class="row justify-content-center align-items-center mt-5">
    <div class="col-sm-12 col-md-6 col-lg-6 mb-2 mb-md-0 text-center">
      <h5 class="mb-2">BELAJAR BERSAMA PALKON</h5>
      <h1 class="mb-2 fw-bold mb-4">lihat, daftar, enjoy</h1>
      <hr class="title-divider m-auto d-none d-md-block">
    </div>
    <div class="col-10 col-sm-10 col-md-6 col-lg-4 offset-lg-1">
        <div class="card box-shadow rounded-3 card-register">
          <div class="card-body">
            <form action="<?= BASEURL; ?>/register/user" method="POST">
              <div role="group" class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" required autofocus>
              </div>
              <div role="group" class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
              </div>
              <div role="group" class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
              </div>
              <div role="group" class="mb-3">
                <input type="submit" value="DAFTAR" name="register" class="btn btn-success fw-bold">
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
<?php endblock() ?>