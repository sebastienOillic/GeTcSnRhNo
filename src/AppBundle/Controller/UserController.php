<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use AppBundle\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('FOSUserBundle:Registration:register_content.html.twig');  
    }

    /**
     * Add action.
     */
    public function addAction(Request $request)
    {
        $user = new User();

        $form = $this->createForm('AppBundle\Form\RegistrationType', $user)
                 ->add ('save', new SubmitType(),[
                     'attr'=>[
                         'class'=>"btn btn-sm btn-success",
                     ]
                 ]);                           

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($user); 
            $em->flush();

            return $this->redirect($this->generateUrl('app_user_registration'));    
        }
        return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:register.html.'.$this->getEngine(), array(
            'form' => $form->createView(),
        ));
    }
}