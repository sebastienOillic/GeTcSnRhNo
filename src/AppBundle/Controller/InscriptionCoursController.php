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


    public function addAction(Request $request)
    {
        $danseur = $this->container->get('security.context')->getToken()->getUser();

//        $form = $this->createForm('AppBundle\Form\InscriptionCoursType', $danseur)
//                 ->add ('save', new SubmitType(),[
//                     'attr'=>[
//                         'class'=>"btn btn-sm btn-success",
//                     ]
//                 ]);
//
//        $form->handleRequest($request);
//        if($form->isSubmitted() && $form->isValid()){
        $cours = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Cours')
            ->findById($id);

            $em = $this->getDoctrine()->getManager();
            $em->persist($danseur);
            $em->persist($cours);
            $em->flush();

            return $this->redirect($this->generateUrl('app_inscriptionCours_add'));
        }


        public function findById($id)
    {
        return $this
            ->getDoctrine()
            ->getRepository('AppBundle:Cours')
            ->findOneBy(['id'=>$id]);
    }
//        return $this->render('AppBundle:InscriptionCours:add.html.twig', [
//            'form' => $form->createView(),
//        ]);


}