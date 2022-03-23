<?php

namespace App\Controller;

use App\Services\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{   

    protected $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @Route("/hello/{prenom}", name="hello")
     */
    public function hello($prenom = "World") :Response
    {
        $tva = $this->calculator->calcul(100);
        dump($tva);

        return new Response("Hello $prenom !");
    }
}