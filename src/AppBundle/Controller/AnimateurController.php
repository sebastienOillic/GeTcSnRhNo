<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AnimateurController extends Controller
{
    /**
     * Create action.
     */
   public function listeAction()
    {
		$animateurs = $this->findAnimateur();
		
        return $this->render('AppBundle:Animateur:listeAnimateur.html.twig', [
		    'animateurs' => $animateurs, 
        ]);
    }
    
	/**
     * Add action.
     */
    public function addAction(Request $request)
    {
        $animateur = new User();

        $form = $this->createForm('AppBundle\Form\UserType', $animateur)
                 ->add ('save', new SubmitType(),[
                     'attr'=>[
                         'class'=>"btn btn-sm btn-success",
                     ]
                 ]);                           

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($animateur); 
            $em->flush($animateur);
        
            return $this->redirect($this->generateUrl('app_animateur_liste'));    
        }
		
        return $this->render('AppBundle:Animateur:createAnimateur.html.twig', [
            'form' => $form->createView(),
        ]);
    }
	
	/**
     * Edit action.
     */
    public function editAction(Request $request, $id)
    {
        $animateur = $this
		    ->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findOneBy(['id'=>$id]);
			
        $form = $this
                ->createForm(new UserType(), $animateur)
				->add ('save', new SubmitType(),[
                     'attr'=>[
                         'class'=>"btn btn-sm btn-success",
                     ]
                 ]);   

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_animateur_liste');
        }
         
		$animateur = $this->findAnimateur();
		 
        return $this->render('AppBundle:Animateur:createAnimateur.html.twig', array(
            'animateur' => $animateur,
            'form' => $form->createView(),
        ));
    }
	
	/**
     * Delete action.
     */
    public function deleteAction($id)
    {
        $animateur = $this->findById($id);

		$em = $this->getDoctrine()->getManager();
        $em->remove($animateur);
        $em->flush();

        return $this->redirectToRoute('app_animateur_liste');
    }
	
    public function findAnimateur()
	{
	    return $this
		    ->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findAll(); 
	}
	public function findById($id)
	{
	    return $this
		    ->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findOneBy(['id'=>$id]); 
	}
}