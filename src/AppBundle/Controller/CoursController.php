<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Cours;
use AppBundle\Form\CoursType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class CoursController extends Controller
{


    public function listeAction()
    {

        $em = $this->getDoctrine()->getManager();
        $cours = $em->getRepository('AppBundle:Cours')->findByDate();


        return $this->render('AppBundle:Cours:listeCours.html.twig', array(
            'cours' => $cours,

        ));

    }

    public function oldAction()
    {

        $em = $this->getDoctrine()->getManager();
        $cours = $em->getRepository('AppBundle:Cours')->findByOldDate();


        return $this->render('AppBundle:Cours:oldCours.html.twig', array(
            'cours' => $cours,

        ));

    }

}

