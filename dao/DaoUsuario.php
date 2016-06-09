<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoLogin
 *
 * @author Elrohir
 */
class DaoUsuario {

    private $cone;

    function DaoUsuario($conexion) {
        try {
            $this->cone = $conexion;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function AgregarUsuario($desc) {
        try {
            $sql = "insert into usuario values(null,'@us','@pa',@per)";
            $sql = str_replace("@us", $desc->getUser(), $sql);
            $sql = str_replace("@ap", $desc->getPass(), $sql);
            $sql = str_replace("@per", $desc->getIdPerfil(), $sql);
            $resp = $this->cone->sqlOperation($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function EliminarUsuario($id) {
        try {
            $sql = "delete from usuario where idusuario = $id";
            $resp = $this->cone->sqlOperacion($sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    public function validar($user, $pass) {
        try {
            $sql = "select * from usuario where tran = '@u' and sito = '@p'";
            substr_replace($sql, "@u", $user);
            $sql = str_replace("@u", $user, $sql);
            $sql = str_replace("@p", $pass, $sql);
            $resp = $this->cone->sqlSelection($sql);
            return mysqli_num_rows($resp);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function perfil($user, $pass) {
        try {
            $sql = "select perfil_idperfil from usuario where tran='@u' and sito='@p'";
            $sql = str_replace("@u", $user, $sql);
            $sql = str_replace("@p", $pass, $sql);
            $resp = $this->cone->sqlSelection($sql);
            $fila = mysqli_fetch_row($resp);
            return $fila[0];
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
