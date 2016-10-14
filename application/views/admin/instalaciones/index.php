<? foreach($instalaciones->result() as $instalacion): ?>    
    <p><?= $instalacion->nombre; ?> ------- <img style='width: 500px; height: 300px;' src="<?= base_url(); ?>img/<?= $instalacion->imagen; ?>" /> --------- <?= $instalacion->descripcion; ?>
        <a href="<?= base_url(); ?>admin/instalaciones/editarFormularioInstalaciones?id=<?= $instalacion->id ?>">Editar</a>
        <a href="<?= base_url(); ?>admin/instalaciones/EliminarInstalacion?id=<?= $instalacion->id ?>">Eliminar</a>
    </p>
<? endforeach; ?>
<?
if(isset($result)){
    echo $result;
}
?>