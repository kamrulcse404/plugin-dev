<?php

/**
 * @package KamrulPlugin
 */


class KamrulPluginActivate
{
    public static function activate()
    {
        flush_rewrite_rules();
    }
}
