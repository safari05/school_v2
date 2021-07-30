<header id="site-header" class="header header-2">
  <div class="top-bar theme-bg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="topbar-link text-left">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="mailto:yasbu@gmail.com"><i class="flaticon-email"></i>yasbu@gmail.com</a>
              </li>
              <li class="list-inline-item">
                <a href="javascript:void(0)"> <i class="flaticon-phone-call"></i>+021</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 text-right">
          <a href="<?php echo base_url('signin/index')?>" class="btn btn-white btn-sm appoint-btn"> Login</a>
        </div>
      </div>
    </div>
  </div>
  <div id="header-wrap" class="">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="index.html">
              <img id="logo-img" class="img-center" src="<?=base_url($frontendThemePath.'assets/img/logo_yasbu/logo_yayasan.png')?>" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <!-- Left nav -->
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown"> <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown">Home</a>
                  <ul class="dropdown-menu">
                    <li><a href="index.html">Visi dan Misi</a>
                    </li>
                   
                    <li class="dropdown dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      About
                    </a>
                      <ul class="dropdown-menu">
                        <li><a href="header-1.html">Tentang</a>
                        </li>
                        
                      </ul>
                    </li>
                    
                  </ul>
                </li>
 
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Department</a>
                  <ul class="dropdown-menu">
                    <li><a href="outpatient-depertment.html">SMK</a>
                    </li>
                    <li><a href="pediatrics-depertment.html">Bidang Usaha Luar</a>
                    </li>
                    
                  </ul>
                </li>
                <li class="nav-item dropdown position-static"> <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">PPDB</a>
                  <ul class="dropdown-menu w-100 p-2">
                    <li class="container">
                      <div class="row w-100">
                        <div class="col-lg-4 col-md-12">
                          <ul class="list-unstyled">
                            <li> <a href="shortcode-accordions.html">Pendaftaran PPDB</a>
                            </li>
                          </ul>
                        </div>
                       
                      </div>
                    </li>
                    <!--  /.container  -->
                  </ul>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Kegiatan Sekolah</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      SMK
                    </a>
                      <ul class="dropdown-menu">
                        <li>
                            <a href="blog-left-sidebar.html">TKR</a>
                        </li>
                        <li>
                            <a href="blog-right-sidebar.html">TKJ</a>
                        </li>
                        
                      </ul>
                    </li>
                    
                  </ul>
                </li>
               
              </ul>
            </div>           
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>