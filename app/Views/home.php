<?php
    echo view('templates/page/header');
    echo view('templates/page/navbar');
    echo view('templates/page/navdrawer');
?>

<!-- Main Init -->
<main class="container">
    <br>
    <!--<div class="row">
        <div class="col-sm-12 col-md-3 col-lg-4">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">Información de Alumnos</h5>
                    <p class="card-text">
                        Número de Hombre: <b> <?php echo $html['getNumbersStudents']['Hombres']; ?> </b>  <br>
                        Número de Mujeres: <b> <?php echo $html['getNumbersStudents']['Mujeres']; ?> </b> <br>
                        Total de Números: <b> <?php echo $html['getNumbersStudents']['Total']; ?> </b>
                    </p>
                </div>
                <div class="card-actions">
                    <a class="btn btn-outline-primary" href="#">Generar Lista</a>
                </div>
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <h4>Escuela Primaria Ford 32</h4>

            <div class="table-responsive">
                <table class="table text-center">
                    <thead class="thead-dark ">
                        <tr>
                            <th scope="col">Grado - Grupo</th>
                            <th scope="col">Docente</th>
                            <th scope="col">Número de Hombres</th>
                            <th scope="col">Número de Mujeres</th>
                            <th scope="col">Total de Alumnos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($html['getInfGrados']); $i++):  ?>
                            <tr>
                                <td><?php echo $html['getInfGrados'][$i]['grado'].$html['getInfGrados'][$i]['grupo']; ?></td>
                                <td><?php echo $html['getInfGrados'][$i]['nombre'].' '.$html['getInfGrados'][$i]['ape_paterno'].' '.$html['getInfGrados'][$i]['ape_materno']; ?></td>
                                <td><?php echo $html['getInfGrados'][$i]['hombres']; ?></td>
                                <td><?php echo $html['getInfGrados'][$i]['mujeres']; ?></td>
                                <td><?php echo $html['getInfGrados'][$i]['alumnos']; ?></td>
                            </tr>
                        <?php endfor; ?>
                        <tr>
                            <td colspan="2" scope="row">Totales</td>
                            <td><?php echo $html['getNumeroAlumnos']['hombres']; ?></td>
                            <td><?php echo $html['getNumeroAlumnos']['mujeres']; ?></td>
                            <td><?php echo $html['getNumeroAlumnos']['total']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<!-- Main Final -->

<?php
    echo view('templates/page/footer');
?>
