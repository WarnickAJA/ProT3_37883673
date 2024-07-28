<div class="container mt-5">
    <h2><?= $titulo ?></h2>
    <form action="<?= base_url('/actualizar/' . $datos['id_usuario']); ?>" method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?= $datos['nombre'] ?>">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" value="<?= $datos['apellido'] ?>">
        </div>
        <!-- Añade más campos según tus necesidades -->
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>