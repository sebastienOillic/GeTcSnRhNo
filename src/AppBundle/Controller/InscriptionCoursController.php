<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Cours;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




/**
 *  InscriptionCoursController
 * @package ApppBundle\Controller
 */
class InscriptionCoursController extends Controller
{


    public function indexAction(Cours $cours)
    {


        $user = $this->container->get('security.context')->getToken()->getUser();

        $joinedLesson = in_array($user, $cours->getDanseurs()->toArray() );
        return $this->render('AppBundle:InscriptionCours:index.html.twig', array(
            'cours' => $cours,
            'user' => $user,
            'joinedLesson' => $joinedLesson

        ));

    }


    public function addAction(Cours $cours)
    {

        $danseur = $this->container->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $cours->addDanseur($danseur);
        $em->persist($danseur);
        $em->persist($cours);
        $em->flush();

        $this->addFlash('alert-success', 'Vous avez été inscrit avec succès');

        return $this->redirect($this->generateUrl('app_cours_liste'));
    }


    public function deleteAction(Cours $cours)
    {
        $danseur = $this->container->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $cours->removeDanseur($danseur);
        $em->persist($danseur);
        $em->persist($cours);
        $em->flush();

        $this->addFlash('alert-success', 'Vous vous êtes désinscrit avec succès');

        return $this->redirectToRoute('app_cours_liste');
    }
}


