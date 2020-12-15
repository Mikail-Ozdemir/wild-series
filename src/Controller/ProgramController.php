<?php

// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

Class ProgramController extends AbstractController
{
    /**
     * @Route("/programs/", name="program_index")
     */
    public function index(): Response
    {
        return $this->render('program/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }

    /**
     * @Route("/programs/{id<^[0-9]+$>}",  name="program_show")
     * @return Response
     */

    public function show(int $id): Response
    {
        return $this->render('program/show.html.twig', [
            'id' => $id ,
        ]);
    }
}
