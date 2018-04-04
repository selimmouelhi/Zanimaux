<?php

namespace PidevBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('prenom')->add('date_naissance',DateType::class)->add('adresse')->add('tel')->add('information')->add('ville')->add('url_image')->add('type_service')->add('connected')->add('numberReports')->add('rating')->add('EnAttente')->add('date_creation',DateType::class)->add('id_assocaition');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PidevBundle\Entity\User'
        ));
    }


    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pidevbundle_user';
    }

    public function getParent()
    {
        return ('FOS\UserBundle\Form\Type\RegistrationFormType');
    }


}
