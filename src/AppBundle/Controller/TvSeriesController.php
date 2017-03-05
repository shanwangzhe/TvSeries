<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TvSeries;
use AppBundle\Form\TvSeriesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tvseries controller.
 *
 * @Route("/")
 */
class TvSeriesController extends Controller
{
    /**
     * Lists all tvSeries entities.
     *
     * @Route("/", name="_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine();//->getManager();

        $tvSeries = $em->getRepository('AppBundle:TvSeries')->findAll();

        return $this->render('tvseries/index.html.twig', array(
            'tvSeries' => $tvSeries,
        ));
    }

    /**
     * Creates a new tvSeries entity.
     *
     * @Route("/new", name="_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tvSeries = new Tvseries();
        $form = $this->createForm(TvSeriesType::class, $tvSeries);//'AppBundle\Form\TvSeriesType'
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tvSeries);
            $em->flush($tvSeries);//$em->flush($tvSeries);

            return $this->redirectToRoute('_show', array('id' => $tvSeries->getId()));
        }

        return $this->render('tvseries/new.html.twig', array(
            'tvSeries' => $tvSeries,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tvSeries entity.
     *
     * @Route("/{id}", name="_show")
     * @Method("GET")
     */
    public function showAction(TvSeries $tvSeries)
    {
        $deleteForm = $this->createDeleteForm($tvSeries);

        return $this->render('tvseries/show.html.twig', array(
            'tvSeries' => $tvSeries,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tvSeries entity.
     *
     * @Route("/{id}/edit", name="_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TvSeries $tvSeries)
    {
        $deleteForm = $this->createDeleteForm($tvSeries);
        $editForm = $this->createForm('AppBundle\Form\TvSeriesType', $tvSeries);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('_edit', array('id' => $tvSeries->getId()));
        }

        return $this->render('tvseries/edit.html.twig', array(
            'tvSeries' => $tvSeries,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tvSeries entity.
     *
     * @Route("/{id}", name="_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TvSeries $tvSeries)
    {
        $form = $this->createDeleteForm($tvSeries);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tvSeries);
            $em->flush($tvSeries);
        }

        return $this->redirectToRoute('_index');
    }

    /**
     * Creates a form to delete a tvSeries entity.
     *
     * @param TvSeries $tvSeries The tvSeries entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TvSeries $tvSeries)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('_delete', array('id' => $tvSeries->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
