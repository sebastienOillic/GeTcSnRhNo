<?php
/**
 * Created by PhpStorm.
 * User: PC Dell
 * Date: 27/04/2017
 * Time: 17:02
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccueilController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homeAction()
    {
        $styleDanses = $this
            ->getDoctrine()
            ->getRepository('AppBundle:StyleDanse')
            ->findAll();

        return $this->render('AppBundle:Accueil:home.html.twig', array(
            'stylesDanses' => $styleDanses,
        ));

        // replace this example code with whatever you need
        return $this->render('AppBundle:Accueil:home.html.twig');
    }
}

