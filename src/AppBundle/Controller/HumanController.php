<?php

namespace AppBundle\Controller;

use AppBundle\Form\HumanType;
use AppBundle\Entity\Human;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class HumanController extends Controller
{
    /**
     * @Route("/human", name="human_editor")
     */
    public function createAction(Request $request)
    {
        $human = new Human();
        $form = $this->createForm(HumanType::class, $human);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            #$repository = $this->getDoctrine()->getRepository(Human::class);
            #$editHuman = $repository->findOneByFirstName($human->getFirstName());
            $em = $this->getDoctrine()->getManager();
            $em->persist($human);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render(
            'humans/human.html.twig',
            array('form' => $form->createView())
        );
    }
}