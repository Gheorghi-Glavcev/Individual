<?php

namespace App\Controller;

use App\Entity\Student;
use App\Entity\Product;
use App\Form\StudentType;
use App\Repository\StudentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/Student")
 */
class StudentController extends AbstractController
{
    /**
     * @Route("/", name="Student_index", methods={"GET"})
     */
    public function index(StudentRepository $StudentRepository): Response
    {
        return $this->render('Student/index.html.twig', [
            'Students' => $StudentRepository->findAll()
        ]);
    }

    /**
     * @Route("/new", name="Student_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $Student = new Student();
        $form = $this->createForm(StudentType::class, $Student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Student);
            $entityManager->flush();

            return $this->redirectToRoute('Student_index');
        }

        return $this->render('Student/new.html.twig', [
            'Student' => $Student,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="Student_show", methods={"GET"})
     */
    public function show(Student $Student): Response
    {
        return $this->render('Student/show.html.twig', [
            'Student' => $Student
        ]);
    }

    /**
     * @Route("/{id}/edit", name="Student_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Student $Student): Response
    {
        $form = $this->createForm(StudentType::class, $Student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('Student_index');
        }

        return $this->render('Student/edit.html.twig', [
            'Student' => $Student,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="Student_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Student $Student): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Student->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($Student);
            $entityManager->flush();
        }

        return $this->redirectToRoute('Student_index');
    }
    
    /**
     * @Route("/find/{name}", name="find_Student_by_name")
     * @param $name
     * @param StudentRepository $StudentRepository
     * @return Response
     */
    public function findAllByName($name, StudentRepository $StudentRepository): Response
    {
        return $this->render('Student/index.html.twig', [
            'Students' => $StudentRepository->findByName($name)
        ]);
    }
}
