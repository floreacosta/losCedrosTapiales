    <body>
        <h3>Creación de usuario.</h3>
        <p>Desde aquí podrá crear un nuevo usuario para que modifique contenidos.</p>
        <p>Recuerde que el nuevo usuario podrá modificar todo el contenido de la página.</p>
        
        <?=  form_open(base_url()."admin/usuarios/crearUsuario") ?>

        <?
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'class' => 'form-control'
            );
            $user = array(
                'name' => 'user',
                'type' => 'text',
                'class' => 'form-control'
            );
            $pass = array(
                'name' => 'pass',
                'class' => 'form-control'
            );
            $buttonClass = array(
                'class' => 'btn btn-primary'
            );
        ?>
        <div class="form-group">
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        </div>
        <div class="form-group">
        <?= form_label('Usuario: ', 'user') ?>
        <?= form_input($user) ?>
        </div>
        <div class="form-group">
        <?= form_label('Contrasaña anterior: ', 'old_pass') ?>
        <?= form_password($pass) ?>
        </div>
        <?= form_submit('','Crear usuario', $buttonClass) ?>
        <?= form_close() ?>
    </body>
</html>