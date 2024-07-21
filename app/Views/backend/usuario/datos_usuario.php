<!-- Inicio Formulario Modificar Mis Datos -->
<div class="custom-login">
    <div class="row vh-100 g-0 bg-form">
        <div class="col-lg-6 position-relative d-lg-block">
            <div class="bg-holder" style="background-image: url(<?= base_url('assets/img/login/img_login.jpg'); ?>);">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row align-items-center justify-content-center h-100 g-0 px-4 px-sm-0">
                <div class="col col-sm-6 col-lg-7 col-xl-6">
                    <a class="d-flex justify-content-center" href="<?= base_url('inicio'); ?>">
                        <img src="<?php echo base_url('assets/img/logo_cafe2_sf.png'); ?>" alt="LOGO_INICIO" width="100">
                    </a>
                    <div class="text-center mb-5">
                        <h3 class="fw-bold">Modificar Usuario</h3>
                        <p class="text-secondary">Actualiza tu cuenta en Coffe House</p>
                    </div>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="error-message"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>
                    <form method="post" action="<?= base_url('actualizar_datos/' . $usuario['id_usuario']); ?>">
                        <?= csrf_field(); ?>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa-solid fa-user-pen"></i>
                            </span>
                            <input name="nombre" type="text" class="form-control form-control-lg fs-6" placeholder="Nombre" value="<?= old('nombre', $usuario['nombre']); ?>" />
                            <!--Error-->
                            <?php if ($validation->getError('nombre')) { ?>
                                <div class="error-message">
                                    <?= $validation->getError('nombre'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa-solid fa-file-signature"></i>
                            </span>
                            <input name="apellido" type="text" class="form-control form-control-lg fs-6" placeholder="Apellido" value="<?= old('apellido', $usuario['apellido']); ?>" />
                            <!--Error-->
                            <?php if ($validation->getError('apellido')) { ?>
                                <div class="error-message">
                                    <?= $validation->getError('apellido'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <input name="usuario" type="text" class="form-control form-control-lg fs-6" placeholder="Usuario" value="<?= old('usuario', $usuario['usuario']); ?>" />
                            <!--Error-->
                            <?php if ($validation->getError('usuario')) { ?>
                                <div class="error-message">
                                    <?= $validation->getError('usuario'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input name="email" type="email" class="form-control form-control-lg fs-6" placeholder="Email" value="<?= old('email', $usuario['email']); ?>" />
                            <!--Error-->
                            <?php if ($validation->getError('email')) { ?>
                                <div class="error-message">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="d-flex justify-content-between">
                            <input type="submit" value="Actualizar" class="btn boton-registro btn-dark btn-lg w-48 mb-3" />
                            <input type="reset" value="Cancelar" class="btn boton-registro btn-dark btn-lg w-48 mb-3" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Formulario Modificar Mis Datos -->