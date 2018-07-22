<?php

namespace App\Controller;
use App\Entity\Article;
use App\Model\ArticleRepository;

class ArticleController
{
	public function index() {
        $articleRepository = new ArticleRepository();
        $articleList = $articleRepository->findAll();
        require'../view/index.php';
    }
}
