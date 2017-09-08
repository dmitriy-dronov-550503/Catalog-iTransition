<?php

namespace AppBundle\Controller;

use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UsersListController extends Controller
{
    /**
     * @Route("/userslist", name="users_list")
     */
    public function listAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(User::class);

        return $this->render(
            'users/userslist.html.twig',
            array('users' => $repository->findAll())
        );
    }

    /**
     * @Route("/userslist/block/{id}", name="users_list_block")
     */
    public function blockAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(User::class);
        $user = $repository->findOneById($id);
        if($user->getRole()==='ROLE_USER') {
            $user->setIsActive(0);
            $em->persist($user);
            $em->flush($user);
        }

        return $this->redirectToRoute('users_list');
    }

    /**
     * @Route("/userslist/delete", name="delete")
     */
    public function deleteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(User::class);
        if ($request->request->has('delete')) {
            $deleteUsers = $request->get('checkedUsers');
            if($deleteUsers!=null) {
                foreach ($deleteUsers as $deleteUser) {
                    $user = $repository->findOneById($deleteUser);
                    if ($user->getRole() != 'ROLE_ADMIN') $em->remove($user);
                }
                $em->flush();
            }
        }
        if ($request->request->has('block')) {
            $blockUsers = $repository->findById($request->get('checkedUsers'));
            foreach($blockUsers as $blockUser) {
                if($blockUser->getRole()!='ROLE_ADMIN') {
                    $blockUser->setIsActive(0);
                    $em->persist($blockUser);
                }
            }
            $em->flush();
        }

        return $this->redirectToRoute('users_list');
    }
}