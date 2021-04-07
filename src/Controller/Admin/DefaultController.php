<?php

namespace App\Controller\Admin;

use App\Entity\Url;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_default")
     */
    public function index(): Response
    {
        $em=$this->getDoctrine()->getManager();
        $url=$em->getRepository(Url::class)->findBy([],['click_count'=>'DESC'],5);
        $user=$em->getRepository(User::class)->findBy([],['url_count'=>'DESC'],5);
        return $this->render('admin/default/index.html.twig', [
            'url'=>$url,
            'user'=>$user
        ]);
    }
}
