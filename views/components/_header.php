  <!-- start nav -->
  <nav class="navbar position-absolute top-0 end-0 z-3 d-flex align-items-center p-0 z-3 <?php echo ($header_class ?? ''); ?>">
    <div class="d-flex align-items-center w-100 justify-content-between">
      <a class="navbar-brand ps-3" href="/">
        <img src="theme/images/logo-colored.svg" alt="" class="logo" width="150px" height="48px">
      </a>
      <div class="burger-menu position-relative d-flex justify-content-center align-items-center">
        <svg viewBox="0 0 332 118" fill="none" xmlns="http://www.w3.org/2000/svg" class="" width="164px" height="58px">
          <path d="M0 0C23.833 68.6866 89.1535 118 166 118C242.846 118 308.167 68.6866 332 0H0Z" fill="#C2D500"/>
        </svg>
        <button class="navbar-toggler position-absolute border-0" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" 
                aria-expanded="false" aria-label="Toggle navigation"
                id="menuButton"
        >
        
          <img src="theme/images/Hamburger Menu.svg" width="36.444px" height="36.444px"/>
        </button>
      </div>
      <div class="collapse navbar-collapse ps-3 position-absolute px-3 top-0 start-0 z-3 w-100 bg-primary text-white flex-column" id="navbarNav">
        <div class="menu-header d-flex justify-content-between align-items-center w-100">
          <img src="theme/images/logo-colored.svg" alt="" class="logo" width="150px" height="48px">
          <span class="close-menu" id="closeMenu">&times;</span>
        </div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="display-4 text-decoration-none text-white fw-bold d-block position-relative d-flex align-items-center gap-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About Us
              <img src="theme/images/Vector.svg" alt="" width="15px" height="18px">
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item text-decoration-none text-white fw-bold d-block position-relative" href="#"">Action</a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="" class="dropdown-item"></a>
                  </li>
                </ul>
              </li>
              <li><a class="dropdown-item text-decoration-none text-white fw-bold d-block position-relative" href="#">Another action</a></li>
              <li><a class="dropdown-item text-decoration-none text-white fw-bold d-block position-relative" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="display-4 d-flex align-items-center gap-3 text-decoration-none text-white fw-bold d-block position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admissions
              <img src="theme/images/Vector.svg" alt="" width="15px" height="18px">
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item text-decoration-none text-white fw-bold d-block position-relative" href="#">Action</a></li>
              <li><a class="dropdown-item text-decoration-none text-white fw-bold d-block position-relative" href="#">Another action</a></li>
              <li><a class="dropdown-item text-decoration-none text-white fw-bold d-block position-relative" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown display-4">
            <a class="d-flex align-items-center gap-3 display-4 text-decoration-none text-white fw-bold d-block position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Work With Us
              <img src="theme/images/Vector.svg" alt="" width="15px" height="18px">
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item text-decoration-none text-white fw-bold d-block position-relative" href="#">Action</a></li>
              <li><a class="dropdown-item text-decoration-none text-white fw-bold d-block position-relative" href="#">Another action</a></li>
              <li><a class="dropdown-item text-decoration-none text-white fw-bold d-block position-relative" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex position-absolute bottom-0 mb-3 border-top border-primary-hover p-2" role="search">
          <input class="form-control rounded-0 p-3 mt-4" type="search" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
  <!-- end nav  -->