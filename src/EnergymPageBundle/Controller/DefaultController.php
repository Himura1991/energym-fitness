<?php

namespace EnergymPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('EnergymPageBundle:Default:index.html.twig');
    }

    /**
     * @Route("/acerca")
     */
    public function acercaAction()
    {
        return $this->render('EnergymPageBundle:Default:acerca.html.twig');
    }

    /**
     * @Route("/contacto")
     */
    public function contactoAction()
    {
        return $this->render('EnergymPageBundle:Default:contacto.html.twig');
    }


    /**
     * @Route("/horarios")
     */
    public function horariosAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM calendario ORDER BY horario ASC");
        $statement->execute();
        $results = $statement->fetchAll();


        return $this->render('EnergymPageBundle:Default:horarios.html.twig', ["calendario" => $results]);
    }
}
