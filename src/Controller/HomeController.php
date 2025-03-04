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
        $carte1 = $request->request->get('carte1');
        $carte2 = $request->request->get('carte2');
        $carte3 = $request->request->get('carte3');
        $carte4 = $request->request->get('carte4');
        $carte5 = $request->request->get('carte5');
        $form = $this->createForm(MainType::class, [
            'carte1' => $carte1,
            'carte2' => $carte2,
            'carte3' => $carte3,
            'carte4' => $carte4,
            'carte5' => $carte5,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $entityManager->getRepository(User::class)->updateDataUserEdit($user, $form["password"]->getData(), $form["statut"]->getData(), $form["roles"]->getData());
        }

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'form' => $form,
        ]);
    }

}
