<? foreach($coberturas->result() as $cobertura): ?>    
    <p><?= $cobertura->nombre; ?> ------- <img src="<?= base_url(); ?>img/obras-sociales/<?= $cobertura->imagen; ?>" /> 
        <a href="<?= base_url(); ?>admin/coberturas/editarFormularioCoberturas?id=<?= $cobertura->id ?>">Editar</a>
        <a href="<?= base_url(); ?>admin/coberturas/EliminarCobertura?id=<?= $cobertura->id ?>">Eliminar</a>
    </p>
<? endforeach; ?>
<?
if(isset($result)){
    echo $result;
}
?>