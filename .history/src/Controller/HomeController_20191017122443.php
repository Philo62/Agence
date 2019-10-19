<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController
{
    /**
     * @var Environment
     */
    private $twig;
    
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/", name="home")
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_
     */
 
    public function index(): Response
    {
        return new Response($this->twig->render('pages/home.html.twig'));
    }  
}