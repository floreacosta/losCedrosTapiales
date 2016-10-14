<? foreach($doctores->result() as $doctor): ?>    
    <p><?= $doctor->nombre; ?>
        <a href="<?= base_url(); ?>admin/doctores/editarFormularioDoctores?id=<?= $doctor->id ?>">Editar</a>
        <a href="<?= base_url(); ?>admin/doctores/EliminarDoctor?id=<?= $doctor->id ?>">Eliminar</a>
    </p>
<? endforeach; ?>
<?
if(isset($result)){
    echo $result;
}
?>