<!-- code obtenido de phind-->


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                <div class="card-header">
                    <h3 class="text-center font-weight-light">Iniciar Sesión</h3>
                </div>

                <!-- Mensaje error -->
                 <?php if(session()->getFlashdata("msg")): ?>
                    <div class="alert alert-warning">
                        <?=session()->getFlashdata('msg')?>
                    </div>
                    <?php endif;?>


                <div class="card-body">
                    <form method="post" action="<?php echo base_url("/enviar_login") ?>">
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="email" type="text"
                                    placeholder="Email" required />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-4 col-form-label">Contraseña</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="password" type="password" placeholder="Tu Contraseña"
                                    required />
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                            </div>
                            <div class="d-grid mb-3">
                                <a class="btn btn-info" href="#">¿Olvidaste tu Contraseña?</a>
                            </div>

                            <div class="d-grid">
                                <a class="btn btn-success" href="<?php echo base_url("/registrarse");?>">¿No estás registrado? Regístrate aquí</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>