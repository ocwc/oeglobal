#!/usr/bin/env bash

wp theme activate oeglobal/resources
wp plugin activate breadcrumb-navxt

home_id=`wp post create --post_type=page --post_title='Home' --page_template=views/template-cccoer-home.blade.php --post_status=publish --porcelain`
wp option update page_on_front $home_id
wp option update show_on_front page
wp menu location assign 470 footer_navigation

wp post create --post_type=page --post_title='Search' --page_template=views/template-search.blade.php --post_status=publish

wp plugin activate wp-pagenavi
wp option update pagenavi_options 'a:15:{s:10:"pages_text";s:0:"";s:12:"current_text";s:13:"%PAGE_NUMBER%";s:9:"page_text";s:13:"%PAGE_NUMBER%";s:10:"first_text";s:8:"« First";s:9:"last_text";s:7:"Last »";s:9:"prev_text";s:12:"⇠ Previous";s:9:"next_text";s:8:"Next ⇢";s:12:"dotleft_text";s:3:"...";s:13:"dotright_text";s:3:"...";s:9:"num_pages";i:5;s:23:"num_larger_page_numbers";i:3;s:28:"larger_page_numbers_multiple";i:10;s:11:"always_show";i:0;s:16:"use_pagenavi_css";i:0;s:5:"style";i:1;}'
