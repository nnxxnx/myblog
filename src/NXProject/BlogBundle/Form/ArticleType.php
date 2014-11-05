<?php

namespace NXProject\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('title', 'text', array(
				'label' => '标题',
			))
			->add('category', 'entity', array(
				'class' => 'NXProjectBlogBundle:Category',
				'property' => 'name',
				'expanded' => false,
				'multiple' => false,
				'label' => '分类',
			))
			->add('tags', 'entity', array(
				'class' => 'NXProjectBlogBundle:Tag',
				'property' => 'name',
				'expanded' => true,
				'multiple' => true,
				'label' => '标签',
				'mapped' => false,
			))
			->add('content', 'textarea', array(
				'label' => '内容',
			));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NXProject\BlogBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nxproject_blogbundle_article';
    }
}
