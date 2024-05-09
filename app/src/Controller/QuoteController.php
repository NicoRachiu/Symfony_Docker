<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use App\Repository\QuoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuoteController extends AbstractController {
    #[Route('movies/', name: 'index')]
    public function index(MovieRepository $movieRepository): Response{

    $movies = $movieRepository->findAll();
    dd($movies);
    return $this->render('index.html.twig');
    }
}
