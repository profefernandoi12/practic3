<?php

namespace App\Controller;

use App\Entity\Institucion;
use App\Form\InstitucionType;
use App\Repository\InstitucionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/institucion')]
class InstitucionController extends AbstractController
{
    #[Route('/', name: 'app_institucion_index', methods: ['GET'])]
    public function index(InstitucionRepository $institucionRepository): Response
    {
        return $this->render('institucion/index.html.twig', [
            'institucions' => $institucionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_institucion_new', methods: ['GET', 'POST'])]
    public function new(Request $request, InstitucionRepository $institucionRepository): Response
    {
        $institucion = new Institucion();
        $form = $this->createForm(InstitucionType::class, $institucion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $institucionRepository->save($institucion, true);

            return $this->redirectToRoute('app_institucion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('institucion/new.html.twig', [
            'institucion' => $institucion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_institucion_show', methods: ['GET'])]
    public function show(Institucion $institucion): Response
    {
        return $this->render('institucion/show.html.twig', [
            'institucion' => $institucion,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_institucion_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Institucion $institucion, InstitucionRepository $institucionRepository): Response
    {
        $form = $this->createForm(InstitucionType::class, $institucion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $institucionRepository->save($institucion, true);

            return $this->redirectToRoute('app_institucion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('institucion/edit.html.twig', [
            'institucion' => $institucion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_institucion_delete', methods: ['POST'])]
    public function delete(Request $request, Institucion $institucion, InstitucionRepository $institucionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$institucion->getId(), $request->request->get('_token'))) {
            $institucionRepository->remove($institucion, true);
        }

        return $this->redirectToRoute('app_institucion_index', [], Response::HTTP_SEE_OTHER);
    }
}
