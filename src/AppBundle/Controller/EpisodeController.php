<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 17/2/28
 * Time: ÏÂÎç4:01
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Episode;
use AppBundle\Form\EpisodeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Episode controller.
 *
 * @Route("/")
 */
class EpisodeController extends Controller
{
    /**
     * Lists all Episode entities who has assigned tv-series-id.
     *
     * @Route("/{id}", name="_episodeIndex")
     * @Method("GET")
     */
    public function listAction($id)
    {
        $em = $this->getDoctrine();

        $tv = $em->getRepository('AppBundle:TvSeries')->find($id);
        $episodes = $em->getRepository('AppBundle:Episode')->findByTvserie($id);

        return $this->render('episode/index.html.twig', array(
            'episodes' => $episodes,
            'tv' => $tv,
        ));
    }

    /**
     * Creates a new Episode entity.
     *
     * @Route("/{id}/new", name="_episodeNew")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,$id)
    {
        $episode = new Episode();
        $form = $this->createForm(EpisodeType::class, $episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $episode->setTvSeriesId($id);
            $em->persist($episode);
            $em->flush($episode);

            return $this->redirectToRoute('_episodeShow', array('id' => $episode->getId()));
        }

        return $this->render('episode/new.html.twig', array(
            'episode' => $episode,
            'form' => $form->createView(),
        ));
    }


    /**
     * Finds and displays a tvSeries entity.
     *
     * @Route("/episode/{id}", name="_episodeShow")
     * @Method("GET")
     */
    public function showAction(Episode $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);

        return $this->render('episode/show.html.twig', array(
            'tvSeries' => $episode,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to delete a episode entity.
     *
     * @param Episode $episode The episode entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Episode $episode)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('_delete', array('id' => $episode->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

}