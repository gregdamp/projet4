<?php

namespace App\Model;
use App\Entity\Article;
use App\Model\Repository;
use PDO;

class ArticleRepository extends Repository
{
	public function findAll()
	{
		$list = $this->getDb()->query('SELECT * FROM article');
		$articleList = [];
		foreach ($list as $articleRow) {
			$article = new Article();
			$article->setName($articleRow['name']);
			$articleList[] = $article;
		}
		return $articleList;
	}
}