<?php

// Ajoute en haut du fichier si ce n'est pas déjà fait
use Joomla\CMS\Pagination\Pagination;
use Joomla\CMS\Helper\ModuleHelper;

use Joomla\CMS\Factory;

$app = Factory::getApplication();
$itemid = $app->input->getInt('Itemid', 0);

require_once __DIR__ . '/helper.php';

$articles = ModNewsHelper::getArticles($params);
$categories = ModNewsHelper::getCategories();

$total = count($articles); // ← ICI c’est bien un tableau maintenant
$limit = $params->get('count', 6);
$limitstart = $app->input->getInt('limitstart', 0);

// Découpe les articles pour la page en cours
$pagedArticles = array_slice($articles, $limitstart, $limit);

$pagination = new Pagination($total, $limitstart, $limit);

require ModuleHelper::getLayoutPath('mod_news', $params->get('layout', 'default'), [
    'articles' => $pagedArticles,
    'categories' => $categories,
    'search' => $search,
    'pagination' => $pagination,
    'itemid' => $itemid
]);
