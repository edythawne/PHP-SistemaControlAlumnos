<?php
    echo view('templates/page/header');
    echo view('templates/page/navbar');
    echo view('templates/page/navdrawer');
?>

<?php
    // Otras variables
    $total_alumnos = 0;
    $total_hombres = 0;
    $total_mujeres = 0;
?>

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
                            <th scope="col" class="text-center">Ver Alumnos</th>
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
                                <td class="align-middle">
                                    <button class="btn my-1 btn-sm" type="button">Ver</button>
                                </td>
                            </tr>
                        <?php endfor; ?>
                        <tr>
                            <td colspan="2" scope="row">Totales</td>
                            <td><?php echo $total_hombres; ?></td>
                            <td><?php echo $total_mujeres; ?></td>
                            <td><?php echo $total_alumnos; ?></td>
                            <td></td>
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
