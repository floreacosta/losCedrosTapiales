<?
if(isset($fail)) {
    if($fail) {
        ?>
        <div class="alert alert-danger text-center">
            Su usuario o contraseño es incorrecto, por favor intentelo de nuevo.
        </div>
      <?
    }
}
?>
  <body>
      <div class="container">
      <h3>Bienvenido al sistema de gestión de Sanatorio Privado Madero.</h3>
      <p>Por favor, ingrese su nombre de usuario y contraseña.</p>
      <br>
      <div class="bd-example">
          <?=  form_open('') ?>
          <?
              $user = array(
                  'name' => 'user',
                  'type' => 'text',
                  'class' => 'form-control'
              );
              $pass = array(
                  'name' => 'pass',
                  'class' => 'form-control',
                  'type' => 'password'
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
          <?= form_submit('', 'Entrar al sistema', $buttonClass) ?>
          <?= form_close() ?>
      </div>
      </div>
  </body>
</html>
