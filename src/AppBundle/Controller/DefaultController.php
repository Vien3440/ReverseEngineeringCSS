<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction() {
        return $this->render('base.html.twig');
    }
    
     /**
     * @Route("/test1", name="test1")
     */
    public function test1(Request $request) {
      $num1 = $request->get('num1');
      $num2 = $request->get('num2'); 
      $result = $num1+$num2 ;
      
      
        return $result;
         
        
    }
}
