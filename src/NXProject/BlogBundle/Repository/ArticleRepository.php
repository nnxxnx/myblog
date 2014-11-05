<?php

namespace NXProject\BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use NXProject\BlogBundle\Entity\Article;

class ArticleRepository extends EntityRepository
{
	public function getArticleByPage($pageNum, $pageSize) {
		return $this->getEntityManager()
			->getRepository('NXProjectBlogBundle:Article')
			->createQueryBuilder('a')
			->where('status = :status')	
			->setParameter('status', 2)
			->setFirstResult(($pageNum - 1) * $pageSize)
			->setMaxResults($pageSize)
//			->getQuery()
			->getResult();
	}

	public function addArticle($data) {
		$article = new Article();

		$article->setTitle($data['title']);
		$article->setCategory($data['category']);	
		$article->setTags(implode(',', $data['tags']));	
		$article->setContent($data['content']);	
		$article->setStatus(0);
		$article->setCount(0);
		$article->setDate(time());
		var_dump($article);exit;

		$dm = $this->getEntityManager();
		$dm->persist($article);
		return $dm->flush();
	}

	public function updateArticle($id, $data) {
		$dm = $this->getEntityManager();
		$article = $dm->getRepository('NXProjectBlogBundle:Article')
			->find($id);

		if(!$article) {
			return false;
		}

		foreach($data as $key => $val) {
			$funcName = 'set' . ucfirst($key);
			$article->$funcName($val);
		}

		return $dm->flush();
	}

	public function deleteArticle($id) {
		$dm = $this->getEntityManager();
		$article = $dm->getRepository('NXProjectBlogBundle:Article')
			->find($id);
		$dm->remove($article);
		return $dm->flush();
	}
}
