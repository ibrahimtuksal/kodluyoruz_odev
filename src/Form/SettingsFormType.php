<?php

namespace App\Form;

use App\Entity\Settings;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class SettingsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('banner', FileType::class,
                ['attr'=>['class'=>'form-control'],'label'=>'Banner Fotoğraf',
                'mapped' => false,
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                new File([
                'maxSize' => '1080k',
                'mimeTypes' => [
                    'image/jpeg',
                    'image/png',
                ],
                'mimeTypesMessage' => 'Please upload a valid PDF document',
                ])
                ]
                ])
            ->add('title', TextType::class,['attr'=>['class'=>'form-control'],'label'=>'Banner Başlık'])
            ->add('description', TextType::class,['attr'=>['class'=>'form-control'],'label'=>'Banner Açıklama'])
            ->add('fea_title', TextType::class,['attr'=>['class'=>'form-control'],'label'=>'Özellikler Başlık'])
            ->add('fea_desc', TextType::class,['attr'=>['class'=>'form-control'],'label'=>'Özellikler Açıklama'])
            ->add('urldesc', TextType::class,['attr'=>['class'=>'form-control'],'label'=>'Url Açıklama'])
            ->add('Submit', SubmitType::class,['label'=>'Güncelle','row_attr'=>['class'=>'d-grid gap-2'],'attr'=>['class'=>'btn btn-success mt-3']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Settings::class,
        ]);
    }
}
