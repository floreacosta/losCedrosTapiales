<? foreach($usuarios->result() as $usuario): ?>    
    <p><?= $usuario->nombre; ?> ------- <?= $usuario->usuario; ?>
        <a href="<?= base_url(); ?>admin/usuarios/editarFormularioUsuario?id=<?= $usuario->id ?>">Editar</a>
        <a href="<?= base_url(); ?>admin/usuarios/EliminarUsuario?id=<?= $usuario->id ?>">Eliminar</a>
    </p>
<? endforeach; ?>
<?
if(isset($result)){
    echo $result;
}
?>