<?php
/**
*
* phpBB 3.3.X Project - Persian Translation
* Translators: PHP-BB.IR Group Meis@M Nobari
* 
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
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
	'ALREADY_DEFAULT_GROUP'		=> 'گروه انتخابی شما از قبل به عنوان پیش فرض انتخاب شده بود.',
	'ALREADY_IN_GROUP'			=> 'شما قبلا کاربر این گروه بوده اید !',
	'ALREADY_IN_GROUP_PENDING'	=> 'شما قبلا درخواست خود را برای عضویت در این گروه ارائه كرده اید.',

	'CANNOT_JOIN_GROUP'			=> 'شما فقط می توانید در گروه های باز یا رایگان عضو شوید.',
	'CANNOT_RESIGN_GROUP'		=> 'شما نمی توانید از این گروه کناره گیری کنید.شما فقط می توانید در گروه های باز یا آزاد عضویت خود را لغو کنید.',
	'CHANGED_DEFAULT_GROUP'		=> 'تغییر گروه با موفقیت انجام شد.',

	'GROUP_AVATAR'						=> 'نمایه گروه',
	'GROUP_CHANGE_DEFAULT'				=> 'آیا از تغییر گروه فعلی خود به گروه “%s” مطمئنی هستید؟',
	'GROUP_CLOSED'						=> 'بسته شده',
	'GROUP_DESC'						=> 'توضیحات گروه',
	'GROUP_HIDDEN'						=> 'مخفی',
	'GROUP_INFORMATION'					=> 'اطلاعات گروه کاربری',
	'GROUP_IS_CLOSED'					=> 'این گروه فقط با دعوت نامه از طرف رهبر گروه قابل دسترسی است.',
	'GROUP_IS_FREE'						=> 'این گروه برای تمام اعضا قابل دسترسی است.',
	'GROUP_IS_HIDDEN'					=> 'این گروه,گروه پنهانی است که فقط اعضای آن به آن دسترسی دارند.',
	'GROUP_IS_OPEN'						=> 'این یك گروه باز است، اعضا میتوانند درخواست عضویت دهند.',
	'GROUP_IS_SPECIAL'					=> 'این یك گروه ویژه است، گروههای ویژه توسط مدیر کل سایت، مدیریت میشوند.',
	'GROUP_JOIN'						=> 'عضویت در گروه',
	'GROUP_JOIN_CONFIRM'				=> 'آیا از عضویت در گروه انتخاب شده اطمینان دارید ؟',
	'GROUP_JOIN_PENDING'				=> 'درخواست برای عضویت',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'آیا مطمئنید كه میخواهید عضو این گروه شوید؟',
	'GROUP_JOINED'						=> 'با موفقیت در گروه انتخاب شده عضو شدید.',
	'GROUP_JOINED_PENDING'				=> 'درخواست عضویت شما با موفقیت ثبت شد، لطفا صبر کنید تا رهبر گروه درخواست شما را تایید کند.',
	'GROUP_LIST'						=> 'مدیریت کاربران',
	'GROUP_MEMBERS'						=> 'اعضای گروه',
	'GROUP_NAME'						=> 'نام گروه',
	'GROUP_OPEN'						=> 'باز',
	'GROUP_RANK'						=> 'رتبه گروه',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'استعفا از گروه کاربری',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'آیا از استعفا دادن از گروه مربوطه مطمئن هستید؟',
	'GROUP_RESIGN_PENDING'				=> 'استعفا از عضویت گروه',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'آیا از استعفا دادن از گروه مربوط در طی فرآیند ثبت مطمئن هستید؟',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'شما با موفقیت از گروه انتخاب حذف شدید.',
	'GROUP_RESIGNED_PENDING'			=> 'شما با موفقیت از گروه انتخابی حذف شدید',
	'GROUP_TYPE'						=> 'نوع گروه',
	'GROUP_UNDISCLOSED'					=> 'گروه مخفی',
	'FORUM_UNDISCLOSED'					=> 'مدیریت انجمن های مخفی',

	'LOGIN_EXPLAIN_GROUP'	=> 'جهت نمایش جزئیات گروه باید وارد حساب خود شوید.',

	'NO_LEADERS'					=> 'شما رهبر هیچ گروه کاربری نیستید.',
	'NOT_LEADER_OF_GROUP'			=> 'درخواست شما برای انجام عملیات بی فایده است زیرا رهبر هیچ گروهی نیستید.',
	'NOT_MEMBER_OF_GROUP'			=> 'درخواست شما برای انجام این عملیات بی فایده است زیرا از اعضای این گروه نیستید.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'شما اجازه استعفا از گروه پیش فرض را ندارید.',

	'PRIMARY_GROUP'		=> 'گروه اصلی',

	'REMOVE_SELECTED'		=> 'حذف انتخاب شده ها',

	'USER_GROUP_CHANGE'			=> 'از “%1$s” به گروه“%2$s”',
	'USER_GROUP_DEMOTE'			=> 'مقام رهبر گروه',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'آیا از تنزل مقام رهبر گروه اطمینان دارید؟',
	'USER_GROUP_DEMOTED'		=> 'شما با موفقیت از رهبریت گروه نزول درجه پیدا کردید.',
));
