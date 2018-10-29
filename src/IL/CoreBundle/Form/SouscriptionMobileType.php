<?php

namespace IL\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SouscriptionMobileType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('operateur')
            ->add('numeroCarte')
            ->add('moisExpiration')
            ->add('anneeExpiration')
            ->add('typeCarte')
            ->add('statutLiaison')
            ->add('statutCarte')
            ->add('nomCarte')
            ->add('labelCompte')
            ->add('aliasCompte')
            ->add('raison')
            ->add('w2c')
            ->add('c2w')
            ->add('numeroTelephone')
            ->add('balanceInquery')
            ->add('miniStatement')
            ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IL\CoreBundle\Entity\SouscriptionMobile'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'il_corebundle_souscriptionmobile';
    }


}
