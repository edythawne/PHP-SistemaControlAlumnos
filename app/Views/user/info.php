<?php
    echo view('user/templates/header');
    echo view('user/templates/navbar');
    echo view('user/templates/navdrawer');
?>

<?php
    // Variables
    $object_grados = $html['getIDGradoGrupo'];
    $object_alumnos = $html['getAlumnosGrado'];
?>

<!-- Main Init -->
<main style="margin: 25px;">

    <div class="row">

        <div class="col-6">
            <h4>Lista de Alumnos</h4><br>
        </div>


        <div class="col-6 text-right">
            <div class="dropdown">
                <button aria-expanded="false" aria-haspopup="true" class="btn dropdown-toggle" data-toggle="dropdown"
                        id="dropdownMenuButton1" type="button"><?php echo $object_alumnos[0]['Grupo']; ?></button>
                <div aria-labelledby="dropdownMenuButton1" class="dropdown-menu menu">
                    <?php foreach ($object_grados as $position): ?>
                        <?php $url_id = 'user/info/'.$position['id_grupo'] ?>
                        <a class="dropdown-item" href="<?php echo base_url($url_id); ?>"><?php echo $position['grado'].$position['grupo'] ?>
                        </a>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

            <?php if (empty($object_alumnos)): ?>

                No hay datos

            <?php else: ?>

                <div class="table-responsive">
                    <table class="table table-sm text-center table-striped table-bordered table-hover">
                        <thead class="thead">
                        <tr>
                            <?php $header = array_keys($object_alumnos[0]); ?>
                            <?php unset($header[0]); ?>
                            <?php print_r($header); ?>

                            <?php foreach ($header as $value):  ?>
                                <th scope="col" class="text-center"><?php  echo $value; ?></th>
                            <?php endforeach; ?>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($object_alumnos as $position): ?>
                                <tr>
                                    <?php foreach ($position as $key => $value): ?>
                                        <td><?php echo $value; ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            <?php endif; ?>

        </div>
    </div>

</main>
<!-- Main Final -->

<?php
    echo view('user/templates/footer');
?>

