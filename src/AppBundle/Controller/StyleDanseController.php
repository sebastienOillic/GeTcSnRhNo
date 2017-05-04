<?php

namespace AppBundle\Controller;

use AppBundle\Entity\StyleDanse;
use AppBundle\Form\StyleDanseType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StyleDanseController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $stylesDanses = $em->getRepository('AppBundle:StyleDanse')->findAll();

        // src/AppBundle/Resources/views/index.html.twig
        return $this->render('AppBundle:StyleDanse:index.html.twig', array(
            'stylesDanse' => $stylesDanses,
        ));
    }

    /**
     * Creates a new StyleDanse entity.
     *
     */
    public function newAction(Request $request)
    {
        $styleDanse = new StyleDanse(['Tango']);
        $form = $this
                ->createForm('AppBundle\Form\StyleDanseType', $styleDanse)
                ->add('Enregistrer', new SubmitType(), [
                    'attr' => [
                        'class' => 'btn btn-sm btn-success',
                    ]
                ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($styleDanse);
            $em->flush($styleDanse);

            return $this->redirectToRoute('app_styleDanse_show', array('id' => $styleDanse->getId()));
        }

        return $this->render('AppBundle:StyleDanse:new.html.twig', array(
            'StyleDanse' => $styleDanse,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a StyleDanse entity.
     *
     */
    public function showAction(StyleDanse $styleDanse)
    {
        $deleteForm = $this->createDeleteForm($styleDanse);

        return $this->render('AppBundle:StyleDanse:show.html.twig', array(
            'styleDanse' => $styleDanse,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing StyleDanse entity.
     *
     */
    public function editAction(Request $request, StyleDanse $styleDanse)
    {
       // $deleteForm = $this->createDeleteForm($styleDanse);
        $editForm = $this
                ->createForm('AppBundle\Form\StyleDanseType', $styleDanse)
                ->add('Enregistrer', new SubmitType(), [
                    'attr' => [
                        'class' => 'btn btn-sm btn-primary',
                    ]
                ]);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_admin_styleDanse_edit', array('id' => $styleDanse->getId()));
        }

        return $this->render('AppBundle:StyleDanse:edit.html.twig', array(
            'StyleDanse' => $styleDanse,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a StyleDanse entity.
     *
     */
    public function deleteAction(Request $request, StyleDanse $styleDanse)
    {
        $form = $this->createDeleteForm($styleDanse);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($styleDanse);
            $em->flush();
        }

        return $this->redirectToRoute('app_styleDanse_index');
    }

    /**
     * Creates a form to delete a StyleDanse entity.
     *
     * @param StyleDanse $styleDanse The StyleDanse entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(StyleDanse $styleDanse)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('app_admin_styleDanse_delete', array('id' => $styleDanse->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
