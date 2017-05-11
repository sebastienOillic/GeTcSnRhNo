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

    public function addAction(Request $request)
    {
        $cours = new Cours();

        $form = $this->createForm('AppBundle\Form\CoursType', $cours)
                 ->add ('save', new SubmitType(),[
                     'attr'=>[
                         'class'=>"btn btn-sm btn-success",
                     ]
                 ]);                           

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($cours); 
            $em->flush();

            return $this->redirect($this->generateUrl('app_cours_liste'));    
        }

        return $this->render('AppBundle:Cours:createCours.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function findCours()
	{
	    return $this
		    ->getDoctrine()
            ->getRepository('AppBundle:Cours')
            ->findAll(); 
	}
    
	public function findById($id)
	{
	    return $this
		    ->getDoctrine()
            ->getRepository('AppBundle:Cours')
            ->findOneBy(['id'=>$id]); 
	}
}