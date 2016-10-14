    <body>
        <?=  form_open_multipart('admin/instalaciones/subirImagenEditar') ?>
        <?
            $resultado = $instalacion->result()[0];
                        
            $hidden = array(
                'hiddenId' => $resultado->id
            );
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'value' => $resultado->nombre
            );
            $imagen = array(
                'name' => 'user_file',
                'type' => 'file',
                'size' => 20
            );
            $descripcion = array(
                'name' => 'descripcion',
                'type' => 'text',
                'value' => $resultado->descripcion
            );
        ?>
        <?= form_hidden($hidden) ?>
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        <br>
        <?= form_label('Imagen actual: ', 'nombre') ?>
        <img src="<?= base_url(); ?>img/<?= $resultado->imagen; ?>" />
        <br>
        <?= form_label('Nueva Imagen: ', 'user_file') ?>
        <?= form_input($imagen) ?>
        <br>
        <?= form_label('Descripcion: ', 'descripcion') ?>
        <?= form_textarea($descripcion) ?>
        <br>
        <?= form_submit('','Editar instalacion') ?>
        <?= form_close() ?>
    </body>
</html>