<?php
	namespace Modulo\Model\Entity;

	class PruebaModel{
	    private $mensaje;
	    private $usuarios;
	    private $nombre;

	    public function __construct(){
			$this->mensaje  = "Modelo de Victor Robles en Zend Framework 2";
			$this->usuarios = array();
	    }

	    public function getMensaje(){
	        return $this->mensaje;
	    }

	    public function setUsuarios(){
	        $this->usuarios = array("Victor","Antonio","David","Manolo");
	    }

	    public function getUsuarios(){
	        return $this->usuarios;
	    }

	    public function devuelveNombre($valor){
	        $this->nombre = $valor;
	        return $this->nombre;
	    }
	}
?>