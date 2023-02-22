
<?php
/**
 * @package  Cris Plugin
 */

class mypluginDeactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}