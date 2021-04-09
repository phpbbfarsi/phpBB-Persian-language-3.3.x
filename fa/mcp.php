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
	'ACTION'				=> 'عمل',
	'ACTION_NOTE'			=> 'عمل/یادداشت',
	'ADD_FEEDBACK'			=> 'افزودن بازخورد',
	'ADD_FEEDBACK_EXPLAIN'	=> 'اگر میخواهید برای این گزارشی را بنویسید، لطفا فرم زیر را تکمیل فرمایید. فقط از متن ساده استفاده کنید، استفاده از HTML،BBCode و ... مورد قبول نیست.',
	'ADD_WARNING'			=> 'هشدار دادن',
	'ADD_WARNING_EXPLAIN'	=> 'برای ارسال هشدار به این کاربر از فرم زیر استفاده کنید، فقط از متن ساده استفاده کنید، استفاده از HTML،BBCode و ... مورد قبول نیست.',
	'ALL_ENTRIES'			=> 'همه نوشته ها',
	'ALL_NOTES_DELETED'		=> 'همه یادداشت های کاربران با موفقیت حذف شد.',
	'ALL_REPORTS'			=> 'همه گزارش ها',
	'ALREADY_REPORTED'		=> 'این پست در حال حاضر گزارش داده شده است.',
	'ALREADY_REPORTED_PM'	=> 'این پیام خصوصی در حال حاضر گزارش داده شده است.',
	'ALREADY_WARNED'		=> 'هشداری در ارتباط با این پست ارسال شده است.',
	'APPROVE'				=> 'تأیید',
	'APPROVE_POST'			=> 'تأیید پست',
	'APPROVE_POST_CONFIRM'	=> 'آیا از تأیید این پست مطمئنید؟',
	'APPROVE_POSTS'			=> 'تأیید پست‌ها',
	'APPROVE_POSTS_CONFIRM'	=> 'آیا از تأیید پست‌های انتخاب شده مطمئنید؟',
	'APPROVE_TOPIC'			=> 'تأیید موضوع',
	'APPROVE_TOPIC_CONFIRM'	=> 'آیا از تأیید این موضوع مطمئنید؟',
	'APPROVE_TOPICS'		=> 'تأیید موضوعات',
	'APPROVE_TOPICS_CONFIRM'=> 'آیا از تأیید موضوعات مطمئنید؟',

	'CANNOT_MOVE_SAME_FORUM'=> 'شما  نمی‌توانید موضوع موجود در این انجمن را انتقال دهید.',
	'CANNOT_WARN_ANONYMOUS'	=> 'نمی‌توانید به کاربران مهمان که در تالار ثبت نام نکرده اند، هشدار بفرستید.',
	'CANNOT_WARN_SELF'		=> 'نمی‌توانید به خودتان هشدار بفرستید.',
	'CAN_LEAVE_BLANK'		=> 'می‌توانید این قسمت را خالی بگذارید.',
	'CHANGE_POSTER'			=> 'تغییر ارسال کننده',
	'CLOSE_PM_REPORT'		=> 'بستن گزارش پیام خصوصی',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'آیا از بستن گزارش پیام خصوصی انتخاب شده مطمئنید؟',
	'CLOSE_PM_REPORTS'		=> 'بستن گزارش های پیام خصوصی',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'آیا از بستن گزارش های پیام خصوصی انتخاب شده مطمئنید؟',
	'CLOSE_REPORT'			=> 'بستن گزارش',
	'CLOSE_REPORT_CONFIRM'	=> 'آیا از بستن گزارش انتخاب شده مطمئنید؟',
	'CLOSE_REPORTS'			=> 'بستن گزارش ها',
	'CLOSE_REPORTS_CONFIRM'	=> 'آیا از بستن گزارش های انتخاب شده مطمئنید؟',

	'DELETE_PM_REPORT'			=> 'حذف گزارش پیام خصوصی',
	'DELETE_PM_REPORT_CONFIRM'	=> 'آیا از حذف گزارش پیام خصوصی انتخاب شده مطمئنید؟',
	'DELETE_PM_REPORTS'			=> 'حذف گزارش های پیام خصوصی',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'آیا از حذف گزارش های پیام خصوصی مطمئنید؟',
	'DELETE_POSTS'				=> 'حذف پست‌ها',
	'DELETE_REPORT'				=> 'حذف گزارش',
	'DELETE_REPORT_CONFIRM'		=> 'آیا از حذف گزارش انتخاب شده مطمئنید؟',
	'DELETE_REPORTS'			=> 'حذف گزارش ها',
	'DELETE_REPORTS_CONFIRM'	=> 'آیا از حذف گزارش ها مطمئنید؟',
	'DELETE_SHADOW_TOPIC'		=> 'حذف سایه موضوع',
	'DELETE_TOPICS'				=> 'حذف موضوعات انتخاب شده',
	'DISAPPROVE'				=> 'عدم تأیید',
	'DISAPPROVE_REASON'			=> 'دلیل عدم تأیید',
	'DISAPPROVE_POST'			=> 'عدم تأیید پست',
	'DISAPPROVE_POST_CONFIRM'	=> 'آیا از تأیید نکردن پست مطمئنید؟',
	'DISAPPROVE_POSTS'			=> 'عدم تأیید پست‌ها',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'آیا از تأیید نکردن پست‌های انتخاب شده مطمئنید؟',
	'DISPLAY_LOG'				=> 'نمایش نوشته ها از آخر',
	'DISPLAY_OPTIONS'			=> 'نمایش گزینه‌ها',

	'EMPTY_REPORT'					=> 'وقتی که این دلیل را انتخاب کنید، باید توضیحاتی را برای آن ارائه دهید.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'توجه داشته باشید که چند موضوع به دلیل خالی بودن از پایگاه داده حذف شدند',

	'FEEDBACK'				=> 'بازخورد',
	'FORK'					=> 'کپی',
	'FORK_TOPIC'			=> 'کپی کردن موضوع',
	'FORK_TOPIC_CONFIRM'	=> 'آیا از کپی کردن این موضوع مطمئنید؟',
	'FORK_TOPICS'			=> 'کپی کردن موضوعات انتخاب شده',
	'FORK_TOPICS_CONFIRM'	=> 'آیا از کپی کردن موضوعات انتخاب شده مطمئنید؟',
	'FORUM_DESC'			=> 'توضیحات',
	'FORUM_NAME'			=> 'نام انجمن',
	'FORUM_NOT_EXIST'		=> 'انجمن انتخاب شده موجود نیست.',
	'FORUM_NOT_POSTABLE'	=> 'نمیتوان در انجمن انتخاب شده پستی ارسال کرد',
	'FORUM_STATUS'			=> 'وضعیت انجمن',
	'FORUM_STYLE'			=> 'قالب انجمن',

	'GLOBAL_ANNOUNCEMENT'	=> 'اطلاعیه سراسری',

	'IP_INFO'				=> 'اطلاعات آدرس آی‌پی',
	'IPS_POSTED_FROM'		=> 'آدرس های آی‌پی که این کاربر از آن‌ها پستی فرستاده است',

	'LATEST_LOGS'				=> '۵ رویداد اخیر',
	'LATEST_REPORTED'			=> '۵ گزارش اخیر',
	'LATEST_REPORTED_PMS'		=> '۵ گزارش پیام خصوصی اخیر',
	'LATEST_UNAPPROVED'			=> '۵ پست اخیری که منتظر تأیید هستند',
	'LATEST_WARNING_TIME'		=> '۵ هشداری که اخیرا دریافت شده اند',
	'LATEST_WARNINGS'			=> '۵ هشدار اخیر',
	'LEAVE_SHADOW'				=> 'ایجاد سایه موضوع در اینجا',
	'LIST_REPORTS'				=> array(
		1	=> '%d گزارش',
		2	=> '%d گزارش',
	),
	'LOCK'						=> 'قفل',
	'LOCK_POST_POST'			=> 'قفل کردن پست',
	'LOCK_POST_POST_CONFIRM'	=> 'آیا از جلوگیری کردن ویرایش این پست مطمئنید؟',
	'LOCK_POST_POSTS'			=> 'قفل کردن پست‌های انتخاب شده',
	'LOCK_POST_POSTS_CONFIRM'	=> 'آیا از جلوگیری ویرایش همه پست‌های انتخاب شده مطمئنید؟',
	'LOCK_TOPIC_CONFIRM'		=> 'آیا از قفل کردن این موضوع مطمئنید؟',
	'LOCK_TOPICS'				=> 'قفل کردن موضوعات انتخاب شده',
	'LOCK_TOPICS_CONFIRM'		=> 'آیا از قفل کردن همه موضوعات انتخاب شده مطمئنید؟',
	'LOGS_CURRENT_TOPIC'		=> 'رویداد هایی که هم اکنون نمایش داده میشوند :',
	'LOGIN_EXPLAIN_MCP'			=> 'برای مدیریت این انجمن، ابتدا باید وارد شوید.',
	'LOGVIEW_VIEWPOST'			=> 'مشاهده پست',
	'LOGVIEW_VIEWTOPIC'			=> 'مشاهده موضوع',
	'LOGVIEW_VIEWLOGS'			=> 'مشاهده رویداد های موضوع',
	'LOGVIEW_VIEWFORUM'			=> 'مشاهده انجمن',
	'LOOKUP_ALL'				=> 'بررسی همه آی‌پی ها',
	'LOOKUP_IP'					=> 'بررسی آی‌پی',

	'MARKED_NOTES_DELETED'		=> 'یادداشت های کاربران انتخاب شده، با موفقیت حذف شد.',

	'MCP_ADD'					=> 'اضافه کردن هشدار',

	'MCP_BAN'					=> 'تحریم',
	'MCP_BAN_EMAILS'			=> 'تحریم ایمیل ها',
	'MCP_BAN_IPS'				=> 'تحریم آی‌پی',
	'MCP_BAN_USERNAMES'			=> 'تحریم نام های کاربری',

	'MCP_LOGS'						=> 'رویداد های مدیر انجمن',
	'MCP_LOGS_FRONT'				=> 'صفحه اصلی',
	'MCP_LOGS_FORUM_VIEW'			=> 'رویداد های انجمن',
	'MCP_LOGS_TOPIC_VIEW'			=> 'رویدادهای موضوع',

	'MCP_MAIN'						=> 'اصلی',
	'MCP_MAIN_FORUM_VIEW'			=> 'مشاهده انجمن',
	'MCP_MAIN_FRONT'				=> 'صفحه اصلی',
	'MCP_MAIN_POST_DETAILS'			=> 'جزئیات پست',
	'MCP_MAIN_TOPIC_VIEW'			=> 'مشاهده موضوع',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'تغییر دادن به "اطلاعیه"',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'آیا از تبدیل این موضوع به "اطلاعیه" مطمئنید؟',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'تغییر دادن به "اطلاعیه‌ها"',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'آیا از تبدیل موضوعات به "اطلاعیه‌ها" مطمئنید؟',
	'MCP_MAKE_GLOBAL'				=> 'تبدیل به "اطلاعیه سراسری"',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'آیا از تبدیل این موضوع به "اطلاعیه سراسری" مطمئنید؟',
	'MCP_MAKE_GLOBALS'				=> 'تبدیل به "اطلاعیه‌های سراسری"',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'آیا از تبدیل موضوعات انتخاب شده به "اطلاعیه‌های سراسری" مطمئنید؟',
	'MCP_MAKE_STICKY'				=> '"سنجاق" کردن',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'آیا از "سنجاق" کردن موضوع مطمئنید؟',
	'MCP_MAKE_STICKIES'				=> '"سنجاق" کردن',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'آیا از "سنجاق" کردن موضوعات مطمئنید؟',
	'MCP_MAKE_NORMAL'				=> 'تبدیل به "موضوع استاندارد"',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'آیا از تغییر این موضوع به "موضوع استاندارد" مطمئنید؟',
	'MCP_MAKE_NORMALS'				=> 'تبدیل به "موضوعات استاندارد"',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'آیا از تغییر دادن موضوعات انتخاب شده به "موضوعات استاندارد" مطمئنید؟',

	'MCP_NOTES'						=> 'یادداشت های کاربر',
	'MCP_NOTES_FRONT'				=> 'صفحه اصلی',
	'MCP_NOTES_USER'				=> 'جزئیات کاربر',

	'MCP_POST_REPORTS'				=> 'گزارش های منتشر شده در این پست',

	'MCP_PM_REPORTS'				=> 'پیام‌های خصوصی گزارش شده',
	'MCP_PM_REPORT_DETAILS'			=> 'جزئیات پیام‌های خصوصی گزارش شده',
	'MCP_PM_REPORTS_CLOSED'			=> 'گزارش پیام‌های خصوصی بسته',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'این لیستی از همه پیام‌های خصوصی گزارش شده می‌باشد، که مسائل مربوط به آن‌ها حل شده است.',
	'MCP_PM_REPORTS_OPEN'			=> 'گزارش پیام‌های خصوصی باز',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'این لیستی از همه پیام‌های خصوصی گزارش شده می‌باشد، که مسائل مربوط به آن‌ها حل نشده است.',

	'MCP_REPORTS'					=> 'پیام‌های گزارش شده',
	'MCP_REPORT_DETAILS'			=> 'جزئیات گزارش',
	'MCP_REPORTS_CLOSED'			=> 'گزارش های بسته',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'این لیستی از همه گزارش هایی می‌باشد که اخیرا حل شده اند.',
	'MCP_REPORTS_OPEN'				=> 'گزارش های باز',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'این لیستی از همه گزارش هایی می‌باشد که هنوز حل نشده اند.',

	'MCP_QUEUE'								=> 'لیست انتظار',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'جزئیات تأیید',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'پست‌های در انتظار تأیید',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'این لیستی از پست‌هایی می‌باشد که منتظر تأیید شدن هستند تا به کاربران نمایش داده شوند.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'موضوعات در انتظار تأیید',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'این لیستی از موضوعات می‌باشد که منتظر تأیید شدن هستند تا به کاربران نمایش داده شوند.',
	'MCP_QUEUE_DELETED_POSTS'				=> 'پست‌های حذف شده',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> 'این لیستی از پست‌ها حذف شده موقت است، که می‌توانید آن‌ها را بازیابی کنید یا برای همیشه حذف کنید.',
	'MCP_QUEUE_DELETED_TOPICS'				=> 'موضوعات حذف شده',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> 'این لیستی از موضوعات حذف شده موقت است، که می‌توانید آن‌ها را بازیابی کنید یا برای همیشه حذف کنید.',

	'MCP_VIEW_USER'			=> 'مشاهده هشدار ها برای کاربر مشخص',

	'MCP_WARN'				=> 'هشدار ها',
	'MCP_WARN_FRONT'		=> 'صفحه اصلی',
	'MCP_WARN_LIST'			=> 'لیست هشدار ها',
	'MCP_WARN_POST'			=> 'ارسال هشدار برای پستی مشخص',
	'MCP_WARN_USER'			=> 'ارسال هشدار به کاربر',

	'MERGE_POSTS_CONFIRM'	=> 'آیا از ادغام پست‌های انتخاب شده مطمئنید؟',
	'MERGE_TOPIC_EXPLAIN'	=> 'با استفاده از فرم زیر می‌توانید پست‌های انتخاب شده را در موضوعی دیگر ادغام کنید. توجه داشته باشید که این پست‌ها بازسازی نخواهند شد و کاربران پست‌های خودشان را در موضوعی جدید خواهند دید.<br />لطفا ID موضوع مقصد را وارد کنید و یا با کلیک بر روی "انتخاب موضوع" موضوعی را جست‌وجو کنید.',
	'MERGE_TOPIC_ID'		=> 'ID موضوع مقصد',
	'MERGE_TOPICS'			=> 'ادغام موضوعات',
	'MERGE_TOPICS_CONFIRM'	=> 'آیا از ادغام موضوعات انتخاب شده مطمئنید؟',
	'MODERATE_FORUM'		=> 'مدیریت انجمن',
	'MODERATE_TOPIC'		=> 'مدیریت موضوع',
	'MODERATE_POST'			=> 'مدیریت پست',
	'MOD_OPTIONS'			=> 'مدیریت گزینه‌ها',
	'MORE_INFO'				=> 'اطلاعات بیشتر',
	'MOST_WARNINGS'			=> 'کاربران دریافت کننده بیشترین هشدار',
	'MOVE_TOPIC_CONFIRM'	=> 'آیا از انتفال موضوع به انجمنی جدید مطمئنید؟',
	'MOVE_TOPICS'			=> 'انتقال موضوعات انتخاب شده',
	'MOVE_TOPICS_CONFIRM'	=> 'آیا از انتقال موضوعات انتخاب شده به انجمن‌های جدید مطمئنید؟',

	'NOTIFY_POSTER_APPROVAL'		=> 'آیا ارسال کننده درباره تأیید خبردار بشود؟',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'آیا ارسال کننده از عدم تأیید خبردار بشود؟',
	'NOTIFY_USER_WARN'				=> 'آیا کاربر از ارسال هشدار به او خبردار بشود؟',
	'NOT_MODERATOR'					=> 'شما مدیر این انجمن نیستید.',
	'NO_DESTINATION_FORUM'			=> 'لطفا انجمن مقصد را انتخاب کنید.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'هیچ انجمن مقصدی در دسترس نیست.',
	'NO_ENTRIES'					=> 'هیچ رویدادی ثبت نشده است.',
	'NO_FEEDBACK'					=> 'بازخوردی برای این کاربر وجود ندارد.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'باید انجمن مقصدی را برای ادغام پست‌ها وارد کنید.',
	'NO_MATCHES_FOUND'				=> 'جست‌وجو بی نتیجه بود.',
	'NO_POST'						=> 'شما باید یک پست را انتخاب کنید تا به نویسنده آن پست هشدار دهید.',
	'NO_POST_REPORT'				=> 'این پست گزارش نشده است.',
	'NO_POST_SELECTED'				=> 'برای انجام فرآیند باید حداقل یک پست را انتخاب کنید.',
	'NO_POSTS_DELETED'				=> 'پست حذف شده ای وجود ندارد.',
	'NO_POSTS_QUEUE'				=> 'پستی جهت تأیید وجود ندارد.',
	'NO_REASON_DISAPPROVAL'			=> 'لطفا دلیل مناسبی را برای عدم تأیید وارد کنید.',
	'NO_REPORT'						=> 'گزارشی یافت نشد',
	'NO_REPORTS'					=> 'گزارشی یافت نشد',
	'NO_REPORT_SELECTED'			=> 'برای انجام این فرآیند باید حداقل یک گزارش را انتخاب کنید.',
	'NO_TOPIC_ICON'					=> 'هیچ کدام',
	'NO_TOPIC_SELECTED'				=> 'برای انجام این فرآیند باید حداقل یک موضوع را انتخاب کنید.',
	'NO_TOPICS_DELETED'				=> 'موضوع حذف شده ای وجود ندارد.',
	'NO_TOPICS_QUEUE'				=> 'موضوعی منتظر تأیید نیست.',

	'ONLY_TOPIC'			=> 'فقط موضوع “%s”',
	'OTHER_USERS'			=> 'سایر کاربرانی که از این آی‌پی استفاده میکنند.',

	'QUICKMOD_ACTION_NOT_ALLOWED' => "%s به عنوان ابزار سریع مجاز نیست.",

	'PM_REPORT_CLOSED_SUCCESS'	=> 'گزارش پیام خصوصی انتخاب شده با موفقیت بسته شد.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'گزارش پیام خصوصی انتخاب شده با موفقیت حذف نشد.',
	'PM_REPORTED_SUCCESS'		=> 'این پیام خصوصی با موفقیت گزارش داده شد.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'گزارش های پیام‌های خصوصی انتخاب شده با موفقیت بسته شدند.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'گزارش های پیام‌های خصوصی با موفقیت حذف شدند.',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'هیچ گزارش پیام خصوصی وجود ندارد.',
		1	=> 'درکل <strong>1</strong> گزارش پیام خصوصی وجود دارد.',
		2	=> 'درکل <strong>%d</strong> گزارش پیام خصوصی وجود دارد.',
	),
	'PM_REPORT_DETAILS'			=> 'جزئیات گزارش پیام خصوصی',
	'POSTER'					=> 'ارسال کننده',
	'POSTS_APPROVED_SUCCESS'	=> 'پست‌های انتخاب شده تأیید شدند.',
	'POSTS_DELETED_SUCCESS'		=> 'پست‌های انتخاب شده با موفقیت از پایگاه داده حذف شدند.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'پست‌های انتخاب شده تأیید نشدند.',
	'POSTS_LOCKED_SUCCESS'		=> 'پست‌های انتخاب شده با موفقیت قفل شدند.',
	'POSTS_MERGED_SUCCESS'		=> 'پست‌های انتخاب شده با موفقیت ادغام شدند.',
	'POSTS_PER_PAGE'			=> 'پست‌ها در هر صفحه',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(.برای دیدن همه پست‌ها 0 را وارد کنید)',
	'POSTS_RESTORED_SUCCESS'	=> 'پست‌های انتخاب شده با موفقیت بازیابی شدند.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'قفل پست‌های انتخاب شده با موفقیت باز شدند.',
	'POST_APPROVED_SUCCESS'		=> 'پست انتخاب شده تأیید شد.',
	'POST_DELETED_SUCCESS'		=> 'پست انتخاب شده با موفقیت از پایگاه داده حذف شد.',
	'POST_DISAPPROVED_SUCCESS'	=> 'پست انتخاب شده تأیید نشد.',
	'POST_LOCKED_SUCCESS'		=> 'پست با موفقیت قفل شد.',
	'POST_NOT_EXIST'			=> 'پست درخواست شده موجود نیست.',
	'POST_REPORTED_SUCCESS'		=> 'این پست با موفقیت گزارش داده شد.',
	'POST_RESTORED_SUCCESS'		=> 'این پست با موفقیت بازیابی شد.',
	'POST_UNLOCKED_SUCCESS'		=> 'قفل پست با موفقیت باز شد.',

	'READ_USERNOTES'			=> 'یادداشت های کاربر',
	'READ_WARNINGS'				=> 'هشدار های کاربر',
	'REPORTER'					=> 'گزارش دهنده',
	'REPORTED'					=> 'گزارش شده',
	'REPORTED_BY'				=> 'گزارش شده توسط',
	'REPORTED_ON_DATE'			=> 'در',
	'REPORTS_CLOSED_SUCCESS'	=> 'گزارش های انتخاب شده با موفقیت بسته شدند.',
	'REPORTS_DELETED_SUCCESS'	=> 'گزارش های انتخاب شده با موفقیت حذف شده اند.',
	'REPORTS_TOTAL'				=> array(
		0	=> 'هیچ گزارشی برای بررسی موجود نیست.',
		1	=> 'درکل <strong>1</strong> گزارش برای بررسی موجود است',
		2	=> 'درکل <strong>%d</strong> گزارش برای بررسی موجود است',
	),
	'REPORT_CLOSED'				=> 'گزارش مورد نظر قبلا بسته شده بود.',
	'REPORT_CLOSED_SUCCESS'	=> 'گزارش های انتخاب شده با موفقیت بسته شدند.',
	'REPORT_DELETED_SUCCESS'	=> 'گزارش های انتخاب شده با موفقیت حذف شده اند.',
	'REPORT_DETAILS'			=> 'جزئیات گزارش',
	'REPORT_MESSAGE'			=> 'گزارش این پیام',
	'REPORT_MESSAGE_EXPLAIN'	=> 'برای گزارش پیام خصوصی انتخاب شده از این فرم استفاده کنید. پیامی خصوصی را هنگامی که حاوی مطالب مغایر با قوانین تالار بود،گزارش دهید. <strong>زیرا محتوای آن برای تمامی مدیران قابل نمایش خواهد بود.</strong>',
	'REPORT_NOTIFY'				=> 'به من خبر بده',
	'REPORT_NOTIFY_EXPLAIN'		=> 'هنگامی که گزارش شما بررسی شد،به شما خبر داده خواهد شد.',
	'REPORT_POST_EXPLAIN'		=> 'از این فرم برای گزارش پست‌ها به مدیران تالار و مدیران انجمن استفاده کنید. پست‌ها را هنگامی که حاوی مطالب مغایر با قونین تالار بود،گزارش دهید.',
	'REPORT_REASON'				=> 'دلایل گزارش',
	'REPORT_TIME'				=> 'تاریخ گزارش',
	'RESTORE'					=> 'بازیابی',
	'RESTORE_POST'				=> 'بازیابی پست',
	'RESTORE_POST_CONFIRM'		=> 'آیا از بازیابی این پست مطمئنید؟',
	'RESTORE_POSTS'				=> 'بازیابی پست‌ها',
	'RESTORE_POSTS_CONFIRM'		=> 'آیا از بازیابی پست‌های انتخاب شده مطمئنید؟',
	'RESTORE_TOPIC'				=> 'بازیابی موضوع',
	'RESTORE_TOPIC_CONFIRM'		=> 'آیا از بازیابی این موضوع مطمئنید؟',
	'RESTORE_TOPICS'			=> 'بازیابی موضوعات',
	'RESTORE_TOPICS_CONFIRM'	=> 'آیا از بازیابی موضوعات انتخاب شده مطمئنید؟',
	'RESYNC'					=> 'همگام سازی',
	'RETURN_MESSAGE'			=> '%sبازگشت به پیام%s',
	'RETURN_NEW_FORUM'			=> '%sبه انجمن جدید برو%s',
	'RETURN_NEW_TOPIC'			=> '%sبه موضوع جدید برو%s',
	'RETURN_PM'					=> '%sبازگشت به پیام خصوصی%s',
	'RETURN_POST'				=> '%sبازگشت به پست%s',
	'RETURN_QUEUE'				=> '%sبازگشت به صف%s',
	'RETURN_REPORTS'			=> '%sبازگشت به گزارش ها%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sبازگشت به موضوع%s',


	'SEARCH_POSTS_BY_USER'				=> 'جست‌وجوی پست‌ها بر اساس',
	'SELECT_ACTION'						=> 'انتخاب عملیات مورد نظر',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'لطفا انجمنی را که میخواهید این پیام سراسری در آن نمایش داده شود را انتخاب کنید.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'یک یا چند موضوع انتخاب شده،اطلاعیه سراسری هستند.لطفا انجمنی را که میخواهید این اطلاعیه سراسری نمایش داده شود،انتخاب کنید.',
	'SELECT_MERGE'						=> 'انتخاب برای ادغام',
	'SELECT_TOPICS_FROM'				=> 'انتخاب موضوعات از',
	'SELECT_TOPIC'						=> 'انتخاب موضوع',
	'SELECT_USER'						=> 'انتخاب کاربر',
	'SORT_ACTION'						=> 'رویداد عملیات ها',
	'SORT_DATE'							=> 'تاریخ',
	'SORT_IP'							=> 'آدرس آی‌پی',
	'SORT_WARNINGS'						=> 'هشدار ها',
	'SPLIT_AFTER'						=> 'تقسیم موضوع از پست انتخاب شده به بعد',
	'SPLIT_FORUM'						=> 'انجمن برای موضوع جدید',
	'SPLIT_POSTS'						=> 'تقسیم پست‌های انتخاب شده',
	'SPLIT_SUBJECT'						=> 'عنوان موضوع جدید',
	'SPLIT_TOPIC_ALL'					=> 'تقسیم موضوع از پسن انتخاب شده',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'آیا از تقسیم این موضوع مطمئنید؟',
	'SPLIT_TOPIC_BEYOND'				=> 'تقسیم موضوع در پست انتخاب شده',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'آیا از تقسیم این تاپیک با پست‌های انتخاب شده مطمئنید؟',
	'SPLIT_TOPIC_EXPLAIN'				=> 'با استفاده از فرم زیر می‌توانید موضوع را تقسیم کنید.',

	'THIS_PM_IP'				=> 'آی‌پی این پیام خصوصی',
	'THIS_POST_IP'				=> 'آی‌پی این پست',
	'TOPICS_APPROVED_SUCCESS'	=> 'موضوعات انتخاب شده تأیید شدند.',
	'TOPICS_DELETED_SUCCESS'	=> 'موضوعات انتخاب شده با موفقیت از پایگاه داده حذف شدند.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'موضوعات انتخاب شده تأیید نشدند.',
	'TOPICS_FORKED_SUCCESS'		=> 'موضوعات انتخاب شده با موفقیت کپی شدند.',
	'TOPICS_LOCKED_SUCCESS'		=> 'موضوعات انتخاب شده با موفقیت قفل شدند.',
	'TOPICS_MOVED_SUCCESS'		=> 'موضوعات انتخاب شده با موفقیت منتقل شدند.',
	'TOPICS_RESTORED_SUCCESS'	=> 'موضوعات انتخاب شده با موفقیت بازیابی شدند.',
	'TOPICS_RESYNC_SUCCESS'		=> 'موضوعات انتخاب شده همگام سازی مجدد شدند.',
	'TOPICS_TYPE_CHANGED'		=> 'نوع موضوعات با موفقیت تغییر یافتند.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'قفل موضوعات انتخاب شده با موفقیت باز شدند.',
	'TOPIC_APPROVED_SUCCESS'	=> 'موضوع انتخاب شده تأیید شد.',
	'TOPIC_DELETED_SUCCESS'		=> 'موضوع انتخاب شده با موفقیت از پایگاه داده حذف شد.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'موضوع انتخاب شده تأیید نشد.',
	'TOPIC_FORKED_SUCCESS'		=> 'موضوع انتخاب شده با موفقیت کپی شد.',
	'TOPIC_LOCKED_SUCCESS'		=> 'موضوع انتخاب شده قفل شد.',
	'TOPIC_MOVED_SUCCESS'		=> 'موضوع انتخاب شده با موفقیت انتقال داده شد.',
	'TOPIC_NOT_EXIST'			=> 'موضوع انتخاب شده موجود نیست.',
	'TOPIC_RESTORED_SUCCESS'	=> 'موضوع انتخاب شده با موفقیت بازیابی شد.',
	'TOPIC_RESYNC_SUCCESS'		=> 'موضوع انتخاب شده همگام سازی مجدد شد.',
	'TOPIC_SPLIT_SUCCESS'		=> 'موضوع انتخاب شده با موفقیت تقسیم شد.',
	'TOPIC_TIME'				=> 'تاریخ موضوع',
	'TOPIC_TYPE_CHANGED'		=> 'نوع موضوع با موفقیت تغییر یافت.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'قفل موضوع انتخاب شده با موفقیت باز شد.',
	'TOTAL_WARNINGS'			=> 'مجموع هشدار ها',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'هیچ پستی برای تأیید شدن وجود ندارد.',
		1	=> 'درمجموع <strong>1</strong> پست منتظر تأیید شدن هستند.',
		2	=> 'درمجموع <strong>%d</strong> پست منتظر تأیید شدن هستند.',
	),
	'UNLOCK'						=> 'باز کردن قفل',
	'UNLOCK_POST'					=> 'باز کردن قفل پست',
	'UNLOCK_POST_EXPLAIN'			=> 'اجازه ویرایش',
	'UNLOCK_POST_POST'				=> 'باز کردن قفل پست',
	'UNLOCK_POST_POST_CONFIRM'		=> 'آیا از اعطای اجازه‌ ویرایش این پست مطمئنید؟',
	'UNLOCK_POST_POSTS'				=> 'باز کردن قفل پست‌های انتخاب شده',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'آیا از اعطا اجازه ویرایش پست‌های انتخاب شده مطمئنید؟',
	'UNLOCK_TOPIC'					=> 'باز کردن قفل موضوع',
	'UNLOCK_TOPIC_CONFIRM'			=> 'آیا از باز کردن قفل این موضوع مطمئنید؟',
	'UNLOCK_TOPICS'					=> 'باز کردن قفل موضوعات انتخاب شده.',
	'UNLOCK_TOPICS_CONFIRM'			=> 'آیا از باز کردن قفل موضوعات انتخاب شده مطمئنید؟',
	'USER_CANNOT_POST'				=> 'در این انجمن نمی‌توانید پستی را ارسال کنید.',
	'USER_CANNOT_REPORT'			=> 'در این انجمن نمی‌توانید پستی را گزارش دهید.',
	'USER_FEEDBACK_ADDED'			=> 'بازخورد کاربر با موفقیت اضافه شد.',
	'USER_WARNING_ADDED'			=> 'با موفقیت به کاربر هشدار داده شد.',

	'VIEW_DETAILS'			=> 'مشاهده جزئیات',
	'VIEW_PM'				=> 'مشاهده پیام خصوصی',
	'VIEW_POST'				=> 'مشاهده پست',

	'WARNED_USERS'			=> 'کاربران هشدار داده شده',
	'WARNED_USERS_EXPLAIN'	=> 'لیست کاربرانی که هشداری بدون تاریخ انقضا دریافت کرده اند',
	'WARNING_PM_BODY'		=> 'این هشداری است که از جانب مدیران انجمن و یا مدیر تالار برای شما ارسال شده است.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'هشدار از جانب تالار',
	'WARNING_POST_DEFAULT'	=> 'این هشدار به خاطر  این پست شما ارسال شده است : %s .',
	'NO_WARNINGS'	=> 'هشداری موجود نیست.',

	'YOU_SELECTED_TOPIC'	=> 'موضوع شماره %d را انتخاب کرده اید : %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'عدم رعایت کپی رایت',
			'SPAM'		=> 'هرزنامه',
			'OFF_TOPIC'	=> 'خارج از موضوع',
			'OTHER'		=> 'دیگر',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'نوشته هایی که به برنامه های غیرقانونی و یا کرک شده لینک دارند.',
			'SPAM'		=> 'نوشته هایی که فقط هدف تبلیغ وبسایت و یا سایر محصولات را دارند',
			'OFF_TOPIC'	=> 'نوشته هایی که خارج از موضوع باشند.',
			'OTHER'		=> 'نوشته هایی که به هیچ یک از موارد بالا مربوط نمیشوند (جزئیات را در فیلد مربوطه وارد کنید).',
		),
	),
));
