<?php $this->view('layouts/main', $data); ?>

<?php startblock('container') ?>
  <h1 class="text-center mt-5">Book Page</h1>

  <div class="row justify-content-center">
    <?php foreach( $data['book'] as $book ) : ?>
      <div class="col-lg-4 offset-lg-0 col-sm-4 offset-sm-0 col-10 offset-1 mt-3 mb-4">
        <div class="card">
          <div class="position-absolute end-0 px-3 py-2 bookmark">
            <a href="" class="btn btn-bookmark"><i class="bi bi-bookmark-plus"></i></a>
          </div>
          <?php if($book['picture'] == null) : ?>
            <img src="https://source.unsplash.com/600x400?programming" alt="..." class="card-img-top">
            
            <?php else : ?>
              <img src="<?= BASEURL; ?>/img/<?= $book['picture']; ?>" alt="..." class="card-img-top">
          <?php endif; ?>
          <div class="card-body">
            <h5 class="card-title mb-2"><?= $book['title']; ?></h5>
            <p class="card-text mb-3"><?= $book['category']; ?></p>
            <a href="<?= BASEURL; ?>/book/<?= $book['id_book']; ?>" class="btn btn-outline-dark bookDetail" data-bs-toggle="modal" data-bs-target="#bookModal" data-id="<?= $book['id_book']; ?>">Detail</a>
            <a href="#" class="btn btn-outline-dark">Read Book</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bookModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <img src="https://source.unsplash.com/600x400?programming" alt="..." class="img-fluid">
              </div>
              <div class="col-md">
                <ul class="list-group">
                  <li class="list-group-item title-book"></li>
                  <li class="list-group-item category-book"></li>
                  <li class="list-group-item writer-book"></li>
                  <li class="list-group-item publisher-book"></li>
                  <li class="list-group-item publication-year-book"></li>
                  <li class="list-group-item description-book"></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal -->
<?php endblock() ?>