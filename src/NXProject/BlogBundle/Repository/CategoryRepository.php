<?php

namespace NXProject\BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use NXProject\BlogBundle\Entity\Category;

class CategoryRepository extends EntityRepository
{
	public function getAllCategory() {
		$categoryObjs= $this->getEntityManager()
			->getRepository('NXProjectBlogBundle:Category')
			->findAll();
		$categoryList = array();
		if($categoryObjs) {
			foreach($categoryObjs as $obj) {
				$categoryList[$obj->getId()] = $obj->getName();
			}
		}
		return $categoryList;
	}

	public function getCategoryName($id) {
		$categoryObj = $this->getEntityManager()
			->getRepository('NXProjectBlogBundle:Category')
			->find($id);
		return array($id => $categoryObj->getName());
	}
	
	public function addCategory($name) {
		$category = new Category();

		$category->setName($name);
		$dm = $this->getEntityManager();
		$dm->persist($category);
		return $dm->flush();
	}
}
