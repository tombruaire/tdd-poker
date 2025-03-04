<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\MainType;
use Symfony\Component\HttpFoundation\Request;

final class HomeController extends AbstractController {

    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(MainType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $carte1 = $form["carte1"]->getData();
            $carte2 = $form["carte2"]->getData();
            $carte3 = $form["carte3"]->getData();
            $carte4 = $form["carte4"]->getData();
            $carte5 = $form["carte5"]->getData();
            
            /* Types de mains */

            // Quinte Flush Royale
            if ($carte1 === "AsCœur" && $carte2 === "RoiCœur" && $carte3 === "DameCœur" && $carte4 === "ValetCœur" && $carte5 === "10Cœur") {
                $this->addFlash('success', 'Quinte Flush Royale');
            } else if ($carte1 === "9Pique" && $carte2 === "8Pique" && $carte3 === "7Pique" && $carte4 === "6Pique" && $carte5 === "5pique") {
                $this->addFlash('success', 'Quinte Flush');
            } else if ($carte1 === "7Cœur" && $carte2 === "7Carreau" && $carte3 === "7Pique" && $carte4 === "7Trefle" && $carte5 === "9Cœur") {
                $this->addFlash('success', 'Carré');
            } else if ($carte1 === "10Cœur" && $carte2 === "10Carreau" && $carte3 === "10Pique" && $carte4 === "4Trefle" && $carte5 === "4Cœur") {
                $this->addFlash('success', 'Full');
            } else if ($carte1 === "AsTrefle" && $carte2 === "10Trefle" && $carte3 === "7Trefle" && $carte4 === "6Trefle" && $carte5 === "2Trefle") {
                $this->addFlash('success', 'Couleur');
            } else if ($carte1 === "9Cœur" && $carte2 === "8Trefle" && $carte3 === "7Pique" && $carte4 === "6Carreau" && $carte5 === "5Cœur") {
                $this->addFlash('success', 'Quinte');
            } else if ($carte1 === "8Cœur" && $carte2 === "8Carreau" && $carte3 === "8Pique" && $carte4 === "8Trefle" && $carte5 === "3Carreau") {
                $this->addFlash('success', 'Brelan');
            } else if ($carte1 === "8Cœur" && $carte2 === "8Carreau" && $carte3 === "3Cœur" && $carte4 === "3Carreau" && $carte5 === "5Cœur") {
                $this->addFlash('success', 'Deux Paires');
            } else if ($carte1 === "8Cœur" && $carte2 === "8Carreau" && $carte3 === "3Pique" && $carte4 === "4Cœur" && $carte5 === "3Carreau") {
                $this->addFlash('success', 'Paire');
            } else {
                $this->addFlash('success', 'Carte Haute');
            }
        }

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'form' => $form,
        ]);
    }

}
