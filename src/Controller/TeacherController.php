<?php

namespace App\Controller;

use App\Entity\Teacher;
use App\Form\TeacherType;
use App\Repository\TeacherRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/Teacher")
 */
class TeacherController extends AbstractController
{
    /**
     * @Route("/", name="Teacher_index", methods={"GET"})
     */
    public function index(TeacherRepository $TeacherRepository): Response
    {
        return $this->render('Teacher/index.html.twig', [
            'Teachers' => $TeacherRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="Teacher_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $Teacher = new Teacher();
        $form = $this->createForm(TeacherType::class, $Teacher);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Teacher);
            $entityManager->flush();

            return $this->redirectToRoute('Teacher_index');
        }

        return $this->render('Teacher/new.html.twig', [
            'Teacher' => $Teacher,
            'form' => $form->createView(),
        ]);
    }

    
    /**
     * @Route("/find/{name}", name="find_Teacher_by_name")
     * @param $name
     * @param TeacherRepository $TeacherRepository
     * @return Response
     */
    public function findAllByName($name, TeacherRepository $TeacherRepository): Response
    {
        return $this->render('Teacher/index.html.twig', [
            'Teachers' => $TeacherRepository->findByName($name),
        ]);
    }

    /**
     * @Route("/{id}", name="Teacher_show", methods={"GET"})
     */
    public function show(Teacher $Teacher): Response
    {
        return $this->render('Teacher/show.html.twig', [
            'Teacher' => $Teacher,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="Teacher_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Teacher $Teacher): Response
    {
        $form = $this->createForm(TeacherType::class, $Teacher);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('Teacher_index');
        }

        return $this->render('Teacher/edit.html.twig', [
            'Teacher' => $Teacher,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="Teacher_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Teacher $Teacher): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Teacher->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($Teacher);
            $entityManager->flush();
        }

        return $this->redirectToRoute('Teacher_index');
    }
}
