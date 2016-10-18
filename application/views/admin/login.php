    <body>
        <h3>Bienvenido al sistema de gestión de la Clínica Los Cedros Tapiales.</h3>    
        <p>Por favor, ingrese su nombre de usuario y contraseña.</p>
        <br>
        <?
            $formClass = array(
                'class' => 'form-inline'
            );
        ?>
        <div class="bd-example">
            <?=  form_open('', $formClass) ?>
            <? 
                $user = array(
                    'name' => 'user',
                    'type' => 'text',
                    'class' => 'form-control',
                    'style' => 'display: table-caption'
                );
                $pass = array(
                    'name' => 'pass',
                    'class' => 'form-control',
                    'type' => 'password',
                    'style' => 'display: table-caption'
                );
                $labelClass = array(
                    'class' => 'col-xs-2 col-form-label' 
                );
                $buttonClass = array(
                    'class' => 'btn btn-primary'
                );

            ?>
            <div class="form-group">
                <?= form_label('Usuario: ', 'user', $labelClass) ?>
                <?= form_input($user) ?>
            </div>
            <div class="form-group">
                <?= form_label('Contrasaña: ', 'pass', $labelClass) ?>
                <?= form_password($pass) ?>
            </div>
            <br>
            <br>
            <?= form_submit('','Entrar al sistema', $buttonClass) ?>
            <?= form_close() ?>
        </div>
    </body>
</html>
