<?php
    echo view('templates/page/header');
    echo view('templates/page/navbar');
    echo view('templates/page/navdrawer');
?>

<!-- Main Init -->
<main style="margin: 30px;">

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <h4>Escuela Primaria Ford 32</h4><br>

            <div class="table-responsive">
                <table class="table table-sm text-center table-striped table-bordered table-hover">
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
                                <td><?php echo $html['getInfGrados'][$i]['nombre']; ?></td>
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
