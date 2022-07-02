<?php $this->view('dashboard/layouts/main', $data); ?>

<?php startblock('container') ?>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $data['title']; ?></h1>
  </div>

  <div class="row">
    <div class="col-md-4">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <a href="<?= BASEURL; ?>/book_lists/post" class="btn btn-primary mt-3 mb-3">Tambahkan Buku</a>

  <div class="row">
    <div class="col-md-10">
      <table class="table table-bordered table-hover table-primary table-striped">
        <thead>
          <tr>
            <th style="width: 1rem;">No.</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Tahun Terbit</th>
            <th>Penulis</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php $no = 1; ?>
          <?php foreach( $data['category'] as $category ) : ?>
            <tr>
              <th><?= $no; ?></th>
              <th><?= $category['title']; ?></th>
              <th><?= $category['category']; ?></th>
              <th><?= $category['publication_year']; ?></th>
              <th><?= $category['writer']; ?></th>
              <th style="width: 10rem;">
                <a href="" class="btn btn-warning me-2">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </th>
            </tr>
            <?php $no++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  
<?php endblock() ?>