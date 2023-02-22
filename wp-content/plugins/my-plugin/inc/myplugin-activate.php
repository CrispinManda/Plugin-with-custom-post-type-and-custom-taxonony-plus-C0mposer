
<?php
/**
 * @package  Cris Plugin
 */

class mypluginActivate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}