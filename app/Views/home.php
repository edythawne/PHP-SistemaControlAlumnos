<?php
    echo view('templates/page/header');
    echo view('templates/page/navbar');
    echo view('templates/page/navdrawer');
?>

<!-- Main Init -->
<main class="container">
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

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <h4>Generar Reportes</h4><br>
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Seleccione Datos Requeridos</h6>
                    <div class="card-text">
                        <span>Configuracion de Alumnos</span>
                        <div class="dropdown-divider"></div>
                        <form>
                            <div class="form-row">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Nombre con Apellidos</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Nombre y Apellidos Juntos</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Nombre y Apellidos Separados</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">CURP</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Fecha de Nacimiento</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Sexo</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Tutor</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Tipo Sangre</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Peso</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Talla</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <br>

                        <span>Configuracion de Grupos</span>
                        <div class="dropdown-divider"></div>
                        <form>
                            <div class="form-row">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Primer Grado</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Segundo Grado</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Tercero Grado</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Cuarto Grado</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Quinto Grado</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Sexto Grado</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-actions">
                    <a class="btn btn-outline-primary" href="#">Generar Lista</a>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Main Final -->

<?php
    echo view('templates/page/footer');
?>
