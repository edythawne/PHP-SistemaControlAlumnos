<?php
    echo view('templates/report/header');
    echo view('templates/report/footer_sign_dir');
?>

<?php
    // Variables
    $grade = '1A';
    $counter = 1;
?>

<!-- Wrap the content of your PDF inside a main tag -->
<main>

    <?php  for($i = 0; $i < count($html['students']); $i++):  ?>
        <?php if ($grade == $html['students'][$i]['grado'].$html['students'][$i]['grupo']): ?>
            <?php  if ($i == 0): ?>
                <!-- Page Init -->
                <div style="page-break-after: always; font-size: 20px;">
                    <!-- Table Init -->
                    <table style="">
                        <thead>
                        <tr bgcolor="#c3c3c3">
                            <th colspan="2">ALUMNOS <?php echo $html['students'][$i]['grado'].'° '.$html['students'][$i]['grupo']; ?></th>
                        </tr>
                        <tr bgcolor="#c3c3c3">
                            <th>NÚMERO</th>
                            <th>NOMBRE</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $counter; ?></td>
                            <td><?php echo $html['students'][$i]['ape_paterno'].' '.$html['students'][$i]['ape_materno'].' '.$html['students'][$i]['nombre']; ?></td>
                        </tr>
            <?php else: ?>
                <?php $counter = $counter + 1; ?>

                        <tr >
                            <td><?php echo $counter; ?></td>
                            <td><?php echo $html['students'][$i]['ape_paterno'].' '.$html['students'][$i]['ape_materno'].' '.$html['students'][$i]['nombre']; ?></td>
                        </tr>
            <?php endif; ?>
        <?php else: ?>
            <?php
                $counter = 1;
                echo '</tbody></table></div>';
                $grade = $html['students'][$i]['grado'].$html['students'][$i]['grupo'];
            ?>

            <!-- Page Init -->
            <div style="page-break-after: always; font-size: 20px;">

                <!-- Table Init -->
                <table style="width: 100%" class="table-border">
                    <thead>
                        <tr bgcolor="#c3c3c3">
                            <th colspan="2">ALUMNOS <?php echo $html['students'][$i]['grado'].'° '.$html['students'][$i]['grupo']; ?></th>
                        </tr>
                        <tr bgcolor="#c3c3c3">
                            <th>NÚMERO</th>
                            <th>NOMBRE</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $counter; ?></td>
                            <td><?php echo $html['students'][$i]['ape_paterno'].' '.$html['students'][$i]['ape_materno'].' '.$html['students'][$i]['nombre']; ?></td>
                        </tr>
            <?php  ?>
        <?php endif; ?>
    <?php endfor;  ?>


    <!-- <div style="page-break-after: always; font-size: 21px"> </div> -->
    <!--<div style="page-break-after: never;"> Content Page 2</div> -->
</main>
</body>
</html>
