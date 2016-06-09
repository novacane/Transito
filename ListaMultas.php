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
                <h2 style="color: #FDD420">NOMBRE DEL CONSULTADO</h2>
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <?php
                        include '/dao/DAOInfraccion.php';
                        include './clases/Cl_Conexion.php';
                        $cone = new Cl_Conexion();
                        $dao = new DAOInfraccion($cone);
                        $resultado = $dao->Listar($rut);
                        ?>
                        <table class="table" style="color: #FDD420">
                            <tr>
                                <td><b>Número</b></td>
                                <td><b>Detalle</b></td>
                                <td><b>idPersona</b></td>
                                <td><b>apelada</b></td>
                                <td><b>monto</b></td>
                                <td><b>fiscalizador</b></td>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_array($resultado)) {
                                ?>
                                <tr>
                                    <td><b><?php echo $row[0]; ?></b></td>
                                    <td><b><?php echo $row[1]; ?></b></td>
                                    <td><b><?php echo $row[2]; ?></b></td>
                                    <td><b><?php echo $row[3]; ?></b></td>
                                    <td><b><?php echo $row[4]; ?></b></td>
                                    <td><b><?php echo $row[5]; ?></b></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>

            </center>

        </div>
    </body>
</html>
