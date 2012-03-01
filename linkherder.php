<?php
/*
Plugin Name: LinkHerder
Plugin URI: http://grasshopperherder.com/
Description: Auto generate internal keyword links
Version: 1.0.0
Author: Tristan Kromer, Peter Backx
Author URI: http://grasshopperherder.com/
License: GPL2
*/

/*  Copyright 2011  Keyword Strategy  (email : info@keywordstrategy.org)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
     
    This plugin is, in part, based on the Keyword Strategy Internal Links plugin
    http://wordpress.org/extend/plugins/keyword-strategy-internal-links/
 */

define('LINKHERDER_MAX_LINKS', 1);
if (! function_exists('get_admin_url'))
{
	die("<h3>LinkHerder plugin error: please update your WordPress installation.</h3>");
}
define('LINKHERDER_ADMIN_URL', get_admin_url(null, 'options-general.php?page=linkherder'));

if ( is_admin() ) {
	if ( defined('DOING_AJAX') && DOING_AJAX ) {
		// no AJAX in this plugin
	} else {
		require_once(plugin_dir_path(__FILE__)."/includes/admin.php");
	}
} else {
	// no frontend code for now
}
?>
