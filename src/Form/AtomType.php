<?php

namespace App\Form;

use App\Entity\Atom;
use App\Entity\Image;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AtomType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('symbol')
            ->add('name')
            ->add('atomicNumber')
            ->add('atomicWeight')
            ->add('atomicRadius')
            ->add('ionRadius')
            ->add('meltingTemperature')
            ->add('density')
            ->add('boilingTemperature')
            ->add('image', FileType::class,[
                'label' => 'Photo (png, jpeg)',
                'mapped' => false,
                'required' => false
            ])
            ->add('save', SubmitType::class, ['label' => 'Save'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Atom::class,
        ]);
    }
}
