<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoPersona
 *
 * @author LC13005
 */
class DaoPersona {
    private $cone;

    function DaoPersona($conexion) {
        try {
            $this->cone = $conexion;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function AgregarPersona($desc) {
        try {
            $sql = "insert into persona values(null,'@ru','@no','@ap','@am')";
            $sql = str_replace("@ru", $desc->get(), $sql);
            $sql = str_replace("@no", $desc->getPass(), $sql);
            $sql = str_replace("@ap", $desc->getIdPerfil(), $sql);
            $sql = str_replace("@am", $desc->getIdPerfil(), $sql);
            $resp = $this->cone->sqlOperation($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function EliminarPersona($id) {
        try {
            $sql = "delete from persona where idpersona = $id";
            $resp = $this->cone->sqlOperacion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }
    public function BuscarPersona($id) {
        try {
            $sql = "select * from persona where idpersona = $id";
            $resp = $this->cone->sqlSeleccion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

     public function ListarPersona() {
        try {
            $sql = "select * from persona";
            $resultado = $this->cone->sqlSeleccion($sql);
            return $resultado;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}
