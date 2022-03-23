<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{

    /**
     * @Route("/", name="index")
     */
    public function index() {
        dump("Ca fonctionne");
        die();
    }

    /**
     * @Route("/test/{slug<\d+>?0}", name="test")
     */
    public function test(Request $request) : Response
    {   
        $age = $request->attributes->get('slug');
        
        return new Response("Vous avez $age ans !");
    }
}