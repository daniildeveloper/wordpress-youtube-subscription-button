<?php
/*
Plugin Name: Yotube Subs
Description: Display yotube sub button and count
Plugin URI: http://#
Author: Daniil Borovkov
Author URI: http://github.com/daniilweb
Version: 1.0
License: GPL2
Text Domain: Text Domain
Domain Path: Domain Path
 */

/*

Copyright (C) Year  Author  Email

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
 */
// exit if directly. security ops
if (!defined('ABSPATH')) {
    exit;
}

// load scripts
require plugin_dir_path(__FILE__) . '/includes/scripts.php';

/**
 * load widget class
 */
require plugin_dir_path(__FILE__) . '/includes/youtubesubs-class.php';

/**
 * register widget
 */
function register_youtubesubs() {
  register_widget('YoutubeSubs_Widget');
}
// hook to register widget
add_action('widgets_init', 'register_youtubesubs' );