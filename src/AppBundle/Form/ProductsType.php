<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mcode')
            ->add('mtitle')
            ->add('mkeyword')
            ->add('mdescription')
            ->add('name')
            ->add('permalink')
            ->add('detail')
            ->add('sellprice')
            ->add('specprice')
            ->add('updatetime', 'datetime')
            ->add('published')
            ->add('created', 'datetime')
            ->add('logs')
            ->add('category')
            ->add('lastUpdateUser')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Products'
        ));
    }
}
