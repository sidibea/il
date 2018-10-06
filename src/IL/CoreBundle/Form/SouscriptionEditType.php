<?php

namespace IL\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SouscriptionEditType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }


    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'il_corebundle_souscription_edit';
    }

    public function getParent()
    {
       return SouscriptionType::class;
    }


}
