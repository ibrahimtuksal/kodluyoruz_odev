<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserlistController extends AbstractController
{
    /**
     * @Route("/admin/userlist", name="userlist")
     */
    public function index(): Response
    {
        $users=$this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render('admin/userlist/index.html.twig', [
            'users'=>$users
        ]);
    }
    /**
     * @Route("/admin/userlist/change/{id}", name="user_change")
     */
    public function change(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $userchange=$em->getRepository(User::class)->find($id);
        $userchange->setIsActive($userchange->getIsActive()? FALSE : TRUE);
        $em->persist($userchange);
        $em->flush();
        return $this->redirectToRoute('userlist');
    }
    /**
     * @Route("/admin/userlist/add", name="user_add")
     */
    public function add(UserPasswordEncoderInterface $encoder,Request $request){
        $useradd=new User();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(UserFormType::class, $useradd);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $encoded = $encoder->encodePassword($useradd,$useradd->getPassword());
            $useradd->setPassword($encoded);
            $useradd->setIsActive(TRUE);
            $em->persist($useradd);
            $em->flush();
            $this->addFlash('usercreated','Kullanıcı Başarıyla Oluşturuldu');
            return $this->redirectToRoute('userlist');
        }
        return $this->render('admin/userlist/add.html.twig',['useradd'=>$form->createView()]);
    }
    /**
     * @Route("/admin/userlist/delete/{id}", name="user_delete")
     */
    public function delete(Request $request, $id)
    {
        $userdelete = $this->getDoctrine()->getRepository(User::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($userdelete);
        $em->flush();
        return $this->redirectToRoute('userlist');
    }
    /**
     * @Route("/admin/userlist/edit/{id}", name="user_edit")
     */
    public function edit(UserPasswordEncoderInterface $encoder,Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $useredit=$em->getRepository(User::class)->find($id);
        $form = $this->createForm(UserFormType::class, $useredit);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $encoded = $encoder->encodePassword($useredit,$useredit->getPassword());
            $useredit->setPassword($encoded);
            $em->persist($useredit);
            $em->flush();
            $this->addFlash('useredited','Kullanıcı Başarıyla Düzenlendi');
            return $this->redirectToRoute('userlist');
        }
        return $this->render('admin/userlist/edit.html.twig',['useredit'=>$form->createView()]);
    }
}
