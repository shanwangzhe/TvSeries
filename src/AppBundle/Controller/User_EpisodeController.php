<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 17/3/2
 * Time: ÏÂÎç5:57
 */

namespace AppBundle\Controller;

use AppBundle\Entity\User_Episode;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

class User_EpisodeController
{
    /**
     * Lists all User_Episode entities.
     *
     * @Route("/{userId}", name="_userEpisode")
     * @Method("GET")
     */
    public function indexAction($userId)
    {
        $em = $this->getDoctrine();//->getManager();

        $userEpisodes = $em->getRepository('AppBundle:User_Episode')->findByUser($userId);

        return $this->render('userEpisode/index.html.twig', array(
            'userEpisodes' => $userEpisodes,
        ));
    }

    /**
     * Creates a new userEpisode entity.
     *
     * @Route("/userEpisode/new", name="_userEpisodeNew")
     * @Method({"GET", "POST"})
     */
    public function newAction($userId,$episodeId)
    {
        $userEpisode = new User_Episode();
        $userEpisode->setCurrent(true);
        $userEpisode->setEpisodeId($episodeId);
        $userEpisode->setUserId($userId);
        $em = $this->getDoctrine()->getManager();
        $em->persist($userEpisode);
        $em->flush($userEpisode);

        return $this->redirectToRoute('_show', array('id' => $userEpisode->getId()));
    }

    /**
     * Finds and displays a userEpisode entity.
     *
     * @Route("/userEpisode/{id}", name="_show")
     * @Method("GET")
     */
    public function showAction($id)
    {

    }
}