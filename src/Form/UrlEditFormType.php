<?php

namespace App\Form;

use App\Entity\Url;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UrlEditFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('url', TextType::class, ['attr'=>['class'=>'form-control']])
            ->add('urlHash',TextType::class, ['attr'=>['class'=>'form-control']])
//            ->add('created_at',DateType::class, ['attr'=>['class'=>'form-select']])
//            ->add('update_at', DateType::class, ['attr'=>['class'=>'form-control']])
//            ->add('deleted_at',DateType::class, ['attr'=>['class'=>'form-control']])
            ->add('is_active',TextType::class, ['attr'=>['class'=>'form-control'],'label'=>'Aktif'])
            ->add('user_id',TextType::class, ['attr'=>['class'=>'form-control']])
            ->add('click_count',TextType::class, ['attr'=>['class'=>'form-control']])
            ->add('is_public',TextType::class, ['attr'=>['class'=>'form-control']])
            ->add('Submit', SubmitType::class,
                ['label'=>'Güncelle','row_attr'=>['class'=>'d-grid gap-2'],'attr'=>['class'=>'btn btn-primary mt-3']])
//            ->add('expired_at',DateType::class, ['attr'=>['class'=>'form-control']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Url::class,
        ]);
    }
}
