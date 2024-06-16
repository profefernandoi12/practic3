<?php

namespace App\Controller;

use App\Entity\Distrito;
use App\Form\DistritoType;
use App\Repository\DistritoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/distrito')]
class DistritoController extends AbstractController
{
    #[Route('/', name: 'app_distrito_index', methods: ['GET'])]
    public function index(DistritoRepository $distritoRepository): Response
    {
        return $this->render('distrito/index.html.twig', [
            'distritos' => $distritoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_distrito_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $distrito = new Distrito();
        $form = $this->createForm(DistritoType::class, $distrito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($distrito);
            $entityManager->flush();

            return $this->redirectToRoute('app_distrito_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('distrito/new.html.twig', [
            'distrito' => $distrito,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_distrito_show', methods: ['GET'])]
    public function show(Distrito $distrito): Response
    {
        return $this->render('distrito/show.html.twig', [
            'distrito' => $distrito,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_distrito_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Distrito $distrito, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DistritoType::class, $distrito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_distrito_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('distrito/edit.html.twig', [
            'distrito' => $distrito,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_distrito_delete', methods: ['POST'])]
    public function delete(Request $request, Distrito $distrito, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$distrito->getId(), $request->request->get('_token'))) {
            $entityManager->remove($distrito);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_distrito_index', [], Response::HTTP_SEE_OTHER);
    }
}
