<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cl_fiscalizador
 *
 * @author LC13005
 */
class Cl_Fiscalizador {
    private $idFiscalizadorTransito;
    private $viaIdVia;
    private $rut;
    private $nombre;
    private $apPaternoFiscal;
    private $apMaternoFiscal;
    private $idUsuario;
    
    function __construct() {
        
    }
    function getIdFiscalizadorTransito() {
        return $this->idFiscalizadorTransito;
    }

    function getViaIdVia() {
        return $this->viaIdVia;
    }

    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApPaternoFiscal() {
        return $this->apPaternoFiscal;
    }

    function getApMaternoFiscal() {
        return $this->apMaternoFiscal;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function setIdFiscalizadorTransito($idFiscalizadorTransito) {
        $this->idFiscalizadorTransito = $idFiscalizadorTransito;
    }

    function setViaIdVia($viaIdVia) {
        $this->viaIdVia = $viaIdVia;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApPaternoFiscal($apPaternoFiscal) {
        $this->apPaternoFiscal = $apPaternoFiscal;
    }

    function setApMaternoFiscal($apMaternoFiscal) {
        $this->apMaternoFiscal = $apMaternoFiscal;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }



}
