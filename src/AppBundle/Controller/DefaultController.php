<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TvSeries;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }

    /**
     * @Route("/series/create")
     */
    public function createSeriesAction(Request $request){
        $s = new TvSeries();
        $s->setAuthor($request->get('Author'));
        $s->setName($request->get('Name'));
        $s->setDescription($request->get('Description'));

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($s);
        $manager->flush();

        return new Response('<body>ok</body>');
    }

//    public function indexAction(Request $request)
//    {
//        $s1 = new TvSeries();
//        $s1->setId('ID 1');
//        $s1->setAuthor('Author 1');
//        $s1->setName('Title 1');
//
//        $s2 = new TvSeries();
//        $s2->setId('ID 2');
//        $s2->setAuthor('Author 2');
//        $s2->setName('Title 2');
//
//        $series = [
//            $s1,
//            $s2
//        ];
//
//        return $this->render('default/index.html.twig', ['series' => $series]);
//    }

    /**
     * @Route("/")
     */
    public function listAction(){
        $em = $this->getDoctrine();//->getManager();

        $tvSeries = $em->getRepository('AppBundle:TvSeries')->findAll();

        return $this->render('default/index.html.twig', array(
            'tvSeries' => $tvSeries,
        ));

        /*$manager = $this->get("doctrine")->getManager();
        $series = $manager->getRepository('AppBundle:TvSeries');
        return $this->render('default/index.html.twig', ['tvSeries' => $series]);*/
    }
}
