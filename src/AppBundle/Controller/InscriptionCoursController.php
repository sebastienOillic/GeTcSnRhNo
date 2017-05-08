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
    public function indexAction()
    {

        return $this->render('AppBundle:InscriptionCours:index.html.twig');  
    } 

    public function listeAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $cours = $em->getRepository('AppBundle:Cours')->findByDate();

        return $this->render('AppBundle:Cours:index.html.twig', array(
            'cours' => $cours,
            'user' => $user
        ));

   }


    /**
     * Creates a new cours entity.
     *
     */
    public function addAction(Request $request)
    {
        $cours = new Cours();
        $form = $this
                ->createForm('AppBundle\Form\CoursType', $cours)
                ->add('save', new SubmitType(), [
                    'attr' => [
                        'class' => 'btn btn-sm btn-success',
                    ]
                ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($cours);
            $em->flush();

            return $this->redirectToRoute('app_cours_liste', array('id' => $cours->getId()));
        }

        return $this->render('AppBundle:IncriptionCours:add.html.twig', array(
            'cours'  => $cours,
            //'user'=> $user,
            'form'   => $form->createView(),
        ));
    }


}