<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:News');

        $query = $repository->createQueryBuilder('s')
            ->orderBy('s.id', 'DESC')
            ->getQuery();

        return $this->render('AppBundle:News:index.html.twig',array(
                 'news' => $query->getResult()
            )
        );
    }
    public function getOneAction($id){
        $news = $this->getDoctrine()->getRepository('AppBundle:News')->find($id);
        if (!$news)
            Throw $this->createNotFoundException();
        return $this->render('AppBundle:News:details.html.twig',array(
                'news' => $news
            )
        );
    }
}
