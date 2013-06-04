<?php

namespace Uedayo\HabookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $books = $em->getRepository('UedayoHabookBundle:Book')->findAll();
        return $this->render('UedayoHabookBundle:Default:index.html.twig', array('books' => $books));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $book = $em->find('UedayoHabookBundle:Book', $id);
        return $this->render('UedayoHabookBundle:Default:show.html.twig', array('book' => $book));
    }
}
