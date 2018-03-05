<?php

namespace App\Controller;

use App\Repository\KioskRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(KioskRepository $repository): Response
    {
        return $this->render('homepage/index.html.twig', [
            'kiosks' => $repository->findAllForHomepage(),
        ]);
    }
}
