<?php

namespace App\Controller\Admin;

use App\Entity\Url;
use App\Entity\UrlStats;
use App\Entity\User;
use App\Form\UrlEditFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\Helpers;

class UrlController extends AbstractController
{
    /**
     * @Route("/admin/url", name="url_list")
     */
    public function url(Helpers $helpers): Response
    {
        $url=$this->getDoctrine()->getRepository(Url::class)->findAll();
        return $this->render('admin/url/index.html.twig', ['url'=>$url]);
    }
    /**
     * @Route("/admin/url/delete/{id}", name="url_delete")
     * @Method({"DELETE"})
     */
    public function delete(Request $request, $id)
    {
        $url = $this->getDoctrine()->getRepository(Url::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($url);
        $em->flush();
        return $this->redirectToRoute('url_list');
    }

    /**
     * @Route("/admin/url/edit/{id}", name="url_edit")
     * @Method({"GET", "POST"})
     */
    public function edit(Request $request, $id)
    {
        $url=new Url();
        $url=$this->getDoctrine()->getRepository(Url::class)->find($id);
        $form=$this->createForm(UrlEditFormType::class,$url);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('url_list');
        }
        return $this->render('admin/url/edit.html.twig',['urlform'=>$form->createView()]);
    }
    /**
     * @Route("/admin/url/operation/{id}", name="url_operation")
     */
    public function operation(Request $request, $id)
    {
        $url = $this->getDoctrine()->getRepository(Url::class)->find($id);
        $url->setIsActive($url->getIsActive()? FALSE : TRUE);
        $em = $this->getDoctrine()->getManager();
        $em->persist($url);
        $em->flush();
        return $this->redirectToRoute('url_list');
    }
    /**
     * @Route("/admin/url/statistics/{id}", name="url_statistics")
     */
    public function statistics(Helpers $helpers, Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $url_id=$em->getRepository(Url::class)->findOneBy(['id'=>$id]);
        $urlstat=$em->getRepository(UrlStats::class)->findBy(['url_id'=>$url_id]);

        return $this->render('admin/url/statistics.html.twig',[
            'urlstat'=>$urlstat,
            'url'=>$url_id
        ]);
    }
}
