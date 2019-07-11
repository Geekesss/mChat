<?php

/**
 *
 * @package phpBB Extension - mChat
 * @copyright (c) 2016 dmzx - http://www.dmzx-web.net
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, [
	'MCHAT_TITLE'					=> 'DV-Chat',
	'MCHAT_TITLE_COUNT'				=> [
		0 => 'DV-Chat',
		1 => 'DV-Chat [<strong>%1$d</strong>]',
	],
	'MCHAT_NAVBAR_CUSTOM_PAGE'		=> 'DV-Chat pagina',
	'MCHAT_NAVBAR_ARCHIVE'			=> 'Archief',
	'MCHAT_NAVBAR_RULES'			=> 'Regels',

	// Who is chatting
	'MCHAT_WHO_IS_CHATTING'			=> 'Wie is aan het chatten',
	'MCHAT_ONLINE_USERS_TOTAL'		=> [
		0 => 'Niemand aan het chatten',
		1 => '<strong>%1$d</strong> gebruiker is aan het chatten',
		2 => '<strong>%1$d</strong> gebruikers zijn aan het chatten',
	],
	'MCHAT_ONLINE_EXPLAIN'			=> 'gebaseerd op gebruikers die actief waren in de afgelopen %1$s',
	'MCHAT_HOURS'					=> [
		1 => '%1$d uur',
		2 => '%1$d uren',
	],
	'MCHAT_MINUTES'					=> [
		1 => '%1$d minuut',
		2 => '%1$d minuten',
	],
	'MCHAT_SECONDS'					=> [
		1 => '%1$d seconde',
		2 => '%1$d seconden',
	],

	// Custom translations for administrators
	'MCHAT_RULES_MESSAGE'			=> '',
	'MCHAT_STATIC_MESSAGE'			=> '',

	// Post notification messages (%1$s is replaced with a link to the new/edited post, %2$s is replaced with a link to the forum)
	'MCHAT_NEW_POST'			=> 'maakte een nieuwe topic aan: %1$s in %2$s',
	'MCHAT_NEW_POST_DELETED'		=> 'verwijderde een nieuwe topic',
	'MCHAT_NEW_REPLY'			=> 'plaatste een reactie: %1$s in %2$s',
	'MCHAT_NEW_REPLY_DELETED'		=> 'verwijderde een reactie',
	'MCHAT_NEW_QUOTE'			=> 'antwoordde met een citaat: %1$s in %2$s',
	'MCHAT_NEW_QUOTE_DELETED'		=> 'verwijderde een reactie met citaat',
	'MCHAT_NEW_EDIT'			=> 'bewerkte een bericht: %1$s in %2$s',
	'MCHAT_NEW_EDIT_DELETED'		=> 'verwijderde een bewerkt bericht',
	'MCHAT_NEW_LOGIN'			=> 'heeft zich net aangemeld',
]);
