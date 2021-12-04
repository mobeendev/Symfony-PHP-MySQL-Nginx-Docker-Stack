<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AuthorRepository;


class AuthorController extends AbstractController
{
    #[Route('/author', name: 'author')]
    public function index(AuthorRepository $autorRepo): Response
    {   

        $authors = $autorRepo->findAll();


        return $this->render('author/index.html.twig', [
            'authors' => $authors,
        ]);
    }
}
