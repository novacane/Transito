<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cl_Login
 *
 * @author Elrohir
 */
class Cl_Usuario {
    private $idUsuario;
    private $usuario;
    private $password;
    private $idPerfil;
    
    function __construct() {
        
    }
    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getIdPerfil() {
        return $this->idPerfil;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setIdPerfil($idPerfil) {
        $this->idPerfil = $idPerfil;
    }

        function getUsuario() {
        return $this->usuario;
    }

    function getPassword() {
        return $this->password;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setPassword($password) {
        $this->password = $password;
    }
}
