<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function __

    public function index(): Response
    {
        return new Response('Salut');
    }  
}