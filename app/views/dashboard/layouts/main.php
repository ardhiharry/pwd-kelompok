<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>
    
    <!-- Bootstrap -->
    <link href="<?= BASEURL; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/css/dashboard.css" rel="stylesheet">
    
  </head>

  <body>

    <?php $this->view('dashboard/layouts/header'); ?>

    <div class="container-fluid">
      <div class="row">
        <?php $this->view('dashboard/layouts/sidebar', $data); ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <?php startblock('container') ?>
          <?php endblock() ?>
        </main>
      </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="<?= BASEURL; ?>/js/dashboard.js"></script>

  </body>

</html>