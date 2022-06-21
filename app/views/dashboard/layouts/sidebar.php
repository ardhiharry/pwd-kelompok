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
  </div>
</nav>