<?php

namespace App\Controller;

use App\Entity\Settings;
use App\Form\SettingsFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
class SettingsController extends AbstractController
{
    /**
     * @Route("/admin/settings", name="settings")
     */
    public function index(Request $request, SluggerInterface $slugger): Response
    {
        $settings=$this->getDoctrine()->getRepository(Settings::class)->find(1);
        $form=$this->createForm(SettingsFormType::class,$settings);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $brochureFile */

           $brochureFile = $form->get('banner')->getData();

            if (!is_null($brochureFile)) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $brochureFile->guessExtension();


                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {

                }
                $settings->setBanner($this->getParameter('imageUrls').$newFilename);
            }


                $em = $this->getDoctrine()->getManager();
                $em->flush();
                return $this->redirectToRoute('settings');

        }
        return $this->render('admin/settings/index.html.twig',['settings'=>$form->createView(),'setget'=>$settings]);
    }
}
