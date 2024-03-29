<?php
/**
*
* phpBB 3.3.X Project - Persian Translation
* Translators: PHP-BB.IR Group Meis@M Nobari
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
	'ADMIN_SIG_PREVIEW'		=> 'پیش نمایش امضا',
	'AT_LEAST_ONE_FOUNDER'	=> 'شما مجاز به تغییر این بنیانگذار به کاربر عادی نیستید. در کمترین حالت نیاز است یک بنیانگذار برای انجمن تعریف شده باشد. در صورتیکه می خواهید وضعیت بنیانگذاری این کاربران را تغییر دهید, کاربر دیگری را به بنیانگذار ترفیع دهید.',

	'BAN_ALREADY_ENTERED'	=> 'این تحریم قبلا با موفقیت وارد شده بود،لیست تحریم ها به‌روز رسانی نشد.',
	'BAN_SUCCESSFUL'		=> 'تحریم با موفقیت وارد شد.',

	'CANNOT_BAN_ANONYMOUS'			=> 'کاربر anonymous قابل اخراج نیست ! اما می‌توانید سطوح دسترسی آن را از قسمت تنظیمات سطوح دسترسی تعیین کنید.',
	'CANNOT_BAN_FOUNDER'			=> 'نمی‌توانید حساب های صاحبان امتیاز سایت را تحریم کنید.',
	'CANNOT_BAN_YOURSELF'			=> 'شما مجاز به تحریم کردن خودتان نمی باشید.',
	'CANNOT_DEACTIVATE_BOT'			=> 'شما مجاز به غیرفعال سازی حساب های bot نیستید. لطفاً آنرا غیرفعال کنید.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'نمی‌توانید حساب های صاحبان امتیاز سایت را غیرفعال کنید.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'نمی‌توانید حساب خودتان را غیرفعال کنید.',
	'CANNOT_FORCE_REACT_BOT'		=> 'نمی‌توانید ربات ها را مجبور به فعال سازی مجدد حسابشان کنید،لطفاً برای فعال سازی آن‌ها به صفحه مربوطه ربات‌ها رجوع کنید.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'نمی‌توانید صاحبان امتیاز سایت را مجبور به فعال سازی مجدد حسابشان کنید.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'نمی‌توانید خودتان را مجبور به فعال سازی مجدد حسابتان کنید.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'نمی‌توانید حساب کاربران مهمان را حذف کنید.',
	'CANNOT_REMOVE_FOUNDER'			=> 'نمی‌توانید حساب مدیر کل انجمن را حذف کنید.',
	'CANNOT_REMOVE_YOURSELF'		=> 'نمی‌توانید حساب کاربری خودتان را حذف کنید.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'نمی‌توانید کاربران تحریم شده را به عنوان صاحب امتیاز سایت ترفیع رتبه دهید.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'برای ترفیع رتبه کاربر باید ابتدا حساب وی را فعال کنید.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'فقط هنگامی به مشخص کردن این گزینه نیاز هست که ایمیل کاربر را تغییر دهید',

	'DELETE_POSTS'			=> 'حذف پست‌ها',
	'DELETE_USER'			=> 'حذف کاربر',
	'DELETE_USER_EXPLAIN'	=> 'لطفاً توجه داشته باشید که حذف کاربر غیرقابل برگشت می باشد.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'با موفقیت مجبور به فعال سازی مجدد شد.',
	'FOUNDER'						=> 'صاحب امتیاز',
	'FOUNDER_EXPLAIN'				=> 'صاحبان امتیاز سطوح دسترسی مدیریت را دارا می باشند و نمی توان آن‌ها را حذف و تحریم کرد و یا هشدار داد.',

	'GROUP_APPROVE'					=> 'تأیید کاربر',
	'GROUP_DEFAULT'					=> 'انتخاب گروه پیش‌فرض برای کاربر',
	'GROUP_DELETE'					=> 'حذف کاربر از گروه',
	'GROUP_DEMOTE'					=> 'تنزیل رتبه ی رهبر گروه',
	'GROUP_PROMOTE'					=> 'ترفیع رتبه به رهبر گروه',

	'IP_WHOIS_FOR'			=> 'IP whois برای %s',

	'LAST_ACTIVE'			=> 'آخرین فعالیت',

	'MOVE_POSTS_EXPLAIN'	=> 'لطفاً انجمنی را انتخاب کنید که می خواهید پست‌های کاربر را از آن انتقال دهید.',

	'NO_SPECIAL_RANK'		=> 'رتبه مخصوصی مشخص نشده است',
	'NO_WARNINGS'			=> 'بدون هشدار',
	'NOT_MANAGE_FOUNDER'	=> 'نمی‌توانید حساب صاحب امتیاز سایت را مدیریت کنید،فقط صاحبان امتیاز سایت می توانند اینگونه حساب ها را مدیریت کنند.',

	'QUICK_TOOLS'			=> 'ابزار سریع',

	'REGISTERED'			=> 'عضو شده',
	'REGISTERED_IP'			=> 'عضو شده با IP',
	'RETAIN_POSTS'			=> 'نگه داشتن پست‌ها',

	'SELECT_FORM'			=> 'انتخاب فرم',
	'SELECT_USER'			=> 'انتخاب کاربر',

	'USER_ADMIN'					=> 'مدیریت کاربر',
	'USER_ADMIN_ACTIVATE'			=> 'فعال سازی حساب',
	'USER_ADMIN_ACTIVATED'			=> 'کاربر با موفقیت فعال شد.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'با موفقیت آواتار از حساب کاربران حذف شد.',
	'USER_ADMIN_BAN_EMAIL'			=> 'تحریم توسط ایمیل',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'آدرس ایمیل از مدیریت کاربران تحریم شد',
	'USER_ADMIN_BAN_IP'				=> 'تحریم توسط IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP از مدیریت کاربران تحریم شد.',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'نام کاربری از مدیریت کاربران تحریم شد.',
	'USER_ADMIN_BAN_USER'			=> 'تحریم به وسیله نام کاربری',

	'USER_ADMIN_DEACTIVATE'			=> 'غیرفعال سازی حساب',
	'USER_ADMIN_DEACTIVED'			=> 'حساب کاربر با موفقیت غیرفعال شد',
	'USER_ADMIN_DEL_ATTACH'			=> 'حدف همه پیوست‌ها',
	'USER_ADMIN_DEL_AVATAR'			=> 'حذف آواتار',
	'USER_ADMIN_DEL_OUTBOX'			=> 'خالی کردن صندوق خروجی پیام خصوصی',
	'USER_ADMIN_DEL_POSTS'			=> 'حذف همه پست‌ها',
	'USER_ADMIN_DEL_SIG'			=> 'حذف امضا',
	'USER_ADMIN_EXPLAIN'			=> 'در این بخش می‌توانید اطلاعات کاربر را تغییر دهید و حساب وی را مدیریت کنید.',
	'USER_ADMIN_FORCE'				=> 'اجبار به فعال سازی مجدد',
	'USER_ADMIN_LEAVE_NR'			=> 'حذف از کاربران به تازگی عضو شده',
	'USER_ADMIN_MOVE_POSTS'			=> 'انتقال همه پست‌ها',
	'USER_ADMIN_SIG_REMOVED'		=> 'با موفقیت امضای کاربر از حساب وی حذف شد.',

	'USER_ATTACHMENTS_REMOVED'		=> 'با مئفقیت همه پیوست‌های این کاربر حذف شد.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'آواتار قابل نمایش نیست زیرا ویژگی آواتار غیرفعال شده است.',
	'USER_AVATAR_UPDATED'			=> 'با موفقیت جزئیات آواتار کاربر به‌روز رسانی شد.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'آواتار کنونی قابل نمایش نیست زیرا فرمت آن مجاز نمی باشد.',

	'USER_CUSTOM_PROFILE_FIELDS'	=> 'فیلد های سفارشی نمایه',
	'USER_DELETED'					=> 'کاربر با موفقیت حذف شد.',

	'USER_GROUP_ADD'				=> 'اضافه کردن کاربر به گروه',
	'USER_GROUP_NORMAL'				=> 'کاربر عضوی از گروه می باشد',
	'USER_GROUP_PENDING'			=> 'کاربر در حال انتظار برای عضویت در گروه است.',
	'USER_GROUP_SPECIAL'			=> 'کاربر عضو گروه از پیش مشخص شده می باشد.',

	'USER_LIFTED_NR'				=> 'حالت "کاربر به تازگی عضو شده" از کاربر حذف شد.',
	'USER_NO_ATTACHMENTS'			=> 'فایل پیوستی برای نمایش وجود ندارد.',
	'USER_NO_POSTS_TO_DELETE'		=> 'کاربر پستی برای حذف شدن ندارد.',
	'USER_OUTBOX_EMPTIED'			=> 'با موفقیت صندوق خروجی پیام‌های خصوصی کاربر خالی شد.',
	'USER_OUTBOX_EMPTY'				=> 'صندوق خروجی پیام خصوصی کاربر در حال حاضر خالی می باشد.',
	'USER_OVERVIEW_UPDATED'			=> 'جزئیات کاربر به‌روز رسانی شد.',
	'USER_POSTS_DELETED'			=> 'با موفقیت تمامی پست‌های کاربر حذف شد.',
	'USER_POSTS_MOVED'				=> 'با موفقیت پست‌های کاربر به انجمن مقصد منتقل شد.',
	'USER_PREFS_UPDATED'			=> 'ویژگی های کاربر به‌روز رسانی شد.',
	'USER_PROFILE'					=> 'نمایه کاربر',
	'USER_PROFILE_UPDATED'			=> 'نمایه کاربر به‌روز رسانی شد.',
	'USER_RANK'						=> 'رتبه کاربر',
	'USER_RANK_UPDATED'				=> 'رتبه کاربر به‌روز رسانی شد.',
	'USER_SIG_UPDATED'				=> 'امضای کاربر با موفقیت به‌روز رسانی شد.',
	'USER_WARNING_LOG_DELETED'		=> 'اطلاعاتی در دسترس نیست،ممکن است رویداد ها حذف شده باشند.',
	'USER_TOOLS'					=> 'ابزار پایه',
));
