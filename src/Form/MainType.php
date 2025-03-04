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
                    'As ♥️' => 'AsCœur',
                    'Roi ♥️' => 'RoiCœur',
                    'Dame ♥️' => 'DameCœur',
                    'Valet ♥️' => 'ValetCœur',
                    '10 ♥️' => '10Cœur',
                    '9 ♥️' => '9Cœur',
                    '8 ♥️' => '8Cœur',
                    '7 ♥️' => '7Cœur',
                    '6 ♥️' => '6Cœur',
                    '5 ♥️' => '5Cœur',
                    '4 ♥️' => '4Cœur',
                    '3 ♥️' => '3Cœur',
                    '2 ♥️' => '2Cœur',
                    'As ♣️' => 'AsTrefle',
                    'Roi ♣️' => 'RoiTrefle',
                    'Dame ♣️' => 'DameTrefle',
                    'Valet ♣️' => 'ValetTrefle',
                    '10 ♣️' => '10Trefle',
                    '9 ♣️' => '9Trefle',
                    '8 ♣️' => '8Trefle',
                    '7 ♣️' => '7Trefle',
                    '6 ♣️' => '6Trefle',
                    '5 ♣️' => '5Trefle',
                    '4 ♣️' => '4Trefle',
                    '3 ♣️' => '3Trefle',
                    '2 ♣️' => '2Trefle',
                    'As ♦️' => 'AsCarreau',
                    'Roi ♦️' => 'RoiCarreau',
                    'Dame ♦️' => 'DameCarreau',
                    'Valet ♦️' => 'ValetCarreau',
                    '10 ♦️' => '10Carreau',
                    '9 ♦️' => '9Carreau',
                    '8 ♦️' => '8Carreau',
                    '7 ♦️' => '7Carreau',
                    '6 ♦️' => '6Carreau',
                    '5 ♦️' => '5Carreau',
                    '4 ♦️' => '4Carreau',
                    '3 ♦️' => '3Carreau',
                    '2 ♦️' => '2Carreau',
                    'As ♠️' => 'AsPique',
                    'Roi ♠️' => 'RoiPique',
                    'Dame ♠️' => 'DamePique',
                    'Valet ♠️' => 'ValetPique',
                    '10 ♠️' => '10Pique',
                    '9 ♠️' => '9Pique',
                    '8 ♠️' => '8Pique',
                    '7 ♠️' => '7Pique',
                    '6 ♠️' => '6Pique',
                    '5 ♠️' => '5Pique',
                    '4 ♠️' => '4Pique',
                    '3 ♠️' => '3Pique',
                    '2 ♠️' => '2Pique',
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
                    'As ♥️' => 'AsCœur',
                    'Roi ♥️' => 'RoiCœur',
                    'Dame ♥️' => 'DameCœur',
                    'Valet ♥️' => 'ValetCœur',
                    '10 ♥️' => '10Cœur',
                    '9 ♥️' => '9Cœur',
                    '8 ♥️' => '8Cœur',
                    '7 ♥️' => '7Cœur',
                    '6 ♥️' => '6Cœur',
                    '5 ♥️' => '5Cœur',
                    '4 ♥️' => '4Cœur',
                    '3 ♥️' => '3Cœur',
                    '2 ♥️' => '2Cœur',
                    'As ♣️' => 'AsTrefle',
                    'Roi ♣️' => 'RoiTrefle',
                    'Dame ♣️' => 'DameTrefle',
                    'Valet ♣️' => 'ValetTrefle',
                    '10 ♣️' => '10Trefle',
                    '9 ♣️' => '9Trefle',
                    '8 ♣️' => '8Trefle',
                    '7 ♣️' => '7Trefle',
                    '6 ♣️' => '6Trefle',
                    '5 ♣️' => '5Trefle',
                    '4 ♣️' => '4Trefle',
                    '3 ♣️' => '3Trefle',
                    '2 ♣️' => '2Trefle',
                    'As ♦️' => 'AsCarreau',
                    'Roi ♦️' => 'RoiCarreau',
                    'Dame ♦️' => 'DameCarreau',
                    'Valet ♦️' => 'ValetCarreau',
                    '10 ♦️' => '10Carreau',
                    '9 ♦️' => '9Carreau',
                    '8 ♦️' => '8Carreau',
                    '7 ♦️' => '7Carreau',
                    '6 ♦️' => '6Carreau',
                    '5 ♦️' => '5Carreau',
                    '4 ♦️' => '4Carreau',
                    '3 ♦️' => '3Carreau',
                    '2 ♦️' => '2Carreau',
                    'As ♠️' => 'AsPique',
                    'Roi ♠️' => 'RoiPique',
                    'Dame ♠️' => 'DamePique',
                    'Valet ♠️' => 'ValetPique',
                    '10 ♠️' => '10Pique',
                    '9 ♠️' => '9Pique',
                    '8 ♠️' => '8Pique',
                    '7 ♠️' => '7Pique',
                    '6 ♠️' => '6Pique',
                    '5 ♠️' => '5Pique',
                    '4 ♠️' => '4Pique',
                    '3 ♠️' => '3Pique',
                    '2 ♠️' => '2Pique',
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
                    'As ♥️' => 'AsCœur',
                    'Roi ♥️' => 'RoiCœur',
                    'Dame ♥️' => 'DameCœur',
                    'Valet ♥️' => 'ValetCœur',
                    '10 ♥️' => '10Cœur',
                    '9 ♥️' => '9Cœur',
                    '8 ♥️' => '8Cœur',
                    '7 ♥️' => '7Cœur',
                    '6 ♥️' => '6Cœur',
                    '5 ♥️' => '5Cœur',
                    '4 ♥️' => '4Cœur',
                    '3 ♥️' => '3Cœur',
                    '2 ♥️' => '2Cœur',
                    'As ♣️' => 'AsTrefle',
                    'Roi ♣️' => 'RoiTrefle',
                    'Dame ♣️' => 'DameTrefle',
                    'Valet ♣️' => 'ValetTrefle',
                    '10 ♣️' => '10Trefle',
                    '9 ♣️' => '9Trefle',
                    '8 ♣️' => '8Trefle',
                    '7 ♣️' => '7Trefle',
                    '6 ♣️' => '6Trefle',
                    '5 ♣️' => '5Trefle',
                    '4 ♣️' => '4Trefle',
                    '3 ♣️' => '3Trefle',
                    '2 ♣️' => '2Trefle',
                    'As ♦️' => 'AsCarreau',
                    'Roi ♦️' => 'RoiCarreau',
                    'Dame ♦️' => 'DameCarreau',
                    'Valet ♦️' => 'ValetCarreau',
                    '10 ♦️' => '10Carreau',
                    '9 ♦️' => '9Carreau',
                    '8 ♦️' => '8Carreau',
                    '7 ♦️' => '7Carreau',
                    '6 ♦️' => '6Carreau',
                    '5 ♦️' => '5Carreau',
                    '4 ♦️' => '4Carreau',
                    '3 ♦️' => '3Carreau',
                    '2 ♦️' => '2Carreau',
                    'As ♠️' => 'AsPique',
                    'Roi ♠️' => 'RoiPique',
                    'Dame ♠️' => 'DamePique',
                    'Valet ♠️' => 'ValetPique',
                    '10 ♠️' => '10Pique',
                    '9 ♠️' => '9Pique',
                    '8 ♠️' => '8Pique',
                    '7 ♠️' => '7Pique',
                    '6 ♠️' => '6Pique',
                    '5 ♠️' => '5Pique',
                    '4 ♠️' => '4Pique',
                    '3 ♠️' => '3Pique',
                    '2 ♠️' => '2Pique',
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
                    'As ♥️' => 'AsCœur',
                    'Roi ♥️' => 'RoiCœur',
                    'Dame ♥️' => 'DameCœur',
                    'Valet ♥️' => 'ValetCœur',
                    '10 ♥️' => '10Cœur',
                    '9 ♥️' => '9Cœur',
                    '8 ♥️' => '8Cœur',
                    '7 ♥️' => '7Cœur',
                    '6 ♥️' => '6Cœur',
                    '5 ♥️' => '5Cœur',
                    '4 ♥️' => '4Cœur',
                    '3 ♥️' => '3Cœur',
                    '2 ♥️' => '2Cœur',
                    'As ♣️' => 'AsTrefle',
                    'Roi ♣️' => 'RoiTrefle',
                    'Dame ♣️' => 'DameTrefle',
                    'Valet ♣️' => 'ValetTrefle',
                    '10 ♣️' => '10Trefle',
                    '9 ♣️' => '9Trefle',
                    '8 ♣️' => '8Trefle',
                    '7 ♣️' => '7Trefle',
                    '6 ♣️' => '6Trefle',
                    '5 ♣️' => '5Trefle',
                    '4 ♣️' => '4Trefle',
                    '3 ♣️' => '3Trefle',
                    '2 ♣️' => '2Trefle',
                    'As ♦️' => 'AsCarreau',
                    'Roi ♦️' => 'RoiCarreau',
                    'Dame ♦️' => 'DameCarreau',
                    'Valet ♦️' => 'ValetCarreau',
                    '10 ♦️' => '10Carreau',
                    '9 ♦️' => '9Carreau',
                    '8 ♦️' => '8Carreau',
                    '7 ♦️' => '7Carreau',
                    '6 ♦️' => '6Carreau',
                    '5 ♦️' => '5Carreau',
                    '4 ♦️' => '4Carreau',
                    '3 ♦️' => '3Carreau',
                    '2 ♦️' => '2Carreau',
                    'As ♠️' => 'AsPique',
                    'Roi ♠️' => 'RoiPique',
                    'Dame ♠️' => 'DamePique',
                    'Valet ♠️' => 'ValetPique',
                    '10 ♠️' => '10Pique',
                    '9 ♠️' => '9Pique',
                    '8 ♠️' => '8Pique',
                    '7 ♠️' => '7Pique',
                    '6 ♠️' => '6Pique',
                    '5 ♠️' => '5Pique',
                    '4 ♠️' => '4Pique',
                    '3 ♠️' => '3Pique',
                    '2 ♠️' => '2Pique',
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
                    'As ♥️' => 'AsCœur',
                    'Roi ♥️' => 'RoiCœur',
                    'Dame ♥️' => 'DameCœur',
                    'Valet ♥️' => 'ValetCœur',
                    '10 ♥️' => '10Cœur',
                    '9 ♥️' => '9Cœur',
                    '8 ♥️' => '8Cœur',
                    '7 ♥️' => '7Cœur',
                    '6 ♥️' => '6Cœur',
                    '5 ♥️' => '5Cœur',
                    '4 ♥️' => '4Cœur',
                    '3 ♥️' => '3Cœur',
                    '2 ♥️' => '2Cœur',
                    'As ♣️' => 'AsTrefle',
                    'Roi ♣️' => 'RoiTrefle',
                    'Dame ♣️' => 'DameTrefle',
                    'Valet ♣️' => 'ValetTrefle',
                    '10 ♣️' => '10Trefle',
                    '9 ♣️' => '9Trefle',
                    '8 ♣️' => '8Trefle',
                    '7 ♣️' => '7Trefle',
                    '6 ♣️' => '6Trefle',
                    '5 ♣️' => '5Trefle',
                    '4 ♣️' => '4Trefle',
                    '3 ♣️' => '3Trefle',
                    '2 ♣️' => '2Trefle',
                    'As ♦️' => 'AsCarreau',
                    'Roi ♦️' => 'RoiCarreau',
                    'Dame ♦️' => 'DameCarreau',
                    'Valet ♦️' => 'ValetCarreau',
                    '10 ♦️' => '10Carreau',
                    '9 ♦️' => '9Carreau',
                    '8 ♦️' => '8Carreau',
                    '7 ♦️' => '7Carreau',
                    '6 ♦️' => '6Carreau',
                    '5 ♦️' => '5Carreau',
                    '4 ♦️' => '4Carreau',
                    '3 ♦️' => '3Carreau',
                    '2 ♦️' => '2Carreau',
                    'As ♠️' => 'AsPique',
                    'Roi ♠️' => 'RoiPique',
                    'Dame ♠️' => 'DamePique',
                    'Valet ♠️' => 'ValetPique',
                    '10 ♠️' => '10Pique',
                    '9 ♠️' => '9Pique',
                    '8 ♠️' => '8Pique',
                    '7 ♠️' => '7Pique',
                    '6 ♠️' => '6Pique',
                    '5 ♠️' => '5Pique',
                    '4 ♠️' => '4Pique',
                    '3 ♠️' => '3Pique',
                    '2 ♠️' => '2Pique',
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
