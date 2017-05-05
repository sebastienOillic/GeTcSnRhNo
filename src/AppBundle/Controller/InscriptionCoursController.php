<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class InscriptionCoursController
 * @package ApppBundle\Controller
 */
class InscriptionCoursController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:InscriptionCours:index.html.twig');  
    } 

    /**
    * Add action.
    */
    public function addAction(Request $request)
    {
       
        return $this->render('AppBundle:InscriptionCours:add.html.twig');  
        
    }

    /**
    * Cancel action.
    */
    public function cancelAction(Request $request)
    {
        return $this->render('AppBundle:InscriptionCours:cancel.html.twig');  
        
    }

}