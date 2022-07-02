<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link <?= ($data['title'] == 'Dashboard') ? 'active' : '' ?>" aria-current="page" href="<?= BASEURL; ?>/dashboard">
          <span data-feather="home" class="align-text-bottom bookmark <?= ($data['title'] == 'Dashboard') ? 'active' : '' ?>"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($data['title'] == 'Bookmark') ? 'active' : '' ?>" href="<?= BASEURL; ?>/bookmark">
          <span data-feather="bookmark" class="align-text-bottom bookmark <?= ($data['title'] == 'Bookmark') ? 'active' : '' ?>"></span>
          Bookmark
        </a>
      </li>
    </ul>

    <?php if( $_SESSION['login'] == 'babayo' ) : ?>
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
      <span class="admin-dashboard">Administrator</span>
    </h6>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <a class="nav-link <?= ($data['title'] == 'Book Lists' || $data['title'] == 'Book Post') ? 'active' : '' ?>" href="<?= BASEURL; ?>/book_lists">
          <span data-feather="file-text" class="align-text-bottom"></span>
          Book Lists
        </a>
      </li>
    </ul>
    <?php endif; ?>
  </div>
</nav>