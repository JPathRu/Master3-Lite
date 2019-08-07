<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

$template = Factory::getApplication('site')->getTemplate(true);

$jsIcons = $template->params->get('jsIcons', 'none');

?>
<dd class="category-name">
    <?php
    if ($jsIcons !== 'none') {
        echo '<span data-uk-icon="icon:folder"></span>&nbsp;';
    }
    $title = $this->escape($displayData['item']->category_title);
    if ($displayData['params']->get('link_category') && $displayData['item']->catslug) {
        $url = '<a href="' . Route::_(ContentHelperRoute::getCategoryRoute($displayData['item']->catslug)) . '" itemprop="genre">' . $title . '</a>';
        echo Text::sprintf('COM_CONTENT_CATEGORY', $url);
    } else {
        echo Text::sprintf('COM_CONTENT_CATEGORY', '<span itemprop="genre">' . $title . '</span>');
    }
    ?>
</dd>