<?php
/*
Plugin Name: Mail Deactivation
Plugin URI: http://wordpress.org/plugins/mail-deactivation/
Description: deactivates the mail function
Author: edik
Author URI: http://edik.ch/
Version: 1.0
License: GPLv3

Copyright 2014  Edgard Schmidt  (email : edik@edik.ch)

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

if ( !function_exists( 'wp_mail' ) ) {
	function wp_mail( $to, $subject, $message, $headers=0, $attachments=0 ) {
		return true;
	}
}
