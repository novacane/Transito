<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cl_Persona
 *
 * @author LC13005
 */
class Cl_Persona {
    private $idPersona;
    private $rut;
    private $nombre;
    private $apPaternoPersona;
    private $apMaternoPersona;
    
    function __construct() {
        
    }
    function getIdPersona() {
        return $this->idPersona;
    }

    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApPaternoPersona() {
        return $this->apPaternoPersona;
    }

    function getApMaternoPersona() {
        return $this->apMaternoPersona;
    }

    function setIdPersona($idPersona) {
        $this->idPersona = $idPersona;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApPaternoPersona($apPaternoPersona) {
        $this->apPaternoPersona = $apPaternoPersona;
    }

    function setApMaternoPersona($apMaternoPersona) {
        $this->apMaternoPersona = $apMaternoPersona;
    }


}
