<?php if (empty($usuarios)) { ?>
    <div class="container section-padding-team">
        <div class="well text-uppercase">
            <h5><b>No hay Usuarios registrados</b></h5>
        </div>
        <?php if (session()->has('logged_in') && $perfil_id == '1') { ?>
            <a type="button" class="btn btn-success" href="<?php echo base_url('alta_usuario'); ?>">AGREGAR</a>
            <a type="button" class="btn btn-danger" href="<?php echo base_url('usuarios_eliminados'); ?>">ELIMINADOS</a>
            <br> <br>
        <?php } ?>
    </div>
<?php } else { ?>
    <div class="container section-padding-team">
        <div class="well text-uppercase">
            <h5><b>Todos los Usuarios</b></h5>
        </div>
        <br>
        <div class="container datatable-container table-responsive">
            <div class="header-tools">
                <div class="tools">
                    <ul>
                        <li>
                            <a href="<?php echo base_url('alta_usuario'); ?>">
                                <i class="material-icons icono-color">group_add</i>Agregar</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('usuarios_eliminados'); ?>">
                                <i class="material-icons icono-color">delete</i>Eliminados</a>
                        </li>
                    </ul>
                </div>
            </div>
            <table id="mi_tabla" class="datatable">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">PERFIL</th>
                        <th scope="col">ELIMINADO</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $row) { ?>
                        <tr>
                            <td><?php echo $row['id_usuario']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['apellido']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['perfil_id']; ?></td>
                            <td><?php echo $row['baja']; ?></td>
                            <td>
                                <a href="<?php echo base_url("modificar_usuario/{$row['id_usuario']}"); ?>">
                                    <i class="material-icons icono-color">edit</i>
                                </a>
                                <a href="<?php echo base_url("baja_usuario/{$row['id_usuario']}"); ?>">
                                    <i class="material-icons icono-color" onclick="elimina_usuario()">delete</i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php } ?>
