<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $formFactory = $this->get('fos_user.registration.form.factory');
        $form = $formFactory->createForm();
        if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
        } else {
            // BC for SF < 2.4
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }
        return $this->render('FrontendBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
            'csrf_token' => $csrfToken,
        ));
    }

    public function AccountAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $infoUser = $em->getRepository('FrontendBundle:Datauser')->findOneByIduser($user->getId());

        $userNbGame = $infoUser->getNbgame();
        $userNbPost = $infoUser->getNbpost();
        $userNbVote = $infoUser->getNbVote();
        $userNbcounter = $infoUser->getNbCounter();
        $userRank = $infoUser->getRank();
        $userExp = $infoUser->getExp();
        $userNextLvlExp = $infoUser->getNextlvlexp();

        return $this->render('FrontendBundle:Default:account.html.twig', array(
            'user' => $user,
            'userNbGame' => $userNbGame,
            'userNbPost' => $userNbPost,
            'userNbVote' => $userNbVote,
            'userNbcounter' => $userNbcounter,
            'userRank' => $userRank,
            'userExp' => $userExp,
            'userNextLvlExp' => $userNextLvlExp
        ));

    }
}