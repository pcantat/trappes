<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{

    public function index():Response
    {
        //$number = random_int(1, 48);
        $tab = array('item1' => 23, 'item2' => 24);
        return new Response(
            //'<html><body><h1>Hello Trappes '. $number .' !</h1></body></html>',
            //'<pre>' . json_encode($tab) . '</pre>'
            json_encode($tab)
        );

    }

}