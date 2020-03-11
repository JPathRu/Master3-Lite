<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Language\Text;

$template = Factory::getApplication('site')->getTemplate(true);

$jsIcons = $template->params->get('jsIcons', 'none');

?>
<dd class="parent-category-name">
    <?php 
    $icon = $jsIcons !== 'none' ? '<span data-uk-icon="icon:folder"></span> ' : '';
    $title = $this->escape($displayData['item']->parent_title);
    if ($displayData['params']->get('link_parent_category') && !empty($displayData['item']->parent_slug)) {
        $url = '<a href="' . Route::_(ContentHelperRoute::getCategoryRoute($displayData['item']->parent_slug)) . '" itemprop="genre">' . $icon . $title . '</a>';
        echo Text::sprintf('COM_CONTENT_PARENT', $url);
    } else {
        echo Text::sprintf('COM_CONTENT_PARENT', '<span itemprop="genre">' . $icon . $title . '</span>');
    }
    ?>
</dd>