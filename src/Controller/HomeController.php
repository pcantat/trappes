<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        // $number = random_int(1, 48);
        // return $this->render('home/index.html.twig', [
        //     'controller_name' => 'HomeController',
        //     "user" => [
        //         "prenom" => "Bob",
        //         "nom" => "L'éponge",
        //         'number' => $number,
        //         'avatar' => "img/bobleponge.jpg",
        //     ]
        // ]);
        return $this->render('offline/signin.html.twig');
    }
}
