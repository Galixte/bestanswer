<?php
/**
 *
 * Best Answer. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 kinerity <https://www.layer-3.org>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
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
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ANSWERS'	=> 'Réponses',

	'ENABLE_ANSWER'			=> 'Activer les réponses les plus pertinentes',
	'ENABLE_ANSWER_EXPLAIN'	=> 'Permet aux auteurs de sujets et aux modérateurs de mettre en avant un message comme étant la réponse la plus pertinente de son sujet.',

	'TO_POST'	=> 'Se rendre au message',

	'LOG_MARK_ANSWER'	=> '<strong>Mise en avant effectuée d’un message, comme étant la réponse la plus pertinente de son sujet</strong><br />» %1$s par %2$s',
	'LOG_UNMARK_ANSWER'	=> '<strong>Mise en avant annulée d’un message, comme étant la réponse la plus pertinente de son sujet</strong><br />» %1$s par %2$s',

	'MARK_ANSWER'			=> 'Mettre en avant ce message comme réponse la plus pertinente',
	'MARK_ANSWER_CONFIRM'	=> 'Confirmer la mise en avant de ce message en tant que réponse la plus pertinente de son sujet.',

	'TOTAL_ANSWERS'	=> 'Réponses pertinentes',

	'UNMARK_ANSWER'			=> 'Annuler la mise en avant de ce message comme réponse la plus pertinente',
	'UNMARK_ANSWER_CONFIRM'	=> 'Confirmer le retrait de la mise en avant de ce message en tant que réponse la plus pertinente de son sujet.',

	'MARK_ANSWER_NOTIFICATION'			=> '%1$s a mis en avant votre message « %2$s » en tant que réponse la plus pertinente de son sujet.',
	'UNMARK_ANSWER_NOTIFICATION'		=> '%1$s a retiré la mise en avant de votre message « %2$s » comme réponse la plus pertinente de son sujet.',
	'NOTIFICATION_TYPE_MARK_ANSWER'		=> 'Un membre a mis en avant votre message, en tant que réponse la plus pertinente de son sujet.',
	'NOTIFICATION_TYPE_UNMARK_ANSWER'	=> 'Un membre a annulée sa mise en avant pour votre message, en tant que réponse la plus pertinente de son sujet.',

	'BUTTON_MARK'	=> 'Mettre en avant comme réponse la plus pertinente',
	'BUTTON_UNMARK'	=> 'Annuler la mise en avant comme réponse la plus pertinente',
));
