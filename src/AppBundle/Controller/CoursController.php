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
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $cours = $em->getRepository('AppBundle:Cours')->findByDate();

        return $this->render('AppBundle:Cours:listeCours.html.twig', array(
            'cours' => $cours,
            'user' => $user
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
   /* public function editAction(Request $request, $id)
    {
        $contact = $this
		    ->getDoctrine()
            ->getRepository('AppBundle:Contact')
            ->findOneBy(['id'=>$id]);
			
        $editForm = $this
                ->createForm(new ContactType(), $contact);
				
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('App_liste');
        }
         
		$contacts = $this->findContacts();
		//$mode = false; 
		 
        return $this->render('AppBundle::ajout.html.twig', array(
            'contacts' => $contacts,
            'form' => $editForm->createView(),
			//'mode'=> $mode,
        ));
    }
	
	/**
     * Delete action.
     */
 /*   public function deleteAction($id)
    {
        $contact = $this->findById($id);
			
		$contact->setTrashed(true);
		
		$em = $this->getDoctrine()->getManager();
        $em->persist($contact); 
        $em->flush($contact);

        return $this->redirectToRoute('App_liste');
    }*/
	
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