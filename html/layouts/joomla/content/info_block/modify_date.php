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
use Joomla\CMS\HTML\HTMLHelper;

$template = Factory::getApplication('site')->getTemplate(true);

$jsIcons = $template->params->get('jsIcons', 'none');

?>
<dd class="modified">
    <?php
    if ($jsIcons !== 'none') {
        echo '<span data-uk-icon="icon:calendar"></span>&nbsp;';
    }
    ?>
    <time datetime="<?php echo HTMLHelper::_( 'date', $displayData[ 'item' ]->modified, 'c' ); ?>" itemprop="dateModified">
        <?php echo Text::sprintf( 'COM_CONTENT_LAST_UPDATED', HTMLHelper::_( 'date', $displayData[ 'item' ]->modified, Text::_( 'd.m.Y' ) ) ); ?>
    </time>
</dd>