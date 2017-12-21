<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use FrontendBundle\Entity\Session;

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
        $userNbGamecreate = $infoUser->getNbgamecreate();
        $userNbPost = $infoUser->getNbpost();
        $userNbVote = $infoUser->getNbVote();
        $userNbcounter = $infoUser->getNbCounter();
        $userExp = $infoUser->getExp();
        $userNextLvlExp = $infoUser->getNextlvlexp();
        $userRank = $infoUser->getRank();

        if ($infoUser->getExp() >= $infoUser->getNextlvlexp())
        {
            $infoUser->setExp($userExp - $userNextLvlExp);
            $infoUser->setNextlvlexp($userNextLvlExp * 1.5);
            $infoUser->setRank($userRank + 1);
            $em->persist($infoUser);
            $em->flush();
            
            $userExp = $infoUser->getExp();
            $userNextLvlExp = $infoUser->getNextlvlexp();
            $userRank = $infoUser->getRank();
        }

        $progressBar = ($userExp / $userNextLvlExp) * 100;

        return $this->render('FrontendBundle:Default:account.html.twig', array(
            'user' => $user,
            'userNbGame' => $userNbGame,
            'userNbPost' => $userNbPost,
            'userNbVote' => $userNbVote,
            'userNbcounter' => $userNbcounter,
            'userRank' => $userRank,
            'userExp' => $userExp,
            'progressBar' => $progressBar,
            'userNextLvlExp' => $userNextLvlExp,
            'userNbGamecreate' => $userNbGamecreate

        ));
    }

    public function NewgameAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $infoUser = $em->getRepository('FrontendBundle:Datauser')->findOneByIduser($user->getId());

        $field1 = $request->request->get('name');
        $field2 = $request->request->get('context');
        $field3 = $request->request->get('players');
        $field4 = $request->request->get('pass');

        $party = new Session();
        $party->setName($field1);
        $party->setContext($field2);
        $party->setPlayers($field3);

        if ($field4 == null)
        {
            $party->setPass(null);
        }
        else
        {
            $party->setPass($field4);
        }

        $party->setOwnerid($infoUser->getIduser());

        $party->setDay(0);
        $party->setState(1);

        $em->persist($party);
        $em->flush();

        $updateGameCreate = $infoUser->getNbgamecreate() + 1;
        $infoUser->setNbgamecreate($updateGameCreate);

        $em->persist($infoUser);
        $em->flush();

        $url = $this->generateUrl('frontend_account');
        $response = new RedirectResponse($url);
        return $response;
    }
}