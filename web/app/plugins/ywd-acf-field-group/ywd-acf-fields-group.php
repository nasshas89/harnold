<?php

/**
 * Plugin Name: YesWeDev ACF FieldsGroup
 */

use App\Controllers\ArchiveBlog;
use YwdAcfFieldsGroup\FieldsGroup\{ARCHIVE_blog,CPT_blog,PAGE_sample, OPTION_footer, OPTION_general,};

if (!function_exists('register_extended_field_group')) {
	return;
}

require dirname(__FILE__) . '/vendor/autoload.php';

// Init here FieldsGroup Class
PAGE_sample::init();
OPTION_general::init();
OPTION_footer::init();
CPT_blog::init();
ARCHIVE_blog::init();
