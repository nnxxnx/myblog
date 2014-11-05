<?php

namespace NXProject\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use NXProject\BlogBundle\Form\ArticleType;

class BackgroundController extends Controller
{
	/**
	 * @Route("/bg/add", name="_background_add")
	 * @Template("NXProjectBlogBundle:Background:add.html.twig")
	 **/
    public function addAction(Request $request)
    {
		$form = $this->createForm(new ArticleType());

		if($request->getMethod() == 'POST') {
			$form->bind($request);
			if($form->isValid()) {
				$formData = $request->request->get($form->getName());
				$articleRepository->addArticle($formData);
				$this->redirect($this->generateUrl('_background_list'));
			}	
		}

		return array(
			'form' => $form->createView(),
		);
    }

	/**
	 * @Route("/bg/list", name="_background_list")
	 * @Template("NXProjectBlogBundle:Background:list.html.twig")
	 **/
	public function listAction(Request $request) {

	}
}
