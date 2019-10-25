<?php
    echo view('templates/page/header');
    echo view('templates/page/navbar');
    echo view('templates/page/navdrawer');
?>

<!-- Main Init -->
<main class="d-flex p-4">
    <div class="row">
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
    </div>
</main>
<!-- Main Final -->

<?php
    echo view('templates/page/footer');
?>
