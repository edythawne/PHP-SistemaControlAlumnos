<?php
    echo view('templates/report/header');
    echo view('templates/report/footer_sign_dir');
?>

<?php
    // Variables
    $grade = $html['report'][0]['Grado'];
    $counter = 1;
?>

<!-- Wrap the content of your PDF inside a main tag -->
<main>
    <!--<?php echo $html['report'][0]['Grado']; ?>-->
    <?php for($i = 0; $i < count($html['report']); $i++):  ?>

        <?php if ($grade == $html['report'][$i]['Grado']): ?>

            <?php  if ($i == 0):  ?>

                <!-- Page Init -->
                <div style="page-break-after: always;">

                <!-- Table Init -->
                <table>
                    <thead>
                        <tr bgcolor="#c3c3c3">
                            <th colspan="<?php echo count($html['report'][$i])+1; ?>">ALUMNOS <?php echo $html['report'][$i]['Grado']; ?></th>
                        </tr>
                        <tr bgcolor="#c3c3c3">
                            <th>#</th>
                            <?php foreach ($html['report'][$i] as $key => $val): ?>
                                <th><?php echo $key; ?></th>
                            <?php endforeach; ?>
                        </tr>
                        <tbody>
                            <tr>
                                <td><?php echo $counter; ?></td>
                                <?php foreach ($html['report'][$i] as $key => $val): ?>
                                    <td><?php echo $val; ?></td>
                                <?php endforeach; ?>
                            </tr>

            <?php else: ?>

                <?php $counter = $counter + 1; ?>
                <tr>
                    <td><?php echo $counter; ?></td>
                    <?php foreach ($html['report'][$i] as $key => $val): ?>
                        <td><?php echo $val; ?></td>
                    <?php endforeach; ?>
                </tr>

            <?php endif; ?>

        <?php else: ?>

            <?php
                $counter = 1;
                echo '</tbody></table></div>';
                $grade = $html['report'][$i]['Grado'];
            ?>

            <!-- Page Init -->
            <div style="page-break-after: always;">

                <!-- Table Init -->
                <table>
                    <thead>
                    <tr bgcolor="#c3c3c3">
                        <th colspan="<?php echo count($html['report'][$i])+1; ?>"><b>ALUMNOS</b> <?php echo $html['report'][$i]['Grado']; ?></th>
                    </tr>
                    <tr bgcolor="#c3c3c3">
                        <th>#</th>
                        <?php foreach ($html['report'][$i] as $key => $val): ?>
                            <th><?php echo $key; ?></th>
                        <?php endforeach; ?>
                    </tr>
                    <tbody>
                    <tr>
                        <td><?php echo $counter; ?></td>
                        <?php foreach ($html['report'][$i] as $key => $val): ?>
                            <td><?php echo $val; ?></td>
                        <?php endforeach; ?>
                    </tr>

        <?php endif; ?>

    <?php endfor; ?>

</main>
</body>
</html>