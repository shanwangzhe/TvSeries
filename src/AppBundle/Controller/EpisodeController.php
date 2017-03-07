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
 * @Route("/episode")
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
}