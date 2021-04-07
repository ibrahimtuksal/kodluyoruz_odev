<?php

namespace App\Form;

use App\Entity\Reply;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReplyFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('who', EmailType::class,['attr'=>['class'=>'form-control'],'label'=>'Kime'])
            ->add('subject', TextType::class,['attr'=>['class'=>'form-control'],'label'=>'Konu'])
            ->add('message', TextareaType::class,['attr'=>['class'=>'form-control'],'label'=>'Mesaj'])
            ->add('submit',SubmitType::class,['label'=>'Gönder','attr'=>['class'=>'btn btn-success'],'row_attr'=>['class'=>'d-grid gap-2 mt-3']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reply::class,
        ]);
    }
}
