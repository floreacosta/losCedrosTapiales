    <body>
        <div class="container">
    <h3>Bienvenido al sistema de gestión de Los Cedros Tapiales.</h3>
    <p>Desde aquí podrá cambiar el contenido de las secciones vistas por los usuarios.</p>
    <p>Una vez finalizada la edición de contenido, no olvide cerrar su sesión.</p>
    <div class="list-group">
        <a href="<?= base_url(); ?>admin/usuarios" class="list-group-item">Administrar usuarios</a>
        <a href="<?= base_url(); ?>admin/coberturas" class="list-group-item">Administrar coberturas</a>
        <a href="<?= base_url(); ?>admin/servicios" class="list-group-item">Administrar servicios</a>
        <a href="<?= base_url(); ?>admin/instalaciones" class="list-group-item">Administrar instalaciones</a>
        <a href="<?= base_url(); ?>admin/especialidades" class="list-group-item">Administrar especialidades</a>
        <a href="<?= base_url(); ?>admin/doctores" class="list-group-item">Administrar doctores</a>
    </div>
    
    <a href="<?= base_url(); ?>admin/index/logout" class="btn btn-info" role="button">Cerrar sesión</a>
    </div>
    </body>
</html>