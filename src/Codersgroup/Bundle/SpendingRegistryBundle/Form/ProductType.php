<?php

namespace Codersgroup\Bundle\SpendingRegistryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array('label' => 'Nazwa', 'attr' => array('class' => 'form-control')))
            ->add('description', null, array('attr' => array('class' => 'form-control')))
            ->add('quantity', null, array('attr' => array('class' => 'form-control')))
            ->add('vat', null, array('attr' => array('class' => 'form-control')))
            ->add('netPrice', null, array('attr' => array('class' => 'form-control')))
            ->add('grossPrice', null, array('attr' => array('class' => 'form-control')))
            ->add('summaryGrossPrice', null, array('attr' => array('class' => 'form-control')))
            ->add('purchaseDate', null)
            ->add('category', null, array('attr' => array('class' => 'form-control')))
            ->add('unit', null, array('attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Codersgroup\Bundle\SpendingRegistryBundle\Entity\Product'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'codersgroup_bundle_spendingregistrybundle_product';
    }
}
