<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Cours;
use AppBundle\Form\CoursType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class CoursController extends Controller
{
 /*   public function indexAction()
    {
        return $this->render('AppBundle::index.html.twig');
    }
    /**
     * Create action.
     */


    public function listeAction()
    {


        $user = $this->container->get('security.context')->getToken()->getUser();
//        $user = $this->getUser();

//        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();
        $cours = $em->getRepository('AppBundle:Cours')->findByDate();

        return $this->render('AppBundle:Cours:listeCours.html.twig', array(
            'cours' => $cours,
            'user' => $user
        ));



    }


    public function oldAction(){

        $em = $this->getDoctrine()->getManager();
        $cours = $em->getRepository('AppBundle:Cours')->findByOldDate();





        return $this->render('AppBundle:Cours:oldCours.html.twig', array(
            'cours' => $cours,

        ));

    }



	/**
     * Add action.
     */
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
            $em->flush($cours);

            return $this->redirect($this->generateUrl('app_cours_liste'));    
        }


		

        return $this->render('AppBundle:Cours:createCours.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    
	
	/**
     * Edit action.
     */
    public function editAction(Request $request, $id)
    {
        $cours = $this
		    ->getDoctrine()
            ->getRepository('AppBundle:Cours')
            ->findOneBy(['id'=>$id]);
			
        $form = $this
                ->createForm(new CoursType(), $cours)
				->add ('save', new SubmitType(),[
                     'attr'=>[
                         'class'=>"btn btn-sm btn-success",
                     ]
                 ]);   

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_cours_liste');
        }
         
		$cours = $this->findCours();
		 
        return $this->render('AppBundle:Cours:createCours.html.twig', array(
            'cours' => $cours,
            'form' => $form->createView(),
        ));
    }
	
	/**
     * Delete action.
     */
    public function deleteAction($id)
    {
        $cours = $this->findById($id);

		$em = $this->getDoctrine()->getManager();
        $em->remove($cours);
        $em->flush();

        return $this->redirectToRoute('app_cours_liste');
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