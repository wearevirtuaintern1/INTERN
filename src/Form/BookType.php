<?php

namespace App\Form;

use App\Entity\Author;
use App\Entity\Book;
use App\Entity\Genre;
use Symfony\Component\DependencyInjection\Tests\Compiler\G;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [])
            ->add('description', TextareaType::class, [ 'required'   => false])

            ->add('author', EntityType::class,
                ['class' => Author::class,
                    'choice_label' => 'name'])
            ->add('genre', EntityType::class,
                ['class' => Genre::class,
                    'choice_label' => 'name'])
            ->add('dateOfPublishment', DateType::class, []
            )
            ->add('countryOfPublishment', CountryType::class,
            [])
            ->add('availability', CheckboxType::class, ['required'   => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}