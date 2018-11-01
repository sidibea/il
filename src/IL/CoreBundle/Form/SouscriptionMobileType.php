<?php

namespace IL\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SouscriptionMobileType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $mois = [];
        $i = 1;
        while($i <= 12){
            array_push($mois, $i);
            $i++;


        }
        $current_year = date('Y');
        $date_range = range($current_year, $current_year+10);

        $builder
            ->add('operateur')
            ->add('numeroCarte')
            ->add('moisExpiration', ChoiceType::class, [
                'choices' => $mois
            ])
            ->add('anneeExpiration', ChoiceType::class, [
                'choices' => $date_range
            ])
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
