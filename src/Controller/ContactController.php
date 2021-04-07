<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Reply;
use App\Form\ContactFormType;
use App\Form\ReplyFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request): Response
    {
        $contact = new Contact();

        $form=$this->createForm(ContactFormType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();

            $contact->setIsAnswered(FALSE)->setIsReading(FALSE)->setCreatedAt((new \DateTime()));
            $em->persist($contact);
            $em->flush();
            $this->addFlash('contactSubitedSuccess','Mesajınız Gönderildi.');
            return $this->redirectToRoute('contact');
        }
        return $this->render('contact/index.html.twig', ['contact'=>$form->createView()]);
    }
    /**
     * @Route("/admin/contact", name="contact_list")
     */
    public function adminContact(): Response
    {
        $contact = $this->getDoctrine()->getRepository(Contact::class)->findAll();
        return $this->render('admin/mail/index.html.twig',['contact'=>$contact]);
    }
    /**
     * @Route("/admin/contact/delete/{id}", name="contact_delete")
     */
    public function delete(Request $request, $id)
    {
        $contact = $this->getDoctrine()->getRepository(Contact::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($contact);
        $em->flush();
        return $this->redirectToRoute('contact_list');
    }
    /**
     * @Route("/admin/contact/send", name="contact_send")
     */
    public function send(Request $request, MailerInterface $mailer): Response
    {



        $reply = new Reply();
        $em=$this->getDoctrine()->getManager();
        $form = $this->createForm(ReplyFormType::class,$reply);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $email = (new Email())
                ->from(new Address($_ENV['MAIL_ADDRESS'], $_ENV['MAIL_TITLE']))
                ->to($reply->getWho())
                ->subject($reply->getSubject())
                ->html($reply->getMessage());
            $mailer->send($email);

//            if ( is_null($reply) ) {
//
//            } else {
//                $id = $request->get('id');
//            }

            $em->persist($reply);
            $em->flush();
            $this->addFlash('emailsuccess','Email Başarıyla Gönderildi.');
            return $this->redirectToRoute('contact_list');
        }
        $mailadres = $request->get('mail');

        return $this->render('admin/mail/email.html.twig',['reply'=>$form->createView(),'mailadress'=>$mailadres]);
    }

    /**
     * @Route("/admin/contact/show/{id}", name="contact_show")
     */
    public function contactShow($id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $contact = $em->getRepository(Contact::class)->find($id);
        $contact->setIsReading(TRUE);
        $em->persist($contact);
        $em->flush();
        return $this->render('admin/mail/show.html.twig',['contact'=>$contact]);
    }
}
