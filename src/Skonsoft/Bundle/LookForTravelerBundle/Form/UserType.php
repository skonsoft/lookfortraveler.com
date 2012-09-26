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
    
    protected $silhouetteChoices = array(1=>'slim', 2=>'normal', 3=>'sportive', 4=>'few pounds', 5=>'round');
    
    protected $hairColorChoices = array(1=>'White', 2 => 'Blond', 3 => 'Brown', 4 => 'gray', 5 =>'chatins', 6 => 'Black', 7 => 'Red');
    
    protected $eyeColorChoices = array(1=>'Blue', 2=>'Brown', 3 => 'Black', 4 => 'hazelnuts', 5 => 'green' );
    
    protected $preferedCountries = array('FR', 'US', 'DE', 'EN', 'ES', 'IT');
    
    protected $studyLevelChoices = array(1 => 'No diploma', 2 => 'License', 3 => 'Bac', 4 => 'Bac + 2', 5 => 'Bac + 3', 6 => 'Bac + 4', 7 => 'Bac + 5', 8 => 'Ph.D.');
    
    protected $activitySectorChoices = array(
                                1=>'Aeronautic - Navy - Space - Armament',
                                2 => 'Agribusiness and agriculture',
                                3 => 'Arts and Culture', 
                                4 => 'associations',
                                6 => 'Public Works building',
                                7 => 'Consumer goods',
                                8 => 'Communication and Media',
                                9 => 'Consulting and Services',
                                10 => 'Distribution',
                                11 => 'Education',
                                12 => 'Finance',
                                13 => 'High-tech',
                                14 => 'Industry',
                                15 => 'Health Care & pharmacy',
                                16 => 'Public Services - Administration',
                                17 => 'Sport',
                                18 => 'Tourism',
                                19 => 'Transports',
                                20 => 'Other'
                                );


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
                'preferred_choices' => $this->preferedCountries
            ))
            ->add('taille', 'choice', array(
                'choices'   => $tailleChoices,
                'required'  => true,
                'empty_value' => 'Your size ?'
            ))
            ->add('silouhette', 'choice', array(
                'choices'   => $this->silhouetteChoices,
                'required'  => true,
                'empty_value' => 'Your figure ?'
            ))
            ->add('hairClor', 'choice', array(
                'choices'   => $this->hairColorChoices,
                'required'  => true,
                'empty_value' => 'Your hair color ?'
            ))
            ->add('eyeColor', 'choice', array(
                'choices'   => $this->eyeColorChoices,
                'required'  => true,
                'empty_value' => 'Your eyes color ?'
            ))
                
            ->add('website', 'url', array('required'=>false, 'default_protocol'=>'http://'))
            ->add('biography', 'textarea',  array('required'=>false) )
            
            ->add('locale')
            ->add('phone')
            
            
            
            ->add('residenceCountry', 'country', array(
                'preferred_choices' => $this->preferedCountries
            ))
            ->add('residenceTown')
            ->add('studyLevel', 'choice', array(
                'choices'   => $this->studyLevelChoices,
                'required'  => true,
                'empty_value' => 'Your Study level ?'
            ))
            ->add('activitySector', 'choice', array(
                'choices'   => $this->activitySectorChoices,
                'required'  => true,
                'empty_value' => 'Your activity sector ?'
            ))
            ->add('profession')
            ->add('careerDescription', 'textarea', array(
                'required'=> 'false',
            ))
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
