<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/series", name="serie_")
 */
class SerieController extends AbstractController
{
    /**
     * @Route("", name="list")
     */
    public function list(): Response
    {
        //todo: aller chercher les séries en bdd

        return $this->render('serie/list.html.twig', [

        ]);
    }

    /**
     * @Route("/details/{id}", name="details")
     */
    public function details(int $id): Response
    {
        //todo: aller chercher la série en bdd

        return $this->render('serie/details.html.twig');
    }

    /**
     * @Route("/create", name="create")
     */
    public function create(Request $request): Response
    {
        dump($request);
        return $this->render('serie/create.html.twig');
    }
}