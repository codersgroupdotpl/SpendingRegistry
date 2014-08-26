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
            ->add('description', null, array('label' => 'Opis', 'attr' => array('class' => 'form-control')))
            ->add('quantity', null, array('label' => 'Ilość', 'attr' => array('class' => 'form-control col-md-4')))
            ->add('netPrice', null, array('label' => 'Cena netto', 'attr' => array('class' => 'form-control col-md-4')))
	        ->add('vat', null, array('label' => 'Stawka VAT', 'attr' => array('class' => 'form-control col-md-4')))
            ->add('grossPrice', null, array('label' => 'Cena brutto', 'attr' => array('class' => 'form-control col-md-4')))
            ->add('summaryGrossPrice', null, array('label' => 'Całkowity koszt', 'attr' => array('class' => 'form-control col-md-4')))
            ->add('purchaseDate', null, array('label' => 'Data zakupu', 'widget' => 'single_text', 'format' => 'd-M-y', 'attr' => array('class' => 'form-control col-md-4 datepicker')))
            ->add('category', null, array('label' => 'Kategoria', 'attr' => array('label' => 'Kategoria', 'class' => 'form-control')))
            ->add('unit', null, array('label' => 'Jednostka', 'attr' => array('class' => 'form-control')))
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
