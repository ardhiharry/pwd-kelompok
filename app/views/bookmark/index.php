<?php $this->view('dashboard/layouts/main', $data); ?>

<?php startblock('container') ?>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $data['title']; ?></h1>
  </div>

  <div class="row justify-content-center">
      <div class="col-lg-4 offset-lg-0 col-sm-4 offset-sm-0 col-10 offset-1 mt-5 mb-4">
        <div class="card">
          <img src="https://source.unsplash.com/600x400?programming" alt="..." class="card-img-top">
          <div class="card-body">
            <h5 class="card-title mb-2">Book Title</h5>
            <p class="card-text mb-3">Book Category</p>
            <a href="" class="btn btn-outline-dark bookDetail" data-bs-toggle="modal" data-bs-target="#bookModal" data-id="">Detail</a>
            <a href="#" class="btn btn-outline-dark">Read Book</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-0 col-sm-4 offset-sm-0 col-10 offset-1 mt-5 mb-4">
        <div class="card">
          <img src="https://source.unsplash.com/600x400?programming" alt="..." class="card-img-top">
          <div class="card-body">
            <h5 class="card-title mb-2">Book Title</h5>
            <p class="card-text mb-3">Book Category</p>
            <a href="" class="btn btn-outline-dark bookDetail" data-bs-toggle="modal" data-bs-target="#bookModal" data-id="">Detail</a>
            <a href="#" class="btn btn-outline-dark">Read Book</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-0 col-sm-4 offset-sm-0 col-10 offset-1 mt-5 mb-4">
        <div class="card">
          <img src="https://source.unsplash.com/600x400?programming" alt="..." class="card-img-top">
          <div class="card-body">
            <h5 class="card-title mb-2">Book Title</h5>
            <p class="card-text mb-3">Book Category</p>
            <a href="" class="btn btn-outline-dark bookDetail" data-bs-toggle="modal" data-bs-target="#bookModal" data-id="">Detail</a>
            <a href="#" class="btn btn-outline-dark">Read Book</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-0 col-sm-4 offset-sm-0 col-10 offset-1 mt-5 mb-4">
        <div class="card">
          <img src="https://source.unsplash.com/600x400?programming" alt="..." class="card-img-top">
          <div class="card-body">
            <h5 class="card-title mb-2">Book Title</h5>
            <p class="card-text mb-3">Book Category</p>
            <a href="" class="btn btn-outline-dark bookDetail" data-bs-toggle="modal" data-bs-target="#bookModal" data-id="">Detail</a>
            <a href="#" class="btn btn-outline-dark">Read Book</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-0 col-sm-4 offset-sm-0 col-10 offset-1 mt-5 mb-4">
        <div class="card">
          <img src="https://source.unsplash.com/600x400?programming" alt="..." class="card-img-top">
          <div class="card-body">
            <h5 class="card-title mb-2">Book Title</h5>
            <p class="card-text mb-3">Book Category</p>
            <a href="" class="btn btn-outline-dark bookDetail" data-bs-toggle="modal" data-bs-target="#bookModal" data-id="">Detail</a>
            <a href="#" class="btn btn-outline-dark">Read Book</a>
          </div>
        </div>
      </div>
  </div>
<?php endblock() ?>