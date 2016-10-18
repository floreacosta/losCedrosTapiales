    <body>
        <h3>Edición de usuario.</h3>
        <p>Desde aquí podrá cambiar los datos del usuario seleccionado.</p>
        <p>Recuerde no compartir su nueva contraseña ya que el sistema se veria vulnerado.</p>
        
        <?=  form_open('admin/usuarios/updateUsuario') ?>
        <?
            $resultado = $usuario->result()[0];
                        
            $hidden = array(
                'hiddenId' => $resultado->id,
                'hiddenNombre' => $resultado->nombre
            );
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'value' => $resultado->nombre,
                'class' => 'form-control'
            );
            $user = array(
                'name' => 'user',
                'type' => 'text',
                'value' => $resultado->usuario,
                'class' => 'form-control'
            );
            $old_pass = array(
                'name' => 'old_pass',
                'class' => 'form-control'
            );
            $new_pass = array(
                'name' => 'new_pass',
                'class' => 'form-control'
            );
            $confirmation_new_password = array(
                'name' => 'confirmation_new_password',
                'class' => 'form-control'
            );
            $buttonClass = array(
                'class' => 'btn btn-primary'
            );
        ?>
        <?= form_hidden($hidden) ?>
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
        <?= form_password($old_pass) ?>
        </div>
        <div class="form-group">
        <?= form_label('Contrasaña nueva: ', 'new_pass') ?>
        <?= form_password($new_pass) ?>
        </div>
        <div class="form-group">
        <?= form_label('Repetir contraseña: ', 'confirmation_new_password') ?>
        <?= form_password($confirmation_new_password) ?>
        </div>
        <?= form_submit('','Editar usuario', $buttonClass) ?>
        <?= form_close() ?>
    </body>
</html>