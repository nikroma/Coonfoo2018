<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloWorldController extends Controller
{
    /**
     * @Route("/", name="hello_world")
     * @Route("/{id}", name="hello_world_with_id",requirements={"id":"\d+"})
     */
    public function index(Request $request, int $id = null):Response
    {
        return $this->render('hello_world/index.html.twig',[
            'name' => $request->query->get('name', 'Roman'),
            'id' =>$id
        ]);
    }
}
