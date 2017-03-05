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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use \DateTime;

/**
 * User_Episode controller.
 *
 * @Route("/user_episode")
 */
class User_EpisodeController extends Controller
{
    /**
     * Lists all User_Episode entities.
     *
     * @Route("/index", name="_userEpisodeIndex")
     * @Method("GET")
     */
    public function indexAction()
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $em = $this->getDoctrine();//->getManager();

        $userEpisodes = $em->getRepository('AppBundle:User_Episode')->findByUser($userId);
        $episodes = array();
        foreach ($userEpisodes as $usrep){
            $eid = $usrep->getEpisodeId();
            $episode = $em->getRepository('AppBundle:Episode')->find($eid);
            if(!($episode==null || in_array($episode,$episodes)))
                array_push($episodes,$episode);
        }
        return $this->render('userEpisode/index.html.twig', array(
            'userEpisodes' => $episodes,
        ));
    }

    /**
     * Creates a new userEpisode entity.
     *
     * @Route("/new/{id}", name="_userEpisodeNew")
     * @Method({"GET", "POST"})
     */
    public function newAction($id)
    {
        $user = $this->getUser();
        if ($user!= null) {
            $userId = $user->getId();
            //if user has watched this episode before, update
            $em = $this->getDoctrine();
            $userEpisode = $em->getRepository('AppBundle:User_Episode')->findByUserEpisode($userId,$id);
            if($userEpisode == null) {
                $userEpisode = new User_Episode();
                $userEpisode->setCurrent(true);
                $userEpisode->setEpisodeId($id);
                $userEpisode->setUserId($userId);
            }
            $dt = new DateTime();
            $dt->format('Y-m-d H:i:s');
            $userEpisode->setWatchedAt($dt);
            $em = $this->getDoctrine()->getManager();
            $em->persist($userEpisode);
            $em->flush($userEpisode);
        }

        return $this->render('userEpisode/show.html.twig');
    }

    /**
     * Finds and displays a userEpisode entity.
     *
     * @Route("/{id}", name="_userEpisodeShow")
     * @Method("GET")
     */
    public function showAction($id)
    {
        return $this->render('userEpisode/show.html.twig');
    }

    /**
     * Deletes a User_Episode entity.
     *
     * @Route("/{id}/delete", name="_userEpisodeDelete")
     * @Method({"GET","DELETE"})
     */
    public function deleteAction($id)
    {
        var_dump($id);
        $em = $this->getDoctrine()->getManager();
        $userEpisodes = $em->getRepository('AppBundle:User_Episode')->findAll();
        if($userEpisodes != null) {
            foreach($userEpisodes as $userEpisode) {
                $em->remove($userEpisode);
                $em->flush($userEpisode);
            }
        }
        return $this->redirectToRoute('_userEpisodeIndex');
    }

}