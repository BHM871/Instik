</head>
<body class="bg-light"> 
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Offcanvas navbar</a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url() ?>pages/feed">Feed</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Notifications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Switch account</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Settings</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="<?= base_url() ?>admin/usuarios">Administrator options</a></li>
                <li><a class="dropdown-item" href="<?= base_url() ?>pages/about">About</a></li>
                <li><a class="dropdown-item" href="<?= base_url() ?>initial">Logout</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="nav-scroller bg-body shadow-sm">
      <nav class="nav" aria-label="Secondary navigation">
        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
        <a class="nav-link" href="#">
          Friends
          <span class="badge text-bg-light rounded-pill align-text-bottom">27</span>
        </a>
        <a class="nav-link" href="#">Explore</a>
        <a class="nav-link" href="#">Suggestions</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
      </nav>
    </div>