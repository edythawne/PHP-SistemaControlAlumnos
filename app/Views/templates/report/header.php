<html>
<head>
    <title><?php echo $html['title']; ?></title>
    <link href="<?php echo css_report(); ?>" rel="stylesheet">
</head>
<body>
<!-- Define header and footer blocks before your content -->
<header>
    <table>
        <thead>
            <tr align="center">
                <th style="border: none">
                    <img src="<?php echo getImageReport('gob.jpg');?>" width="200px" height="110px">
                </th>
                <th style="border: none">
                    <img src="<?php echo getImageReport('sev.jpg');?>" width="200px" height="110px">
                </th>
                <th style="border: none">
                    <img src="<?php echo getImageReport('ver.jpg');?>" width="180px" height="110px">
                </th>
                <th style="border: none">

                </th>
                <th style="border: none">
                    <img src="<?php echo getImageReport('ford.jpeg');?>" width="110px" height="110px">
                </th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="5" style="border: none; text-align: left;">
                DIRECCIÓN DE EDUCACIÓN PRIMARIA FEDERALIZADA <br>
                ESCUELA PRIMARIA: FORD 32 <br>
                CLAVE: 30DPR0676A <br>
                ZONA ESCOLAR: 008 SECTOR EDUCATIVO: 07 <br>
            </td>
        </tr>
        </tbody>
    </table>
</header>