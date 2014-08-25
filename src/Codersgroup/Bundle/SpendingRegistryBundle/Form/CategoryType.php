<?php

namespace Codersgroup\Bundle\SpendingRegistryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoryType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('vat')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Codersgroup\Bundle\SpendingRegistryBundle\Entity\Category'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'codersgroup_bundle_spendingregistrybundle_category';
    }
}
