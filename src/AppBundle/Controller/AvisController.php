<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Avis;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Avi controller.
 *
 */
class AvisController extends Controller
{
    /**
     * Lists all avi entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $avis = $em->getRepository('AppBundle:Avis')->findAll();

        return $this->render('AppBundle:Avis:index.html.twig', array(
            'avis' => $avis,
        ));
    }

    /**
     * Creates a new avi entity.
     *
     */
    public function newAction(Request $request)
    {
        $avis = new Avis();
        $form = $this->createForm('AppBundle\Form\AvisType', $avis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($avis);
            $em->flush();

            return $this->redirectToRoute('avis_show', array('id' => $avis->getId()));
        }

        return $this->render('AppBundle:Avis:new.html.twig', array(
            'avis' => $avis,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a avi entity.
     *
     */
    public function showAction(Avis $avis)
    {
        $deleteForm = $this->createDeleteForm($avis);

        return $this->render('AppBundle:Avis:show.html.twig', array(
            'avis' => $avis,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing avi entity.
     *
     */
    public function editAction(Request $request, Avis $avis)
    {
        $deleteForm = $this->createDeleteForm($avis);
        $editForm = $this->createForm('AppBundle\Form\AvisType', $avis);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('avis_edit', array('id' => $avis->getId()));
        }

        return $this->render('AppBundle:Avis:edit.html.twig', array(
            'avis' => $avis,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a avi entity.
     *
     */
    public function deleteAction(Request $request, Avis $avis)
    {
        $form = $this->createDeleteForm($avis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($avis);
            $em->flush();
        }

        return $this->redirectToRoute('avis_index');
    }

    /**
     * Creates a form to delete a avi entity.
     *
     * @param Avis $avi The avi entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Avis $avis)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('avis_delete', array('id' => $avis->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
