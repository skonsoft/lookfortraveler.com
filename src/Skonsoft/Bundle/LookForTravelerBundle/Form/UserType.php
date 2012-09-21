<?php

namespace Skonsoft\Bundle\LookForTravelerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    protected $genderChoices = array(1=>'Male', 2=>'Female', 3 => 'Other');
    
    protected $maritalStatusChoices = array(1=>'Single', 2=>'separated', 3 => 'divorced', 4 => 'widower');
    
    protected $kidsNumberChoices = array(1=>'0', 2=>'1', 3 => '2', 4 => '3+');


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $tailleChoices = range(1.20,2.30, 0.01);
        
        $builder
            ->add('username', null, array('read_only'=>true))
            ->add('email', 'email')
            ->add('dateOfBirth','date',array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr' => array('class' => 'datepicker')
            ))
            ->add('firstname')
            ->add('lastname')
            ->add('gender', 'choice', array(
                'choices'   => $this->genderChoices,
                'required'  => true,
                'empty_value' => 'Select your gender'
            ))
            ->add('maritalStatus', 'choice', array(
                'choices'   => $this->maritalStatusChoices,
                'required'  => true,
                'empty_value' => 'Select your marital Status'
            ))
            ->add('kidsNumber', 'choice', array(
                'choices'   => $this->kidsNumberChoices,
                'required'  => true,
                'empty_value' => 'Have you kids ?'
            ))
            ->add('nationality', 'country', array(
                'preferred_choices' => array('FR', 'US', 'DE', 'EN', 'ES', 'IT')
            ))
            ->add('taille', 'choice', array(
                'choices'   => $tailleChoices,
                'required'  => true,
                'empty_value' => 'Your size ?'
            ))
            ->add('silouhette')
            ->add('hairClor')
            ->add('eyeColor')
                
            ->add('website', 'url', array('required'=>false, 'default_protocol'=>'http://'))
            ->add('biography', 'textarea',  array('required'=>false) )
            
            ->add('locale')
            ->add('phone')
            
            
            
            ->add('residenceCountry')
            ->add('residenceTown')
            ->add('studyLevel')
            ->add('activitySector')
            ->add('profession')
            ->add('careerDescription', 'textarea')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Skonsoft\Bundle\LookForTravelerBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'skonsoft_bundle_lookfortravelerbundle_usertype';
    }
}
