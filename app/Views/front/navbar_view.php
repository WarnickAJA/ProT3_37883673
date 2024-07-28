<!-- navbar -->
<?php
$session = session();
$nombre = $session->get("nombre");
$perfil = $session->get("perfil_id");
?>



<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand me-auto" href="<?php echo base_url('principal') ?>">
                <img src="<?php echo base_url('assets/img/logoreloj1.jpg') ?>" alt="logo" width="75" height="30"
                    class="img-fluid">

            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Agregado de php para admin y user -->

        <?php if (session()->perfil_id == 1): ?>
            <div class="btn btn-secondary active">
                <a href="">ADMIN: <?php echo session("usuario"); ?></a>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('quienes_somos') ?>">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('acerca_de') ?>">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/dashboard') ?>">Panel de Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url("/logout"); ?>" tabindex="-1"
                            aria-disabled="true">Cerrar Sesión</a>
                    </li>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>

        <?php elseif (session()->perfil_id == 2): ?>
            <div class="btn btn-secondary active">
                <a href="">CLIENTE: <?php echo session("usuario"); ?></a>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('quienes_somos') ?>">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('acerca_de') ?>">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url("/logout"); ?>" tabindex="-1"
                            aria-disabled="true">Cerrar Sesión</a>
                    </li>
                </ul>

                <ul class="nav-item dropdown me-3 mb-2 mb-lg-0">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Formas de Contacto
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Email</a></li>
                        <li><a class="dropdown-item" href="#">Whatsapp</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Llamada</a></li>
                    </ul>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>


        <?php else: ?>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('quienes_somos') ?>">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('acerca_de') ?>">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/registrarse') ?>">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/login') ?>">Login</a>
                    </li>



                    <!-- inicio desplegable pedido por la consiga-->

                    <ul class="nav-item dropdown me-3 mb-2 mb-lg-0">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Formas de Contacto
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Email</a></li>
                            <li><a class="dropdown-item" href="#">Whatsapp</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Llamada</a></li>
                        </ul>
                    </ul>

                </ul>

                <!--fin desplegable-->



                <!--
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>-->



                <!-- Buscador -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <!-- Fin Buscador -->
            <?php endif; ?>
        </div>
    </div>
</nav>

<!-- fin navbar-->