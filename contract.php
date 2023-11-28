<?php

$name        = $_REQUEST['name'];
$phone       = $_REQUEST['phone'];
$birthDate   = $_REQUEST['birthDate'];
$cmtnd       = $_REQUEST['cmtnd'];
$cmtnd_date  = $_REQUEST['cmtnd_date'];
$cmtnd_place = $_REQUEST['cmtnd_place'];
$company     = $_REQUEST['company'];
$facebook    = $_REQUEST['facebook'];
$email       = $_REQUEST['email'];
$message     = $_REQUEST['message'];
$signature   = $_REQUEST['signature'];
$htdt        = $_REQUEST['htdt'];
$thanh_toan  = $_REQUEST['thanh_toan'];
$class       = $_REQUEST['lop'];

?>

<!DOCTYPE html>
<html lang="vi"
      class=""
      style="">
<!--


<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="theme-color" content="#0c4fb3">
    <style>
        @font-face {
            font-family: 'Roboto';
            src: url('Roboto/Roboto-Light.ttf') format("truetype");
            font-weight: 300;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Roboto';
            src: url('Roboto/Roboto-LightItalic.ttf') format("truetype");
            font-weight: 300;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'Roboto';
            src: url('Roboto/Roboto-Regular.ttf') format("truetype");
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Roboto';
            src: url('Roboto/Roboto-Italic.ttf') format("truetype");
            font-weight: 400;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'Roboto';
            src: url('Roboto/Roboto-Medium.ttf') format("truetype");
            font-weight: 500;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Roboto';
            src: url('Roboto/Roboto-MediumItalic.ttf') format("truetype");
            font-weight: 500;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'Roboto';
            src: url('Roboto/Roboto-Bold.ttf') format("truetype");
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Roboto';
            src: url('Roboto/Roboto-BoldItalic.ttf') format("truetype");
            font-weight: 700;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'Roboto';
            src: url('Roboto/Roboto-Black.ttf') format("truetype");
            font-weight: 900;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Roboto';
            src: url('Roboto/Roboto-BlackItalic.ttf') format("truetype");
            font-weight: 900;
            font-style: italic;
            font-display: swap;
        }
    </style>
    <style type="text/css">
        body {
            font-family: 'roboto', 'Roboto', sans-serif !important;
        }

        body #gform_wrapper_75 .gform_footer .gform_button,
        body #gform_wrapper_75 .gform_page_footer .gform_button,
        body #gform_wrapper_75 .gform_page_footer .gform_previous_button,
        body #gform_wrapper_75 .gform_page_footer .gform_next_button {
            border-style: solid;
            font-weight: normal;
            font-weight: bold;
            border-width: 0px;
        }

        body #gform_wrapper_75 .gform_footer .gform_button:hover,
        body #gform_wrapper_75 .gform_page_footer .gform_button:hover,
        body #gform_wrapper_75 .gform_page_footer .gform_previous_button:hover,
        body #gform_wrapper_75 .gform_page_footer .gform_next_button:hover {
            border-style: solid;
        }

        body #gform_wrapper_75 .gform_footer button.mdc-button {
            font-weight: normal;
            font-weight: bold;
            border-width: 0px;
        }

        body #gform_wrapper_75 .gform_footer button.mdc-button:hover {
        }

        body #gform_wrapper_75 .gform_footer,
        body #gform_wrapper_75 .gform_page_footer {
            text-align: center;
        }

        body #gform_wrapper_75 .gform_body .gform_fields .gfield input[type=text],
        body #gform_wrapper_75 .gform_body .gform_fields .gfield input[type=email],
        body #gform_wrapper_75 .gform_body .gform_fields .gfield input[type=tel],
        body #gform_wrapper_75 .gform_body .gform_fields .gfield input[type=url],
        body #gform_wrapper_75 .gform_body .gform_fields .gfield input[type=password],
        body #gform_wrapper_75 .gform_body .gform_fields .gfield input[type=number] {
            font-weight: normal;
            font-weight: bold;
            color: #3f3f3f;
            font-size: 16px;
            border-radius: 6px;
            -web-border-radius: 6px;
            -moz-border-radius: 6px;
            max-width: 100%;
            border-width: 1px;
        }

        body #gform_wrapper_75 .gform_body .gform_fields .gfield textarea {
            border-width: 1px;
            font-size: 16px;
            color: #3f3f3f;
            border-radius: 6px;
            -web-border-radius: 6px;
            -moz-border-radius: 6px;
        }

        body #gform_wrapper_75 .gfield_radio label {
            line-height: 30px;
            font-size: 16px;
            width: auto;
        }

        body #gform_wrapper_75 .gfield_checkbox label,
        body #gform_wrapper_75 .gfield .ginput_container_consent label {
            line-height: 30px;
            font-size: 16px;
        }

        body #gform_wrapper_75 li .gfield_checkbox label,
        body #gform_wrapper_75 li.gfield .ginput_container_consent label {
            width: 100%;
        }

        body #gform_wrapper_75 .gform_body .gform_fields .gfield .gfield_label {
            font-weight: normal;
            font-weight: bold;
            color: #fb870c;
            font-size: 16px;
        }

        body #gform_wrapper_75 .gform_body .gform_fields .gfield .gfield_label .gfield_required {
            color: ;
        }

        /* Option to style placeholder */
        body #gform_wrapper_75 ::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            font-weight: normal;
            font-weight: bold;
            color: #848484;
            font-size: 16px;
        }

        body #gform_wrapper_75 ::-moz-placeholder {
            /* Firefox 19+ */
            font-weight: normal;
            font-weight: bold;
            color: #848484;
            font-size: 16px;
        }

        body #gform_wrapper_75 :-ms-input-placeholder {
            /* IE 10+ */
            font-weight: normal;
            font-weight: bold;
            color: #848484;
            font-size: 16px;
        }

        body #gform_wrapper_75 :-moz-placeholder {
            /* Firefox 18- */
            font-weight: normal;
            font-weight: bold;
            color: #848484;
            font-size: 16px;
        }

        /* Styling for Tablets */
        @media only screen and (max-width: 800px) and (min-width: 481px) {
        }

        /* Styling for phones */
        @media only screen and (max-width: 480px) {
        }

        /*Option to add custom CSS */
    </style>
    <meta name="robots" content="noindex, nofollow">
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="assets/css/style.min.css" type="text/css" media="all">
    <style id="wp-block-library-theme-inline-css" type="text/css">
        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-code > code {
            font-family: Menlo, Consolas, monaco, monospace;
            color: #1e1e1e;
            padding: .8em 1em;
            border: 1px solid #ddd;
            border-radius: 4px
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .blocks-gallery-caption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-image figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-pullquote {
            border-top: 4px solid;
            border-bottom: 4px solid;
            margin-bottom: 1.75em;
            color: currentColor
        }

        .wp-block-pullquote__citation,
        .wp-block-pullquote cite,
        .wp-block-pullquote footer {
            color: currentColor;
            text-transform: uppercase;
            font-size: .8125em;
            font-style: normal
        }

        .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            position: relative;
            font-style: normal
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large,
        .wp-block-quote.is-style-plain {
            border: none
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700
        }

        .wp-block-group:where(.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto;
            opacity: .4
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px
        }

        .wp-block-table thead {
            border-bottom: 3px solid
        }

        .wp-block-table tfoot {
            border-top: 3px solid
        }

        .wp-block-table td,
        .wp-block-table th {
            padding: .5em;
            border: 1px solid;
            word-break: normal
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-table figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-video figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-template-part.has-background {
            padding: 1.25em 2.375em;
            margin-top: 0;
            margin-bottom: 0
        }
    </style>
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #FFF;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--accent: #fb870c;
            --wp--preset--color--dark-gray: #111;
            --wp--preset--color--light-gray: #767676;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <link rel="stylesheet" id="rs-plugin-settings-css" href="assets/css/rs6.css" type="text/css" media="all">
    <style id="rs-plugin-settings-inline-css" type="text/css">
        #rs-demo-id {
        }
    </style>
    <link rel="stylesheet" id="gform_basic-css" href="assets/css/basic.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="gform_theme_ie11-css" href="assets/css/theme-ie11.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="gform_theme-css" href="assets/css/theme.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="dt-web-fonts-css" href="assets/css/index.css" type="text/css" media="all">
    <link rel="stylesheet" id="dt-main-css" href="assets/css/main.min.css" type="text/css" media="all">
    <style id="dt-main-inline-css" type="text/css">
        body #load {
            display: block;
            height: 100%;
            overflow: hidden;
            position: fixed;
            width: 100%;
            z-index: 9901;
            opacity: 1;
            visibility: visible;
            transition: all .35s ease-out;
        }

        .load-wrap {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-repeat: no-repeat;
            text-align: center;
        }

        .load-wrap > svg {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #load {
            background-color: #ffffff;
        }

        .uil-default rect:not(.bk) {
            fill: rgba(51, 51, 51, 0.25);
        }

        .uil-ring > path {
            fill: rgba(51, 51, 51, 0.25);
        }

        .ring-loader .circle {
            fill: rgba(51, 51, 51, 0.25);
        }

        .ring-loader .moving-circle {
            fill: #333333;
        }

        .uil-hourglass .glass {
            stroke: #333333;
        }

        .uil-hourglass .sand {
            fill: rgba(51, 51, 51, 0.25);
        }

        .spinner-loader .load-wrap {
            background-image: url("data:image/svg+xml,%3Csvg width='75px' height='75px' xmlns= 'http://www.w3.org/2000/svg' viewBox= '0 0 100 100' preserveAspectRatio= 'xMidYMid' class= 'uil-default' %3E%3Crect x= '0' y= '0' width= '100' height= '100' fill= 'none' class= 'bk' %3E%3C/rect%3E%3Crect x= '46.5' y= '40' width= '7' height= '20' rx= '5' ry= '5' fill= 'rgba%2851%2C51%2C51%2C0.25%29' transform= 'rotate(0 50 50) translate(0 -30)' %3E %3Canimate attributeName= 'opacity' from= '1' to= '0' dur= '1s' begin= '0s' repeatCount= 'indefinite' /%3E%3C/rect%3E%3Crect x= '46.5' y= '40' width= '7' height= '20' rx= '5' ry= '5' fill= 'rgba%2851%2C51%2C51%2C0.25%29' transform= 'rotate(30 50 50) translate(0 -30)' %3E %3Canimate attributeName= 'opacity' from= '1' to= '0' dur= '1s' begin= '0.08333333333333333s' repeatCount= 'indefinite' /%3E%3C/rect%3E%3Crect x= '46.5' y= '40' width= '7' height= '20' rx= '5' ry= '5' fill= 'rgba%2851%2C51%2C51%2C0.25%29' transform= 'rotate(60 50 50) translate(0 -30)' %3E %3Canimate attributeName= 'opacity' from= '1' to= '0' dur= '1s' begin= '0.16666666666666666s' repeatCount= 'indefinite' /%3E%3C/rect%3E%3Crect x= '46.5' y= '40' width= '7' height= '20' rx= '5' ry= '5' fill= 'rgba%2851%2C51%2C51%2C0.25%29' transform= 'rotate(90 50 50) translate(0 -30)' %3E %3Canimate attributeName= 'opacity' from= '1' to= '0' dur= '1s' begin= '0.25s' repeatCount= 'indefinite' /%3E%3C/rect%3E%3Crect x= '46.5' y= '40' width= '7' height= '20' rx= '5' ry= '5' fill= 'rgba%2851%2C51%2C51%2C0.25%29' transform= 'rotate(120 50 50) translate(0 -30)' %3E %3Canimate attributeName= 'opacity' from= '1' to= '0' dur= '1s' begin= '0.3333333333333333s' repeatCount= 'indefinite' /%3E%3C/rect%3E%3Crect x= '46.5' y= '40' width= '7' height= '20' rx= '5' ry= '5' fill= 'rgba%2851%2C51%2C51%2C0.25%29' transform= 'rotate(150 50 50) translate(0 -30)' %3E %3Canimate attributeName= 'opacity' from= '1' to= '0' dur= '1s' begin= '0.4166666666666667s' repeatCount= 'indefinite' /%3E%3C/rect%3E%3Crect x= '46.5' y= '40' width= '7' height= '20' rx= '5' ry= '5' fill= 'rgba%2851%2C51%2C51%2C0.25%29' transform= 'rotate(180 50 50) translate(0 -30)' %3E %3Canimate attributeName= 'opacity' from= '1' to= '0' dur= '1s' begin= '0.5s' repeatCount= 'indefinite' /%3E%3C/rect%3E%3Crect x= '46.5' y= '40' width= '7' height= '20' rx= '5' ry= '5' fill= 'rgba%2851%2C51%2C51%2C0.25%29' transform= 'rotate(210 50 50) translate(0 -30)' %3E %3Canimate attributeName= 'opacity' from= '1' to= '0' dur= '1s' begin= '0.5833333333333334s' repeatCount= 'indefinite' /%3E%3C/rect%3E%3Crect x= '46.5' y= '40' width= '7' height= '20' rx= '5' ry= '5' fill= 'rgba%2851%2C51%2C51%2C0.25%29' transform= 'rotate(240 50 50) translate(0 -30)' %3E %3Canimate attributeName= 'opacity' from= '1' to= '0' dur= '1s' begin= '0.6666666666666666s' repeatCount= 'indefinite' /%3E%3C/rect%3E%3Crect x= '46.5' y= '40' width= '7' height= '20' rx= '5' ry= '5' fill= 'rgba%2851%2C51%2C51%2C0.25%29' transform= 'rotate(270 50 50) translate(0 -30)' %3E %3Canimate attributeName= 'opacity' from= '1' to= '0' dur= '1s' begin= '0.75s' repeatCount= 'indefinite' /%3E%3C/rect%3E%3Crect x= '46.5' y= '40' width= '7' height= '20' rx= '5' ry= '5' fill= 'rgba%2851%2C51%2C51%2C0.25%29' transform= 'rotate(300 50 50) translate(0 -30)' %3E %3Canimate attributeName= 'opacity' from= '1' to= '0' dur= '1s' begin= '0.8333333333333334s' repeatCount= 'indefinite' /%3E%3C/rect%3E%3Crect x= '46.5' y= '40' width= '7' height= '20' rx= '5' ry= '5' fill= 'rgba%2851%2C51%2C51%2C0.25%29' transform= 'rotate(330 50 50) translate(0 -30)' %3E %3Canimate attributeName= 'opacity' from= '1' to= '0' dur= '1s' begin= '0.9166666666666666s' repeatCount= 'indefinite' /%3E%3C/rect%3E%3C/svg%3E ");
        }

        .ring-loader .load-wrap {
            background-image: url("data:image/svg+xml,%3Csvg xmlns= 'http://www.w3.org/2000/svg' viewBox= '0 0 32 32' width= '72' height= '72' fill= 'rgba%2851%2C51%2C51%2C0.25%29' %3E %3Cpath opacity= '.25' d= 'M16 0 A16 16 0 0 0 16 32 A16 16 0 0 0 16 0 M16 4 A12 12 0 0 1 16 28 A12 12 0 0 1 16 4' /%3E %3Cpath d= 'M16 0 A16 16 0 0 1 32 16 L28 16 A12 12 0 0 0 16 4z' %3E %3CanimateTransform attributeName= 'transform' type= 'rotate' from= '0 16 16' to= '360 16 16' dur= '0.8s' repeatCount= 'indefinite' /%3E %3C/path%3E %3C/svg%3E ");
        }

        .hourglass-loader .load-wrap {
            background-image: url("data:image/svg+xml,%3Csvg xmlns= 'http://www.w3.org/2000/svg' viewBox= '0 0 32 32' width= '72' height= '72' fill= 'rgba%2851%2C51%2C51%2C0.25%29' %3E %3Cpath transform= 'translate(2)' d= 'M0 12 V20 H4 V12z' %3E %3Canimate attributeName= 'd' values= 'M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur= '1.2s' repeatCount= 'indefinite' begin= '0' keytimes= '0;.2;.5;1' keySplines= '0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode= 'spline' /%3E %3C/path%3E %3Cpath transform= 'translate(8)' d= 'M0 12 V20 H4 V12z' %3E %3Canimate attributeName= 'd' values= 'M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur= '1.2s' repeatCount= 'indefinite' begin= '0.2' keytimes= '0;.2;.5;1' keySplines= '0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode= 'spline' /%3E %3C/path%3E %3Cpath transform= 'translate(14)' d= 'M0 12 V20 H4 V12z' %3E %3Canimate attributeName= 'd' values= 'M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur= '1.2s' repeatCount= 'indefinite' begin= '0.4' keytimes= '0;.2;.5;1' keySplines= '0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode= 'spline' /%3E %3C/path%3E %3Cpath transform= 'translate(20)' d= 'M0 12 V20 H4 V12z' %3E %3Canimate attributeName= 'd' values= 'M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur= '1.2s' repeatCount= 'indefinite' begin= '0.6' keytimes= '0;.2;.5;1' keySplines= '0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode= 'spline' /%3E %3C/path%3E %3Cpath transform= 'translate(26)' d= 'M0 12 V20 H4 V12z' %3E %3Canimate attributeName= 'd' values= 'M0 12 V20 H4 V12z; M0 4 V28 H4 V4z; M0 12 V20 H4 V12z; M0 12 V20 H4 V12z' dur= '1.2s' repeatCount= 'indefinite' begin= '0.8' keytimes= '0;.2;.5;1' keySplines= '0.2 0.2 0.4 0.8;0.2 0.6 0.4 0.8;0.2 0.8 0.4 0.8' calcMode= 'spline' /%3E %3C/path%3E %3C/svg%3E ");
        }
    </style>
    <link rel="stylesheet" id="the7-font-css" href="assets/css/icomoon-the7-font.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="dt-fontello-css" href="assets/css/fontello.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="the7pt-static-css" href="assets/css/post-type.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="dt-custom-css" href="assets/css/custom.css" type="text/css" media="all">
    <link rel="stylesheet" id="dt-media-css" href="assets/css/media.css" type="text/css" media="all">
    <link rel="stylesheet" id="the7-mega-menu-css" href="assets/css/mega-menu.css" type="text/css" media="all">
    <link rel="stylesheet" id="the7-elements-albums-portfolio-css" href="assets/css/the7-elements-albums-portfolio.css"
          type="text/css" media="all">
    <link rel="stylesheet" id="the7-elements-css" href="assets/css/post-type-dynamic.css" type="text/css" media="all">
    <link rel="stylesheet" id="style-css" href="assets/css/style.css" type="text/css" media="all">
    <meta property="og:site_name" content="HIKOREAN CONTRACT">
    <meta property="og:title" content="Hợp đồng đào tạo | HIKOREAN">
    <meta property="og:image" content="https://hikorean.edu.vn/contract/assets/images/banner_og.png">
    <meta property="og:url" content="https://hikorean.edu.vn/contract">
    <meta property="og:type" content="article">
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <link rel="icon" href="https://hikorean.edu.vn/contract/assets/images/icon.png" type="image/png">
    <style id="the7-custom-inline-css" type="text/css">
        .sub-nav .menu-item i.fa,
        .sub-nav .menu-item i.fas,
        .sub-nav .menu-item i.far,
        .sub-nav .menu-item i.fab {
            text-align: center;
            width: 1.25em;
        }
    </style>
</head>
<body class="page-template-default page page-id-463 wp-embed-responsive the7-core-ver-2.2.8 boxed-layout dt-responsive-on header-side-right sticky-header slide-header-animation srcset-enabled btn-flat custom-btn-color custom-btn-hover-color sticky-mobile-header first-switch-logo-left first-switch-menu-right second-switch-logo-left second-switch-menu-right right-mobile-menu layzr-loading-on popup-message-style the7-ver-8.4.1 wpb-js-composer js-comp-ver-6.1 vc_responsive no-mobile closed-overlay-mobile-header">
    <!-- The7 8.4.1 -->
    <div id="load" class="spinner-loader loader-removed">
        <div class="load-wrap"></div>
    </div>
    <div id="page" class="boxed closed-mobile-header">


        <div id="main" class="sidebar-none sidebar-divider-vertical">
            <div class="main-gradient"></div>
            <div class="wf-wrap">
                <div class="wf-container-main">
                    <div id="content" class="content" role="main">
                        <style type="text/css">
                            body #gform_wrapper_75 .gform_footer .gform_button,
                            body #gform_wrapper_75 .gform_page_footer .gform_button,
                            body #gform_wrapper_75 .gform_page_footer .gform_previous_button,
                            body #gform_wrapper_75 .gform_page_footer .gform_next_button {
                                border-style: solid;
                                font-weight: normal;
                                font-weight: bold;
                                border-width: 0px;
                            }

                            body #gform_wrapper_75 .gform_footer .gform_button:hover,
                            body #gform_wrapper_75 .gform_page_footer .gform_button:hover,
                            body #gform_wrapper_75 .gform_page_footer .gform_previous_button:hover,
                            body #gform_wrapper_75 .gform_page_footer .gform_next_button:hover {
                                border-style: solid;
                            }

                            body #gform_wrapper_75 .gform_footer button.mdc-button {
                                font-weight: normal;
                                font-weight: bold;
                                border-width: 0px;
                            }

                            body #gform_wrapper_75 .gform_footer button.mdc-button:hover {
                            }

                            body #gform_wrapper_75 .gform_footer,
                            body #gform_wrapper_75 .gform_page_footer {
                                text-align: center;
                            }

                            body #gform_wrapper_75 .gform_body .gform_fields .gfield input[type=text],
                            body #gform_wrapper_75 .gform_body .gform_fields .gfield input[type=email],
                            body #gform_wrapper_75 .gform_body .gform_fields .gfield input[type=tel],
                            body #gform_wrapper_75 .gform_body .gform_fields .gfield input[type=url],
                            body #gform_wrapper_75 .gform_body .gform_fields .gfield input[type=password],
                            body #gform_wrapper_75 .gform_body .gform_fields .gfield input[type=number] {
                                font-weight: normal;
                                font-weight: bold;
                                color: #3f3f3f;
                                font-size: 16px;
                                border-radius: 6px;
                                -web-border-radius: 6px;
                                -moz-border-radius: 6px;
                                max-width: 100%;
                                border-width: 1px;
                            }

                            body #gform_wrapper_75 .gform_body .gform_fields .gfield textarea {
                                border-width: 1px;
                                font-size: 16px;
                                color: #3f3f3f;
                                border-radius: 6px;
                                -web-border-radius: 6px;
                                -moz-border-radius: 6px;
                            }

                            body #gform_wrapper_75 .gfield_radio label {
                                line-height: 30px;
                                font-size: 16px;
                                width: auto;
                            }

                            body #gform_wrapper_75 .gfield_checkbox label,
                            body #gform_wrapper_75 .gfield .ginput_container_consent label {
                                line-height: 30px;
                                font-size: 16px;
                            }

                            body #gform_wrapper_75 li .gfield_checkbox label,
                            body #gform_wrapper_75 li.gfield .ginput_container_consent label {
                                width: 100%;
                            }

                            body #gform_wrapper_75 .gform_body .gform_fields .gfield .gfield_label {
                                font-weight: normal;
                                font-weight: bold;
                                color: #fb870c;
                                font-size: 16px;
                            }

                            body #gform_wrapper_75 .gform_body .gform_fields .gfield .gfield_label .gfield_required {
                                color: ;
                            }

                            /* Option to style placeholder */
                            body #gform_wrapper_75 ::-webkit-input-placeholder {
                                /* Chrome/Opera/Safari */
                                font-weight: normal;
                                font-weight: bold;
                                color: #848484;
                                font-size: 16px;
                            }

                            body #gform_wrapper_75 ::-moz-placeholder {
                                /* Firefox 19+ */
                                font-weight: normal;
                                font-weight: bold;
                                color: #848484;
                                font-size: 16px;
                            }

                            body #gform_wrapper_75 :-ms-input-placeholder {
                                /* IE 10+ */
                                font-weight: normal;
                                font-weight: bold;
                                color: #848484;
                                font-size: 16px;
                            }

                            body #gform_wrapper_75 :-moz-placeholder {
                                /* Firefox 18- */
                                font-weight: normal;
                                font-weight: bold;
                                color: #848484;
                                font-size: 16px;
                            }

                            /* Styling for Tablets */
                            @media only screen and (max-width: 800px) and (min-width: 481px) {
                            }

                            /* Styling for phones */
                            @media only screen and (max-width: 480px) {
                            }

                            /*Option to add custom CSS */
                        </style>
                        <div class="gf_browser_chrome gform_wrapper gravity-theme" id="gform_wrapper_75" style="">
                            <div id="gf_75" class="gform_anchor" tabindex="-1"></div>
                            <form method="post" enctype="multipart/form-data" target="gform_ajax_frame_75" id="gform_75"
                                  action="" novalidate="">
                                <div class="gform_body gform-body">
                                    <div id="gform_fields_75"
                                         class="gform_fields top_label form_sublabel_below description_below">
                                        <div id="field_75_1"
                                             class="gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_visible">
                                            <a href="https://hikorean.edu.vn/">
                                                <img class="aligncenter wp-image-80 size-full"
                                                     src="assets/images/banner.jpg"
                                                     alt="Hệ thống giáo dục quốc tế ECorp English" width="100%">
                                            </a>
                                            <p></p>
                                            <table style="width: 100%; border: none;">
                                                <tbody>
                                                <tr style="border: none;" valign="top">
                                                    <td style="width: 53%; border: none;">
                                                        <span style="font-weight: 400; border: none; align: center">
                                                            <p style="text-align: center; line-height: 17px;">
                                                                <strong>CÔNG TY TNHH ĐÀO TẠO VÀ PHÁT TRIỂN NHÂN LỰC
                                                                    HIKOREAN</strong>
                                                            </p>
                                                            <p style="text-align: center; line-height: 15px;">
                                                                <strong>MST: 0108820897</strong>
                                                            </p>
                                                            <p style="text-align: center; line-height: 15px;">
                                                                <strong>-------------</strong>
                                                            </p>
                                                            <p style="text-align: center; line-height: 15px;">
                                                                <span style="font-size: 14px;">Mã hợp đồng: …….. /
                                                                    HĐ-ĐT</span>
                                                            </p>
                                                        </span>
                                                    </td>
                                                    <td style="width: 50%; border: none;">
                                                        <p style="text-align: center; line-height: 18px;">
                                                            <strong>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</strong>
                                                        </p>
                                                        <p style="text-align: center; line-height: 15px;">
                                                            <strong>Độc lập - Tự do - Hạnh phúc</strong>
                                                        </p>
                                                        <p style="text-align: center; line-height: 15px;">
                                                            <strong>-------------</strong>
                                                        </p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <p style="text-align: center;">
                                                <span style="font-size: 25px; color:#fb870c;">
                                                    <strong>HỢP ĐỒNG ĐÀO TẠO</strong>
                                                </span>
                                            </p>
                                            <p>Hôm nay, ngày 13/11/2023, tại văn phòng Công ty TNHH
                                                Đào tạo và Phát triển nhân lực Hikorean. </p>
                                            <p>Chúng tôi gồm:</p>
                                            <span style="color:#fb870c;">
                                                <strong>BÊN A: HỌC VIÊN&nbsp;</strong>
                                            </span>
                                        </div>
                                        <div id="field_75_3"
                                             class="gfield gfield--width-third gf_left_third gfield--width-third gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                            <label for="input_75_3">Họ và tên<span
                                                        class="gfield_required">
                                                    <span class="gfield_required gfield_required_asterisk">*</span>
                                                </span>
                                            </label>
                                            <div class="ginput_container ginput_container_text">
                                                <input name="input_3" id="input_75_3" type="text" value="<?= $name ?>"
                                                       class="large"
                                                       placeholder="Họ và tên (*)" aria-required="true"
                                                       aria-invalid="false">
                                            </div>
                                        </div>
                                        <div id="field_75_5"
                                             class="gfield gfield--width-third gf_right_third gfield--width-third gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                            <label for="input_75_5">Số điện thoại <span
                                                        class="gfield_required">
                                                    <span class="gfield_required gfield_required_asterisk">*</span>
                                                </span>
                                            </label>
                                            <div class="ginput_container ginput_container_text">
                                                <input name="input_5" id="input_75_5" type="text" value="<?= $phone ?>"
                                                       class="large"
                                                       placeholder="Số điện thoại " aria-required="true"
                                                       aria-invalid="false">
                                            </div>
                                        </div>
                                        <div id="field_75_4"
                                             class="gfield gfield--width-third gf_middle_third gfield--width-third gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                            <label for="input_75_4">Ngày sinh <span
                                                        class="gfield_required">
                                                    <span class="gfield_required gfield_required_asterisk">*</span>
                                                </span>
                                            </label>
                                            <div class="ginput_container ginput_container_text">
                                                <input name="input_4" id="input_75_4" type="text"
                                                       value="<?= $birthDate ?>" class="large"
                                                       placeholder="Ngày sinh " aria-required="true"
                                                       aria-invalid="false">
                                            </div>
                                        </div>
                                        <div id="field_75_6"
                                             class="gfield gfield--width-third gf_left_third gfield--width-third gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                            <label for="input_75_6">Số CMND / CCCD <span
                                                        class="gfield_required">
                                                    <span class="gfield_required gfield_required_asterisk">*</span>
                                                </span>
                                            </label>
                                            <div class="ginput_container ginput_container_text">
                                                <input name="input_6" id="input_75_6" type="text" value="<?= $cmtnd ?>"
                                                       class="large"
                                                       placeholder="Số CMND / CCCD " aria-required="true"
                                                       aria-invalid="false">
                                            </div>
                                        </div>
                                        <div id="field_75_7"
                                             class="gfield gfield--width-third gf_middle_third gfield--width-third gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                            <label for="input_75_7">Ngày cấp <span
                                                        class="gfield_required">
                                                    <span class="gfield_required gfield_required_asterisk">*</span>
                                                </span>
                                            </label>
                                            <div class="ginput_container ginput_container_text">
                                                <input name="input_7" id="input_75_7" type="text"
                                                       value="<?= $cmtnd_date ?>" class="large"
                                                       placeholder="Ngày cấp " aria-required="true"
                                                       aria-invalid="false">
                                            </div>
                                        </div>
                                        <div id="field_75_13"
                                             class="gfield gfield--width-third gf_right_third gfield--width-third gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                            <label for="input_75_13">Nơi cấp <span
                                                        class="gfield_required">
                                                    <span class="gfield_required gfield_required_asterisk">*</span>
                                                </span>
                                            </label>
                                            <div class="ginput_container ginput_container_text">
                                                <input name="input_13" id="input_75_13" type="text"
                                                       value="<?= $cmtnd_place ?>"
                                                       class="large" placeholder="Nơi cấp " aria-required="true"
                                                       aria-invalid="false">
                                            </div>
                                        </div>
                                        <div id="field_75_9"
                                             class="gfield gfield--width-third gf_left_third gfield--width-third gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                            <label for="input_75_9">Trường / Nơi công tác <span
                                                        class="gfield_required">
                                                    <span class="gfield_required gfield_required_asterisk">*</span>
                                                </span>
                                            </label>
                                            <div class="ginput_container ginput_container_text">
                                                <input name="input_9" id="input_75_9" type="text"
                                                       value="<?= $company ?>" class="large"
                                                       placeholder="Trường / Nơi công tác" aria-required="true"
                                                       aria-invalid="false">
                                            </div>
                                        </div>
                                        <div id="field_75_11"
                                             class="gfield gfield--width-third gf_middle_third gfield--width-third field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                            <label for="input_75_11">Facebook / Zalo</label>
                                            <div class="ginput_container ginput_container_text">
                                                <input name="input_11" id="input_75_11" type="text"
                                                       value="<?= $facebook ?>"
                                                       class="large" placeholder="Facebook / Zalo" aria-invalid="false">
                                            </div>
                                        </div>
                                        <div id="field_75_8"
                                             class="gfield gfield--width-third gf_right_third gfield--width-third field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                            <label for="input_75_8">Email <span
                                                        class="gfield_required">
                                                    <span class="gfield_required gfield_required_asterisk">*</span>
                                                </span></label>
                                            <div class="ginput_container ginput_container_text">
                                                <input name="input_8" id="input_75_8" type="text" value="<?= $email ?>"
                                                       class="large"
                                                       placeholder="Email (*)" aria-invalid="false">
                                            </div>
                                        </div>
                                        <div id="field_75_14"
                                             class="gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_visible">
                                            <p>
                                                <strong style="color:#fb870c; word-spacing: normal;">BÊN B: CÔNG TY TNHH
                                                    ĐÀO TẠO VÀ PHÁT TRIỂN NHÂN LỰC HIKOREAN</strong>
                                            </p>
                                            <p>Họ tên: <strong>Nguyễn Thị Phương Thuý</strong>
                                            </p>
                                            <p>Chức vụ: <strong>Giám đốc</strong>
                                            </p>
                                            <p>Trụ sở chính: <strong>Số 3i4 , ngõ 114 Trung Kính, Yên Hoàn, Cầu Giấy, Hà
                                                    Nộ </strong>
                                            </p>
                                            <p>Số điện thoại: <strong>091 119 66 32</strong>
                                            </p>
                                            <p style="text-align: justify;">Thỏa thuận ký kết hợp đồng đào tạo và cam
                                                kết làm đúng những điều sau đây:</p>
                                            <p>
                                                <span style="color:#fb870c;">
                                                    <strong>Điều 1: Nội dung đào tạo</strong>
                                                </span>
                                            </p>
                                            <p style="text-align: justify;">Bên B cung cấp dịch vụ đào tạo cho bên A
                                                theo chương trình đào tạo tiếng Hàn với nội dung cụ thể như sau:</p>
                                            <p style="text-align: justify;">
                                                <strong>
                                                    <span style="color:#fb870c;">1.1. Nội dung chương trình học:</span>
                                                </strong>
                                            </p>
                                        </div>
                                        <fieldset id="field_75_28"
                                                  class="gfield gfield--width-full field_sublabel_below field_description_below gfield_visibility_visible">
                                            <legend class="gfield_label gfield_label_before_complex">Học viên chọn lộ
                                                trình đã đăng ký theo các level dưới đây:
                                            </legend>
                                            <div class="ginput_container ginput_container_checkbox">
                                                <div class="gfield_checkbox" id="input_75_28">
                                                    <div class="gchoice gchoice_75_28_1">
                                                        <input class="gfield-choice-input" name="input_choose[]"
                                                               type="checkbox" <?= strpos($class, 'Lớp sơ cấp 1 – Tiếng Hàn dành cho người mới bắt đầu') !== false ? 'checked' : '' ?>
                                                               value="Lớp sơ cấp 1 – Tiếng Hàn dành cho người mới bắt đầu">
                                                        <label for="choice_75_28_1" id="label_75_28_1">
                                                            <p style="text-align: justify;">
                                                                <span style="color:#fb870c;">
                                                                    <strong>1. Lớp sơ cấp 1 – Tiếng Hàn dành cho người
                                                                        mới bắt đầu</strong>
                                                                </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Số buổi: 33
                                                                    buổi.</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Số bài: Bảng chữ
                                                                    cái + 15 bài quyển 1.</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Tài liệu
                                                                    học: </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Giáo trình: Funfun
                                                                    Korean -재미있는 한국어 của trường ĐH KORYO Hàn Quốc.
                                                                    (Trung tâm sẽ tặng bản mềm, học viên nào muốn mua
                                                                    bản cứng có thể liên hệ trợ giảng).</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Video xem trước khi
                                                                    vào lớp. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Bộ quizlet học từ
                                                                    vựng, ngữ pháp. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Loại lớp: Thực hành
                                                                    tiếng: Luyện tập kỹ năng Nghe – Nói – Đọc –
                                                                    Viết. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Đầu ra: Tương đương
                                                                    Topik 1 - Nắm vững kiến thức cơ bản, bắt đầu với
                                                                    bảng chữ cái và những chủ đề gần gũi trong cuộc
                                                                    sống. Tiếp cận - 4 kỹ năng NGHE - NÓI - ĐỌC - VIẾT
                                                                    với 50 ngữ pháp và 350 từ vựng. </span>
                                                            </p>
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_28_2">
                                                        <input class="gfield-choice-input" name="input_choose[]" <?= strpos($class, 'Lớp sơ cấp 2 – Tiếng Hàn cơ bản') !== false ? 'checked' : '' ?>
                                                               type="checkbox" value="Lớp sơ cấp 2 – Tiếng Hàn cơ bản">
                                                        <label for="choice_75_28_2" id="label_75_28_2">
                                                            <p style="text-align: justify;">
                                                                <span style="color:#fb870c;">
                                                                    <strong>2. Lớp sơ cấp 2 – Tiếng Hàn cơ
                                                                        bản. </strong>
                                                                </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Số buổi: 30
                                                                    buổi.</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Số bài: 15 bài
                                                                    quyển 2</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Tài liệu
                                                                    học: </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Giáo trình: Funfun
                                                                    Korean -재미있는 한국어 của trường ĐH KORYO Hàn Quốc.
                                                                    (Trung tâm sẽ tặng bản mềm, học viên nào muốn mua
                                                                    bản cứng có thể liên hệ trợ giảng)</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Video xem trước khi
                                                                    vào lớp. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Bộ quizlet học từ
                                                                    vựng, ngữ pháp. </span>
                                                            </p>

                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Loại lớp: Thực hành
                                                                    tiếng: Luyện tập kỹ năng Nghe – Nói – Đọc –
                                                                    Viết. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Đầu ra: </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Tương đương Topik
                                                                    2 </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Tiếp cận 500 từ
                                                                    vựng với 15 chủ đề trong bài học. Sử dụng thành thạo
                                                                    60 cấu trúc ngữ pháp cao cấp chuyên sâu. Có khả năng
                                                                    đứng nói cơ bản các chủ đề đã học. </span>
                                                            </p>
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_28_4">
                                                        <input class="gfield-choice-input" name="input_choose[]"
                                                               type="checkbox" <?= strpos($class, 'Lớp Luyện thi Topik 1-2') !== false ? 'checked' : '' ?>
                                                               value="Lớp trung cấp 1 – Tiếng Hàn Trung cấp">
                                                        <label for="choice_75_28_4" id="label_75_28_4">
                                                            <p style="text-align: justify;">
                                                                <span style="color:#fb870c;">
                                                                    <strong>3. Lớp Luyện thi Topik 1-2. </strong>
                                                                </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Số buổi: 20
                                                                    buổi.</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Luyện thi: 2 kỹ
                                                                    năng Nghe - Đọc theo mục tiêu đầu ra Topik 1, Topik
                                                                    2. </span>
                                                            </p>

                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Giáo trình: Trung
                                                                    tâm trực tiếp biên soạn.</span>
                                                            </p>

                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Phương pháp
                                                                    học: </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Củng cố ngữ pháp và
                                                                    luyện kỹ năng nghe, đọc.</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Thi thử và đưa ra
                                                                    chiến thuật làm đề. </span>
                                                            </p>

                                                        </label>
                                                    </div>

                                                    <div class="gchoice gchoice_75_28_4">
                                                        <input class="gfield-choice-input" name="input_choose[]"
                                                               type="checkbox" <?= strpos($class, 'Lớp trung cấp 1 – Tiếng Hàn Trung cấp') !== false ? 'checked' : '' ?>
                                                               value="Lớp trung cấp 1 – Tiếng Hàn Trung cấp">
                                                        <label for="choice_75_28_4" id="label_75_28_4">
                                                            <p style="text-align: justify;">
                                                                <span style="color:#fb870c;">
                                                                    <strong>4. Lớp trung cấp 1 – Tiếng Hàn Trung
                                                                        cấp. </strong>
                                                                </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Số buổi: 30
                                                                    buổi.</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Số bài: 15 bài
                                                                    quyển 3 </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Tài liệu
                                                                    học: </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Giáo trình: Funfun
                                                                    Korean -재미있는 한국어 của trường ĐH KORYO Hàn Quốc.
                                                                    (Trung tâm sẽ tặng bản mềm, học viên nào muốn mua
                                                                    bản cứng có thể liên hệ trợ giảng)</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Video xem trước khi
                                                                    vào lớp. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Bộ quizlet học từ
                                                                    vựng, ngữ pháp. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Ebook độc quyền
                                                                    Hikorean. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Loại lớp: Thực hành
                                                                    tiếng: Luyện tập kỹ năng Nghe – Nói – Đọc –
                                                                    Viết. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Đầu ra: </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Tương đương Topik
                                                                    3</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Nắm vững kiến thức
                                                                    cơ bản, bắt đầu với bảng chữ cái và những chủ đề gần
                                                                    gũi trong cuộc sống. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Từ vựng: Tiếp cận
                                                                    1000 từ vựng với 15 chủ đề trong bài học. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Ngữ pháp: Sử dụng
                                                                    thành thạo 70 cấu trúc ngữ pháp cao cấp chuyên
                                                                    sâu. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Giao tiếp: Học về
                                                                    các chủ đề xung quanh cuộc sống như: du lịch, công
                                                                    việc, sở thích sức khoẻ và cuộc sống, Có khả năng
                                                                    đứng nói cơ bản các chủ đề đã học. </span>
                                                            </p>
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_28_5">
                                                        <input class="gfield-choice-input" name="input_choose[]"
                                                               type="checkbox" <?= strpos($class, 'Lớp trung cấp 2. – Tiếng Hàn Trung cấp') !== false ? 'checked' : '' ?>
                                                               value="Lớp trung cấp 2. – Tiếng Hàn Trung cấp">
                                                        <label for="choice_75_28_5" id="label_75_28_5">
                                                            <p style="text-align: justify;">
                                                                <span style="color:#fb870c;">
                                                                    <strong>5. Lớp trung cấp 2. – Tiếng Hàn Trung
                                                                        cấp</strong>
                                                                </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Số buổi: 30
                                                                    buổi.</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Số bài: 15 bài
                                                                    quyển 4 </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Tài liệu
                                                                    học: </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Giáo trình: Funfun
                                                                    Korean -재미있는 한국어 của trường ĐH KORYO Hàn Quốc.
                                                                    (Trung tâm sẽ tặng bản mềm, học viên nào muốn mua
                                                                    bản cứng có thể liên hệ trợ giảng)</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Video xem trước khi
                                                                    vào lớp. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Bộ quizlet học từ
                                                                    vựng, ngữ pháp. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Ebook độc quyền
                                                                    Hikorean. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Loại lớp: Thực hành
                                                                    tiếng: Luyện tập kỹ năng Nghe – Nói – Đọc –
                                                                    Viết. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Đầu ra: </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Tương đương Topik
                                                                    3-4 </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Từ vựng: Tiếp cận
                                                                    100 từ vựng với 15 chủ đề trong bài học. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Ngữ pháp: Sử dụng
                                                                    thành thạo 70 cấu trúc ngữ pháp cao cấp chuyên
                                                                    sâu. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Giao tiếp: Học về
                                                                    các chủ đề xung quanh cuộc sống như: du lịch, công
                                                                    việc, sở thích sức khoẻ và cuộc sống, Có khả năng
                                                                    đứng nói cơ bản các chủ đề đã học. </span>
                                                            </p>
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_28_6">
                                                        <input class="gfield-choice-input" name="input_choose[]" <?= strpos($class, 'Lớp Luyện thi Topik 3-4') !== false ? 'checked' : '' ?>
                                                               type="checkbox" value="Lớp Luyện thi Topik 3-4">
                                                        <label for="choice_75_28_6" id="label_75_28_6">
                                                            <p style="text-align: justify;">
                                                                <span style="color:#fb870c;">
                                                                    <strong>6. Lớp Luyện thi Topik 3-4</strong>
                                                                </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Số buổi: 48
                                                                    buổi.</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Luyện thi: 3 kỹ
                                                                    năng Nghe Đọc Viết theo mục tiêu đầu ra Topik
                                                                    3-4 </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Giáo trình: 2 quyển
                                                                    luyện đề Master Topik, 1 quyển ngữ pháp - từ vựng
                                                                    “Topik from Zero to Hero”. (Học phí chưa bao gồm
                                                                    giáo trình)</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Phương pháp
                                                                    học:</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Giai đoạn 1: Củng
                                                                    cố ngữ pháp và luyện kỹ năng nghe, đọc. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Giai đoạn 2: Học kỹ
                                                                    năng viết chuyên sâu. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Giai đoạn 3: Thi
                                                                    thử, đưa ra chiến thuật để lấy điểm cao. </span>
                                                            </p>
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_28_7">
                                                        <input class="gfield-choice-input" name="input_choose[]" <?= strpos($class, 'Lớp Luyện thi Topik 5-6') !== false ? 'checked' : '' ?>
                                                               type="checkbox" value="Lớp Luyện thi Topik 5-6">
                                                        <label for="choice_75_28_7" id="label_75_28_7">
                                                            <p style="text-align: justify;">
                                                                <span style="color:#fb870c;">
                                                                    <strong>7. Lớp Luyện thi Topik 5-6 </strong>
                                                                </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Số buổi: 40
                                                                    buổi.</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Luyện thi: 3 kỹ
                                                                    năng Nghe Đọc Viết theo mục tiêu đầu ra Topik
                                                                    5-6. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Giáo trình: Trung
                                                                    tâm sẽ gửi tặng các bạn bản mềm, nếu muốn mua bản
                                                                    cứng, vui lòng liên hệ trợ giảng. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Phương pháp
                                                                    học:</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Giai đoạn 1: CHUẨN
                                                                    BỊ HÀNH TRANG. Buổi 1-7: Nạp 49 điểm Ngữ pháp cao
                                                                    cấp. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Giai đoạn 2: XUẤT
                                                                    PHÁT. Buổi 8-23 : Kỹ năng Đọc (8 Buổi). Kỹ năng Nghe
                                                                    (8 Buổi) </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Giai đoạn 3: TĂNG
                                                                    TỐC. Buổi 24-37: Kỹ năng Viết. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Giai đoạn 4: VỀ
                                                                    ĐÍCH. Buổi 38-40: Tổng kết khóa học, thi thử,đưa ra
                                                                    chiến thuật để lấy điểm cao. </span>
                                                            </p>
                                                        </label>
                                                    </div>

                                                    <div class="gchoice gchoice_75_28_8">
                                                        <input class="gfield-choice-input" name="input_choose[]" <?= strpos($class, 'Lớp Luyện thi EPS - XKLĐ') !== false ? 'checked' : '' ?>
                                                               type="checkbox" value="Lớp Luyện thi EPS - XKLĐ">
                                                        <label for="choice_75_28_8" id="label_75_28_8">
                                                            <p style="text-align: justify;">
                                                                <span style="color:#fb870c;">
                                                                    <strong>8. Lớp Luyện thi EPS - XKLĐ</strong>
                                                                </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Thời lượng: 240
                                                                    giờ.</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Số bài: 60 bài học
                                                                    và luyện thi. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Tài liệu
                                                                    học </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Bộ sách 60 bài
                                                                    EPS </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Tài khoản luyện đề
                                                                    thi trên E-learning.</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Loại lớp: Thi chứng
                                                                    chỉ</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">- Phương pháp
                                                                    học:</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Học viên được học
                                                                    các kiến thức cơ bản bằng giáo trình 60 bài
                                                                    EPS. </span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ 10 bài kiểm tra một
                                                                    lần.</span>
                                                            </p>
                                                            <p style="text-align: justify;">
                                                                <span style="text-align: justify;">+ Bắt đầu làm quen
                                                                    với đề thi từ bài 41.</span>
                                                            </p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset id="field_75_41"
                                                  class="gfield gfield--width-full gf_list_2col gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                            <legend class="gfield_label">1.2. Hình thức đào tạo <span
                                                        class="gfield_required">
                                                    <span class="gfield_required gfield_required_asterisk">*</span>
                                                </span>
                                            </legend>
                                            <div class="ginput_container ginput_container_radio">
                                                <div class="gfield_radio" id="input_75_41"
                                                     style="grid-template-columns:repeat(3,1fr)">
                                                    <div class="gchoice gchoice_75_41_0">
                                                        <input class="gfield-choice-input" name="input_41" type="radio"
                                                               value="1" <?= $htdt == 1 ? 'checked' : '' ?> id="choice_75_41_0">
                                                        <label for="choice_75_41_0" id="label_75_41_0">
                                                            <strong>Đào tạo trực tiếp</strong>
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_41_1">
                                                        <input class="gfield-choice-input" name="input_41" type="radio"
                                                               value="2" <?= $htdt == 2 ? 'checked' : '' ?> id="choice_75_41_1">
                                                        <label for="choice_75_41_1" id="label_75_41_1">
                                                            <strong>Đào tạo trực tuyến</strong>
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_41_2">
                                                        <input class="gfield-choice-input" name="input_41" type="radio"
                                                               value="3" <?= $htdt == 3 ? 'checked' : '' ?> id="choice_75_41_2">
                                                        <label for="choice_75_41_2" id="label_75_41_2">
                                                            <strong>Đào tạo 1-1</strong>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset id="field_75_31"
                                                  class="gfield gfield--width-half field_sublabel_below field_description_below gfield_visibility_visible"
                                                  style="display: none;">
                                            <legend class="gfield_label gfield_label_before_complex">1.3. Lịch học dự
                                                kiến khóa đầu tiên
                                            </legend>
                                            <div class="ginput_container ginput_container_checkbox">
                                                <div class="gfield_checkbox" id="input_75_31">
                                                    <div class="gchoice gchoice_75_31_1">
                                                        <input class="gfield-choice-input" name="input_31.1"
                                                               type="checkbox" value="Ca sáng: 9h00 đến 11h00"
                                                               id="choice_75_31_1" disabled="disabled">
                                                        <label for="choice_75_31_1" id="label_75_31_1">Ca sáng: 9h00 đến
                                                            11h00</label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_31_2">
                                                        <input class="gfield-choice-input" name="input_31.2"
                                                               type="checkbox" value="Ca chiều: 15h00 đến 17h00"
                                                               id="choice_75_31_2" disabled="disabled">
                                                        <label for="choice_75_31_2" id="label_75_31_2">Ca chiều: 15h00
                                                            đến 17h00</label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_31_3">
                                                        <input class="gfield-choice-input" name="input_31.3"
                                                               type="checkbox" value="Ca tối: 17h45 đến 19h45"
                                                               id="choice_75_31_3" disabled="disabled">
                                                        <label for="choice_75_31_3" id="label_75_31_3">Ca tối: 17h45 đến
                                                            19h45</label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_31_4">
                                                        <input class="gfield-choice-input" name="input_31.4"
                                                               type="checkbox" value="Ca tối muộn: 19h45 đến 21h45"
                                                               id="choice_75_31_4" disabled="disabled">
                                                        <label for="choice_75_31_4" id="label_75_31_4">Ca tối muộn:
                                                            19h45 đến 21h45</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset id="field_75_30"
                                                  class="gfield gfield--width-half field_sublabel_below field_description_below gfield_visibility_visible"
                                                  style="display: none;">
                                            <legend class="gfield_label gfield_label_before_complex">Ngày học dự kiến
                                            </legend>
                                            <div class="ginput_container ginput_container_checkbox">
                                                <div class="gfield_checkbox" id="input_75_30">
                                                    <div class="gchoice gchoice_75_30_1">
                                                        <input class="gfield-choice-input" name="input_30.1"
                                                               type="checkbox" value="Thứ 2 - 6" id="choice_75_30_1"
                                                               disabled="disabled">
                                                        <label for="choice_75_30_1" id="label_75_30_1">Thứ 2 - 6</label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_30_2">
                                                        <input class="gfield-choice-input" name="input_30.2"
                                                               type="checkbox" value="Thứ 3 - 5" id="choice_75_30_2"
                                                               disabled="disabled">
                                                        <label for="choice_75_30_2" id="label_75_30_2">Thứ 3 - 5</label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_30_3">
                                                        <input class="gfield-choice-input" name="input_30.3"
                                                               type="checkbox" value="Thứ 4 - 7" id="choice_75_30_3"
                                                               disabled="disabled">
                                                        <label for="choice_75_30_3" id="label_75_30_3">Thứ 4 - 7</label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_30_4">
                                                        <input class="gfield-choice-input" name="input_30.4"
                                                               type="checkbox" value="Khác" id="choice_75_30_4"
                                                               disabled="disabled">
                                                        <label for="choice_75_30_4" id="label_75_30_4">Khác</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset id="field_75_42"
                                                  class="gfield gfield--width-half field_sublabel_below field_description_below gfield_visibility_visible"
                                                  style="display: none;">
                                            <legend class="gfield_label gfield_label_before_complex">1.3. Lịch học dự
                                                kiến khóa đầu tiên
                                            </legend>
                                            <div class="ginput_container ginput_container_checkbox">
                                                <div class="gfield_checkbox" id="input_75_42">
                                                    <div class="gchoice gchoice_75_42_1">
                                                        <input class="gfield-choice-input" name="input_42.1"
                                                               type="checkbox" value="Ca sáng: 9h00 đến 10h30"
                                                               id="choice_75_42_1" disabled="disabled">
                                                        <label for="choice_75_42_1" id="label_75_42_1">Ca sáng: 9h00 đến
                                                            10h30</label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_42_2">
                                                        <input class="gfield-choice-input" name="input_42.2"
                                                               type="checkbox" value="Ca chiều: 15h00 đến 16h30"
                                                               id="choice_75_42_2" disabled="disabled">
                                                        <label for="choice_75_42_2" id="label_75_42_2">Ca chiều: 15h00
                                                            đến 16h30</label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_42_3">
                                                        <input class="gfield-choice-input" name="input_42.3"
                                                               type="checkbox" value="Ca tối 1: 17h30 đến 19h"
                                                               id="choice_75_42_3" disabled="disabled">
                                                        <label for="choice_75_42_3" id="label_75_42_3">Ca tối 1: 17h30
                                                            đến 19h</label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_42_4">
                                                        <input class="gfield-choice-input" name="input_42.4"
                                                               type="checkbox" value="Ca tối 2: 19h đến 20h30"
                                                               id="choice_75_42_4" disabled="disabled">
                                                        <label for="choice_75_42_4" id="label_75_42_4">Ca tối 2: 19h đến
                                                            20h30</label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_42_5">
                                                        <input class="gfield-choice-input" name="input_42.5"
                                                               type="checkbox" value="Ca tối 3: 20h30 đến 22h"
                                                               id="choice_75_42_5" disabled="disabled">
                                                        <label for="choice_75_42_5" id="label_75_42_5">Ca tối 3: 20h30
                                                            đến 22h</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset id="field_75_43"
                                                  class="gfield gfield--width-half field_sublabel_below field_description_below gfield_visibility_visible"
                                                  style="display: none;">
                                            <legend class="gfield_label gfield_label_before_complex">Ngày học dự kiến
                                            </legend>
                                            <div class="ginput_container ginput_container_checkbox">
                                                <div class="gfield_checkbox" id="input_75_43">
                                                    <div class="gchoice gchoice_75_43_1">
                                                        <input class="gfield-choice-input" name="input_43.1"
                                                               type="checkbox" value="Thứ 2 - 4 - 6" id="choice_75_43_1"
                                                               disabled="disabled">
                                                        <label for="choice_75_43_1" id="label_75_43_1">Thứ 2 - 4 -
                                                            6</label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_43_2">
                                                        <input class="gfield-choice-input" name="input_43.2"
                                                               type="checkbox" value="Thứ 3 - 5 - 7" id="choice_75_43_2"
                                                               disabled="disabled">
                                                        <label for="choice_75_43_2" id="label_75_43_2">Thứ 3 - 5 -
                                                            7</label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_43_3">
                                                        <input class="gfield-choice-input" name="input_43.3"
                                                               type="checkbox" value="Khác" id="choice_75_43_3"
                                                               disabled="disabled">
                                                        <label for="choice_75_43_3" id="label_75_43_3">Khác</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div id="field_75_32"
                                             class="gfield gfield--width-full gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_visible">
                                            <p style="text-align: justify;">Các khóa học tiếp theo, phòng quản lý đào
                                                tạo sẽ chủ động liên hệ với học viên để thống nhất lịch học phù hợp.</p>
                                            <p></p>
                                        </div>
                                        <fieldset id="field_75_40"
                                                  class="gfield gfield--width-full gf_list_2col gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                            <legend class="gfield_label">1.4. Hình thức thanh toán học phí <span
                                                        class="gfield_required">
                                                    <span class="gfield_required gfield_required_asterisk">*</span>
                                                </span>
                                            </legend>
                                            <div class="ginput_container ginput_container_radio">
                                                <div class="gfield_radio" id="input_75_40">
                                                    <div class="gchoice gchoice_75_40_0">
                                                        <input class="gfield-choice-input" name="input_40" type="radio"
                                                               value="1"
                                                               id="choice_75_40_0" <?= $thanh_toan != 2 ? 'checked' : '' ?>>
                                                        <label for="choice_75_40_0" id="label_75_40_0">
                                                            <strong>Cách 1: Tiền mặt</strong>
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_40_1">
                                                        <input class="gfield-choice-input" name="input_40" type="radio"
                                                               value="2"
                                                               id="choice_75_40_1" <?= $thanh_toan == 2 ? 'checked' : '' ?>>
                                                        <label for="choice_75_40_1" id="label_75_40_1">
                                                            <strong>Cách 2: Chuyển khoản</strong>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset id="field_75_34"
                                                  class="gfield gfield--width-full field_sublabel_below field_description_below gfield_visibility_visible"
                                                  style="display: none;">
                                            <legend class="gfield_label gfield_label_before_complex">Nộp trực tiếp tại
                                                văn phòng các chi nhánh của Ecorp theo địa chỉ
                                            </legend>
                                            <div class="ginput_container ginput_container_checkbox">
                                                <div class="gfield_checkbox" id="input_75_34">
                                                    <div class="gchoice gchoice_75_34_1">
                                                        <input class="gfield-choice-input" name="input_34.1"
                                                               type="checkbox"
                                                               value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Đống Đa: &lt;/strong&gt;&lt;/span&gt;Số 20 Phố Nguyễn Văn Tuyết, Q. Đống Đa, Hà Nội"
                                                               id="choice_75_34_1" disabled="disabled">
                                                        <label for="choice_75_34_1" id="label_75_34_1">
                                                            <span style="color:#fb870c;">
                                                                <strong>Ecorp Đống Đa: </strong>
                                                            </span>Số 20 Phố Nguyễn Văn Tuyết, Q. Đống Đa, Hà Nội
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_34_2">
                                                        <input class="gfield-choice-input" name="input_34.2"
                                                               type="checkbox"
                                                               value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Bách Khoa: &lt;/strong&gt;&lt;/span&gt;Số 236 Lê Thanh Nghị, Q. Hai Bà Trưng, Hà Nội"
                                                               id="choice_75_34_2" disabled="disabled">
                                                        <label for="choice_75_34_2" id="label_75_34_2">
                                                            <span style="color:#fb870c;">
                                                                <strong>Ecorp Bách Khoa: </strong>
                                                            </span>Số 236 Lê Thanh Nghị, Q. Hai Bà Trưng, Hà Nội
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_34_3">
                                                        <input class="gfield-choice-input" name="input_34.3"
                                                               type="checkbox"
                                                               value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Cầu Giấy: &lt;/strong&gt;&lt;/span&gt;Số 30 tổ 17 Khu Văn hóa Nghệ thuật, Q Mai Dịch, Hà Nội"
                                                               id="choice_75_34_3" disabled="disabled">
                                                        <label for="choice_75_34_3" id="label_75_34_3">
                                                            <span style="color:#fb870c;">
                                                                <strong>Ecorp Cầu Giấy: </strong>
                                                            </span>Số 30 tổ 17 Khu Văn hóa Nghệ thuật, Q Mai Dịch, Hà
                                                            Nội </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_34_4">
                                                        <input class="gfield-choice-input" name="input_34.4"
                                                               type="checkbox"
                                                               value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Hà Đông: &lt;/strong&gt;&lt;/span&gt;Số 21 ngõ 17/2 Nguyễn Văn Lộc, Q. Hà Đông, Hà Nội"
                                                               id="choice_75_34_4" disabled="disabled">
                                                        <label for="choice_75_34_4" id="label_75_34_4">
                                                            <span style="color:#fb870c;">
                                                                <strong>Ecorp Hà Đông: </strong>
                                                            </span>Số 21 ngõ 17/2 Nguyễn Văn Lộc, Q. Hà Đông, Hà Nội
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_34_5">
                                                        <input class="gfield-choice-input" name="input_34.5"
                                                               type="checkbox"
                                                               value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Long Biên: &lt;/strong&gt;&lt;/span&gt; Số 158 Ngô Xuân Quảng, H. Gia Lâm, Hà Nội"
                                                               id="choice_75_34_5" disabled="disabled">
                                                        <label for="choice_75_34_5" id="label_75_34_5">
                                                            <span style="color:#fb870c;">
                                                                <strong>Ecorp Long Biên: </strong>
                                                            </span> Số 158 Ngô Xuân Quảng, H. Gia Lâm, Hà Nội </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_34_6">
                                                        <input class="gfield-choice-input" name="input_34.6"
                                                               type="checkbox"
                                                               value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Sài Đồng: &lt;/strong&gt;&lt;/span&gt;Số 50 Ngõ 42 Sài Đồng, Q. Long Biên, Hà Nội"
                                                               id="choice_75_34_6" disabled="disabled">
                                                        <label for="choice_75_34_6" id="label_75_34_6">
                                                            <span style="color:#fb870c;">
                                                                <strong>Ecorp Sài Đồng: </strong>
                                                            </span>Số 50 Ngõ 42 Sài Đồng, Q. Long Biên, Hà Nội
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_34_7">
                                                        <input class="gfield-choice-input" name="input_34.7"
                                                               type="checkbox"
                                                               value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Hưng Yên: &lt;/strong&gt;&lt;/span&gt;Số 21 Địa Chất, Tân Quang, Văn Lâm, Hưng Yên"
                                                               id="choice_75_34_7" disabled="disabled">
                                                        <label for="choice_75_34_7" id="label_75_34_7">
                                                            <span style="color:#fb870c;">
                                                                <strong>Ecorp Hưng Yên: </strong>
                                                            </span>Số 21 Địa Chất, Tân Quang, Văn Lâm, Hưng Yên </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_34_8">
                                                        <input class="gfield-choice-input" name="input_34.8"
                                                               type="checkbox"
                                                               value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Bắc Ninh: &lt;/strong&gt;&lt;/span&gt;Cổng trường Đại học Công nghiệp Dệt May Hà Nội"
                                                               id="choice_75_34_8" disabled="disabled">
                                                        <label for="choice_75_34_8" id="label_75_34_8">
                                                            <span style="color:#fb870c;">
                                                                <strong>Ecorp Bắc Ninh: </strong>
                                                            </span>Cổng trường Đại học Công nghiệp Dệt May Hà Nội
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_34_9">
                                                        <input class="gfield-choice-input" name="input_34.9"
                                                               type="checkbox"
                                                               value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Bình Thạnh: &lt;/strong&gt;&lt;/span&gt;203 Nguyễn Văn Thương, Q. Bình Thạnh, TP. Hồ Chí Minh"
                                                               id="choice_75_34_9" disabled="disabled">
                                                        <label for="choice_75_34_9" id="label_75_34_9">
                                                            <span style="color:#fb870c;">
                                                                <strong>Ecorp Bình Thạnh: </strong>
                                                            </span>203 Nguyễn Văn Thương, Q. Bình Thạnh, TP. Hồ Chí Minh
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_34_11">
                                                        <input class="gfield-choice-input" name="input_34.11"
                                                               type="checkbox"
                                                               value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Vạn Hạnh: &lt;/strong&gt;&lt;/span&gt;497/10 Sư Vạn Hạnh, P.12, Quận 10, TP. Hồ Chí Minh"
                                                               id="choice_75_34_11" disabled="disabled">
                                                        <label for="choice_75_34_11" id="label_75_34_11">
                                                            <span style="color:#fb870c;">
                                                                <strong>Ecorp Vạn Hạnh: </strong>
                                                            </span>497/10 Sư Vạn Hạnh, P.12, Quận 10, TP. Hồ Chí Minh
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset id="field_75_35"
                                                  class="gfield gfield--width-full field_sublabel_below field_description_below gfield_visibility_visible"
                                                  style="display: none;">
                                            <legend class="gfield_label gfield_label_before_complex">Qua tài khoản ngân
                                                hàng của chi nhánh:
                                            </legend>
                                            <div class="ginput_container ginput_container_checkbox">
                                                <div class="gfield_checkbox" id="input_75_35">
                                                    <div class="gchoice gchoice_75_35_1">
                                                        <input class="gfield-choice-input" name="input_35.1"
                                                               type="checkbox"
                                                               value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Đống Đa: &lt;/strong&gt;&lt;/span&gt;Chủ tài khoản Nguyễn Thị Phương; Số tài khoản 206861037 Ngân hàng VP Bank Chi nhánh Hoàng Quốc Việt."
                                                               id="choice_75_35_1" disabled="disabled">
                                                        <label for="choice_75_35_1" id="label_75_35_1">
                                                            <span style="color:#fb870c;">
                                                                <strong>Ecorp Đống Đa: </strong>
                                                            </span>Chủ tài khoản Nguyễn Thị Phương; Số tài khoản
                                                            206861037 Ngân hàng VP Bank Chi nhánh Hoàng Quốc Việt.
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_35_2">
                                                        <input class="gfield-choice-input" name="input_35.2"
                                                               type="checkbox"
                                                               value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Bách Khoa: &lt;/strong&gt;&lt;/span&gt; Chủ tài khoản Nguyễn Thị Phương; Số tài khoản 03689491701 Ngân hàng TP Bank Chi nhánh Thăng Long."
                                                               id="choice_75_35_2" disabled="disabled">
                                                        <label for="choice_75_35_2" id="label_75_35_2">
                                                            <span style="color:#fb870c;">
                                                                <strong>Ecorp Bách Khoa: </strong>
                                                            </span> Chủ tài khoản Nguyễn Thị Phương; Số tài khoản
                                                            03689491701 Ngân hàng TP Bank Chi nhánh Thăng Long. </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_35_3">
                                                        <input class="gfield-choice-input" name="input_35.3"
                                                               type="checkbox"
                                                               value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Cầu Giấy: &lt;/strong&gt;&lt;/span&gt;Chủ tài khoản Nguyễn Thị Phương; Số tài khoản 1012825106 Ngân hàng Vietcombank Chi nhánh Thăng Long."
                                                               id="choice_75_35_3" disabled="disabled">
                                                        <label for="choice_75_35_3" id="label_75_35_3">
                                                            <span style="color:#fb870c;"><strong>Ecorp Cầu
                                                                    Giấy: </strong>
                                                            </span>Chủ tài khoản Nguyễn Thị Phương; Số tài khoản
                                                            1012825106 Ngân hàng Vietcombank Chi nhánh Thăng Long.
                                                        </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_35_4">
                                                        <input class="gfield-choice-input" name="input_35.4"
                                                               type="checkbox"
                                                               value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Hà Đông: &lt;/strong&gt;&lt;/span&gt;Chủ tài khoản Nguyễn Thị Phương; Số tài khoản 11810000149344 Ngân hàng BIDV Chi nhánh Bắc Hà."
                                                               id="choice_75_35_4" disabled="disabled">
                                                        <label for="choice_75_35_4" id="label_75_35_4"><span
                                                                    style="color:#fb870c;"><strong>Ecorp Hà
                                                                    Đông: </strong></span>Chủ tài khoản Nguyễn Thị
                                                            Phương; Số tài khoản 11810000149344 Ngân hàng BIDV Chi nhánh
                                                            Bắc Hà. </label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_35_5">
                                                        <input class="gfield-choice-input" name="input_35.5"
                                                               type="checkbox"
                                                               value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Long Biên, Sài Đồng, Hưng Yên, Bắc Ninh: &lt;/strong&gt;&lt;/span&gt;Chủ tài khoản Nguyễn Thị Phương; Số tài khoản 108000513746 Ngân hàng VietinBank Chi nhánh Nam Thăng Long."
                                                               id="choice_75_35_5" disabled="disabled"><label
                                                                for="choice_75_35_5" id="label_75_35_5"><span
                                                                    style="color:#fb870c;"><strong>Ecorp Long Biên, Sài
                                                                    Đồng, Hưng Yên, Bắc Ninh: </strong></span>Chủ tài
                                                            khoản Nguyễn Thị Phương; Số tài khoản 108000513746 Ngân hàng
                                                            VietinBank Chi nhánh Nam Thăng Long.</label>
                                                    </div>
                                                    <div class="gchoice gchoice_75_35_6"><input
                                                                class="gfield-choice-input" name="input_35.6"
                                                                type="checkbox"
                                                                value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Bình Thạnh: &lt;/strong&gt;&lt;/span&gt;Chủ tài khoản Nguyễn Thị Phương; Số tài khoản 555988988 Ngân hàng ACB Chi nhánh Hoàng Cầu."
                                                                id="choice_75_35_6" disabled="disabled"><label
                                                                for="choice_75_35_6" id="label_75_35_6"><span
                                                                    style="color:#fb870c;"><strong>Ecorp Bình
                                                                    Thạnh: </strong></span>Chủ tài khoản Nguyễn Thị
                                                            Phương; Số tài khoản 555988988 Ngân hàng ACB Chi nhánh Hoàng
                                                            Cầu.</label></div>
                                                    <div class="gchoice gchoice_75_35_7"><input
                                                                class="gfield-choice-input" name="input_35.7"
                                                                type="checkbox"
                                                                value="&lt;span style=&quot;color: #0c4fb3&quot;&gt;&lt;strong&gt;Ecorp Vạn Hạnh: &lt;/strong&gt;&lt;/span&gt;Chủ tài khoản Nguyễn Thị Phương; Số tài khoản 19034481764011 Ngân hàng Techcombank Chi nhánh Nội Bài."
                                                                id="choice_75_35_7" disabled="disabled"><label
                                                                for="choice_75_35_7" id="label_75_35_7"><span
                                                                    style="color:#fb870c;"><strong>Ecorp Vạn
                                                                    Hạnh: </strong></span>Chủ tài khoản Nguyễn Thị
                                                            Phương; Số tài khoản 19034481764011 Ngân hàng Techcombank
                                                            Chi nhánh Nội Bài.</label></div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div id="field_75_36"
                                             class="gfield gfield--width-full gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_visible">
                                            <p style="text-align: justify;"><span style="color:#fb870c;"><strong>Lưu
                                                        ý:</strong></span></p>
                                            <p style="text-align: justify;"><span style="font-weight: 400;">- </span>Học
                                                viên chỉ đóng tiền trực tiếp/chuyển khoản tại </p>
                                            <p style="text-align: justify;"><span style="font-weight: 400;">+ </span>Chủ
                                                tài khoản: Công ty TNHH đào tạo và phát triển nhân lực Hikorean. </p>
                                            <p style="text-align: justify;"><span style="font-weight: 400;">+ </span>Số
                                                tài khoản: 700-021707847 </p>
                                            <p style="text-align: justify;"><span style="font-weight: 400;">+ </span>Ngân
                                                hàng: Ngân hàng Shinhan Việt Nam - chi nhánh Mỹ Đình</p>
                                            <p style="text-align: justify;"><span style="font-weight: 400;">+ </span>Nội
                                                dung chuyển khoản: Tên học viên + sđt + tên khóa học.</p>
                                            <p style="text-align: justify;">- Không chuyển tiền, chuyển khoản cho nhân
                                                viên, quản lý hoặc bất kỳ tài khoản trung gian nào khác.</p>
                                            <p style="text-align: justify;">- Mọi thắc mắc phát sinh hoặc không hài lòng
                                                trong quá trình học tập, bên A vui lòng liên hệ Hotline 091 119 66 32
                                                hoặc email info@hikorean.edu.vn Tất cả ý kiến đóng góp của bên A sẽ được
                                                giải quyết hoặc hồi đáp trong thời gian 07 ngày. Nếu không liên hệ, bên
                                                A sẽ chịu trách nhiệm 100% kết quả học tập của mình.</p>
                                        </div>
                                        <div id="field_75_37"
                                             class="gfield gfield--width-full gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_visible">

                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;">
                                                    <b>Điều 2: Quyền lợi và nghĩa vụ bên B</b>
                                                </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;">
                                                    <b>2.1. Nghĩa vụ:</b>
                                                </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">−</span>
                                                <span style="font-weight: 400;">Hướng dẫn, hỗ trợ, giám sát quá trình
                                                    học tập của bên A.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">−</span>
                                                <span style="font-weight: 400;">Cung cấp đầy đủ tài liệu học viên cũng
                                                    như chứng chỉ nếu bên A đạt kết quả.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">−</span>
                                                <span style="font-weight: 400;">Thực hiện đầy đủ những điều kiện cần
                                                    thiết để tạo môi trường học tập hiệu quả cho bên A, cung cấp những
                                                    giải pháp, lắng nghe và giải đáp thắc mắc cho bên A trong quá trình
                                                    học.</span>
                                            </p>
                                            <p>
                                                <span style="font-weight: 400;">
                                                    <span style="font-weight: 400;">−</span>Trong trường hợp Giáo viên
                                                    của trung tâm mắc phải những lỗi sau </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">+ Nghỉ dạy không báo trước cho học
                                                    viên</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">+ Tự ý đổi lịch học của lớp khi không có
                                                    xác nhận của cấp quản lý </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">+ Giảng dạy sai hoặc không bám sát nội
                                                    dung trong giáo trình </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">Trung tâm có trách nhiệm đổi giáo viên
                                                    mới cho học viên ( nếu học viên yêu cầu ) trong vòng từ 14 ngày kể
                                                    từ ngày học viên thông báo.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;">
                                                    <b>2.2. Quyền hạn:</b>
                                                </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;">
                                                    <b>2.2.1. Kỷ luật</b>
                                                </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">Bên B có quyền điều chuyển lớp, thay
                                                    đổi, tạm hoãn, kỷ luật hoặc yêu cầu thôi học/ không đảm bảo chất
                                                    lượng với các trường hợp học viên vi phạm cam kết hoặc vi phạm quy
                                                    định, đạo đức trong lớp học.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">−</span>
                                                <span style="font-weight: 400;">Tự ý nghỉ học/ đi muộn quá 3 buổi không
                                                    có lý do.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">−</span>
                                                <span style="font-weight: 400;">Không tuân thủ nội quy lớp mà chưa xin
                                                    phép quá 3 lần (Tắt cam, bật mic, không tập trung học, bài tập không
                                                    hoàn thành, có thái độ thiếu tôn trọng với giáo viên).</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">−</span>
                                                <span style="font-weight: 400;">Không hoàn thành học phí theo quy
                                                    định.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">−</span>
                                                <span style="font-weight: 400;">Và các trường hợp khác được đánh giá là
                                                    vi phạm nghiêm trọng.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;">
                                                    <b>2.2.2. Hoàn lại học phí</b>
                                                </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">−</span>
                                                <span style="font-weight: 400;">Các trường hợp được hoàn lại học phí
                                                    trong 3 buổi học đầu tiên bao gồm:</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">+ Học viên không hài lòng với chất lượng
                                                    giảng dạy của giáo viên ( có dẫn chứng cụ thể để trao đổi với trung
                                                    tâm) và buổi học tiếp theo giáo viên không có sự thay đổi.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">+ Học viên thấy phương pháp, chương
                                                    trình học không đúng như được tư vấn.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">+ Học viên tham gia đủ theo quy định của
                                                    lớp học nhưng liên tiếp 2 kì không đạt kết quả đầu ra.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">−</span>
                                                <span style="font-weight: 400;">- Tất cả các trường hợp khác ngoài 3
                                                    trường hợp nêu trên liên quan đến Cọc hoặc học phí đều sẽ không được
                                                    hoàn trả lại dưới bất kỳ hình thức nào.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">−</span>
                                                <span style="font-weight: 400;">Bên A được chuyển học phí và mọi khoản
                                                    đặt cọc cho học viên mới chưa biết đến bên B.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;">
                                                    <b>Điều 3: Quyền lợi và nghĩa vụ bên A</b>
                                                </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;">
                                                    <b>3.1. Quyền lợi:</b>
                                                </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">- </span>
                                                <span style="font-weight: 400;"></span>
                                                <span style="font-weight: 400;">Bên A được học đầy đủ theo nội dung
                                                    chương trình của khóa học, tham gia các hoạt động trải nghiệm, câu
                                                    lạc bộ và các hoạt động khác do bên B tổ chức.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">- Trong trường hợp dự kiến không mở được
                                                    lớp vì lý do khách quan, 2 bên liên lạc để thống nhất lịch học phù
                                                    hợp. Bên B có trách nhiệm thông báo lịch khai giảng cho bên A trước
                                                    lịch khai giảng ít nhất 1 tuần. </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">- Nếu bên A không thống nhất được lịch
                                                    học, bên A có quyền được bảo lưu, chuyển cơ sở, chuyển đổi hình thức
                                                    học (online, offline) hoàn toàn miễn phí. Nếu sau 3 lần 2 bên thống
                                                    nhất lịch học, bên B vẫn không xếp được lớp cho bên A thì bên B chịu
                                                    trách nhiệm hoặc hoàn lại toàn bộ số tiền của bên A.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">- </span>
                                                <span style="font-weight: 400;"> Trong quá trình học tập, bên A vui lòng
                                                    liên hệ Hotline 091 119 66 32 hoặc email <a
                                                            href="mailto:cskh@hikorean.edu.vn"
                                                            style="text-decoration: underline;">cskh@hikorean.edu.vn</a></span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">- </span>
                                                <span style="font-weight: 400;"> Tất cả ý kiến đóng góp của bên A sẽ
                                                    được giải quyết và hồi đáp muộn nhất là 7 ngày. Nếu không liên hệ,
                                                    bên A sẽ chịu trách nhiệm 100% kết quả học tập của mình.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;">
                                                    <b>3.2. Nghĩa vụ:</b>
                                                </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;">
                                                    <b>3.2.1. Hoàn thành học phí và hưởng mức học phí ưu đãi (nếu
                                                        có)</b>
                                                </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">−</span>
                                                <span style="font-weight: 400;">Tùy từng thời điểm bên B sẽ có các
                                                    chương trình ưu đãi học phí, bên A được quyền giữ mức ưu đãi (nếu
                                                    có) bằng việc đặt cọc với số tiền tối thiểu từ 500.000 đồng / 1
                                                    khóa.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">−</span>
                                                <span style="font-weight: 400;">Bên A chỉ được hưởng mức học phí ưu đãi
                                                    và xếp lớp nếu hoàn thành tối thiểu 50% học phí sau 01 tuần đăng kí.
                                                    Đồng thời hoàn thành 100% học phí trước ngày khai giảng 01 tuần
                                                    (trường hợp khác phải có xác nhận đồng ý của bên B).</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">−</span>
                                                <span style="font-weight: 400;">Nếu không hoàn thành trước thời hạn quy
                                                    định, bên A không được hưởng mức học phí ưu đãi, xếp lớp và không
                                                    được hoàn lại số tiền đã đóng. Mỗi cơ sở sẽ có một đợt ưu đãi khác
                                                    nhau, do vậy khi học viên tham gia học tại cơ sở nào sẽ tuân theo
                                                    mức học phí của chương trình ưu đãi hiện có tại cơ sở đó (nếu
                                                    có).</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">−</span>
                                                <span style="font-weight: 400;">- Nếu trong trường hợp bên A đóng trước
                                                    50% học phí thì học phí còn lại bắt buộc phải hoàn thành sau 1 tháng
                                                    tính từ ngày khai giảng.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">−</span>
                                                <span style="font-weight: 400;">Trong trường hợp bên A không hoàn thành
                                                    học phí theo quy định, số học phí đã đóng được tính là học phí của
                                                    khoá đã học. Nếu bên A muốn tham gia khoá sau phải đóng học phí đầy
                                                    đủ theo bảng học phí niêm yết. </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;">
                                                    <b>3.2.2. Nội quy lớp học</b>
                                                </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">− Để đảm bảo chất lượng đầu ra, học viên
                                                    phải học xuyên suốt lộ trình khóa học đã đăng ký. Nếu quá trình học
                                                    bị ngắt quãng vì lý do cá nhân, trung tâm sẽ không chịu trách nhiệm
                                                    về kết quả học tập của học viên.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">+ Học viên cần thực hiện đầy đủ văn
                                                    hóa và quy định của lớp học, tôn trọng giáo viên. Nếu
                                                    học viên không tuân thủ theo quy định thì Trung tâm có
                                                    quyền đơn phương chấm dứt khóa học mà học viên đã đăng
                                                    ký.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">+ Bật cam đối với lớp học Online.
                                                    Nếu nhắc quá 3 lần, giáo viên có quyền mời học viên ra
                                                    khỏi lớp buổi hôm đó.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">- Học viên học tập theo đúng
                                                    phương pháp và yêu cầu đề ra: </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">+ Đối với lớp học Thực hành tiếng (Sơ
                                                    cấp 1,2,3, TC1) học viên cần làm đầy đủ bài tập về nhà, xem
                                                    video bài giảng ít nhất 01 lần trước khi tới lớp, làm bài
                                                    tập và gửi lên nhóm.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">+ Hoàn thành đầy đủ nghĩa vụ của
                                                    học viên, Học viên sẽ được làm bài kiểm tra đầu ra đánh
                                                    giá năng lực. </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">+ Đối với lớp Topik học viên cần làm bài
                                                    tập đầy đủ theo yêu cầu của giáo viên. </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">+ Đối với các khoá học thực hành tiếng
                                                    Trung tâm sẽ gửi video cho những học viên đã nghỉ học buổi ngày hôm
                                                    đó. Còn với lớp giao tiếp và lớp Topik sẽ không có video ghi lại
                                                    buổi học để gửi cho học viên. </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;">
                                                    <b>3.2.3. Bảo lưu - học lại – chuyển lớp</b>
                                                </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">- Trong quá trình theo học, nếu bên A có
                                                    công việc cá nhân, cần thông báo lý do chính đáng và làm thủ tục bảo
                                                    lưu trực tiếp tại quầy lễ tân hoặc liên hệ với trợ giảng sau khi
                                                    được phòng quản lý chất lượng đào tạo của bên B phê duyệt. </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">- Trước khi kết thúc 4 buổi học
                                                    đầu tiên của khóa học, học viên có quyền được bảo lưu
                                                    trong thời gian tối đa là 3 tháng. Khi học vào lớp mới thì
                                                    học viên tuân theo lịch sắp xếp của Trung tâm chứ không
                                                    được lựa chọn theo lịch của mình. Khi hết 3 tháng là hết
                                                    quyền được bảo lưu, học viên không được nhận lại học
                                                    phí đã đóng. </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">− Trước ngày khai giảng 01 tuần, Học
                                                    viên được phép bảo lưu hoặc đổi lịch học trong danh sách các lớp
                                                    cùng khóa. Sau khi nhập học nếu học viên muốn đổi lớp sẽ đóng mức
                                                    phí là 500.000vnđ. </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">− Để đảm bảo cho chất lượng của lớp học,
                                                    sự tiến bộ của từng học viên và uy tín của trung tâm, tất cả học
                                                    viên có thái độ học tập chưa tích cực, kết quả học tập chưa tốt và
                                                    có điểm trung bình cuối khóa dưới 5 điểm, nghỉ học quá 3 buổi, sẽ
                                                    không được học lại miễn phí còn những học viên đã đi học đầy đủ mà
                                                    điểm đầu ra bị dưới 5 sẽ được học lại miễn phí cùng level đó. Những
                                                    học viên đăng ký theo gói Topik sẽ được học lại các level hoàn toàn
                                                    miễn phí. </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">Học viên được chuyển 100% giá trị
                                                    học phí thực nộp cho người thân có cùng trình độ (đối
                                                    với lớp học chưa khai giảng). Nếu không cùng trình độ thì
                                                    phải đóng chênh lệch và các phí phát sinh (nếu
                                                    có). </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;">
                                                    <b>3.2.4. Cam kết về quá trình học tập</b>
                                                </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">- Bên A cam kết phải tham gia lớp học và
                                                    làm bài tập về nhà đầy đủ tối thiểu 85% thời lượng (Trong đó tất cả
                                                    bài tập về nhà phải đạt tối thiểu 75% số điểm).</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">- Bên B cam kết chất lượng đầu ra theo
                                                    như nội dung chương trình học đã thông báo bên trên.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;">
                                                    <b>4. Đề xuất ngoài hợp đồng:</b>
                                                </span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">− Dưới đây là đề xuất ngoài hợp đồng của
                                                    2 bên đã được thống nhất và có giá trị pháp lý theo hợp đồng.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">Nội dung đề xuất ngoài</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">- Tất cả các thống nhất của 2 bên (bao
                                                    gồm cả điều khoản 4) đều được ghi rõ trong hợp đồng. Những cam kết,
                                                    thống nhất, trao đổi bằng lời nói bên ngoài hợp đồng giữa 2 bên
                                                    không có hiệu lực.</span>
                                            </p>
                                        </div>
                                        <div id="field_75_38"
                                             class="gfield gfield--width-full field_sublabel_below field_description_below hidden_label gfield_visibility_visible"
                                             style="display:none">
                                            <label class="gfield_label" for="input_75_38">Nội dung đề xuất ngoài</label>
                                            <div class="ginput_container ginput_container_textarea">
                                                <textarea name="input_38" id="input_75_38" class="textarea medium"
                                                          aria-invalid="false" rows="10" cols="50"></textarea>
                                            </div>
                                        </div>
                                        <div id="field_75_39"
                                             class="gfield gfield--width-full gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_visible">
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">- Tất cả các thống nhất của 2 bên (bao
                                                    gồm cả điều khoản 5) đều được ghi rõ trong hợp đồng. Những cam kết,
                                                    thống nhất, trao đổi bằng lời nói bên ngoài hợp đồng giữa 2 bên
                                                    không có hiệu lực.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;"><b>5. Điều khoản chung:</b></span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;"><b>5.1. Điều khoản bất khả
                                                        kháng:</b></span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">- Theo điều 156 bộ luật dân sự năm 2015:
                                                    Trong các trường hợp thiên tai, lũ lụt, hỏa hoạn, dịch bệnh…. hợp
                                                    đồng được tạm ngừng cho đến khi kết thúc sự kiện bất khả
                                                    kháng.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="color:#fb870c;"><b>5.2. Điều khoản&nbsp;</b></span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">-</span><span style="font-weight: 400;">Hợp
                                                    đồng này có hiệu lực kể từ ngày ký và tự động thanh lý sau ngày khóa
                                                    học kết thúc.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">-</span><span style="font-weight: 400;">Hợp
                                                    đồng này được lập thành 02 bản mỗi bên giữ 01 bản có giá trị như
                                                    nhau</span><span style="font-weight: 400;">.</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <b><span style="color:#fb870c;">5.3. Tranh chấp</span>&nbsp;</b>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">-- Khi bên A có thắc mắc, yêu cầu khác
                                                    thì bên A phải liên hệ số Hotline hoặc đến văn phòng Hikorean chi
                                                    nhánh đăng kí học để nhận được giải đáp (những vấn đề, thắc mắc mà
                                                    trao đổi với tư vấn viên sẽ không có giá trị pháp lý).</span>
                                            </p>
                                            <p style="text-align: justify;">
                                                <span style="font-weight: 400;">- Theo nghị định số 167/2013/NĐ-CP trong
                                                    quá trình trao đổi và thống nhất, 2 bên tuyệt đối không được bôi
                                                    nhọ, nói xấu... làm ảnh hưởng đến thương hiệu, uy tín, danh dự của
                                                    nhau. Mọi hành động vi phạm đều phải giải quyết trực tiếp tại cơ
                                                    quan công an phường sở tại.</span><span style="font-weight: 400;">&nbsp;</span>
                                            </p>
                                        </div>

                                        <table style="grid-column: span 12">
                                            <tr>
                                                <td style="width: 50%">
                                                    <div id="field_75_27" style="width: 50%"
                                                         class="gfield gfield--width-half gf_left_half gfield--width-half gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_visible">
                                                        <label class="gfield_label"
                                                               style="text-align:center;display:block">BÊN B
                                                            <br>GIÁM ĐỐC</label>
                                                        <img class="aligncenter" src="assets/images/chuky.png"
                                                             style="margin-top:20px;" width="300">
                                                    </div>
                                                </td>
                                                <td style="width: 50%">
                                                    <div id="field_75_2" style="width: 50%"
                                                         class="gfield gfield--width-half gf_right_half gfield--width-half gfield_contains_required field_sublabel_below field_description_above gfield_visibility_visible">
                                                        <label class="gfield_label" for="input_75_2">BÊN A (HỌC
                                                            VIÊN)<span
                                                                    class="gfield_required"><span
                                                                        class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                        <div class="gfield_description" id="gfield_description_75_2">Ký
                                                            tên
                                                            (không cần ghi họ tên)
                                                        </div>
                                                        <img style="width: 100%" src="<?= $signature ?>"
                                                             alt="">
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <h4 style="text-center"> Trung tâm chỉ cam kết đầu ra cho các khoá theo gói combo, và học liền không
                        nghỉ giữa chừng</h4>
                    <!-- #content -->
                </div>
                <!-- .wf-container -->
            </div>
            <!-- .wf-wrap -->
        </div>
        <!-- #main -->
        <!-- !Footer -->
        <footer id="footer" class="footer solid-bg empty-footer">
            <!-- !Bottom-bar -->
            <div id="bottom-bar" class="solid-bg logo-left" role="contentinfo">
                <div class="wf-wrap">
                    <div class="wf-container-bottom">
                        <div class="wf-float-right">
                            <div class="mini-nav">

                                <span class="customSelect" style="display: inline-block;"><span
                                            class="customSelectInner"
                                            style="width: 112px; display: inline-block;">———</span></span><span
                                        class="customSelect1" style="visibility: visible;"></span></div>
                        </div>
                        <div class="bottom-text-block"><p>Copyright © 2022 - Bản quyền thuộc về <a
                                        herf="https://hikorean.edu.vn/"><b>HIKOREAN</b></a><br> Công ty TNHH Đào tạo và
                                Phát triển nhân lực Hikorean - Số ĐKKD 0108820897 do Sở KHĐT TP. Hà Nội cấp ngày
                                12/07/2019.</p></div>
                    </div>
                </div>
                <!-- .wf-container-bottom -->
            </div>
            <!-- .wf-wrap -->
        </footer>
    </div>
</body>
</html>