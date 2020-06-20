<?php
/**
 * @name        Directory Carousel
 * @copyright	Copyright (C) 2020 All rights reserved
 * @license		GPLv3 or later; see https://github.com/TVBZ/mod_rssfeed/blob/master/LICENSE
 * @author		Tom F. Vanbrabant, a.k.a. TVBZ
 * 
 * https://github.com/TVBZ/mod_rssfeed
 * 
 **/

// Restrict direct access
defined("_JEXEC") or die;

use \Joomla\CMS\Factory;
use \Joomla\CMS\Uri\Uri;

$document = Factory::getDocument();

$document->addStyleSheet(Uri::root(true)."/modules/mod_rssfeed/assets/css/styles.css");

?>

<?php echo $rssFeed; ?>
