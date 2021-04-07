<?php
namespace App\Controller;

use App\Entity\Settings;
use App\Entity\Url;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $settings=$this->getDoctrine()->getRepository(Settings::class)->find(1);
        return $this->render('home/index.html.twig', ['setting'=>$settings]);
    }


}
