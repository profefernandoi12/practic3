<?php

namespace App\Controller;

use App\Entity\Docente;
use App\Entity\Persona;
use App\Form\DocenteType;
use App\Form\PersonaType;
use App\Repository\DocenteRepository;
use App\Repository\PersonaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/docente')]
class DocenteController extends AbstractController
{
    #[Route('/', name: 'app_docente_index', methods: ['GET'])]
    public function index(DocenteRepository $docenteRepository): Response
    {
        return $this->render('docente/index.html.twig', [
            'docentes' => $docenteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_docente_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DocenteRepository $docenteRepository): Response
    {
        $docente = new Docente();
        $form = $this->createForm(DocenteType::class, $docente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $docenteRepository->save($docente, true);

            return $this->redirectToRoute('app_docente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('docente/new.html.twig', [
            'docente' => $docente,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_docente_show', methods: ['GET'])]
    public function show(Docente $docente): Response
    {
        return $this->render('docente/show.html.twig', [
            'docente' => $docente,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_docente_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Docente $docente, DocenteRepository $docenteRepository): Response
    {
        $form = $this->createForm(DocenteType::class, $docente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $docenteRepository->save($docente, true);

            return $this->redirectToRoute('app_docente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('docente/edit.html.twig', [
            'docente' => $docente,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_docente_delete', methods: ['POST'])]
    public function delete(Request $request, Docente $docente, DocenteRepository $docenteRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$docente->getId(), $request->request->get('_token'))) {
            $docenteRepository->remove($docente, true);
        }

        return $this->redirectToRoute('app_docente_index', [], Response::HTTP_SEE_OTHER);
    }

    public function search_docente(Request $request,DocenteRepository $docenteRepository,PersonaRepository $personaRepository):Response{
        $dni = $request->query->get('dni');
        $persona = $personaRepository->findBy(['dni_pasaporte' => $dni]);        

        return $this->render('docente/index.html.twig', [  
            'persona' => $persona,  
            'docentes' => $docenteRepository->findBy(['persona' => $persona]),                   
        ]);
    }

    public function add_docente_persona(Request $request, PersonaRepository $personaRepository): Response {
        $persona = new Persona();
        $form = $this->createForm(PersonaType::class, $persona);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $personaRepository->save($persona, true);
            return $this->redirectToRoute('app_docente_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('persona/new.html.twig', [
            'persona' => $persona,
            'form' => $form,
        ]);

    }
}
