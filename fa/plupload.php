<?php
/**
*
* phpBB 3.3.X Project - Persian Translation
* Translators: PHP-BB.IR Group Meis@M Nobari
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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

$lang = array_merge($lang, array(
	'PLUPLOAD_ADD_FILES'		=> 'افزودن پرونده‌ها',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'پرونده‌ها را به صف بارگذاری اضافه کنید و روی دکمه شروع کلیک کنید.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s در حال حاضر در صف انتظار وجود دارد.',
	'PLUPLOAD_CLOSE'			=> 'بستن',
	'PLUPLOAD_DRAG'				=> 'پرونده را اینجا بکشید.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'خطای پروندهٔ تکراری.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'شما همچنین می‌توانید پرونده‌ها را با کشیدن و رها کردن در جعبه پیام، پیوست کنید.',
	'PLUPLOAD_ERR_INPUT'		=> 'باز کردن جریان ورودی، شکست خورد.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'جابه‌جایی پروندهٔ بارگذاری شده، شکست خورد.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'باز کردن جریان خروجی، شکست خورد.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'پرونده خیلی بزرگ است:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'خطای تعداد پرونده.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'پسوند پرونده، نامعتبر است:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'حافظه در دسترس تمام شد.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'آدرس پرونده بارگذاری شده وجود ندارد.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'خطای پسوند پرونده.',
	'PLUPLOAD_FILE'				=> 'پرونده: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'پرونده: %s, اندازه: %d, حداکثر اندازه پرونده: %d',
	'PLUPLOAD_FILENAME'			=> 'نام پرونده',
	'PLUPLOAD_FILES_QUEUED'		=> '%d پرونده در صف',
	'PLUPLOAD_GENERIC_ERROR'	=> 'خطا عمومی.',
	'PLUPLOAD_HTTP_ERROR'		=> 'خطای HTTP.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'قالب تصویر اشتباه یا پشتیبانی نمی‌شود.',
	'PLUPLOAD_INIT_ERROR'		=> 'خطای Init.',
	'PLUPLOAD_IO_ERROR'			=> 'خطای IO.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'خطای امنیتی.',
	'PLUPLOAD_SELECT_FILES'		=> 'گزینش پرونده‌ها',
	'PLUPLOAD_SIZE'				=> 'اندازه',
	'PLUPLOAD_SIZE_ERROR'		=> 'خطا اندازه پرونده.',
	'PLUPLOAD_STATUS'			=> 'وضعیت',
	'PLUPLOAD_START_UPLOAD'		=> 'آغاز بارگذاری',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'آغاز بارگذاری صف',
	'PLUPLOAD_STOP_UPLOAD'		=> 'توقف بارگذاری',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'توقف بارگذاری فعلی',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'تعداد %d/%d پرونده‌ها، بارگذاری شد',
));
