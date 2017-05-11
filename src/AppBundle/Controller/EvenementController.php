<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Evenement;

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
            if ($file->getSize()<$maxSize){
                $this->addFlash('alert alert-danger', 'Fichier trop grand');
                return $this->render('AppBundle:Evenement:new.html.twig', [
                'form' => $form->createView()
                ]);
            }
            if (!is_null($file)){
                $maxSize = $this->file_upload_max_size();
                
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
    
    public function editAction(Request $request, Evenement $evenement)
    {
        $id = $request->attributes->get('id');
        $em = $this->getDoctrine()->getManager();
        $imageString = $evenement->getImage();
        $editForm = $this->createForm('AppBundle\Form\EvenementType', $evenement)
        ->add('Modifier', new SubmitType(), [
        'attr' => [
        'class' => 'btn btn-sm btn-warning',
        ]
        ]);
        $editForm->handleRequest($request);
        
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $maxSize = $this->file_upload_max_size();
            $file = $evenement->getImage();
            if (!is_null($file)){
                if ($file->getSize()<$maxSize){
                    $this->addFlash('alert alert-danger', 'Fichier trop grand');
                    return $this->render('AppBundle:Evenement:edit.html.twig', array(
                    'form' => $editForm->createView(),
                    'event' => $evenement,
                    ));
                }
                if (!is_null($imageString)){
                    unlink($this->getParameter('events_image_directory').'/'.$imageString);
                }
                $filename = md5(uniqid()).'.'.$file->guessExtension();
                $file = $file->move(
                $this->getParameter('events_image_directory'),
                $filename
                );
                $evenement->setImage($filename);
            }
            else {
                if (!is_null($imageString)){
                    $evenement->setImage($imageString);
                }
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($evenement);
            $em->flush();
            
            return $this->redirectToRoute('app_agenda_index');
        }
        return $this->render('AppBundle:Evenement:edit.html.twig', array(
        'form' => $editForm->createView(),
        'event' => $evenement,
        ));
    }
    
    
    public function deleteAction(Request $request)
    {
        $id = $request->attributes->get('id');
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('AppBundle:Evenement')->getOneById($id);
        if($evenement == NULL){
            return $this->redirectToRoute('app_agenda_index');
        }
        $linkedToLessons = $em->getRepository('AppBundle:Cours')->findByEvent($evenement);
        if ($linkedToLessons){
            $this->addFlash('alert alert-warning', 'Un evenement ne peut pas être supprimé s\'il est lié à des cours. <br/>Veuillez supprimer les cours liés à cet evenement avant de pouvoir le supprimer.');
            return $this->redirectToRoute('app_agenda_index');
        }
        $form = $this->createDeleteForm($evenement);
        
        if ($evenement->getImage()){
            unlink($this->getParameter('events_image_directory').'/'.$evenement->getImage());
        }
        $em->remove($evenement);
        $em->flush();
        return $this->redirectToRoute('app_agenda_index');
        
        
    }
    
    private function createDeleteForm(Evenement $evenement)
    {
        return $this->createFormBuilder()
        ->setAction($this->generateUrl('app_agenda_delete', array('id' => $evenement->getId())))
        ->setMethod('DELETE')
        ->getForm();
    }
    public function file_upload_max_size() {
        static $max_size = -1;
        
        if ($max_size < 0) {
            // Start with post_max_size.
            $max_size = $this->parse_size(ini_get('post_max_size'));
            
            // If upload_max_size is less, then reduce. Except if upload_max_size is
            // zero, which indicates no limit.
            $upload_max = $this->parse_size(ini_get('upload_max_filesize'));
            if ($upload_max > 0 && $upload_max < $max_size) {
                $max_size = $upload_max;
            }
        }
        return $max_size;
    }
    
    public function parse_size($size) {
        $unit = preg_replace('/[^bkmgtpezy]/i', '', $size); // Remove the non-unit characters from the size.
        $size = preg_replace('/[^0-9\.]/', '', $size); // Remove the non-numeric characters from the size.
        if ($unit) {
            // Find the position of the unit in the ordered string which is the power of magnitude to multiply a kilobyte by.
            return round($size * pow(1024, stripos('bkmgtpezy', $unit[0])));
        }
        else {
            return round($size);
        }
    }
}