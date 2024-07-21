<?php
$session = session();
$nombre = $session->get("nombre");
$perfil = $session->get("perfil_id");
?>


<div class="container">
    <div class="jumbotron mt-5">
        <h1 class="display-4">¡Bienvenido, <?php echo $nombre; ?>!</h1>
        <p class="lead">Te has autenticado correctamente.</p>
        <hr class="my-4">
        <p>Esta es tu página de inicio después de iniciar sesión.</p>
        <a class="btn btn-primary btn-lg" href="<?php echo site_url('/logout'); ?>" role="button">Cerrar sesión</a>
    </div>
</div>