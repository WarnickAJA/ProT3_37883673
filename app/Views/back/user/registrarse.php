<!-- Formulario obtenido de phind
    Podes sacar py-4 para achicar la caja de input -->

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                <div class="card-header">
                    <h3 class="text-center font-weight-light">Crear Cuenta</h3>
                </div>

                <?php $validation = \Config\Services::validation(); ?>

                <div class="card-body">
                    <form method="post" action="<?php echo base_url('/enviar_registro') ?>">
                        <?= csrf_field(); ?>
                        <!-- Seguridad de codeigniter. Este token es utilizado por CodeIgniter para validar que la solicitud proviene de un origen confiable y no de un ataque CSRF.-->

                        <?php if (!empty(session()->getFlashdata('fail'))): ?>
                            <div class="alert alert-danger"> <?= session()->getFlashdata('fail'); ?></div>
                        <?php endif ?>

                        <?php if (!empty(session()->getFlashdata('success'))): ?>
                            <div class="alert alert-success"> <?= session()->getFlashdata('success'); ?></div>
                        <?php endif ?>


                        <!-- Campos del formulario -->

                        <div class="mb-3">
                            <label class="mb-1 fw-bold" for="nombre">Nombre</label>
                            <input class="form-control py-4" name="nombre" type="text" placeholder="Tu Nombre"
                                required />

                            <!--Error -->
                            <?php if ($validation->getError('nombre')) { ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('nombre'); ?>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="mb-3">
                            <label class="mb-1 fw-bold" for="apellido">Apellido</label>
                            <input class="form-control py-4" name="apellido" type="text" placeholder="Tu Apellido"
                                required />

                            <!--Error -->
                            <?php if ($validation->getError('apellido')) { ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('apellido'); ?>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="mb-3">
                            <label class="mb-1 fw-bold" for="email">Correo Electrónico</label>
                            <input class="form-control py-4" name="email" type="email" placeholder="ejemplo@dominio.com"
                                required />

                            <!--Error -->
                            <?php if ($validation->getError('email')) { ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('email'); ?>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="mb-3">
                            <label class="mb-1 fw-bold" for="usuario">Usuario</label>
                            <input class="form-control py-4" name="usuario" type="text" placeholder="Usuario"
                                required />

                            <!--Error -->
                            <?php if ($validation->getError('usuario')) { ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('usuario'); ?>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="mb-3">
                            <label class="mb-1 fw-bold" for="password">Contraseña</label>
                            <input class="form-control py-4" name="password" type="password" placeholder="Tu Contraseña"
                                required />

                            <!--Error -->
                            <?php if ($validation->getError('password')) { ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('password'); ?>
                                </div>
                            <?php } ?>

                        </div>

                        <div class="mt-4 mb-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Registrarse</button>
                            </div>
                        </div>

                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button type="reset" class="btn btn-primary">Limpiar Formulario</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>