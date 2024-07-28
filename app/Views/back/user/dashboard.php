<!-- panel para editar usuario -->

<div class="container mt-5">
    <h2><?= $titulo ?></h2>

    <!-- Mostrar mensajes de acciones-->
    <?php if (session()->get('status')): ?>
        <div class="alert alert-info">
            <?= session()->get('status') ?>
        </div>
    <?php endif; ?>


    <a href="<?php echo base_url('/registrarse') ?>" class="btn btn-primary mb-3">Agregar Usuario</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID (1=admin, 2=cliente)</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos as $dato): ?>
                <tr>
                    <td><?= $dato['perfil_id'] ?></td>
                    <td><?= $dato['nombre'] ?></td>
                    <td><?= $dato['apellido'] ?></td>
                    <td><?= $dato['email'] ?></td>
                    <td>
                        <a href="<?php echo base_url('/edit/' . $dato['id_usuario']) ?>" class="btn btn-warning">Editar</a>
                        <form action="<?php echo base_url('/delete/' . $dato['id_usuario']) ?>" method="post"
                            style="display:inline;">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>