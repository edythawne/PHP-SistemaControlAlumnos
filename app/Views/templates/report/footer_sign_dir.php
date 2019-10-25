<footer>
    <div>
        <b>Director de la Escuela</b> <br><br>
        <div class="signature">
            <span style="display: inline-block; border-top: 1px solid #000; padding-top:2px; width: 300px">
                <?php

                    if($html['director'][0]['sexo'] == 'F'){
                        echo 'Profra. '.$html['director'][0]['nombre'].' '.$html['director'][0]['apellidos'];
                    } else {
                        echo 'Profr. '.$html['director'][0]['nombre'].' '.$html['director'][0]['apellidos'];
                    }

                 ?>
                 
            </span>
        </div>
    </div>
</footer>
