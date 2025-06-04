<?php


class ModNewsHelper
{
    public static function getArticles($params)
    {
        // Logique ici pour récupérer les articles avec recherche + filtre
        // Exemple simplifié :
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query->select('a.*, c.title AS category_title')
              ->from('#__content AS a')
              ->leftJoin('#__categories AS c ON a.catid = c.id')
              ->where('a.state = 1')
              ->order('a.created DESC');

        $search = JFactory::getApplication()->input->getString('search');
        if ($search) {
            $query->where("a.title LIKE " . $db->quote('%' . $search . '%'));
        }

        $catid = JFactory::getApplication()->input->getInt('catid');
        if ($catid) {
            $query->where('a.catid = ' . (int)$catid);
        }

        $db->setQuery($query);
        return $db->loadObjectList();
    }

    public static function getCategories()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true)
            ->select('id, title')
            ->from('#__categories')
            ->where('extension = "com_content" AND published = 1')
            ->order('title ASC');

        $db->setQuery($query);
        return $db->loadObjectList();
    }
}
