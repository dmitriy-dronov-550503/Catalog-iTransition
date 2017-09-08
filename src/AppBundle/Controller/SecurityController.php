<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider;
use Symfony\Component\Security\Core\User\UserChecker;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {

        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }

    /**
     * @Route("/login/oauth", name="login_oauth")
     */
    public function addAction(Request $request)
    {
        $token = $request->request->get('token');
        $host = $request->server->get('HTTP_HOST');
        $s = file_get_contents('http://ulogin.ru/token.php?token=' . $token . '&host=' . $host);
        $userOauth = json_decode($s, true);
        //$user['network'] - соц. сеть, через которую авторизовался пользователь
        //$user['identity'] - уникальная строка определяющая конкретного пользователя соц. сети
        //$user['first_name'] - имя пользователя
        //$user['last_name'] - фамилия пользователя

        $user = new User();

        $user->setUsername($userOauth['nickname']);
        $user->setEmail($userOauth['email']);
        $user->setRole('ROLE_USER');
        $user->setPassword('');

        $repository = $this->getDoctrine()->getRepository(User::class);
        $currentUser = $repository->findOneByEmail($user->getEmail());
        if($currentUser){
            $user = $currentUser;
        }
        else{
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }

        $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());


        $this->get('security.token_storage')->setToken($token);
        $event = new InteractiveLoginEvent($request, $token);
        $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
        $this->get('session')->set('main', serialize($token));


        // as suggested in http://techblog.zabuchy.net/2012/manually-authenticate-symfony-2-user/

        return $this->redirect($this->generateUrl('homepage' )
        );
    }
}