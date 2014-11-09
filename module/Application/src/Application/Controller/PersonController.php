<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel; // permite conectar los controladores con las vistas

class PersonController extends AbstractActionController
{
    private $personas = array(
        array(
            'id' => 1,
            'persona' => array(
                'name'     => 'José Luis Damián Saavedra',
                'city'     => 'Chiclayo - Lambayeque - Perú',
                'age'      => '25 años',
                'email'    => 'jlds161089@gmail.com',
                'movil'    => '992703459'
            )
        ),
        array(
            'id' => 2,
            'persona' => array(
                'name'     => 'José Alberto Damián Saavedra',
                'city'     => 'Pucallpa - Ucayali - Perú',
                'age'      => '25 años',
                'email'    => 'alberto_17jads@gmail.com',
                'movil'    => '961088007'
            )
        ),
        array(
            'id' => 3,
            'persona' => array(
                'name'     => 'Anani Diahann Ayala Paz',
                'city'     => 'Callao - Lima - Perú',
                'age'      => '27 años',
                'email'    => 'anani_15@hotmail.com',
                'movil'    => '961920220'
            )
        ),
        array(
            'id' => 4,
            'persona' => array(
                'name'     => 'Jesús Lenin Salazar Guevara',
                'city'     => 'Chiclayo - Lambayeque - Perú',
                'age'      => '25 años',
                'email'    => 'maverick_7@hotmail.com',
                'movil'    => '992703455'
            )
        )
    ) ;

    public function indexAction()
    {
        return new ViewModel();
    }
    public function infoAction()
    {
    	$hermanos = array(
    		'Mayor' => 'José Alberto',
    		'Menor' => 'Carlos Enrique'
    	);
        $padres = array(
            'Papá' => 'Navitidad Saavedra Chávez',
            'Mamá' => 'José Pedro Damián de la Cruz'
        );
		$info = array(
                        'name'     => 'José Luis Damián Saavedra',
                        'city'     => 'Pucallpa - Ucayali - Perú',
                        'age'      => '25 años',
                        'email'    => 'jlds161089@gmail.com',
                        'movil'    => '992703459',
                        'hermanos' => $hermanos,
                        'padres'   => $padres
		);

        return new ViewModel($info);
    }
    public function findAction()
    {
        $personas = $this->personas ;
        $persona = array() ;

        // parametros enviados por url (GET)
        // el segundo parametro de "fromRoute" es el valor por defecto que se asignara a la variable
        // en caso no se haya definido un valor en la url (GET)
        $p_id = (int)$this->params()->fromRoute('id', 1) ;

        for ($i = 0; $i < count($personas); $i++) {
            if ($personas[$i]['id'] == $p_id) {
                $persona = $personas[$i]['persona'];
                break;
            }
        }

        return new ViewModel($persona);
    }
}
