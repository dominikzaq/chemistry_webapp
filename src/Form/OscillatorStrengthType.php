<?php

namespace App\Form;

use App\Entity\OscillatorStrength;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\{SubmitType, TextType, IntegerType};
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OscillatorStrengthType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('term', TextType::class)
            ->add('transition',TextType::class)
            ->add('jJ', TextType::class)
            ->add('fik1', IntegerType::class)
            ->add('aki1', IntegerType::class)
            ->add('fik2', IntegerType::class)
            ->add('aki2', IntegerType::class)
            ->add('fik3', IntegerType::class)
            ->add('aki3', IntegerType::class)
            ->add('fik4', IntegerType::class)
            ->add('aki4', IntegerType::class)
            ->add('fik5', IntegerType::class)
            ->add('aki5', IntegerType::class)
            ->add('save', SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => OscillatorStrength::class,
        ]);
    }
}
