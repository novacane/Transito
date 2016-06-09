<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoInfraccion
 *
 * @author LC13005
 */
class DaoInfraccion {
    private $cone;

    function DaoInfraccion($conexion) {
        try {
            $this->cone = $conexion;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function AgregarInfraccion($desc) {
        try {
            $sql = "insert into infraccion values(null,'@de',@pe,@ap,@mo,@fi)";
            $sql = str_replace("@de", $desc->getDescripcion(), $sql);
            $sql = str_replace("@pe", $desc->getPersonaIdPersona(), $sql);
            $sql = str_replace("@ap", $desc->getApelada(), $sql);
            $sql = str_replace("@mo", $desc->getMonto(), $sql);
            $sql = str_replace("@fi", $desc->getFiscalizadorIdFiscalizador(), $sql);
            $resp = $this->cone->sqlOperation($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function EliminarInfraccion($id) {
        try {
            $sql = "delete from infraccion where idinfraccion = $id";
            $resp = $this->cone->sqlOperacion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }
    public function BuscarInfraccion($id) {
        try {
            $sql = "select * from infraccion where idinfraccion = $id";
            $resp = $this->cone->sqlSeleccion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

     public function ListarInfraccion() {
        try {
            $sql = "select * from infraccion order by apelada asc";
            $resultado = $this->cone->sqlSeleccion($sql);
            return $resultado;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function Listar($rut) {
        try {
            $sql = "select * from infraccion inner join persona on persona.idpersona = infraccion.persona_idpersona"
           . " where persona.rutpersona='$rut' order by apelada asc";
            $resp = $this->cone->sqlSelection($sql);
            return $resp;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}
