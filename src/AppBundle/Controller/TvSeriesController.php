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
        $em = $this->getDoctrine();

        $tvSeries = $em->getRepository('AppBundle:TvSeries')->findAll();

        return $this->render('tvseries/index.html.twig', array(
            'tvSeries' => $tvSeries,
        ));
    }
}
