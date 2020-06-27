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


class RSS
{

    public $feed;

    function __construct($source)
    {
        $this->feed = simplexml_load_file($source);
    }

}
