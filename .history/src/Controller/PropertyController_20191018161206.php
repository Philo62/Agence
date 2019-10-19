<?php
namespace App\Controller;

use App\Entity\Property;
use App
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PropertyController extends AbstractController
{

    public function __construct(PropertyRepository $repository)
    {
        # code...
    }
    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */
    public function index(): Response
    {
       
        return $this->render('property/index.html.twig', [
            'current_menu' => 'properties'
        ]);
    }
}