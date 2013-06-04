<?php

namespace Uedayo\HabookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uedayo\HabookBundle\Entity\Book;

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

    public function newAction()
    {
        // build
        $form = $this->createFormBuilder(new Book())
            ->add('title')
            ->add('publisher')
            ->add('smallImage')
            ->add('mediumImage')
            ->add('listPrice')
            ->add('isbn')
            ->add('detailPageUrl')
            ->add('number')
            ->add('status')
            ->add('publishedAt')
            ->getForm();

        // validate
        $request = $this->getRequest();
        if('POST' === $request->getMethod()) {
            $form->bindRequest($request);
            if($form->isValid()) {
                // persist
                $book = $form->getData();
                $book->setCreatedAt(new \DateTime());
                $book->setUpdatedAt(new \DateTime()); 
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($book);
                $em->flush();
                return $this->redirect($this->generateUrl('book_index'));
            }
        }

        // draw
        return $this->render('UedayoHabookBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $book = $em->find('UedayoHabookBundle:Book', $id);
        if(!$book) {
            throw new NotFoundHttpException('The book does not exist.');
        }
        $em->remove($book);
        $em->flush();
        return $this->redirect($this->generateUrl('book_index'));
    }

    public function editAction($id)
    {
        // select from DB
        $em = $this->getDoctrine()->getEntityManager();
        $book = $em->find('UedayoHabookBundle:Book', $id);
        if (!$book) {
            throw new NotFoundHttpException('The book does not exist.');
        }

        // build form
        $form = $this->createFormBuilder($book)
            ->add('title')
            ->add('publisher')
            ->add('smallImage')
            ->add('mediumImage')
            ->add('listPrice')
            ->add('isbn')
            ->add('detailPageUrl')
            ->add('number')
            ->add('status')
            ->add('publishedAt')
            ->getForm();

        // validation
        $request = $this->getRequest();
        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);
            if ($form->isValid()) {
                $book = $form->getData();
                $book->setUpdatedAt(new \DateTime());
                $em->flush();
                return $this->redirect($this->generateUrl('book_index'));
            }
        }

        // draw
        return $this->render('UedayoHabookBundle:Default:edit.html.twig', array(
            'book' => $book,
            'form' => $form->createView(),
        ));
    }
}
