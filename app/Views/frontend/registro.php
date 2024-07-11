<!-- Inicio Formulario Registro -->
<div class="custom-login">
    <div class="row vh-100 g-0 bg-form">
        <div class="col-lg-6 position-relative d-lg-block">
            <div class="bg-holder" style="background-image: url(assets/img/login/img_login.jpg);">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row align-items-center justify-content-center h-100 g-0 px-4 px-sm-0">
                <div class="col col-sm-6 col-lg-7 col-xl-6">
                    <a class="d-flex justify-content-center" href="<?php echo base_url('inicio'); ?>" >
                        <img src="assets/img/logo_cafe2_sf.png" alt="LOGO_INICIO" width="100">
                    </a>
                    <div class="text-center mb-5">
                        <h3 class="fw-bold">Registrarse</h3>
                        <p class="text-secondary">Crea tu cuenta en Coffe House</p>
                    </div>
                    <form action="#">
                    <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa-solid fa-user-pen"></i>
                            </span>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="Nombre">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa-solid fa-file-signature"></i>
                            </span>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="Apellido">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="Usuario">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="Email">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input type="password" class="form-control form-control-lg fs-6" placeholder="Contraseña">
                        </div>
                        <button class="btn boton-registro btn-dark btn-lg w-100 mb-3">Registro</button>
                    </form>
                    <div class="text-center">
                        <small>Ya tienes una cuenta?<a class="fw-bold" href="<?php echo base_url('login'); ?>" > Iniciar Sesion</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!--Fin Formulario Registro-->