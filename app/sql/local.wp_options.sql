/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;
/*!40103 SET TIME_ZONE='+00:00' */;
INSERT INTO `wp_options` VALUES
(1,"siteurl","http://wpplugindev.local","yes"),
(2,"home","http://wpplugindev.local","yes"),
(3,"blogname","wpplugindev","yes"),
(4,"blogdescription","Just another WordPress site","yes"),
(5,"users_can_register","0","yes"),
(6,"admin_email","dev-email@flywheel.local","yes"),
(7,"start_of_week","1","yes"),
(8,"use_balanceTags","0","yes"),
(9,"use_smilies","1","yes"),
(10,"require_name_email","1","yes"),
(11,"comments_notify","1","yes"),
(12,"posts_per_rss","10","yes"),
(13,"rss_use_excerpt","0","yes"),
(14,"mailserver_url","mail.example.com","yes"),
(15,"mailserver_login","login@example.com","yes"),
(16,"mailserver_pass","password","yes"),
(17,"mailserver_port","110","yes"),
(18,"default_category","1","yes"),
(19,"default_comment_status","open","yes"),
(20,"default_ping_status","open","yes"),
(21,"default_pingback_flag","1","yes"),
(22,"posts_per_page","10","yes"),
(23,"date_format","F j, Y","yes"),
(24,"time_format","g:i a","yes"),
(25,"links_updated_date_format","F j, Y g:i a","yes"),
(26,"comment_moderation","0","yes"),
(27,"moderation_notify","1","yes"),
(28,"permalink_structure","/%postname%/","yes"),
(29,"rewrite_rules","a:104:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:32:\"book/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:42:\"book/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:62:\"book/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:57:\"book/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:57:\"book/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:38:\"book/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:21:\"book/([^/]+)/embed/?$\";s:37:\"index.php?book=$matches[1]&embed=true\";s:25:\"book/([^/]+)/trackback/?$\";s:31:\"index.php?book=$matches[1]&tb=1\";s:33:\"book/([^/]+)/page/?([0-9]{1,})/?$\";s:44:\"index.php?book=$matches[1]&paged=$matches[2]\";s:40:\"book/([^/]+)/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?book=$matches[1]&cpage=$matches[2]\";s:29:\"book/([^/]+)(?:/([0-9]+))?/?$\";s:43:\"index.php?book=$matches[1]&page=$matches[2]\";s:21:\"book/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:31:\"book/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:51:\"book/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:46:\"book/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:46:\"book/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:27:\"book/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:12:\"robots\\.txt$\";s:18:\"index.php?robots=1\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";s:27:\"[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\"[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\"[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\"[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"([^/]+)/embed/?$\";s:37:\"index.php?name=$matches[1]&embed=true\";s:20:\"([^/]+)/trackback/?$\";s:31:\"index.php?name=$matches[1]&tb=1\";s:40:\"([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:35:\"([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:28:\"([^/]+)/page/?([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&paged=$matches[2]\";s:35:\"([^/]+)/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&cpage=$matches[2]\";s:24:\"([^/]+)(?:/([0-9]+))?/?$\";s:43:\"index.php?name=$matches[1]&page=$matches[2]\";s:16:\"[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:26:\"[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:46:\"[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:22:\"[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";}","yes"),
(30,"hack_file","0","yes"),
(31,"blog_charset","UTF-8","yes"),
(32,"moderation_keys","","no"),
(33,"active_plugins","a:6:{i:0;s:31:\"CodeStar-Demo/codestar-demo.php\";i:1;s:30:\"advanced-custom-fields/acf.php\";i:2;s:33:\"classic-editor/classic-editor.php\";i:3;s:23:\"column-demo/coldemo.php\";i:4;s:43:\"custom-post-type-ui/custom-post-type-ui.php\";i:5;s:25:\"fakerpress/fakerpress.php\";}","yes"),
(34,"category_base","","yes"),
(35,"ping_sites","http://rpc.pingomatic.com/","yes"),
(36,"comment_max_links","2","yes"),
(37,"gmt_offset","0","yes"),
(38,"default_email_category","1","yes"),
(39,"recently_edited","","no"),
(40,"template","twentyseventeen","yes"),
(41,"stylesheet","twentyseventeen","yes"),
(42,"comment_whitelist","1","yes"),
(43,"blacklist_keys","","no"),
(44,"comment_registration","0","yes"),
(45,"html_type","text/html","yes"),
(46,"use_trackback","0","yes"),
(47,"default_role","subscriber","yes"),
(48,"db_version","44719","yes"),
(49,"uploads_use_yearmonth_folders","1","yes"),
(50,"upload_path","","yes"),
(51,"blog_public","1","yes"),
(52,"default_link_category","2","yes"),
(53,"show_on_front","posts","yes"),
(54,"tag_base","","yes"),
(55,"show_avatars","1","yes"),
(56,"avatar_rating","G","yes"),
(57,"upload_url_path","","yes"),
(58,"thumbnail_size_w","150","yes"),
(59,"thumbnail_size_h","150","yes"),
(60,"thumbnail_crop","1","yes"),
(61,"medium_size_w","300","yes"),
(62,"medium_size_h","300","yes"),
(63,"avatar_default","mystery","yes"),
(64,"large_size_w","1024","yes"),
(65,"large_size_h","1024","yes"),
(66,"image_default_link_type","none","yes"),
(67,"image_default_size","","yes"),
(68,"image_default_align","","yes"),
(69,"close_comments_for_old_posts","0","yes"),
(70,"close_comments_days_old","14","yes"),
(71,"thread_comments","1","yes"),
(72,"thread_comments_depth","5","yes"),
(73,"page_comments","0","yes"),
(74,"comments_per_page","50","yes"),
(75,"default_comments_page","newest","yes"),
(76,"comment_order","asc","yes"),
(77,"sticky_posts","a:0:{}","yes"),
(78,"widget_categories","a:1:{s:12:\"_multiwidget\";i:1;}","yes"),
(79,"widget_text","a:0:{}","yes"),
(80,"widget_rss","a:0:{}","yes"),
(81,"uninstall_plugins","a:1:{s:33:\"classic-editor/classic-editor.php\";a:2:{i:0;s:14:\"Classic_Editor\";i:1;s:9:\"uninstall\";}}","no"),
(82,"timezone_string","","yes"),
(83,"page_for_posts","0","yes"),
(84,"page_on_front","0","yes"),
(85,"default_post_format","0","yes"),
(86,"link_manager_enabled","0","yes"),
(87,"finished_splitting_shared_terms","1","yes"),
(88,"site_icon","0","yes"),
(89,"medium_large_size_w","768","yes"),
(90,"medium_large_size_h","0","yes"),
(91,"wp_page_for_privacy_policy","3","yes"),
(92,"show_comments_cookies_opt_in","1","yes"),
(93,"initial_db_version","44719","yes"),
(94,"wp_user_roles","a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}","yes"),
(95,"fresh_site","0","yes"),
(96,"widget_search","a:1:{s:12:\"_multiwidget\";i:1;}","yes"),
(97,"widget_recent-posts","a:1:{s:12:\"_multiwidget\";i:1;}","yes"),
(98,"widget_recent-comments","a:1:{s:12:\"_multiwidget\";i:1;}","yes"),
(99,"widget_archives","a:1:{s:12:\"_multiwidget\";i:1;}","yes"),
(100,"widget_meta","a:1:{s:12:\"_multiwidget\";i:1;}","yes"),
(101,"sidebars_widgets","a:5:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:0:{}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}s:13:\"array_version\";i:3;}","yes"),
(102,"cron","a:6:{i:1567107483;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1567129084;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1567160152;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1567160155;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1567172279;a:1:{s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}","yes"),
(104,"widget_pages","a:1:{s:12:\"_multiwidget\";i:1;}","yes"),
(105,"widget_calendar","a:1:{s:12:\"_multiwidget\";i:1;}","yes"),
(106,"widget_media_audio","a:1:{s:12:\"_multiwidget\";i:1;}","yes"),
(107,"widget_media_image","a:1:{s:12:\"_multiwidget\";i:1;}","yes"),
(108,"widget_media_gallery","a:1:{s:12:\"_multiwidget\";i:1;}","yes"),
(109,"widget_media_video","a:1:{s:12:\"_multiwidget\";i:1;}","yes"),
(110,"nonce_key","s9aiv?>98L-M#y {8M4?ljko0Bw2u4XNl^,9vnP~uUeM[_(=Oa)PbSH/>}f.sY4M","no"),
(111,"nonce_salt","DBHjXGc|5^`eHRTiaw5!~UBdNv(1l|g25Q?7&vj:=o8_$+/bL5[}MICL`}ok5.E6","no"),
(112,"widget_tag_cloud","a:1:{s:12:\"_multiwidget\";i:1;}","yes"),
(113,"widget_nav_menu","a:1:{s:12:\"_multiwidget\";i:1;}","yes"),
(114,"widget_custom_html","a:1:{s:12:\"_multiwidget\";i:1;}","yes"),
(117,"theme_mods_twentynineteen","a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1564314886;s:4:\"data\";a:2:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}}}}","yes"),
(119,"recovery_keys","a:1:{s:22:\"FoWDRdBjWeb3KRogU8lkVj\";a:2:{s:10:\"hashed_key\";s:34:\"$P$BpvI2z1C5WCM063l303cqMSHbMUK2u/\";s:10:\"created_at\";i:1567061536;}}","yes"),
(120,"_site_transient_update_core","O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.2.2.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.2.2.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.2.2-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-5.2.2-new-bundled.zip\";s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:5:\"5.2.2\";s:7:\"version\";s:5:\"5.2.2\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.0\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1567085987;s:15:\"version_checked\";s:5:\"5.2.2\";s:12:\"translations\";a:0:{}}","no"),
(125,"_site_transient_update_themes","O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1567085993;s:7:\"checked\";a:3:{s:14:\"twentynineteen\";s:3:\"1.4\";s:15:\"twentyseventeen\";s:3:\"2.2\";s:13:\"twentysixteen\";s:3:\"2.0\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}}","no"),
(131,"can_compress_scripts","1","no"),
(136,"recently_activated","a:4:{s:39:\"wp-file-manager/file_folder_manager.php\";i:1566846448;s:35:\"posts-to-qucode/posts_to_qucode.php\";i:1566846359;s:21:\"ACF-Demo/acf-demo.php\";i:1566845259;s:25:\"word-count/word-count.php\";i:1566754974;}","yes"),
(142,"current_theme","Twenty Seventeen","yes"),
(143,"theme_mods_twentyseventeen","a:3:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:18:\"custom_css_post_id\";i:-1;}","yes"),
(144,"theme_switched","","yes"),
(147,"category_children","a:0:{}","yes"),
(218,"recovery_mode_email_last_sent","1567061536","yes"),
(239,"_transient_timeout_filemanager_cancel_lk_popup_1","1567112409","no"),
(240,"_transient_filemanager_cancel_lk_popup_1","filemanager_cancel_lk_popup_1","no"),
(241,"filemanager_email_verified_1","yes","yes"),
(258,"_site_transient_timeout_browser_e52f651ddcacf6f7bb95771b08d4a266","1567358630","no"),
(259,"_site_transient_browser_e52f651ddcacf6f7bb95771b08d4a266","a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:11:\"78.0.3879.0\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}","no"),
(260,"_site_transient_timeout_php_check_20c231c3d6703efba5d948822e1d1da6","1567358632","no"),
(261,"_site_transient_php_check_20c231c3d6703efba5d948822e1d1da6","a:5:{s:19:\"recommended_version\";s:3:\"7.3\";s:15:\"minimum_version\";s:6:\"5.6.20\";s:12:\"is_supported\";b:1;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}","no"),
(275,"_transient_timeout_plugin_slugs","1567159344","no"),
(276,"_transient_plugin_slugs","a:10:{i:0;s:21:\"ACF-Demo/acf-demo.php\";i:1;s:30:\"advanced-custom-fields/acf.php\";i:2;s:33:\"classic-editor/classic-editor.php\";i:3;s:31:\"CodeStar-Demo/codestar-demo.php\";i:4;s:23:\"column-demo/coldemo.php\";i:5;s:43:\"custom-post-type-ui/custom-post-type-ui.php\";i:6;s:25:\"fakerpress/fakerpress.php\";i:7;s:35:\"posts-to-qucode/posts_to_qucode.php\";i:8;s:25:\"word-count/word-count.php\";i:9;s:39:\"wp-file-manager/file_folder_manager.php\";}","no"),
(279,"acf_version","5.8.3","yes"),
(310,"_cs_options","a:101:{s:14:\"color_picker_1\";s:7:\"#3498db\";s:8:\"number_1\";s:2:\"10\";s:13:\"unique_text_4\";s:30:\"some default value bla bla bla\";s:13:\"unique_text_9\";s:15:\"info@domain.com\";s:14:\"unique_text_10\";s:5:\"Hello\";s:17:\"unique_textarea_4\";s:30:\"some default value bla bla bla\";s:17:\"unique_checkbox_2\";b:1;s:17:\"unique_checkbox_5\";s:3:\"bmw\";s:17:\"unique_checkbox_6\";a:3:{i:0;s:5:\"green\";i:1;s:6:\"yellow\";i:2;s:3:\"red\";}s:14:\"unique_radio_2\";s:7:\"nothing\";s:15:\"unique_select_4\";s:8:\"tertiary\";s:15:\"unique_select_7\";a:3:{i:0;s:3:\"bmw\";i:1;s:8:\"mercedes\";i:2;s:4:\"opel\";}s:17:\"unique_switcher_4\";b:1;s:15:\"unique_number_4\";s:2:\"10\";s:13:\"unique_icon_4\";s:11:\"fa fa-check\";s:14:\"unique_group_2\";a:2:{i:0;a:3:{s:19:\"unique_group_2_text\";s:9:\"Some text\";s:23:\"unique_group_2_switcher\";b:1;s:23:\"unique_group_2_textarea\";s:12:\"Some content\";}i:1;a:3:{s:19:\"unique_group_2_text\";s:11:\"Some text 2\";s:23:\"unique_group_2_switcher\";b:1;s:23:\"unique_group_2_textarea\";s:14:\"Some content 2\";}}s:15:\"unique_upload_4\";s:16:\"screenshot-1.png\";s:19:\"unique_background_3\";a:5:{s:5:\"image\";s:13:\"something.png\";s:6:\"repeat\";s:8:\"repeat-x\";s:8:\"position\";s:13:\"center center\";s:10:\"attachment\";s:5:\"fixed\";s:5:\"color\";s:7:\"#ffbc00\";}s:19:\"unique_background_4\";a:1:{s:5:\"color\";s:4:\"#222\";}s:21:\"unique_color_picker_1\";s:7:\"#dd3333\";s:21:\"unique_color_picker_5\";s:21:\"rgba(0, 0, 255, 0.25)\";s:21:\"unique_color_picker_6\";s:21:\"rgba(0, 255, 0, 0.75)\";s:21:\"unique_image_select_2\";s:7:\"value-2\";s:21:\"unique_image_select_3\";s:7:\"value-3\";s:21:\"unique_image_select_4\";s:7:\"value-2\";s:21:\"unique_image_select_5\";a:4:{i:0;s:7:\"value-3\";i:1;s:7:\"value-4\";i:2;s:7:\"value-5\";i:3;s:7:\"value-6\";}s:19:\"unique_typography_1\";a:3:{s:6:\"family\";s:9:\"Open Sans\";s:4:\"font\";s:6:\"google\";s:7:\"variant\";s:3:\"800\";}s:19:\"unique_typography_2\";a:2:{s:6:\"family\";s:6:\"Ubuntu\";s:4:\"font\";s:6:\"google\";}s:19:\"unique_typography_3\";a:2:{s:6:\"family\";s:5:\"Arial\";s:4:\"font\";s:7:\"websafe\";}s:8:\"sorter_1\";a:2:{s:7:\"enabled\";a:3:{s:3:\"bmw\";s:3:\"BMW\";s:8:\"mercedes\";s:8:\"Mercedes\";s:10:\"volkswagen\";s:10:\"Volkswagen\";}s:8:\"disabled\";a:2:{s:7:\"ferrari\";s:7:\"Ferrari\";s:7:\"mustang\";s:7:\"Mustang\";}}s:8:\"sorter_2\";a:2:{s:7:\"enabled\";a:6:{s:4:\"blue\";s:4:\"Blue\";s:5:\"green\";s:5:\"Green\";s:3:\"red\";s:3:\"Red\";s:6:\"yellow\";s:6:\"Yellow\";s:6:\"orange\";s:6:\"Orange\";s:5:\"ocean\";s:5:\"Ocean\";}s:8:\"disabled\";a:2:{s:5:\"black\";s:5:\"Black\";s:5:\"white\";s:5:\"White\";}}s:10:\"fieldset_2\";a:3:{s:15:\"fieldset_2_text\";s:5:\"Hello\";s:19:\"fieldset_2_checkbox\";b:1;s:19:\"fieldset_2_textarea\";s:8:\"Do stuff\";}s:15:\"validate_text_1\";s:15:\"info@domain.com\";s:14:\"numeric_text_1\";s:6:\"123456\";s:15:\"required_text_1\";s:11:\"lorem ipsum\";s:5:\"dep_4\";s:3:\"yes\";s:9:\"dep_6_alt\";s:4:\"gray\";s:5:\"dep_7\";s:4:\"gray\";s:9:\"dep_7_alt\";s:4:\"gray\";s:6:\"text_1\";s:0:\"\";s:10:\"textarea_1\";s:0:\"\";s:10:\"switcher_1\";b:0;s:10:\"checkbox_1\";b:0;s:14:\"image_select_1\";s:0:\"\";s:6:\"text_2\";s:0:\"\";s:10:\"textarea_2\";s:0:\"\";s:13:\"unique_text_1\";s:0:\"\";s:13:\"unique_text_2\";s:0:\"\";s:13:\"unique_text_3\";s:0:\"\";s:13:\"unique_text_5\";s:0:\"\";s:13:\"unique_text_6\";s:0:\"\";s:13:\"unique_text_7\";s:0:\"\";s:13:\"unique_text_8\";s:0:\"\";s:14:\"unique_text_11\";s:0:\"\";s:14:\"unique_text_12\";s:0:\"\";s:14:\"unique_text_13\";s:0:\"\";s:17:\"unique_textarea_1\";s:0:\"\";s:19:\"unique_textarea_1_1\";s:0:\"\";s:17:\"unique_textarea_2\";s:0:\"\";s:17:\"unique_textarea_3\";s:0:\"\";s:17:\"unique_textarea_5\";s:0:\"\";s:17:\"unique_textarea_6\";s:0:\"\";s:17:\"unique_textarea_7\";s:0:\"\";s:17:\"unique_textarea_8\";s:0:\"\";s:18:\"unique_textarea_13\";s:0:\"\";s:17:\"unique_checkbox_1\";b:0;s:17:\"unique_checkbox_3\";b:0;s:17:\"unique_checkbox_4\";b:0;s:17:\"unique_checkbox_7\";b:0;s:17:\"unique_checkbox_8\";b:0;s:17:\"unique_checkbox_9\";b:0;s:18:\"unique_checkbox_10\";b:0;s:18:\"unique_checkbox_11\";b:0;s:18:\"unique_checkbox_12\";b:0;s:18:\"unique_checkbox_13\";b:0;s:18:\"unique_checkbox_14\";b:0;s:17:\"unique_switcher_1\";b:0;s:17:\"unique_switcher_2\";b:0;s:17:\"unique_switcher_3\";b:0;s:14:\"unique_group_1\";s:0:\"\";s:14:\"unique_group_3\";s:0:\"\";s:14:\"unique_group_4\";s:0:\"\";s:21:\"unique_image_select_1\";s:0:\"\";s:20:\"unique_others_text_1\";s:0:\"\";s:20:\"unique_others_text_2\";s:0:\"\";s:20:\"unique_others_text_3\";s:0:\"\";s:20:\"unique_others_text_4\";s:0:\"\";s:20:\"unique_others_text_5\";s:0:\"\";s:20:\"unique_others_text_6\";s:0:\"\";s:20:\"unique_others_text_7\";s:0:\"\";s:20:\"unique_others_text_8\";s:0:\"\";s:20:\"unique_others_text_9\";s:0:\"\";s:14:\"sanitie_text_1\";s:0:\"\";s:18:\"sanitie_textarea_1\";s:0:\"\";s:5:\"dep_1\";s:0:\"\";s:5:\"dep_2\";b:0;s:5:\"dep_5\";b:0;s:5:\"dep_6\";s:0:\"\";s:6:\"dep_10\";s:0:\"\";s:6:\"dep_11\";s:0:\"\";s:6:\"dep_12\";b:0;}","yes"),
(331,"cptui_new_install","false","yes"),
(332,"cptui_post_types","a:1:{s:4:\"book\";a:29:{s:4:\"name\";s:4:\"book\";s:5:\"label\";s:5:\"Books\";s:14:\"singular_label\";s:4:\"Book\";s:11:\"description\";s:0:\"\";s:6:\"public\";s:4:\"true\";s:18:\"publicly_queryable\";s:4:\"true\";s:7:\"show_ui\";s:4:\"true\";s:17:\"show_in_nav_menus\";s:4:\"true\";s:12:\"show_in_rest\";s:4:\"true\";s:9:\"rest_base\";s:0:\"\";s:21:\"rest_controller_class\";s:0:\"\";s:11:\"has_archive\";s:5:\"false\";s:18:\"has_archive_string\";s:0:\"\";s:19:\"exclude_from_search\";s:5:\"false\";s:15:\"capability_type\";s:4:\"post\";s:12:\"hierarchical\";s:5:\"false\";s:7:\"rewrite\";s:4:\"true\";s:12:\"rewrite_slug\";s:0:\"\";s:17:\"rewrite_withfront\";s:4:\"true\";s:9:\"query_var\";s:4:\"true\";s:14:\"query_var_slug\";s:0:\"\";s:13:\"menu_position\";s:0:\"\";s:12:\"show_in_menu\";s:4:\"true\";s:19:\"show_in_menu_string\";s:0:\"\";s:9:\"menu_icon\";s:0:\"\";s:8:\"supports\";a:3:{i:0;s:5:\"title\";i:1;s:6:\"editor\";i:2;s:9:\"thumbnail\";}s:10:\"taxonomies\";a:0:{}s:6:\"labels\";a:24:{s:9:\"menu_name\";s:0:\"\";s:9:\"all_items\";s:0:\"\";s:7:\"add_new\";s:0:\"\";s:12:\"add_new_item\";s:0:\"\";s:9:\"edit_item\";s:0:\"\";s:8:\"new_item\";s:0:\"\";s:9:\"view_item\";s:0:\"\";s:10:\"view_items\";s:0:\"\";s:12:\"search_items\";s:0:\"\";s:9:\"not_found\";s:0:\"\";s:18:\"not_found_in_trash\";s:0:\"\";s:17:\"parent_item_colon\";s:0:\"\";s:14:\"featured_image\";s:0:\"\";s:18:\"set_featured_image\";s:0:\"\";s:21:\"remove_featured_image\";s:0:\"\";s:18:\"use_featured_image\";s:0:\"\";s:8:\"archives\";s:0:\"\";s:16:\"insert_into_item\";s:0:\"\";s:21:\"uploaded_to_this_item\";s:0:\"\";s:17:\"filter_items_list\";s:0:\"\";s:21:\"items_list_navigation\";s:0:\"\";s:10:\"items_list\";s:0:\"\";s:10:\"attributes\";s:0:\"\";s:14:\"name_admin_bar\";s:0:\"\";}s:15:\"custom_supports\";s:0:\"\";}}","yes"),
(354,"_transient_timeout_dash_v2_88ae138922fe95674369b1cb3d215a2b","1567101375","no"),
(355,"_transient_dash_v2_88ae138922fe95674369b1cb3d215a2b","<div class=\"rss-widget\"><p><strong>RSS Error:</strong> WP HTTP Error: cURL error 6: Could not resolve host: wordpress.org</p></div><div class=\"rss-widget\"><p><strong>RSS Error:</strong> WP HTTP Error: cURL error 6: Could not resolve host: planet.wordpress.org</p></div>","no"),
(361,"_site_transient_timeout_community-events-a138d024e4b921d2b5772312ad22302d","1567127638","no"),
(362,"_site_transient_community-events-a138d024e4b921d2b5772312ad22302d","a:3:{s:9:\"sandboxed\";b:0;s:8:\"location\";a:1:{s:2:\"ip\";s:12:\"192.168.95.0\";}s:6:\"events\";a:2:{i:0;a:7:{s:4:\"type\";s:8:\"wordcamp\";s:5:\"title\";s:11:\"WordCamp US\";s:3:\"url\";s:29:\"https://2019.us.wordcamp.org/\";s:6:\"meetup\";s:0:\"\";s:10:\"meetup_url\";s:0:\"\";s:4:\"date\";s:19:\"2019-11-01 00:00:00\";s:8:\"location\";a:4:{s:8:\"location\";s:18:\"St. Louis, MO, USA\";s:7:\"country\";s:2:\"US\";s:8:\"latitude\";d:38.6532135;s:9:\"longitude\";d:-90.313673300000005;}}i:1;a:7:{s:4:\"type\";s:8:\"wordcamp\";s:5:\"title\";s:14:\"WordCamp Dhaka\";s:3:\"url\";s:32:\"https://2019.dhaka.wordcamp.org/\";s:6:\"meetup\";N;s:10:\"meetup_url\";N;s:4:\"date\";s:19:\"2019-09-28 00:00:00\";s:8:\"location\";a:4:{s:8:\"location\";s:5:\"Dhaka\";s:7:\"country\";s:2:\"BD\";s:8:\"latitude\";d:23.827215800000001;s:9:\"longitude\";d:90.427188299999997;}}}}","no"),
(365,"_site_transient_timeout_theme_roots","1567087791","no"),
(366,"_site_transient_theme_roots","a:3:{s:14:\"twentynineteen\";s:7:\"/themes\";s:15:\"twentyseventeen\";s:7:\"/themes\";s:13:\"twentysixteen\";s:7:\"/themes\";}","no"),
(367,"_site_transient_update_plugins","O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1567085996;s:7:\"checked\";a:10:{s:21:\"ACF-Demo/acf-demo.php\";s:3:\"1.0\";s:30:\"advanced-custom-fields/acf.php\";s:5:\"5.8.3\";s:33:\"classic-editor/classic-editor.php\";s:3:\"1.5\";s:31:\"CodeStar-Demo/codestar-demo.php\";s:3:\"1.0\";s:23:\"column-demo/coldemo.php\";s:3:\"1.0\";s:43:\"custom-post-type-ui/custom-post-type-ui.php\";s:5:\"1.6.2\";s:25:\"fakerpress/fakerpress.php\";s:6:\"0.4.11\";s:35:\"posts-to-qucode/posts_to_qucode.php\";s:3:\"1.0\";s:25:\"word-count/word-count.php\";s:3:\"1.0\";s:39:\"wp-file-manager/file_folder_manager.php\";s:3:\"5.2\";}s:8:\"response\";a:1:{s:39:\"wp-file-manager/file_folder_manager.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:29:\"w.org/plugins/wp-file-manager\";s:4:\"slug\";s:15:\"wp-file-manager\";s:6:\"plugin\";s:39:\"wp-file-manager/file_folder_manager.php\";s:11:\"new_version\";s:3:\"5.3\";s:3:\"url\";s:46:\"https://wordpress.org/plugins/wp-file-manager/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/plugin/wp-file-manager.zip\";s:5:\"icons\";a:1:{s:2:\"1x\";s:68:\"https://ps.w.org/wp-file-manager/assets/icon-128x128.png?rev=1846029\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:70:\"https://ps.w.org/wp-file-manager/assets/banner-772x250.jpg?rev=1846030\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"5.2.2\";s:12:\"requires_php\";s:5:\"5.2.4\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:4:{s:30:\"advanced-custom-fields/acf.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:36:\"w.org/plugins/advanced-custom-fields\";s:4:\"slug\";s:22:\"advanced-custom-fields\";s:6:\"plugin\";s:30:\"advanced-custom-fields/acf.php\";s:11:\"new_version\";s:5:\"5.8.3\";s:3:\"url\";s:53:\"https://wordpress.org/plugins/advanced-custom-fields/\";s:7:\"package\";s:71:\"https://downloads.wordpress.org/plugin/advanced-custom-fields.5.8.3.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:75:\"https://ps.w.org/advanced-custom-fields/assets/icon-256x256.png?rev=1082746\";s:2:\"1x\";s:75:\"https://ps.w.org/advanced-custom-fields/assets/icon-128x128.png?rev=1082746\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:78:\"https://ps.w.org/advanced-custom-fields/assets/banner-1544x500.jpg?rev=1729099\";s:2:\"1x\";s:77:\"https://ps.w.org/advanced-custom-fields/assets/banner-772x250.jpg?rev=1729102\";}s:11:\"banners_rtl\";a:0:{}}s:33:\"classic-editor/classic-editor.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:28:\"w.org/plugins/classic-editor\";s:4:\"slug\";s:14:\"classic-editor\";s:6:\"plugin\";s:33:\"classic-editor/classic-editor.php\";s:11:\"new_version\";s:3:\"1.5\";s:3:\"url\";s:45:\"https://wordpress.org/plugins/classic-editor/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/plugin/classic-editor.1.5.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:67:\"https://ps.w.org/classic-editor/assets/icon-256x256.png?rev=1998671\";s:2:\"1x\";s:67:\"https://ps.w.org/classic-editor/assets/icon-128x128.png?rev=1998671\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:70:\"https://ps.w.org/classic-editor/assets/banner-1544x500.png?rev=1998671\";s:2:\"1x\";s:69:\"https://ps.w.org/classic-editor/assets/banner-772x250.png?rev=1998676\";}s:11:\"banners_rtl\";a:0:{}}s:43:\"custom-post-type-ui/custom-post-type-ui.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:33:\"w.org/plugins/custom-post-type-ui\";s:4:\"slug\";s:19:\"custom-post-type-ui\";s:6:\"plugin\";s:43:\"custom-post-type-ui/custom-post-type-ui.php\";s:11:\"new_version\";s:5:\"1.6.2\";s:3:\"url\";s:50:\"https://wordpress.org/plugins/custom-post-type-ui/\";s:7:\"package\";s:68:\"https://downloads.wordpress.org/plugin/custom-post-type-ui.1.6.2.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:72:\"https://ps.w.org/custom-post-type-ui/assets/icon-256x256.png?rev=1069557\";s:2:\"1x\";s:72:\"https://ps.w.org/custom-post-type-ui/assets/icon-128x128.png?rev=1069557\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:75:\"https://ps.w.org/custom-post-type-ui/assets/banner-1544x500.png?rev=1069557\";s:2:\"1x\";s:74:\"https://ps.w.org/custom-post-type-ui/assets/banner-772x250.png?rev=1069557\";}s:11:\"banners_rtl\";a:0:{}}s:25:\"fakerpress/fakerpress.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:24:\"w.org/plugins/fakerpress\";s:4:\"slug\";s:10:\"fakerpress\";s:6:\"plugin\";s:25:\"fakerpress/fakerpress.php\";s:11:\"new_version\";s:6:\"0.4.11\";s:3:\"url\";s:41:\"https://wordpress.org/plugins/fakerpress/\";s:7:\"package\";s:53:\"https://downloads.wordpress.org/plugin/fakerpress.zip\";s:5:\"icons\";a:3:{s:2:\"2x\";s:63:\"https://ps.w.org/fakerpress/assets/icon-256x256.png?rev=1846090\";s:2:\"1x\";s:55:\"https://ps.w.org/fakerpress/assets/icon.svg?rev=1846090\";s:3:\"svg\";s:55:\"https://ps.w.org/fakerpress/assets/icon.svg?rev=1846090\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:66:\"https://ps.w.org/fakerpress/assets/banner-1544x500.png?rev=1152002\";s:2:\"1x\";s:65:\"https://ps.w.org/fakerpress/assets/banner-772x250.png?rev=1152002\";}s:11:\"banners_rtl\";a:0:{}}}}","no");
