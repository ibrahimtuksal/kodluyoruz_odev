<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Json;
use App\Entity\User;

class AjaxController extends AbstractController
{
    private $request;
    private $params;
    private $em;
    /**
     * @Route("/ajax", name="ajax")
     */
    public function index(Request $request): JsonResponse
    {
        $this->em = $this->getDoctrine()->getManager();
        $this->request = $request;
        $this->params = json_decode($this->request->getContent());
        if ( ! isset($this->params->action) ) {
            return new JsonResponse([
                'access_denied' => 'Erişim izniniz yoktur!'
            ]);
        }
        return call_user_func([$this, $this->params->action]);
    }

    public function activePassive(): JsonResponse
    {
        $userchange = $this->em->getRepository(User::class)->find($this->params->userId);
        $isActive = $this->params->isActive == 'true' ? true : false;
        $userchange->setIsActive($isActive);
        $this->em->persist($userchange);
        $this->em->flush();
        return new JsonResponse(true);
    }

}
