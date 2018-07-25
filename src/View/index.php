<?php

ob_start();

echo 'Salutation ! <br>';
var_dump($articleList);
foreach($articleList as $article) {
    echo $article->getName() . '<br>';
	}