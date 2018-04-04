<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 04/04/2018
 * Time: 02:28
 */

namespace ProduitBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class AjouterProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('date_creation')
            ->add('adresse')
            ->add('prix')
            ->add('information')
            ->add('url', FileType::class,array('label'=>'Insert Image'))
            ->add('Add Product', SubmitType::class);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
    }
    public function getBlockPrefix()
    {
        return 'prouit_bundle_ajouter_produit_type';
    }

}