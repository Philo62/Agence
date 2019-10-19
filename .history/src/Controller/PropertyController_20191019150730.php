<?php
namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManager

class PropertyController extends AbstractController
{
// ci dessous $em pour entity manager... mais bon //
    
public function __construct(PropertyRepository $repository, ObjectManager $em)
    {
        $this->repository = $repository;
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