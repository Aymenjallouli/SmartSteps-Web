<?php

namespace App\Form;

use App\Entity\Forum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ForumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('image', FileType::class, [
                'label' => 'Forum Image',
                'mapped' => true,
                'required' => false,
            ])
            ->add('datecreation', DateType::class, [
                'widget' => 'single_text',
                'data' => new \DateTime(), // Set default value to current date
            ])
            ->add('description', TextareaType::class)
        ;

        // Add data transformer for the 'image' field
        $builder->get('image')->addModelTransformer(new class() implements DataTransformerInterface {
            public function transform($value)
            {
                // Transform the File instance to a string (file path)
            //    return null === $value ? '' : $value->getPathname();
            }

            public function reverseTransform($value)
            {
                // Transform the string (file path) to a File instance
                if ($value instanceof UploadedFile) {
                    return $value;
                }

                // Add your logic to handle the existing file path
                // For example, create a new File instance from the file path
                return new File($value);
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Forum::class,
        ]);
    }
}
