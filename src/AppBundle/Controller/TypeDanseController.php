<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TypeDanse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class TypeDanseController
 * @package AppBundle\Controller
 */

class TypeDanseController extends Controller
{
    /**
     * @Route("/", name="typeDanse")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeDanses = $em->getRepository('AppBundle:TypeDanse')->findAll();

        return $this->render('AppBundle:TypeDanse:index.html.twig', array(
            'typeDanses' => $typeDanses,
        ));
    }

    /**
     * Creates a new typeDanse entity.
     *
     */
    public function newAction(Request $request)
    {
        $typeDanse = new TypeDanse();
        $form = $this
                ->createForm('AppBundle\Form\TypeDanseType', $typeDanse)
                ->add('save', new SubmitType(), [
                    'attr' => [
                        'class' => 'btn btn-sm btn-success',
                    ]
                ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $styleDanses = $typeDanse->getStyleDanses();
            $typeDanse->setStyleDanses(new ArrayCollection());
            foreach ($styleDanses as $styleDanse) {
                $typeDanse->addStyleDanse($styleDanse);
            }
            $em = $this->getDoctrine()->getManager();
            // echo "<pre>";
            // var_dump($typeDanse->getStyleDanses());
            // echo "</pre>";
            // die();
            
            $em->persist($typeDanse);
            $em->flush();

            return $this->redirectToRoute('app_admin_typeDanse_show', array('id' => $typeDanse->getId()));
        }

        return $this->render('AppBundle:Admin/TypeDanse:new.html.twig', array(
            'typeDanse' => $typeDanse,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a typeDanse entity.
     *
     */
    public function showAction(TypeDanse $typeDanse)
    {
        $deleteForm = $this->createDeleteForm($typeDanse);

        return $this->render('AppBundle:Admin/TypeDanse:show.html.twig', array(
            'typeDanse' => $typeDanse,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing typeDanse entity.
     *
     */
    public function editAction(Request $request, TypeDanse $typeDanse)
    {
        $deleteForm = $this->createDeleteForm($typeDanse);
        $editForm = $this
                ->createForm('AppBundle\Form\TypeDanseType', $typeDanse)
                ->add('save', new SubmitType(), [
                    'attr' => [
                        'class' => 'btn btn-sm btn-primary',
                    ]
                ]);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
        
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeDanse);
            $em->flush();

            return $this->redirectToRoute('app_admin_typeDanse_edit', array('id' => $typeDanse->getId()));
        }

        return $this->render('AppBundle:Admin/TypeDanse:edit.html.twig', array(
            'typeDanse' => $typeDanse,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a typeDanse entity.
     *
     */
    public function deleteAction(Request $request, TypeDanse $typeDanse)
    {
        $form = $this->createDeleteForm($typeDanse);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeDanse);
            $em->flush();
        }

        return $this->redirectToRoute('app_admin_typeDanse_index');
    }

    /**
     * Creates a form to delete a typeDanse entity.
     *
     * @param TypeDanse $typeDanse The typeDanse entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeDanse $typeDanse)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('app_admin_typeDanse_delete', array('id' => $typeDanse->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}