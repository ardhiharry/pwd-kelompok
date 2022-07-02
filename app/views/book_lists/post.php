<?php $this->view('dashboard/layouts/main', $data); ?>

<?php startblock('container') ?>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $data['title']; ?></h1>
  </div>

  <div class="row mt-5">
    <div class="col-md-6">
      <form action="<?= BASEURL; ?>/book_lists/bookPost" method="POST" enctype="multipart/form-data">
        <div class="mb-4">
          <label for="title" class="form-label">Judul</label>
          <input type="text" class="form-control" name="title" id="title" autofocus required>
        </div>
        <div class="mb-4">
          <label for="writer" class="form-label">Penulis</label>
          <input type="text" class="form-control" name="writer" id="writer" required>
        </div>
        <div class="mb-4">
          <label for="publisher" class="form-label">Penerbit</label>
          <input type="text" class="form-control" name="publisher" id="publisher" required>
        </div>
        <div class="mb-4">
          <label for="publication_year" class="form-label">Tahun Terbit</label>
          <input type="text" class="form-control" name="publication_year" id="publication_year" required>
        </div>
        <div class="mb-4">
          <label for="id_category" class="form-label">Kategori</label>
          <select class="form-select" name="id_category" id="id_category">
            <?php foreach( $data['category'] as $category ) : ?>
              <option value="<?= $category['id_category']; ?>"><?= $category['category']; ?></option>
            <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-4">
          <label for="description" class="form-label">Sinopsis</label>
          <textarea class="form-control" name="description" id="description" style="height: 100px;"></textarea>
        </div>
        <div class="mb-4">
          <label for="picture" class="form-label">Gambar</label>
          <input type="file" class="form-control" name="picture" id="picture">
        </div>
        <div class="mb-5">
          <input type="submit" value="POST" name="post" class="btn btn-success">
        </div>
      </form>
    </div>
  </div>
<?php endblock() ?>