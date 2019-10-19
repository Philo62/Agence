<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController
{

    /**
     * @var Environment
     */
    private $twig;

    public function __construct(Environment )
    {
        return $this->render('pages/home.html.twig');
    }  
}