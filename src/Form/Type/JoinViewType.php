<?php
/**
 * Created by PhpStorm.
 * User: Emanuel
 * Date: 17.09.2019
 * Time: 20:29
 */

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JoinViewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('uid', TextType::class, ['label' => 'Konferenz ID', 'required' => true, 'translation_domain' => 'form'])
            ->add('email', TextType::class, ['label' => 'Email Adresse', 'required' => true, 'translation_domain' => 'form'])
            ->add('name', TextType::class, ['label' => 'Name', 'required' => true, 'translation_domain' => 'form'])
            ->add('save', SubmitType::class, ['attr' => array('class' => 'btn btn-primary btn-block mt-3'), 'label' => 'Beitreten', 'translation_domain' => 'form']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
    }
}