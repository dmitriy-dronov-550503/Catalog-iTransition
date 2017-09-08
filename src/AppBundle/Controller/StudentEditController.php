<?php

namespace AppBundle\Controller;

use AppBundle\Form\StudentType;
use AppBundle\Entity\Human;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class StudentEditController extends Controller
{
    /**
     * @Route("/student_edit", name="student_edit")
     */
    public function createAction(Request $request)
    {
        $human = new Human();
        $form = $this->createForm(StudentType::class, $human);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($human);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render(
            'humans/student.html.twig',
            array('form' => $form->createView())
        );
    }
}