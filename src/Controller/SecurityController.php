<?php

namespace App\Controller;

use App\Entity\Url;
use App\Entity\UrlStats;
use App\Entity\User;
use App\Form\UserChangeFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }


//    /**
//     * @Route("/signup", name="app_signup")
//     */
//    public function signup(UserPasswordEncoderInterface $encoder): Response{
//
//        $user = new User();
//
//        $encoded = $encoder->encodePassword($user, '123456');
//
//        $user->setEmail('volkan.sengul@test.com')
//            ->setPassword($encoded)
//            ->setIsActive(TRUE)
//            ->setRoles(['ROLE_USER']);
//
//        $em = $this->getDoctrine()->getManager();
//
//        $em->persist($user);
//        $em->flush();
//
//        return new Response('User created !');
//
//    }
    /**
     * @Route("/profile", name="profile")
     */
    public function profile()
    {
        $em=$this->getDoctrine()->getManager();
        $userId=$this->getUser()->getId();
        $urlme=$em->getRepository(Url::class)->findBy(['user_id'=>$userId],['click_count'=>'DESC']);
        return $this->render('user/index.html.twig', ['userurl'=>$urlme]);
    }
    /**
     * @Route("/profile/settings", name="profile_settings")
     */
    public function profileChange(UserPasswordEncoderInterface $encoder,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $userId=$this->getUser()->getId();

        $user=$em->getRepository(User::class)->find($userId);
        $user->getPassword();
        $form=$this->createForm(UserChangeFormType::class,$user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            if(is_null($user->getPassword()))
            {
                $user->setPassword($user->getPassword());
            }
            else{
                $encoded = $encoder->encodePassword($user,$form->get('password'));
                $user->setPassword($encoded);
            }
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('profile');
        }
        return $this->render('user/settings.html.twig',['change'=>$form->createView()]);
    }
    /**
     * @Route("/profile/url/statistics", name="user_stat")
     */
    public function profileurl()
    {
        $em=$this->getDoctrine()->getManager();
        $userId=$this->getUser()->getId();
        $urlme=$em->getRepository(Url::class)->findBy(['user_id'=>$userId],['click_count'=>'DESC']);
        return $this->render('user/userurl.html.twig', ['userurl'=>$urlme]);
    }
    /**
     * @Route("/profile/url/statistics/{id}", name="url_user_statistics")
     */
    public function statistics($id)
    {
        $em=$this->getDoctrine()->getManager();
        $urlStatistics=$em->getRepository(UrlStats::class)->findBy(['url_id'=>$id]);
        $urlme=$em->getRepository(Url::class)->find($id);
        return $this->render('user/urlstat.html.twig', ['urlstat'=>$urlStatistics,'url'=>$urlme]);
    }
}
