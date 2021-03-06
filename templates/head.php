<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    wp_head();

    $page_break = get_theme_mod('rjfs_page_break');
    $theme_url = get_template_directory_uri();
    if (!empty($page_break)) {
        $style = <<<EOF

        <style>
        .content-info {
            position: relative;
        }
        .content-info .footer-top {
            background-image: url("$page_break");
            background-repeat: no-repeat;
	        background-position: center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            min-height: 250px;
        }


        .content-info .footer-top:before {
            top: 0;
            background-image: url($theme_url/assets/img/top-shadow.png);
        }

        .content-info .footer-top:after {
            bottom: 0;
            background-image: url($theme_url/assets/img/bottom-shadow.png);
        }

        .content-info .footer-top:before, .content-info .footer-top:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 20px;
            left: 0;
            background-repeat: no-repeat;
            background-size: 100% 20px;
            z-index: 100;
        }

        </style>

EOF;
        echo $style;
    }

    ?>

    <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed"
          href="<?php echo home_url(); ?>/feed/">


    <!-- favicons -->
    <link rel="apple-touch-icon" href="<?php echo $theme_url ?>/assets/img/apple-touch-icon.png">
    <link rel="icon" href="<?php echo $theme_url ?>/assets/img/favicon.ico">
</head>
