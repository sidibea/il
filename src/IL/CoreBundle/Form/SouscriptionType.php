<?php

namespace IL\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SouscriptionType extends AbstractType
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
            ->add('operateur', ChoiceType::class, array(
                'choices' => array(
                    'Orange ML' => 'Orange ML',
                    'Malitel' =>'Malitel',
                    'Telecel' =>'Telecel'
                ),
                'required' => true
            ))

            ->add('numCartePrepaye')
            ->add('statutCarte', ChoiceType::class, array(
                'choices' => array(
                    'Linked' => 'Linked',
                    'Delinked' =>'Delinked'
                ),
                'required' => true
            ))
            ->add('month', ChoiceType::class, array(
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
            ->add('year', ChoiceType::class, array(
                'choices' => $years,
                'required' => true
            ))

            ->add('mobileNo')
            ->add('nomCarte')
            ->add('labelCarte')
            ->add('aliasAccount')
            ->add('raison')
            ->add('w2c')
            ->add('c2w')
            ->add('balanceInquery')
            ->add('miniStatement');
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IL\CoreBundle\Entity\Souscription'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'il_corebundle_souscription';
    }


}
