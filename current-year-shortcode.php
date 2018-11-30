<?php
/*
Plugin Name: Current Year Shortcode
Plugin URI: https://om4.com.au/plugins/
Description: Displays the current year, allowing you to automate footer copyright statements. Use this simple shortcode: [currentyear]
Version: 99
Author: OM4
Author URI: https://om4.com.au/
Git URI: https://github.com/OM4/current-year-shortcode
Git Branch: release
License: GPLv2
*/

/*

   Copyright 2012-2018 OM4 (email: plugins@om4.com.au    web: https://om4.com.au/)

   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * [currentyear] Shortcode
 *
 * @param      $atts
 * @param null $content
 *
 * @return string
 */
function om4_currentyear_shortcode( $atts, $content = null ) {
	return date( 'Y' );
}
add_shortcode( 'currentyear', 'om4_currentyear_shortcode' );