    <body>
        <?=  form_open() ?>
        <? 
            $user = array(
                'name' => 'user',
                'type' => 'text'
            );
            $pass = array(
                'name' => 'pass'
            );
            
        ?>
        <?= form_hidden('id', 'johndoe') ?>
        <?= form_label('Usuario: ', 'user') ?>
        <?= form_input($user) ?>
        <br>
        <?= form_label('Contrasaña: ', 'pass') ?>
        <?= form_password($pass) ?>
        <br>
        <?= form_submit('','Entrar al sistema') ?>
        <?= form_close() ?>
    </body>
</html>