<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Modulo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PruebaController extends AbstractActionController
{
    public function indexAction()
    {
        //Creamos el objeto del modelo y llamamos a sus metodos

        $modelo      = new PruebaModel();
        $mensaje     = $modelo->getMensaje();
        $modelo->setUsuarios();
        $usuarios    = $modelo->getUsuarios();
        $nombre      = $modelo->devuelveNombre("Mi nombre es Victor");

        //Pasamos a la vista todo lo que recogemos del modelo
        return new ViewModel(
            array(
                "mensaje"  => $mensaje,
                "usuarios" => $usuarios,
                "nombre"   => $nombre
            )
        );

    }
    public function verAction()
    {
    	$view = new ViewModel();


        //$view->setTemplate('sistema/paginador.phtml')

        //Indicamos que layout va a utilizar este método
        $this->layout('layout/principal');
        //Le pasamos un parámetro
		$this->layout()->saludo = "Saludos desde el controlador -Ver-";
		//Establecemos el titulo de la página
		$this->layout()->title  = "Soy el título de la plantilla -Principal-";
        //Renderizamos la vista

        return $view;
    }
}
