<?php

/**
 * Plugin Name: YesWeDev ACF FieldsGroup
 */

use App\Controllers\ArchiveBlog;
use YwdAcfFieldsGroup\FieldsGroup\{ARCHIVE_advice, ARCHIVE_blog, ARCHIVE_centers, ARCHIVE_formation, ARCHIVE_job, ARCHIVE_prestation, CPT_advice, CPT_blog, CPT_centers, CPT_formation, CPT_job, CPT_partenaires, CPT_sessions, PAGE_sample, CPT_trust, CPT_testimony, OPTION_footer, OPTION_general, TAXONOMIE_formation};

if (!function_exists('register_extended_field_group')) {
	return;
}

require dirname(__FILE__) . '/vendor/autoload.php';

// Init here FieldsGroup Class
PAGE_sample::init();
OPTION_general::init();
OPTION_footer::init();
CPT_partenaires::init();
CPT_trust::init();
CPT_testimony::init();
CPT_sessions::init();
CPT_blog::init();
ARCHIVE_blog::init();
ARCHIVE_job::init();
CPT_job::init();
ARCHIVE_prestation::init();
ARCHIVE_advice::init();
CPT_advice::init();
ARCHIVE_formation::init();
ARCHIVE_centers::init();
CPT_formation::init();
TAXONOMIE_formation::init();
CPT_centers::init();
