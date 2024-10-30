=== Mail Deactivation ===
Contributors: plocha
Tags: mail, email, deactivation, disable, e-mail, deactivate, wp_mail, turn off, penis, emailing
Requires at least: 2.7
Tested up to: 3.8.1
Stable tag: 1.0
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Deactivates emailing. WordPress sends no more mails.

== Description ==

Deactivates emailing. WordPress sends no more mails.

How does it work?

* It replaces 'wp_mail' with a dummy function

It doesn't work?

* Check for other plugins which replace 'wp_mail'
* Check for plugins which use 'mail' instead of 'wp_mail'. And delete them! :D

== Changelog ==

= 1.0 =
* Replaces 'wp_mail' with a dummy function

== Upgrade Notice ==

= 1.0 =
First release
