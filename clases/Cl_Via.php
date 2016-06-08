<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cl_Via
 *
 * @author LC13005
 */
class Cl_Via {
    private $idVia;
    private $descripcion;
    private $velocidadMax;
    private $pistas;
    private $sentido;
    
    function __construct() {
        
    }
    function getIdVia() {
        return $this->idVia;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getVelocidadMax() {
        return $this->velocidadMax;
    }

    function getPistas() {
        return $this->pistas;
    }

    function getSentido() {
        return $this->sentido;
    }

    function setIdVia($idVia) {
        $this->idVia = $idVia;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setVelocidadMax($velocidadMax) {
        $this->velocidadMax = $velocidadMax;
    }

    function setPistas($pistas) {
        $this->pistas = $pistas;
    }

    function setSentido($sentido) {
        $this->sentido = $sentido;
    }



}
