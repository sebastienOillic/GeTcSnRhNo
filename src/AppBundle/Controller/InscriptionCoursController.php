<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Cours;
use AppBundle\Entity\User;
use AppBundle\Form\InscriptionCoursType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



/**
 *  InscriptionCoursController
 * @package ApppBundle\Controller
 */
class InscriptionCoursController extends Controller
{



    public function indexAction(Cours $id)
    {
        $cours = $this->getDoctrine()
            ->getRepository('AppBundle:Cours')
            ->find($id);



        $user = $this->container->get('security.context')->getToken()->getUser();
//        $user = $this->getUser();
//        $em = $this->getDoctrine()->getManager();
//        $cours = $em->getRepository('AppBundle:Cours')->findByDate();


        return $this->render('AppBundle:InscriptionCours:index.html.twig', array(
            'cours' => $cours,
            'user' => $user
        ));

    }


//    public function showAction(Cours $cours)
//    {
//
//
//        return $this->render('AppBundle:StyleDanse:show.html.twig', array(
//            'cours' => $cours,
//
//        ));
//    }



//    public function indexAction()
//    {
//        $em = $this->getDoctrine()->getManager();
//        $user = $this->container
//                ->get('security.context')
//                ->getToken()
//                ->getUser()
//                ->getId();
//
//        return $this->render('AppBundle:InscriptionCours:index.html.twig', array(
//            'user' => $user,
//        ));
//
//        $em = $this->getDoctrine()->getManager();
//        $cours = $em->getRepository('AppBundle:Cours')->findById($coursId);
//
//        foreach ($cours as $cours) {
//            $cours->getTypeDanse();
//            $cours->getNiveau();
//            $cours->getDateCours();
//            $cours->getHeureDebut();
//            $cours->getHeureFin();
//            $cours->getSalle();
//        }
//
//        return $this->render('AppBundle:InscriptionCours:index.html.twig', array(
//            'cours' => $cours,
//        ));
//    }

 /*   public function listeCoursAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cours = $em->getRepository('AppBundle:Cours')->findOneBy();

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
   }*/

    public function addAction(Request $request)
    {
        $danseur = new User();

        $form = $this->createForm('AppBundle\Form\CoursType', $danseur)
                 ->add ('save', new SubmitType(),[
                     'attr'=>[
                         'class'=>"btn btn-sm btn-success",
                     ]
                 ]);                           

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($danseur); 
            $em->flush();

            return $this->redirect($this->generateUrl('app_inscriptionCours_add'));    
        }

        return $this->render('AppBundle:InscriptionCours:add.html.twig', [
            'form' => $form->createView(),
        ]);
   }

}