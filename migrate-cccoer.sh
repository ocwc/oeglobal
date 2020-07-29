#!/usr/bin/env bash

wp theme activate oeglobal/resources
wp plugin activate breadcrumb-navxt

home_id=`wp post create --post_type=page --post_title='Home' --page_template=views/template-cccoer-home.blade.php --post_status=publish --porcelain`
wp option update page_on_front $home_id
wp option update show_on_front page
wp menu location assign 470 footer_navigation

wp post create --post_type=page --post_title='Search' --page_template=views/template-search.blade.php --post_status=publish

