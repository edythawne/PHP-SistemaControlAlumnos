<?php
    // Otras variables
    $total_alumnos = 0;
    $total_hombres = 0;
    $total_mujeres = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">

    <!-- Title -->
    <title><?php echo $html['title']; ?></title>

    <!-- CSS -->
    <!-- Add Material font (Roboto) and Material icon as needed -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Add Material CSS, replace Bootstrap CSS -->
    <link href="<?php echo css_url('material.css'); ?>" rel="stylesheet">
</head>
<body>
    <!-- Navigation Bar Init -->
    <header class="">
        <nav class="navbar bg-light text-black fixed-top navbar-dark navbar-full bg-primary doc-navbar-default">
            <button aria-controls="navdrawerDefault" aria-expanded="false" aria-label="Toggle Navdrawer" class="navbar-toggler" data-target="#navdrawerDefault" data-toggle="navdrawer"><span class="navbar-toggler-icon"></span></button>
            <span class="navbar-brand mr-auto">Acceso</span>

            <div class="navbar-nav">
                <a class="nav-item nav-link" href="<?php echo base_url('user'); ?>">Docentes</a>
                <a class="nav-item nav-link" href="<?php echo base_url('admin'); ?>">Administrativo</a>
            </div>
        </nav>
    </header>

    <br><br>
    <!-- Navigation Bar Final -->

    <!-- Main Init -->
    <!-- Main Init -->
    <main style="margin: 30px;">

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <h4>Escuela Primaria Ford 32</h4><br>

                <div class="table-responsive">
                    <table class="table table-sm text-center table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">Grado - Grupo</th>
                            <th scope="col" class="text-center">Docente</th>
                            <th scope="col" class="text-center">Número de Hombres</th>
                            <th scope="col" class="text-center">Número de Mujeres</th>
                            <th scope="col" class="text-center">Total de Alumnos</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php for ($i = 0; $i < count($html['getInfGrados']); $i++):  ?>
                            <tr>
                                <td class="align-middle">
                                    <?php echo $html['getInfGrados'][$i]['grado'].$html['getInfGrados'][$i]['grupo']; ?>
                                </td>
                                <td class="align-middle">
                                    <?php echo $html['getInfGrados'][$i]['docente']; ?></td>
                                <td class="align-middle">
                                    <?php
                                        $total_hombres += $html['getInfGrados'][$i]['num_hombres'];
                                        echo $html['getInfGrados'][$i]['num_hombres'];
                                    ?>
                                </td>
                                <td class="align-middle">
                                    <?php
                                        $total_mujeres += $html['getInfGrados'][$i]['num_mujeres'];
                                        echo $html['getInfGrados'][$i]['num_mujeres'];
                                    ?>
                                </td>
                                <td class="align-middle">
                                    <?php
                                        $total_alumnos += $html['getInfGrados'][$i]['total_alumnos'];
                                        echo $html['getInfGrados'][$i]['total_alumnos'];
                                    ?>
                                </td>
                            </tr>
                        <?php endfor; ?>
                        <tr>
                            <td colspan="2" scope="row">Totales</td>
                            <td><?php echo $total_hombres; ?></td>
                            <td><?php echo $total_mujeres; ?></td>
                            <td><?php echo $total_alumnos; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </main>
    <!-- Main Final -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo js_url('jquery-3.3.1.slim.js'); ?>"></script>
    <script src="<?php echo js_url('popper.js'); ?>"></script>
    <script src="<?php echo js_url('bootstrap.js'); ?>"></script>

    <!-- Then Material JavaScript on top of Bootstrap JavaScript -->
    <script src="<?php echo js_url('material.js'); ?>"></script>
</body>
</html>