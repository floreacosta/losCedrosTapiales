    <body>
        <?=  form_open(base_url()."admin/usuarios/crearUsuario") ?>

        <?
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text'
            );
            $user = array(
                'name' => 'user',
                'type' => 'text'
            );
            $pass = array(
                'name' => 'pass'
            );
        ?>
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        <br>
        <?= form_label('Usuario: ', 'user') ?>
        <?= form_input($user) ?>
        <br>
        <?= form_label('Contrasaña: ', 'pass') ?>
        <?= form_password($pass) ?>
        <br>
        <?= form_submit('','Crear usuario') ?>
        <?= form_close() ?>
    </body>
</html>