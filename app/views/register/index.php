<?php $this->view('layouts/main', $data); ?>

<?php startblock('container') ?>
  <div class="card card-register ms-auto mt-5">
    <div class="card-body">
      <form action="" method="POST">
        <!-- <div role="group" class="mb-3">
          <label for="name" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control is-invalid" name="name" id="name" aria-describedby="nameFeedback" required>
          <div id="nameFeedback" class="invalid-feedback">
            Masukkan nama lengkap.
          </div>
        </div> -->
        <div role="group" class="mb-3">
          <label for="name" class="form-label">Nama Lengkap</label>
          <input type="text" name="name" id="name" class="form-control" required>
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
          <input type="submit" value="DAFTAR" name="register" class="btn btn-success btn-register">
        </div>
      </form>
    </div>
  </div>
<?php endblock() ?>