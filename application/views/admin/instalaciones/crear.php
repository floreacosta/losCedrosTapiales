    <body>
        <?=  form_open_multipart(base_url()."admin/instalaciones/subirImagen") ?>

        <?
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text'
            );
            $imagen = array(
                'name' => 'user_file',
                'type' => 'file',
                'size' => 20
            );
            $descripcion = array(
                'name' => 'descripcion',
                'type' => 'text'
            );
            
        ?>
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        <br>
        <?= form_label('Imagen: ', 'user_file') ?>
        <?= form_input($imagen) ?>
        <br>
        <?= form_label('Descripción: ', 'descripcion') ?>
        <?= form_textarea($descripcion) ?>
        <br>
        <?= form_submit('','Crear instalacion') ?>
        <?= form_close() ?>
    </body>
</html>