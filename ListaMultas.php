<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './Home.php';
$rut = $_POST["txtRut"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container" style="background-color: #2A2A2A">
            <center>
                <h2 style="color: #FDD420">RUT CONSULTADO : <?php echo $rut; ?></h2>
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <?php
                        include '/dao/DAOInfraccion.php';
                        include './clases/Cl_Conexion.php';
                        $cone = new Cl_Conexion();
                        $dao = new DAOInfraccion($cone);
                        $resultado = $dao->Listar($rut);
                        if (mysqli_num_rows($resultado) > 1) {
                            ?>
                            <table class="table" style="color: #FDD420">
                                <tr>
                                    <td><b>Número infraccion</b></td>
                                    <td><b>Detalle</b></td>
                                    <td><b>Estado</b></td>
                                    <td><b>monto</b></td>
                                    <td><b>fiscalizador</b></td>
                                </tr>
                                <?php
                                while ($row = mysqli_fetch_array($resultado)) {
                                    ?>
                                    <tr>
                                        <td><b><?php echo $row[0]; ?></b></td>
                                        <td><b><?php echo $row[1]; ?></b></td>
                                        <td><b><?php
                                                if ($row[3] > 0) {
                                                    echo "Apelada";
                                                } else {
                                                    echo "Pendiente";
                                                }
                                                ?></b></td>
                                        <td><b><?php echo $row[4]; ?></b></td>
                                        <td><b><?php echo $row[5]; ?></b></td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?><h2 style="color: #ffffff">No se encontraror multas asociadas.</h2>
                                    <script> alert('No se encontraror multas asociadas al rut');</script>
                            <?php } ?>
                        </table>
                    </div>
                </div>

            </center>

        </div>
    </body>
</html>
