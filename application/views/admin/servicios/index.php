<? foreach($servicios->result() as $servicio): ?>    
    <p><?= $servicio->nombre; ?> ------- <?= $servicio->descripcion; ?>
        <a href="<?= base_url(); ?>admin/servicios/editarFormularioServicios?id=<?= $servicio->id ?>">Editar</a>
        <a href="<?= base_url(); ?>admin/servicios/EliminarServicio?id=<?= $servicio->id ?>">Eliminar</a>
    </p>
<? endforeach; ?>
<?
if(isset($result)){
    echo $result;
}
?>