<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EvenementController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //fetch all the upcoming events
        $events = $em->getRepository('AppBundle:Evenement')->getFutureEvents();
        
        return $this->render('AppBundle:Evenement:index.html.twig', array(
            'events' => $events,
        ));
    }
}
