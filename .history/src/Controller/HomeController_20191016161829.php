<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{

    public function index(): Response
    {
            Return new Response(content'Salut')
    }     
}