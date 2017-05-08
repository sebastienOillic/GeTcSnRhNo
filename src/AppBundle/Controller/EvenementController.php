<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class EvenementController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //fetch all the upcoming events
        $events = $em->getRepository('AppBundle:Evenement')->getFutureEvents();
        
        return $this->render('AppBundle:Evenement:index.html.twig', array(
            'events' => $events,
        ));
    }

    public function newAction(Request $request){
        $event = new \AppBundle\Entity\Evenement();
        $form = $this->createForm('AppBundle\Form\EvenementType', $event)
            ->add('Enregistrer', new SubmitType(), [
                'attr' => [
                        'class' => 'btn btn-sm btn-success',
                    ]
        ]);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $file = $event->getImage();
            if (!is_null($file)){

                $filename = md5(uniqid()).'.'.$file->guessExtension();
                $file = $file->move(
                    $this->getParameter('events_image_directory'),
                    $filename
                );
                $event->setImage($filename);
            }
            else {
                $event->setImage(NULL);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            return $this->redirect($this->generateUrl('app_agenda_index'));

        }
        return $this->render('AppBundle:Evenement:new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function editAction(Request $request){
        $event = new \AppBundle\Entity\Evenement();
        $form = $this->createForm('AppBundle\Form\EvenementType', $event)
            ->add('Enregistrer', new SubmitType(), [
                'attr' => [
                        'class' => 'btn btn-sm btn-success',
                    ]
        ]);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $file = $event->getImage();
            if (!is_null($file)){

                $filename = md5(uniqid()).'.'.$file->guessExtension();
                $file = $file->move(
                    $this->getParameter('events_image_directory'),
                    $filename
                );
                $event->setImage($filename);
            }
            else {
                $event->setImage(NULL);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            return $this->redirect($this->generateUrl('app_agenda_index'));

        }
        return $this->render('AppBundle:Evenement:new.html.twig', [
            'form' => $form->createView()
        ]);
    }
    public function deleteAction(Request $request, Evenement $evenement)
    {
        if (!$evenement->getImage()){
            unlink($this->getParameter('events_image_directory').$evenement->getImage());
        }
        $form = $this->createDeleteForm($evenement);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($evenement);
            $em->flush();
        }

        return $this->redirectToRoute('app_typeDanse_index');
    }

     private function createDeleteForm(Evenement $evenement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('app_agenda_delete', array('id' => $evenement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
