<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function __construct($twig)
    {
        $this->twig 
    }

    public function index(): Response
    {
        return new Response('Salut');
    }  
}