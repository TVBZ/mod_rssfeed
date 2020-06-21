<?php
/**
 * @name        RSS Feed
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


<?php if ($params["channel"] == "1") : ?>
    <h1><?php echo $rss->channel->title; ?></h1>
<?php endif; ?>
<p>Source: <?php echo $rss->channel->link; ?></p>
<p>Logo: <img src="<?php echo $rss->channel->image->url; ?>" /></p>
<p>Copyright: <?php echo $rss->channel->copyright; ?></p>
<p>Managing editor: <?php echo $rss->channel->managingEditor; ?></p>
<p>Webmaster: <?php echo $rss->channel->webMaster; ?></p>
<p>Last build: <?php echo $rss->channel->lastBuildDate; ?></p>
<p>Description: <?php echo $rss->channel->description; ?></p>

<div>
<?php foreach ($rss->channel->item as $item) : ?>
    
    <div>

        <h2>
            <?php if ($params["linktitle"] == "1") : ?>
            <a href="<?php echo $item->link; ?>" target="<?php echo $params["target"]; ?>" title="<?php echo $item->link; ?>">  
                <?php echo $item->title; ?>
            </a>
            <?php else : ?>
                <?php echo $item->title; ?>
            <?php endif; ?>
        </h2>

        <div><?php echo $item->pubDate; ?></div>

        <p><?php echo $item->description; ?></p>

        <?php if ($params["readmore"] == "1") : ?>
        <p class="readmore" >
            <a class="btn btn-primary" href="<?php echo $item->link; ?>" target="<?php echo $params["target"]; ?>" title="<?php echo $item->link; ?>">
                Read more...
            </a>
        </p>
        <?php endif; ?>
    </div>

<? endforeach; ?>
</div>