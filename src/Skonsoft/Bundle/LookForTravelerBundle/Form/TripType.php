<?php

namespace Skonsoft\Bundle\LookForTravelerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TripType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('startDate','date',array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr' => array('class' => 'datepicker')
            ))
            ->add('startTime','time',array(
                'widget' => 'single_text',
                'attr' => array('class' => 'timepicker-default input-small')
            ))
            ->add('returnDate')
            ->add('price')
            ->add('description')
            ->add('startPlace')
            ->add('returnPlace')
            ->add('status')
            ->add('authorizedCategoryTraveler')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Skonsoft\Bundle\LookForTravelerBundle\Entity\Trip'
        ));
    }

    public function getName()
    {
        return 'skonsoft_bundle_lookfortravelerbundle_triptype';
    }
}
