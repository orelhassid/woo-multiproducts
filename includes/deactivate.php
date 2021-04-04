<?php
/**
* @package EchoPlusPlugin
*/

class EchoPlusPluginDeactivate {
    public static function deactivate() {
        flush_rewrite_rules();
    }
}