<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Ab
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PropertyController
{

    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */
    public function index(): Response
    {
        return new Response('Les biens');
    }
}