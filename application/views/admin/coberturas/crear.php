    <body>
        <?=  form_open_multipart(base_url()."admin/coberturas/subirImagen") ?>

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
        ?>
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        <br>
        <?= form_label('Imagen: ', 'user_file') ?>
        <?= form_input($imagen) ?>
        <br>
        <?= form_submit('','Crear cobertura') ?>
        <?= form_close() ?>
    </body>
</html>