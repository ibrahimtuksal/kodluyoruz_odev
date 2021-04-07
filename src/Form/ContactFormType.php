<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, ['attr'=>['class'=>'form-control'],'label'=>'E-Mail'])
            ->add('namesurname',TextType::class, ['attr'=>['class'=>'form-control'],'label'=>'Adınız Ve Soyadınız'])
            ->add('message', TextareaType::class, ['attr'=>['class'=>'form-control'],'label'=>'Mesajınız'])
            ->add('Submit', SubmitType::class, ['label'=>'Gönder','attr'=>['class'=>'btn btn-success'],'row_attr'=>['class'=>'d-grid gap-2 mt-3']])
//            ->add('is_reading')
//            ->add('is_answered')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
