<?php

namespace IL\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SouscriptionBanqueType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $current_year = date('Y');
        $range = range($current_year, $current_year+10);
        $years = array_combine($range, $range);

        $builder
            ->add('numeroCarte')
            ->add('moisExpiration', ChoiceType::class, array(
                'choices' => array(
                    '01' => '01',
                    '02' =>'02',
                    '03' => '03',
                    '04' => '04',
                    '05' => '05',
                    '06' => '06',
                    '07' => '07',
                    '08' => '08',
                    '09' => '09',
                    '10' => '10',
                    '11' => '11',
                    '12' => '12'
                ),
                'required' => true
            ))
            ->add('anneeExpiration', ChoiceType::class, array(
                'choices' => $years,
                'required' => true
            ))
            ->add('typeCarte', TextType::class)
            ->add('statutLiaison', TextType::class, [
                'data' => 'Pending'
            ])
            ->add('statutCarte', TextType::class, [
                'data' => 'Activated'
            ])
            ->add('typeCompte')
            ->add('statutLiaison')
            ->add('statutCarte')
            ->add('nomCarte')
            ->add('labelCarte')
            ->add('numeroCompte')
            ->add('aliasCompte')
            ->add('raison')
            ->add('cb2c')
            ->add('c2cb')
            ->add('balanceInquery')
            ->add('miniStatement')
            ;
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
