<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cours;
use AppBundle\Entity\User;
//use AppBundle\Form\CoursType;
//use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 *  InscriptionCoursController
 * @package ApppBundle\Controller
 */
class InscriptionCoursController extends Controller
{
    public function indexAction()
    {
        //$cours = $this->getCours();
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();

        foreach ($users as $danseur) {
            $danseur->getNom();
            $danseur->getPrenom();
            $danseur->getSexe();
        }

        return $this->render('AppBundle:InscriptionCours:index.html.twig', array(
            'users' => $users,
        ));
    } 

 /*   public function listeCoursAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cours = $em->getRepository('AppBundle:Cours')->findAll();

        foreach ($cours as $cours) {
            $cours->getTypeDanse();
            $cours->getNiveau();
            $cours->getDateCours();
            $cours->getHeureDebut();
            $cours->getHeureFin();
            $cours->getSalle();
        }

        return $this->render('AppBundle:InscriptionCours:index.html.twig', array(
            'cours' => $cours,
        ));
   }
*/
    public function addAction(Request $request)
    {
        $danseur = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        
        $cours = $em->getRepository('AppBundle:Cours');
                    //->findByNiveau();

        return $this->render('AppBundle:IncriptionCours:index.html.twig', array(
            'cours' => $cours,
            'danseur' => $danseur
        ));
   }

    
}