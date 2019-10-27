<?php
    echo view('templates/page/header');
    echo view('templates/page/navbar');
    echo view('templates/page/navdrawer');
?>
<!-- Main Init -->
<main class="container">

    <div class="row">
        <?php echo form_open('validarReporteGenerador'); ?>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <h4>Generar Reportes</h4><br>
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Seleccione Datos Requeridos</h6>
                        <div class="card-text">

                            <span>Configuracion de Alumnos</span>
                            <div class="dropdown-divider"></div>

                            <div class="form-row">

                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="nombre1" class="custom-control-input" checked="true" name="params[]"
                                               value="CONCAT(Alumnos.ape_paterno, ' ', Alumnos.ape_materno, ' ', Alumnos.nombre) AS 'Nombre del Alumno'">
                                        <label class="custom-control-label" for="nombre1">Nombre y Apellidos</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="nombre2" class="custom-control-input" name="params[]"
                                               value="CONCAT(Alumnos.ape_paterno, ' ', Alumnos.ape_materno) AS Apellidos, Alumnos.nombre AS Nombre">
                                        <label class="custom-control-label" for="nombre2">Nombre y Apellidos Juntos</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="nombre3" class="custom-control-input" name="params[]"
                                               value="Alumnos.ape_paterno AS 'Apellido Paterno', ' ', Alumnos.ape_materno AS 'Apellido Materno', ' ', Alumnos.nombre AS Nombre">
                                        <label class="custom-control-label" for="nombre3">Nombre y Apellidos Separados</label>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="curp" name="params[]"
                                               value="Alumnos.curp AS CURP">
                                        <label class="custom-control-label" for="curp">CURP</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="fecha_nacimiento" name="params[]"
                                               value="Alumnos.fec_nacimiento AS 'Fecha Nacimiento'">
                                        <label class="custom-control-label" for="fecha_nacimiento">Fecha de Nacimiento</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="sexo" name="params[]"
                                               value="Alumnos.sexo AS Sexo">
                                        <label class="custom-control-label" for="sexo">Sexo</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tutor" name="params[]"
                                               value="CONCAT(Tutores.ape_paterno, ' ', Tutores.ape_materno, ' ', Tutores.nombre) AS 'Nombre del Tutor'">
                                        <label class="custom-control-label" for="tutor">Tutor</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tipo_sangre" name="params[]"
                                               value="TiposSangre.tipo AS 'Tipo Sangre'">
                                        <label class="custom-control-label" for="tipo_sangre">Tipo Sangre</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="peso" name="params[]"
                                               value="DatosAlumno.peso AS Peso">
                                        <label class="custom-control-label" for="peso">Peso</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="talla" name="params[]"
                                               value="DatosAlumno.talla AS Talla">
                                        <label class="custom-control-label" for="talla">Talla</label>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <span>Configuracion de Grupos</span>
                            <div class="dropdown-divider"></div>
                            <div class="form-row">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="primer_anio" checked="true" name="grupos[]" value="1">
                                        <label class="custom-control-label" for="primer_anio">Primer Grado</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="segundo_anio" checked="true" name="grupos[]" value="2">
                                        <label class="custom-control-label" for="segundo_anio">Segundo Grado</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tercer_anio" checked="true" name="grupos[]" value="3">
                                        <label class="custom-control-label" for="tercer_anio">Tercero Grado</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cuarto_anio" checked="true" name="grupos[]" value="4">
                                        <label class="custom-control-label" for="cuarto_anio">Cuarto Grado</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="quinto_anio" checked="true" name="grupos[]" value="5">
                                        <label class="custom-control-label" for="quinto_anio">Quinto Grado</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="sexto_anio" checked="true" name="grupos[]" value="6">
                                        <label class="custom-control-label" for="sexto_anio">Sexto Grado</label>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <span>Configuracion de Orientación</span>
                            <div class="dropdown-divider"></div>
                            <div class="form-row">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="portrait" class="custom-control-input" checked="true" name="orientacion[]"
                                               value="portrait">
                                        <label class="custom-control-label" for="portrait">Vertical</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="landscape" class="custom-control-input"  name="orientacion[]"
                                               value="landscape">
                                        <label class="custom-control-label" for="landscape">Horizontal</label>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <span>Configuracion de Tamaño de Pagina</span>
                            <div class="dropdown-divider"></div>
                            <div class="form-row">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="carta" class="custom-control-input" checked="true" name="tamanio[]"
                                               value="letter">
                                        <label class="custom-control-label" for="carta">Tamaño Carta</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="a4" class="custom-control-input"  name="tamanio[]"
                                               value="A4">
                                        <label class="custom-control-label" for="a4">Tamaño A4</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="oficio" class="custom-control-input"  name="tamanio[]"
                                               value="legal">
                                        <label class="custom-control-label" for="oficio">Tamaño Oficio</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-actions">
                        <button name="submit" type="submit" class="btn btn-outline-primary">Generar Reporte</button>
                    </div>
                </div>
            </div>
        <?php echo '</form>'; ?>
    </div>

<!-- Main Final -->

<?php
    echo view('templates/page/footer');
?>

