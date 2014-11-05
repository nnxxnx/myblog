<?php

namespace NXProject\BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use NXProject\BlogBundle\Entity\Tag;

class TagRepository extends EntityRepository
{
	public function getAllTag() {
		$tagObjs= $this->getEntityManager()
			->getRepository('NXProjectBlogBundle:Tag')
			->findAll();
		$tagList = array();
		if($tagObjs) {
			foreach($tagObjs as $obj) {
				$tagList[$obj->getId()] = $obj->getName();
			}
		}
		return $tagList;
	}

	public function getTagName($id) {
		$tagObj = $this->getEntityManager()
			->getRepository('NXProjectBlogBundle:Tag')
			->find($id);
		return array($id => $tagObj->getName());
	}

	public function addTag($name) {
		$tag = new Tag();

		$tag->setName($name);
		$dm = $this->getEntityManager();
		$dm->persist($tag);
		return $dm->flush();
	}
}
