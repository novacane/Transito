<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoVia
 *
 * @author LC13005
 */
class DaoVia {
    private $cone;

    function DaoVia($conexion) {
        try {
            $this->cone = $conexion;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function AgregarVia($desc) {
        try {
            $sql = "insert into via values(null,'@de',@ve,'@pi','@se')";
            $sql = str_replace("@de", $desc->getDescripcion(), $sql);
            $sql = str_replace("@ve", $desc->getVelocidadMax(), $sql);
            $sql = str_replace("@pi", $desc->getPistas(), $sql);
            $sql = str_replace("@se", $desc->getSentido(), $sql);
            $resp = $this->cone->sqlOperation($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function EliminarVia($id) {
        try {
            $sql = "delete from via where idvia = $id";
            $resp = $this->cone->sqlOperacion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }
    public function BuscarVia($id) {
        try {
            $sql = "select * from via where idvia = $id";
            $resp = $this->cone->sqlSeleccion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

     public function ListarVia() {
        try {
            $sql = "select * from via";
            $resultado = $this->cone->sqlSeleccion($sql);
            return $resultado;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
