<?php
/**
*
* @package phpBB Extension - Image Upload
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by ? (c) 2017 [ver 1.0.4] (https://github.com/phpBBTraducoes)
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_IMAGE_UPLOAD'			=> 'Image Upload',
	'ACP_IMAGE_UPLOAD_CONFIG'	=> 'Configuração',
	// Log
	'LOG_IMAGEUPLOAD_ADD'		=> '<strong>Nova imagem adicionada</strong><br>» %1$s',
	'LOG_IMAGEUPLOAD_SETTINGS'	=> '<strong>Configuração modificada</strong>',
	'LOG_IMAGEUPLOAD_DELETED'	=> '<strong>Imagem excluída</strong><br>» %1$s',
));
