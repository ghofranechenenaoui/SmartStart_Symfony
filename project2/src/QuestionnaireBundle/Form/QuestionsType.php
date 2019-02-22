<?php

namespace QuestionnaireBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Niveau',EntityType::class ,
                array('class'=>'QuestionnaireBundle:Niveau','choice_label'=>'rangeLevel',))
            ->add('Evaluation',EntityType::class ,
                array('class'=>'QuestionnaireBundle:Evaluation','choice_label'=>'libelle',))
            ->add('description')
            ->add('correctReq')
            ->add('rep1')
            ->add('rep2')
            ->add('rep3')
            ->add('rep4')
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'QuestionnaireBundle\Entity\Questions'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'questionnairebundle_questions';
    }


}
