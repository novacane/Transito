<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cl_Perfil
 *
 * @author LC13005
 */
class Cl_Perfil {
    private $idPerfil;
    private $nombrePerfil;
    function __construct() {
        
    }
    function getIdPerfil() {
        return $this->idPerfil;
    }

    function getNombrePerfil() {
        return $this->nombrePerfil;
    }

    function setIdPerfil($idPerfil) {
        $this->idPerfil = $idPerfil;
    }

    function setNombrePerfil($nombrePerfil) {
        $this->nombrePerfil = $nombrePerfil;
    }


}
