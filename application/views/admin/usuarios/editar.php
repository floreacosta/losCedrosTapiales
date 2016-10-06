    <body>
        <?=  form_open() ?>
        <?
            $resultado = $usuario->result()[0];
                        
            $hidden = array(
                'name' => 'id',
                'type' => 'hidden',
                'value' => $resultado->id
            );
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'value' => $resultado->nombre
            );
            $user = array(
                'name' => 'user',
                'type' => 'text',
                'value' => $resultado->usuario
            );
            $old_pass = array(
                'name' => 'old_pass'
            );
            $new_pass = array(
                'name' => 'new_pass'
            );
            $confirmation_new_password = array(
                'name' => 'confirmation_new_password'
            );
        ?>
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        <br>
        <?= form_label('Usuario: ', 'user') ?>
        <?= form_input($user) ?>
        <br>
        <?= form_label('Contrasaña anterior: ', 'old_pass') ?>
        <?= form_password($old_pass) ?>
        <br>
        <?= form_label('Contrasaña nueva: ', 'new_pass') ?>
        <?= form_password($new_pass) ?>
        <br>
        <?= form_label('Repetir contraseña: ', 'confirmation_new_password') ?>
        <?= form_password($confirmation_new_password) ?>
        <br>
        <?= form_submit('','Editar usuario') ?>
        <?= form_close() ?>
    </body>
</html>