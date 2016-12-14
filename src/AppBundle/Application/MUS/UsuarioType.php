<?php

namespace AppBundle\Application\MUS;

use AppBundle\Data\MUS\Pessoa;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UsuarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username'
                , TextType::class
                , array('attr'=> array(
                    'class' => 'MYCLASSFOR_INPUTS',
                    'label'=>'Username',
                    'class' => 'form-control'
                    , 'id' => '_username'
                    , 'name' => "_Nusername")))
            ->add('password'
                , PasswordType::class
                , array('attr' => array(

                    'label'=>'Password',
                    'data-help' => 'Task name should be short and actionable'
                    , 'class' => 'form-control'
                    , 'id' => '_password'
                    , 'name' => '_Password')))
            ->add('tipo',TextType::class,array('label'=>'Nome','attr'=>array('maxlength'=>100,'minlength'=>3)))
            ->add('estado', ChoiceType::class, array(
                'choices' => array(
                    'm' => 'Male',
                    'f' => 'Female'
                ),
                'required'    => false,
                'placeholder' => 'Choose your gender',
                'empty_data'  => null));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Data\MUS\Usuario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_usuario';
    }


}
