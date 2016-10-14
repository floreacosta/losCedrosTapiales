<? foreach($especialidades->result() as $especialidad): ?>    
    <p><?= $especialidad->nombre; ?>
        <a href="<?= base_url(); ?>admin/especialidades/editarFormularioEspecialidades?id=<?= $especialidad->id ?>">Editar</a>
        <a href="<?= base_url(); ?>admin/especialidades/EliminarEspecialidad?id=<?= $especialidad->id ?>">Eliminar</a>
    </p>
<? endforeach; ?>
<?
if(isset($result)){
    echo $result;
}
?>