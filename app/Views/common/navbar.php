<body class="estilo-body">
    <header class="custom-navbar">
        <!--Inicio NavBar -->
        <?php
        $session = session();
        $nombre = $session->get('nombre');
        $perfil = $session->get('perfil_id');
        ?>
        <nav class="navbar navbar-expand-lg fixed-top bg-nav">
            <div class="container-fluid">
                <a class="navbar-brand me-auto" href="<?php echo base_url('inicio'); ?>">
                    <img src="assets/img/logo_cafe_sf.png" alt="LOGO_INICIO" class="logo-img">
                </a>
                <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end custom-offcanvas" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                            <a href="<?php echo base_url('inicio'); ?>">
                                <img src="assets/img/logo_cafe_sf.png" alt="LOGO_INICIO" class="logo-img">
                            </a>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <!-- MENU PARA ADMINISTRADORES -->
                    <?php if (session()->perfil_id == 1) : ?>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2 active" aria-current="page" href="<?php echo base_url('principal'); ?>">
                                        <i class="fa-solid fa-house-chimney"></i> INICIO
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="<?php echo base_url('quienes_somos'); ?>">
                                        <i class="fa-solid fa-mug-saucer"></i> QUIENES SOMOS
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="<?php echo base_url('acerca_de'); ?>">
                                        <i class="fas fa-info-circle"></i> ACERCA DE
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fab fa-shopify"></i> PRODUCTOS
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark">
                                        <li><a class="dropdown-item" href="<?php echo base_url('productos'); ?>">CAFETERIA</a></li>
                                        <li><a class="dropdown-item" href="#">INFUSIONES</a></li>
                                        <li><a class="dropdown-item" href="#">SALADOS</a></li>
                                        <li><a class="dropdown-item" href="#">DULCES</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user-cog"></i> Admin: <?php echo session('nombre'); ?>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo base_url('#'); ?>">
                                            <i class="far fa-edit"></i> Mis Datos
                                        </a>
                                        <a class="dropdown-item dropdown-menu-dark" href="<?php echo base_url('logout'); ?>">
                                            <i class="fas fa-sign-out-alt"></i>Cerrar Sesion
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <!-- MENU PARA CLIENTES -->
                    <?php elseif (session()->perfil_id == 2) : ?>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2 active" aria-current="page" href="<?php echo base_url('principal'); ?>">
                                        <i class="fa-solid fa-house-chimney"></i> INICIO
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="<?php echo base_url('quienes_somos'); ?>">
                                        <i class="fa-solid fa-mug-saucer"></i> QUIENES SOMOS
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="<?php echo base_url('acerca_de'); ?>">
                                        <i class="fas fa-info-circle"></i> ACERCA DE
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fab fa-shopify"></i> PRODUCTOS
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark">
                                        <li><a class="dropdown-item" href="<?php echo base_url('productos'); ?>">CAFETERIA</a></li>
                                        <li><a class="dropdown-item" href="#">INFUSIONES</a></li>
                                        <li><a class="dropdown-item" href="#">SALADOS</a></li>
                                        <li><a class="dropdown-item" href="#">DULCES</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('#'); ?>">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user"></i> Hola, <?php echo session('nombre'); ?>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-dark">
                                        <a class="dropdown-item" href="<?php echo base_url('#'); ?>">
                                            <i class="fas fa-shopping-bag"></i> Mis Compras
                                        </a>
                                        <a class="dropdown-item dropdown-menu-dark" href="<?php echo base_url('#'); ?>">
                                            <i class="far fa-edit"></i> Mis Datos
                                        </a>
                                        <a class="dropdown-item dropdown-menu-dark" href="<?php echo base_url('logout'); ?>">
                                            <i class="fas fa-sign-out-alt"></i> Salir
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <!-- MENU PARA VISITANTES - NO LOGUEADOS -->
                    <?php else : ?>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2 active" aria-current="page" href="<?php echo base_url('principal'); ?>"><i class="fa-solid fa-house-chimney"></i> INICIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="<?php echo base_url('quienes_somos'); ?>"><i class="fa-solid fa-mug-saucer"></i> QUIENES SOMOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="<?php echo base_url('acerca_de'); ?>"><i class="fas fa-info-circle"></i> ACERCA DE</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fab fa-shopify"></i> PRODUCTOS
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark">
                                        <li><a class="dropdown-item" href="<?php echo base_url('productos'); ?>">CAFETERIA</a></li>
                                        <li><a class="dropdown-item" href="#">INFUSIONES</a></li>
                                        <li><a class="dropdown-item" href="#">SALADOS</a></li>
                                        <li><a class="dropdown-item" href="#">DULCES</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="<?php echo base_url('/registro'); ?>"><i class="fas fa-address-card"></i> REGISTRO</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('#'); ?>">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('#'); ?>">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('/login'); ?>">
                                        LOGIN
                                    </a>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
        <!-- Fin NavBar -->
    </header>