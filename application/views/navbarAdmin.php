    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?php echo base_url('dashboard') ?>">Dashboard</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Master Data
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo base_url('barang') ?>">Barang</a></li>
                <li><a class="dropdown-item" href="#">Supplier</a></li>
              </ul>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('biodata') ?>">Biodata Pelamar</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <a class="btn btn-primary" href="<?php echo base_url('login/logout'); ?>" role="button">Logout</a>
          </form>
        </div>
      </div>
    </nav>