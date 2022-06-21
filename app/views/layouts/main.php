<!DOCTYPE html>
<html lang="en">
  
  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  
  </head>
  
  <body>
  
    <?php $this->view('partials/navbar', $data); ?>

    <div class="container mt-3">
      <?php startblock('container') ?>
      <?php endblock() ?>
    </div>

    
    <!-- Bootstrap JS -->
    <script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="<?= BASEURL; ?>/js/jquery-3.6.0.min.js"></script>

    <!-- script -->
    <script src="<?= BASEURL; ?>/js/script.js"></script>
  
  </body>
  
</html>