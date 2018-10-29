<?php

namespace IL\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SouscriptionBanqueType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cb2c')
            ->add('c2cb')
            ->add('typeCompte')
            ->add('numeroCompte')
            ->add('numeroCarte')
            ->add('moisExpiration')
            ->add('anneeExpiration')
            ->add('typeCarte')
            ->add('statutLiaison')
            ->add('statutCarte')
            ->add('nomCarte')->add('labelCompte')->add('aliasCompte')->add('raison')
            ->add('balanceInquery')->add('miniStatement');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IL\CoreBundle\Entity\SouscriptionBanque'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'il_corebundle_souscriptionbanque';
    }


}
