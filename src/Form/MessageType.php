<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("username", TextType::class, [
                "attr" => [


                ]
            ])
            ->add("email", EmailType::class, [
                "attr" => [
                    "class" => "form__field",
                    "placeholder" => 'Email',

                ]
            ])
            ->add("content", TextareaType::class, [
                "attr" => [
                    "class" => "form__field",
                    "placeholder" => "Texte",

                ]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
            'validation_groups' => ['message'],
        ]);
    }
}
