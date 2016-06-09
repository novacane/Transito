<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoPerfil
 *
 * @author LC13005
 */
class DaoPerfil {
    private $cone;

    function DaoPerfil($conexion) {
        try {
            $this->cone = $conexion;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function AgregarPerfil($desc) {
        try {
            $sql = "insert into perfil values(null,'@no','@no','@ap','@am')";
            $sql = str_replace("@no", $desc->getPass(), $sql);
            $resp = $this->cone->sqlOperation($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function EliminarPerfil($id) {
        try {
            $sql = "delete from perfil where idperfil = $id";
            $resp = $this->cone->sqlOperacion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }
    public function BuscarPerfil($id) {
        try {
            $sql = "select * from perfil where idperfil = $id";
            $resp = $this->cone->sqlSeleccion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

     public function ListarPerfil() {
        try {
            $sql = "select * from perfil";
            $resultado = $this->cone->sqlSeleccion($sql);
            return $resultado;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}
