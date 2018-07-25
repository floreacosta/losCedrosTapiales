    <body>
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
                        <a class="navbar-brand" href="<?= base_url(); ?>admin/home">Admin</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?= base_url(); ?>admin/doctores">Menú anterior</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Secciones <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="navigation" aria-label="Menú desplegable - Secciones de administración">
                                <li><a href="<?= base_url(); ?>admin/cobertura">Coberturas</a></li>
                                <li><a href="<?= base_url(); ?>admin/empleado">Empleados</a></li>
                                <li><a href="<?= base_url(); ?>admin/especialidad">Especialidades</a></li>
                                <li><a href="<?= base_url(); ?>admin/estudio">Estudios</a></li>
                                <li><a href="<?= base_url(); ?>admin/instalacion">Instalaciones</a></li>
                                <li><a href="<?= base_url(); ?>admin/servicio">Servicios</a></li>
                                <li><a href="<?= base_url(); ?>admin/usuario">Usuarios</a></li>
                                <li><a href="<?= base_url(); ?>admin/categoria">Categorías</a></li>
                                <li><a href="<?= base_url(); ?>admin/noticia">Noticias</a></li>
                              </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?= base_url(); ?>admin/home">Menú principal</a></li>
                            <li><a href="<?= base_url(); ?>admin/home/logout">Cerrar sesión</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        <div class="container">
        <h3>Edición de doctor.</h3>
        <p>Desde aquí podrá cambiar los datos del doctor seleccionado.</p>
        <p>El doctor puede tener varias especialidades seleccionadas.</p>
        <?=  form_open('admin/doctor/updateDoctores') ?>

        <?
            $resultadoDoctor = $doctor->result()[0];
            $resultadoEspecialidadesCompleto = $especialidades->result();
            if($especialidadesXDoctor)
            $resultadoEspecialidadesXDoctor = $especialidadesXDoctor->result();
            else
            $resultadoEspecialidadesXDoctor = array();

            $hidden = array(
                'hiddenId' => $resultadoDoctor->id
            );
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'value' => $resultadoDoctor->nombre,
                'class' => 'form-control',
                'onchange' => 'checkNombre()',
                'id' => 'nombre',
                'data-bv-field' => 'nombre',
                'onchange' => 'checkNombre()'
            );
            $submit = array(
                'id' => 'submit',
                'class' => 'btn btn-primary'
            );

            $especialidadesConSeleccion = array();

            foreach ($resultadoEspecialidadesCompleto as $especialidad) {
                $esSeleccionada = false;
                foreach ($resultadoEspecialidadesXDoctor as $especialidadXDoctor) {
                    if(!$esSeleccionada){
                        if($especialidad->id === $especialidadXDoctor->idEspecialidad){
                            $esSeleccionada = true;
                        }else{
                            $esSeleccionada = false;
                        }
                    }
                }
                $array = array(
                    'idEspecialidad' => $especialidad->id,
                    'nombreEspecialidad' => $especialidad->nombre,
                    'esSeleccionada' => $esSeleccionada
                );
                $especialidadesConSeleccion[] = $array;
            }
        ?>
        <?= form_hidden($hidden) ?>
        <div class="form-group" id="div-form-nombre">
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        <i id="validate-wrong-nombre" class="form-control-feedback glyphicon glyphicon-remove" style="display:none;" data-bv-icon-for="nombre"></i>
        <i id="validate-ok-nombre" class="form-control-feedback glyphicon glyphicon-ok" style="display: none;" data-bv-icon-for="nombre"></i>
        <small id="warning-text-nombre" class="help-block" style="display:none;" data-bv-validator="notEmpty" data-bv-validator-for="nombre">Por favor, ingrese un nombre</small>
        </div>
        <br>
        <div class="checkbox">
            <label><input name='esMedicoCabecera' type="checkbox" value="check" <? echo(($resultadoDoctor->esMedicoCabecera == 1) ? 'checked' : ''); ?> >Es Medico Cabecera</label>
        </div>
        <div class="form-group" id="div-form-descripcion">
        <?= form_label('Especialidades: ', 'especialidades') ?>
        <select id="especialidades" multiple="multiple" name='especialidades' data-bv-icon-for="especialidades" onchange='checkEspecialidades()'>
        <? foreach($especialidadesConSeleccion as $especialidadConSeleccion): ?>
            <option <?= ($especialidadConSeleccion["esSeleccionada"] ? 'selected=selected' : '') ?> value="<?= $especialidadConSeleccion["idEspecialidad"]; ?>"><?= $especialidadConSeleccion["nombreEspecialidad"]; ?></option>
        <? endforeach; ?>
        </select>
        <i id="validate-wrong-descripcion" class="form-control-feedback glyphicon glyphicon-remove" style="display:none;" data-bv-icon-for="especialidades"></i>
        <i id="validate-ok-descripcion" class="form-control-feedback glyphicon glyphicon-ok" style="display: none;" data-bv-icon-for="nombre"></i>
        <small id="warning-text-descripcion" class="help-block" style="display:none;" data-bv-validator="notEmpty" data-bv-validator-for="especialidades">Por favor, seleccione una o más especialidades</small>
        </div>
        <?= form_submit('submit','Editar doctor', $submit) ?>
        <?= form_close() ?>
        </div>
    </body>
</html>
