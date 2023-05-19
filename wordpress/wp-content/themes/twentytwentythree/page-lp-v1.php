<?php

/**
 * Template Name: Main Landing Page V1
 * Template Post Type: lp
 */

global $post;


$fields = get_fields($post->ID)['main_lp_template_v1'] ?? null;
$background_image = $fields['background_image'] ?? null;
$logo = $fields['logo'] ?? null;
$resource_type = $fields['resource_type'] ?? null;
$main_heading = $fields['main_heading'] ?? null;
$sub_heading = $fields['sub_heading'] ?? null;
$boxes = $fields['boxes'] ?? null;
$main_content_left = $fields['main_content_left'] ?? null;
$main_content_left_cta_text = $fields['main_content_left_cta_text'] ?? null;
$main_content_left_cta_url = $fields['main_content_left_cta_url'] ?? null;
$main_content_right_thumbnail = $fields['main_content_right_thumbnail'] ?? null;
$client_logo_heading = $fields['client_logo_heading'] ?? null;
$client_logos = $fields['client_logos'] ?? null;
shuffle($client_logos);
$hubspot_form_title = $fields['hubspot_form_title'] ?? null;
$hubspot_form_embed_code = $fields['hubspot_form_embed_code'] ?? null;
$page_title = get_the_title($post->ID);
$permalink = get_the_permalink($post->ID);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>

    <title><?= $page_title ?> | LogicSource</title>
    <link rel="icon" href="https://logicsource.com/wp-content/themes/logicsource/favicon.ico">
    <link rel="stylesheet" href="https://logicsource.com/wp-content/themes/LogicSourceChild/library/css/fonts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://logicsource.com/wp-content/themes/LogicSourceChild/library/css/style.css">
    <style>
        :root {
            font-size: 18px;
        }

        html {
            font-size: 18px;
        }

        body {
            font-family: "Gotham SSm A", "Gotham SSm B", sans-serif;
            background-color: #00364e;
            background-image: url('<?= $background_image ?>');
            background-repeat: no-repeat;
            background-position: 0 0;
            background-size: cover;
            font-size: 18px;
            color: #333234;
            padding: 0;
            margin: 0;
        }

        @media screen and (min-width: 992px) {
            body {
                overflow-x: hidden;

                background-position: 0 -100px;
                background-size: 130%;
            }
        }

        @media screen and (min-width: 1920px) {
            body {
                background-position: 0 0;
                background-size: 100%;
            }
        }

        header {
            padding-block: 60px;
        }

        .logo {
            margin-block-end: 60px;
            text-align: center;
        }

        @media screen and (min-width: 992px) {
            .logo {
                text-align: left;
            }
        }

        .resource-type {
            font-size: 24px;
            line-height: 26px;
            font-weight: 700;
            color: #00aad5;
            text-transform: uppercase;
            margin-block-end: 40px;
            text-align: center;
        }

        @media screen and (min-width: 992px) {
            .resource-type {
                text-align: left;
            }
        }

        .main-heading {
            font-size: 36px;
            line-height: 40px;
            font-weight: 700;
            color: #ffffff;
            text-align: center;
        }

        @media screen and (min-width: 992px) {
            .main-heading {
                text-align: left;
            }
        }

        main {
            position: relative;
            padding-block: 0;
        }

        @media screen and (min-width: 992px) {
            main {
                padding-block: 60px;
            }
        }

        .sub-heading {
            font-size: 24px;
            line-height: 26px;
            font-weight: 700;
            color: #ffffff;
            text-align: center;
            margin-block-end: 1rem;
        }

        @media (min-width: 992px) {
            .sub-heading {
                text-align: left;
            }
        }

        .bg-transparent {
            background-color: transparent;
            position: relative;
            z-index: 1;
        }

        .bg-grey {
            background-color: #F0F3F5;
            width: 100%;
            margin: 0 auto;
            border-radius: 10px;

            position: relative;
            margin-top: -150px;
            padding-block-end: 2rem;
            margin-block-end: 2rem;
        }

        @media (min-width: 1200px) {
            .bg-grey {
                width: 1300px;
            }
        }

        .boxes {
            margin-block-start: 40px;
        }

        .box {
            display: flex;
            flex-direction: column;
            justify-items: center;
            text-align: center;
            background-color: #ffffff;
            border-radius: 10px;
            border-block-end: 10px solid #00aad5;

            padding: 1rem;
            margin-block-end: 1.5rem;
        }

        .box>div {
            margin-block-end: 1rem;
        }

        .main-content-left {
            padding-block-start: 160px;
            padding-inline: 1rem;
            text-align: center;
        }

        @media screen and (min-width: 992px) {
            .main-content-left {
                padding-inline-start: 150px;
                padding-block-start: 30px;
                text-align: left;
            }
        }

        .main-content-left h2 {
            font-size: 24px;
            line-height: 26px;
            font-weight: 700;
            color: #30424C;

            margin-block-end: 1.5rem;
        }

        .cta {
            font-weight: 700;
            color: #607482;
            border: 2px solid #00aad5;
            background-color: transparent;
            border-radius: 30px;
            padding-block: 10px;
            padding-inline: 30px;
            margin-block: 30px;
            display: inline-block;
        }

        .cta:hover {
            background-color: #00aad5;
            color: #ffffff;
        }

        .main-content-right {
            padding-block-start: 0;
            padding-inline: 1rem;
            text-align: center;
        }

        @media screen and (min-width: 992px) {
            .main-content-right {
                padding-inline-end: 150px;
                padding-block-start: 50px;
            }
        }

        .clients-logo {
            display: flex;
            gap: 5px;
        }

        @media screen and (min-width: 992px) {
            .clients-logo {
                gap: 1rem;
            }
        }

        .clients-logo img {
            width: 112.5px;
            height: auto;
        }

        @media screen and (min-width: 992px) {

            span.br-before::before {
                content: "\a";
                white-space: pre;
            }

            span.br-after::after {
                content: "\a";
                white-space: pre;
            }
        }

        .pt-0 {
            padding-block-start: 0;
        }

        .mt-1 {
            margin-block-start: 5px;
        }

        @media screen and (min-width: 992px) {
            .mt-1 {
                margin-block-start: 1rem;
            }
        }

        footer {
            font-size: 14px;
            line-height: 20px;
            background-color: #ffffff;
            text-align: center;
            padding-block: 1rem;
        }

        footer a {
            color: #333234 !important;
        }

        /* hubspot form */

        .form-title {
            font-size: 18px;
            line-height: 20px;
            font-weight: 700;
            color: #ffffff;
            margin-block-start: 3.5rem;
            margin-block-end: 1.5rem;
            text-align: center;
        }

        @media screen and (min-width: 992px) {
            .form-title {
                margin-block-start: unset;
                text-align: left;
            }
        }

        .hbspt-form fieldset {
            margin-block-end: 1rem;
        }

        .hbspt-form label {
            font-size: 14px;
            line-height: 15px;
            font-weight: 700;
            color: #ffffff;
            margin-block: 1rem;
        }

        .hbspt-form input[type="text"],
        .hbspt-form input[type="email"] {
            padding: 7px;
            width: 100%;
        }

        .hbspt-form .hs_submit {
            margin-block-start: 1rem;
        }

        .hbspt-form .hs_submit .actions {
            text-align: center;
        }

        @media screen and (min-width: 992px) {
            .hbspt-form .hs_submit .actions {
                text-align: left;
            }
        }

        .hbspt-form input[type="submit"] {
            font-weight: 700;
            color: #ffffff;
            border: 2px solid #00aad5;
            background-color: transparent;
            border-radius: 30px;
            padding-block: 10px;
            padding-inline: 30px;
            margin-block: 10px;
            display: inline-block;
        }

        .hbspt-form input[type="submit"]:hover {
            background-color: #00aad5;
        }

        .hbspt-form fieldset {
            max-width: unset !important;
        }

        .hbspt-form fieldset.form-columns-2 .input {
            margin-right: 10px !important;
        }

        .hbspt-form .hs-error-msgs {
            list-style: none;
            margin-block: 0;
            padding-inline: 0;
        }

        .hbspt-form .hs-error-msgs label {
            margin: 0;
            font-style: italic;
            color: lightyellow;
        }

        .hbspt-form label .hs-form-required {
            padding-inline-start: 5px;
        }
    </style>


</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="logo">
                        <a href="https://logicsource.com/">
                            <img src="<?= $logo ?>" alt="">
                        </a>
                    </div>
                    <p class="resource-type">
                        <?= $resource_type ?>
                    </p>
                    <h1 class="main-heading">
                        <?= $main_heading ?>
                    </h1>
                </div>
                <div class="col-lg-6">

                    <div class="form-title">
                        <?= $hubspot_form_title ?>
                    </div>

                    <?= $hubspot_form_embed_code ?>

                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container-fluid">

            <div class="bg-transparent">

                <div class="container">

                    <h2 class="sub-heading">
                        <?= $sub_heading ?>
                    </h2>

                    <div class="row boxes">

                        <?php foreach ($boxes as $box) : ?>
                            <div class="col-md-4">
                                <div class="box">
                                    <div>
                                        <img src="<?= $box['icon'] ?>" alt="">
                                    </div>
                                    <p>
                                        <?= $box['icon_description'] ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach ?>

                    </div>

                </div>
            </div>

            <div class="bg-grey">

                <div class="row">
                    <div class="col-lg-7">

                        <div class="main-content-left">
                            <?= $main_content_left ?>
                        </div>

                    </div>

                    <div class="col-lg-5">
                        <div class="main-content-right">
                            <img class="img-fluid" src="<?= $main_content_right_thumbnail ?>" alt="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <div class="main-content-left pt-0">

                            <a class="cta" href="<?= $main_content_left_cta_url ?>">
                                <?= $main_content_left_cta_text ?>
                            </a>

                            <h2>
                                <?= $client_logo_heading ?>
                            </h2>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="main-content-left pt-0">

                        <div class="clients-logo">
                            <?php foreach (array_splice($client_logos, 0, 8) as $url) : ?>
                                <div>
                                    <img src="<?= $url['logo'] ?>" alt="" class="img-fluid">
                                </div>
                            <?php endforeach ?>
                        </div>

                    </div>
                </div>

                <div class="row mt-1">
                    <div class="main-content-left pt-0">

                        <div class="clients-logo">
                            <?php foreach (array_splice($client_logos, 0, 8) as $url) : ?>
                                <div>
                                    <img src="<?= $url['logo'] ?>" alt="" class="img-fluid">
                                </div>
                            <?php endforeach ?>
                        </div>

                    </div>
                </div>

                <div class="row mt-1">
                    <div class="main-content-left pt-0">

                        <div class="clients-logo">
                            <?php foreach (array_splice($client_logos, 0, 8) as $url) : ?>
                                <div>
                                    <img src="<?= $url['logo'] ?>" alt="" class="img-fluid">
                                </div>
                            <?php endforeach ?>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </main>


    <footer>
        © 2023 LOGICSOURCE®, INC. | <a href="https://logicsource.com/legal/" target="_blank">LEGAL</a> | <a href="https://logicsource.com/privacy-policy/" target="_blank">PRIVACY POLICY</a>
    </footer>

    <?php wp_footer() ?>
</body>

</html>