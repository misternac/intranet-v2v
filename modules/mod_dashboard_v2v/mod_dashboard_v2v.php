<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;

$user = Factory::getUser();

// Ne rien afficher si utilisateur non connecté
if ($user->guest) {
    return;
}

require_once __DIR__ . '/helper.php';

require JModuleHelper::getLayoutPath('mod_dashboard_v2v');
