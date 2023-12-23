<?php

/**
 * @package KamrulPlugin
 */


class KamrulPluginDeactivate
{
    public static function deactivate()
    {
        flush_rewrite_rules();
    }
}
