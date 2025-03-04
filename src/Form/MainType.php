<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MainType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('carte1', ChoiceType::class, [
                'label' => "Carte 1",
                'mapped' => false,
                'choices' => [
                    'Utilisateur' => 'ROLE_USER',
                    'Administrateur' => 'ROLE_ADMIN',
                ],
                'attr' => [
                    'class' => 'form-select',
                ],
                'data' => $options['carte1'],
            ])
            ->add('carte2', ChoiceType::class, [
                'label' => "Carte 2",
                'mapped' => false,
                'choices' => [
                    'Utilisateur' => 'ROLE_USER',
                    'Administrateur' => 'ROLE_ADMIN',
                ],
                'attr' => [
                    'class' => 'form-select',
                ],
                'data' => $options['carte2'],
            ])
            ->add('carte3', ChoiceType::class, [
                'label' => "Carte 3",
                'mapped' => false,
                'choices' => [
                    'Utilisateur' => 'ROLE_USER',
                    'Administrateur' => 'ROLE_ADMIN',
                ],
                'attr' => [
                    'class' => 'form-select',
                ],
                'data' => $options['carte3'],
            ])
            ->add('carte4', ChoiceType::class, [
                'label' => "Carte 4",
                'mapped' => false,
                'choices' => [
                    'Utilisateur' => 'ROLE_USER',
                    'Administrateur' => 'ROLE_ADMIN',
                ],
                'attr' => [
                    'class' => 'form-select',
                ],
                'data' => $options['carte4'],
            ])
            ->add('carte5', ChoiceType::class, [
                'label' => "Carte 5",
                'mapped' => false,
                'choices' => [
                    'Utilisateur' => 'ROLE_USER',
                    'Administrateur' => 'ROLE_ADMIN',
                ],
                'attr' => [
                    'class' => 'form-select',
                ],
                'data' => $options['carte5'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
            'carte1' => false,
            'carte2' => false,
            'carte3' => false,
            'carte4' => false,
            'carte5' => false,
        ]);
    }
}
