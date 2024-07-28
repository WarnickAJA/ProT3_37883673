
<div class="container mt-5">
        <h2><?= $titulo ?></h2>
        <form action="<?= base_url('actualizar_usuario/' . $datos['id_usuario']); ?>" method="post">
            <div class="mb-3">
                <label for="usuario" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" name="usuario" value="<?= $datos['usuario'] ?>" >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $datos['email'] ?>" >
            </div>
            <!-- Añade más campos según tus necesidades -->
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>