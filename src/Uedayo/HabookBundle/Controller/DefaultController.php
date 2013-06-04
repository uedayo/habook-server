<?php

namespace Uedayo\HabookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $posts = $em->getRepository('UedayoHabookBundle:Book')->findAll();
        return $this->render('UedayoHabookBundle:Default:index.html.twig', array('posts' => $posts));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $post = $em->find('UedayoHabookBundle:Default:Book', $id);
        return $this->render('UedayoHabookBundle:Default:index.html.twig', array('post' => $post));
    }
}
