<?php

namespace AppBundle\Controller;

use AppBundle\Form\TeacherType;
use AppBundle\Entity\Human;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class TeacherCreateController extends Controller
{
    /**
     * @Route("/teacher_create", name="teacher_create")
     */
    public function createAction(Request $request)
    {
        $human = new Human();
        $form = $this->createForm(TeacherType::class, $human);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($human);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render(
            'humans/teacher.html.twig',
            array('form' => $form->createView())
        );
    }
}