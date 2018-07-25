  <body>
    <div class="container">
      <h3>Bienvenido al sistema de gestión de Sanatorio Privado Madero.</h3>
      <p>Desde aquí podrá cambiar el contenido de las secciones vistas por los usuarios.</p>
      <p>Una vez finalizada la edición de contenido, no olvide cerrar su sesión.</p>

      <div class="list-group">
          <a href="<?= base_url(); ?>admin/empleado" class="list-group-item">Administrar empleados</a>
          <a href="<?= base_url(); ?>admin/cobertura" class="list-group-item">Administrar coberturas</a>
          <a href="<?= base_url(); ?>admin/servicio" class="list-group-item">Administrar servicios</a>
          <a href="<?= base_url(); ?>admin/instalacion" class="list-group-item">Administrar instalaciones</a>
          <a href="<?= base_url(); ?>admin/estudio" class="list-group-item">Administrar estudios</a>
          <a href="<?= base_url(); ?>admin/especialidad" class="list-group-item">Administrar especialidades</a>
          <a href="<?= base_url(); ?>admin/categoria" class="list-group-item">Administrar categorías</a>
          <a href="<?= base_url(); ?>admin/noticia" class="list-group-item">Administrar noticias</a>
          <a href="<?= base_url(); ?>admin/usuario" class="list-group-item">Administrar usuarios</a>
      </div>

      <a href="<?= base_url(); ?>admin/home/logout" class="btn btn-info" role="button">Cerrar sesión</a>
    </div>
  </body>
</html>
