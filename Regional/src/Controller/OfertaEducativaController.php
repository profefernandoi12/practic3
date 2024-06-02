<?php

namespace App\Controller;

use App\Entity\OfertaEducativa;
use App\Form\OfertaEducativaType;
use App\Repository\OfertaEducativaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/ofertaeducativa')]
class OfertaEducativaController extends AbstractController
{
    #[Route('/', name: 'app_ofertaeducativa_index', methods: ['GET'])]
    public function index(OfertaEducativaRepository $OfertaEducativaRepository): Response
    {
        return $this->render('ofertaeducativa/index.html.twig', [
            'ofertaeducativas' => $fertaEducativaRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_ofertaeducativa_new', methods: ['GET', 'POST'])]
    public function new(Request $request, OfertaEducativaRepository $ofertaEducativaRepository): Response
    {
        $ofertaEducativa = new OfertaEducativa();
        $form = $this->createForm(OfertaEducativaType::class, $ofertaEducativa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ofertaEducativaRepository->save($ofertaEducativa, true);

            return $this->redirectToRoute('app_ofertaeducativa_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ofertaeducativa/new.html.twig', [
            'ofertaeducativa' => $ofertaEducativa,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ofertaeducativa_show', methods: ['GET'])]
    public function show(int $id, OfertaEducativaRepository $ofertaEducativaRepository): Response
    {
        $ofertaEducativa = $ofertaEducativaRepository->find($id);
    
        if (!$ofertaEducativa) {
            throw $this->createNotFoundException('No se encontró la oferta educativa con id ' . $id);
        }
    
        return $this->render('ofertaeducativa/show.html.twig', [
            'ofertaeducativa' => $ofertaEducativa,
        ]);
    }
    

    #[Route('/{id}/edit', name: 'app_ofertaeducativa_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, OfertaEducativa $ofertaEducativa, OfertaEducativaRepository $ofertaEducativaRepository): Response
    {
        $form = $this->createForm(OfertaEducativaType::class, $ofertaEducativa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ofertaEducativaRepository->save($ofertaEducativa, true);

            return $this->redirectToRoute('app_ofertaeducativa_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ofertaeducativa/edit.html.twig', [
            'ofertaeducativa' => $ofertaEducativa,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ofertaeducativa_delete', methods: ['POST'])]
    public function delete(Request $request, OfertaEducativa $ofertaEducativa, OfertaEducativaRepository $ofertaEducativaRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ofertaEducativa->getId(), $request->request->get('_token'))) {
            $ofertaEducativaRepository->remove($ofertaEducativa, true);
        }

        return $this->redirectToRoute('app_ofertaeducativa_index', [], Response::HTTP_SEE_OTHER);
    }
}
