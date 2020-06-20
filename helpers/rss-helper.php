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


class rssHelper
{

    // Get the feed from folder
    public static function getFeed($params)
    {

        $feed = "http://www.verzekeringsnieuws.nl/rss/algemeen.xml";
        $rss = simplexml_load_file($feed);

        $html = '<h1>' . $rss->channel->title . '</h1>';

        foreach ($rss->channel->item as $item) {
            $html .= '<div>';
            $html .= '<h2><a href="' . $item->link . '">' . $item->title . "</a></h2>";
            $html .= "<p>" . $item->pubDate . "</p>";
            $html .= "<p>" . $item->description . "</p>";
            $html .= '<p><a href="' . $item->link . '" class="btn btn-primary">Read more...</a></p>';
            $html .= '</div>';
        }

        return $html;
    }
}
