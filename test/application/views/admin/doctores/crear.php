    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Admin</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?= base_url(); ?>admin/doctores">Menú anterior</a></li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Secciones <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url(); ?>admin/coberturas">Coberturas</a></li>
                                <li><a href="<?= base_url(); ?>admin/doctores">Doctores</a></li>
                                <li><a href="<?= base_url(); ?>admin/especialidades">Especialidades</a></li>
                                <li><a href="<?= base_url(); ?>admin/instalaciones">Instalaciones</a></li>
                                <li><a href="<?= base_url(); ?>admin/servicios">Servicios</a></li>
                                <li><a href="<?= base_url(); ?>admin/usuarios">Usuarios</a></li>
                                <li><a href="<?= base_url(); ?>admin/categorias">Categorias</a></li>
                            </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?= base_url(); ?>admin/index">Menú principal</a></li>
                            <li><a href="<?= base_url(); ?>admin/index/logout">Cerrar sesión</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        <h3>Creación de doctor.</h3>
        <p>Desde aquí podrá crear un nuevo doctor para mostrar desde la página.</p>
        <p>El doctor puede tener varias especialidades seleccionadas.</p>
        <?=  form_open("") ?>

        <?
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'class' => 'form-control',
                'id' => 'nombre',
                'data-bv-field' => 'nombre',
                'onchange' => 'checkNombre()'
            );
            $submit = array(
                'id' => 'submit',
                'class' => 'btn btn-primary'
            );
            $checkbox = array(
                'name'          => 'esMedicoCabecera',
                'id'            => 'esMedicoCabecera',
                'class'         => 'form-control',
                'checked'       => FALSE
            );
        ?>
        <div class="form-group" id="div-form-nombre">
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        <i id="validate-wrong-nombre" class="form-control-feedback glyphicon glyphicon-remove" style="display:none;" data-bv-icon-for="nombre"></i>
        <i id="validate-ok-nombre" class="form-control-feedback glyphicon glyphicon-ok" style="display: none;" data-bv-icon-for="nombre"></i>
        <small id="warning-text-nombre" class="help-block" style="display:none;" data-bv-validator="notEmpty" data-bv-validator-for="nombre">Por favor, ingrese un nombre</small>
        </div>
        <div class="checkbox">
            <label><input name='esMedicoCabecera' type="checkbox" value="check">Es Medico Cabecera</label>
        </div>
        <div class="form-group" id="div-form-descripcion">
            <?= form_label('Especialidades: ', 'especialidades') ?>
            <select id="especialidades" multiple="multiple" name='especialidades' data-bv-icon-for="especialidades" onchange='checkEspecialidades()'>
            <? foreach($especialidades->result() as $especialidad): ?>    
                <option value="<?= $especialidad->id; ?>"><?= $especialidad->nombre; ?></option>    
            <? endforeach; ?>
            </select>
            <i id="validate-wrong-descripcion" class="form-control-feedback glyphicon glyphicon-remove" style="display:none;" data-bv-icon-for="especialidades"></i>
            <i id="validate-ok-descripcion" class="form-control-feedback glyphicon glyphicon-ok" style="display: none;" data-bv-icon-for="nombre"></i>
            <small id="warning-text-descripcion" class="help-block" style="display:none;" data-bv-validator="notEmpty" data-bv-validator-for="especialidades">Por favor, seleccione una o más especialidades</small>
        </div>
        <?= form_submit('submit','Crear doctor', $submit) ?>
        <?= form_close() ?>
        </div>
    </body>
</html>