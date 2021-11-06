<?php

namespace Tuto\ToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home", methods={"GET","POST"})
     */
    public function index(): Response
    {
        return new Response("Coucou c'est moi");
    }
    /**
     * @Route("/autre", name="autre", methods={"GET","POST"})
     */
    public function autre(): Response
    {
        return new Response("Coucou autre moi");
    }
    /**
     * @Route("/template", name="template", methods={"GET","POST"})
     */
    public function template(): Response
    {
        return $this->render('@tuto_tools/test.html.twig', [
            'controller_name' => "Hej c'est moi le bundle ",
        ]);
    }
}
