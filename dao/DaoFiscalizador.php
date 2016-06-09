<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoFiscalizador
 *
 * @author LC13005
 */
class DaoFiscalizador {

    private $cone;

    function DaoFiscalizador($conexion) {
        try {
            $this->cone = $conexion;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function AgregarFiscalizador($desc) {
        try {
            $sql = "insert into fiscalizador values(null,@vi,'@ru','@no','@ap','@am',@us)";
            $sql = str_replace("@vi", $desc->getViaIdVia(), $sql);
            $sql = str_replace("@ru", $desc->getRut(), $sql);
            $sql = str_replace("@no", $desc->getNombre(), $sql);
            $sql = str_replace("@ap", $desc->getApPaternoFiscal(), $sql);
            $sql = str_replace("@am", $desc->getApMaternoFiscal(), $sql);
            $sql = str_replace("@us", $desc->getIdUsuario(), $sql);
            $resp = $this->cone->sqlOperation($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function EliminarFiscalizador($id) {
        try {
            $sql = "delete from fiscalizador where idfiscalizador = $id";
            $resp = $this->cone->sqlOperacion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function BuscarFiscalizador($id) {
        try {
            $sql = "select * from fiscalizador where idfiscalizador = $id";
            $resp = $this->cone->sqlSeleccion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function ListarFiscalizador() {
        try {
            $sql = "select * from fiscalizador";
            $resultado = $this->cone->sqlSeleccion($sql);
            return $resultado;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
