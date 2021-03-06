<?php

namespace follow_the_rhythm\SymfonyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActualiteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('titre','text')
        ->add('artiste','entity', array('required'=>false,'label'=>'Artiste Concerné',
                                     'class' => 'follow_the_rhythmSymfonyBundle:Artiste',
                                     'property' => 'nomDeScene'))
        ->add('concert','entity', array('required'=>false,'label'=>'Concert Concerné',
                                      'class' => 'follow_the_rhythmSymfonyBundle:Concert',
                                      'property' => 'nom'))
        ->add('description','textarea')
        //->add('artiste', new ArtisteType()) //A Voir!! ne peut pas coexister avec ->add('artiste', 'entity'....
        ;
    }
    
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'follow_the_rhythm\SymfonyBundle\Entity\Actualite'
        ));
    }
}
