<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class UserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, ['label'=>'E-Mail','attr'=>['class'=>'form-control']])
            ->add('roles', ChoiceType::class, [
                'choices'=>['Admin'=>'ROLE_ADMIN','User'=>'ROLE_USER'],
                'attr'=>['class'=>'form-select'],
                'label'=>'Rol'
            ])
            ->add('password', PasswordType::class, ['label'=>'Şifre','attr'=>['class'=>'form-control']])
            ->add('Submit', SubmitType::class, [
                'label'=>'Oluştur',
                'attr'=>['class'=>'btn btn-success'],
                'row_attr'=>['class'=>'d-grid gap-2 my-3']
            ])
        ;
        $builder->get('roles')
            ->addModelTransformer(new CallbackTransformer(
               function ($rolesArray){
                   return count($rolesArray)? $rolesArray[0]: null;
               },
               function ($rolesString){
                   return [$rolesString];
                }
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
