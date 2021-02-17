<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

$app = JFactory::getApplication();
$user = JFactory::getUser();
$menuItemAlias = $app->getMenu()->getActive()->alias;

// Output as HTML5
$this->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option = $app->input->getCmd('option', '');
$view = $app->input->getCmd('view', '');
$layout = $app->input->getCmd('layout', '');
$task = $app->input->getCmd('task', '');
$itemid = $app->input->getCmd('Itemid', '');
$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');

if ($task === 'edit' || $layout === 'form') {
    $fullWidth = 1;
} else {
    $fullWidth = 0;
}

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

// Add template js
JHtml::_('script', 'template.js', array('version' => 'auto', 'relative' => true));

// Add html5 shiv
JHtml::_('script', 'jui/html5.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));

// Add Stylesheets
JHtml::_('stylesheet', 'template.css', array('version' => (string) mktime(), 'relative' => true));

// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/><!--metatextblock--><title>
        Knopka.agency</title>
    <meta name="description"
          content="контент, smm, оформление и ведение аккаунта, настройка таргетированной рекламы, фото и видео съёмка, дизайн, копирайт, чат-боты, сувенирная продукция"/>
    <meta property="og:url" content="http://knopka.agency"/>
    <meta property="og:title" content="Knopka.agency"/>
    <meta property="og:description"
          content="контент, smm, оформление и ведение аккаунта, настройка таргетированной рекламы, фото и видео съёмка, дизайн, копирайт, чат-боты, сувенирная продукция"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image"
          content="https://static.tildacdn.com/tild3839-3161-4430-a335-636637303332/-/resize/504x/_.png"/>
    <link rel="canonical" href="http://knopka.agency"><!--/metatextblock-->
    <meta property="fb:app_id" content="257953674358265"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="https://tilda.ws">
    <link rel="dns-prefetch" href="https://static.tildacdn.com">
    <meta name="robots" content="nofollow"/>
    <!-- Assets -->
    <link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-grid-3.0.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://tilda.ws/project2512305/tilda-blocks-2.12.css" type="text/css"
          media="all"/>
    <link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-animation-1.0.min.css" type="text/css"
          media="all"/>
    <link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-menusub-1.0.min.css" type="text/css"
          media="all"/>
    <script src="https://static.tildacdn.com/js/jquery-1.10.2.min.js"></script>
    <script src="https://static.tildacdn.com/js/tilda-scripts-2.8.min.js"></script>
    <script src="https://tilda.ws/project2512305/tilda-blocks-2.7.js"></script>
    <script src="https://static.tildacdn.com/js/lazyload-1.3.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/tilda-animation-1.0.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/tilda-menusub-1.0.min.js" charset="utf-8"></script>
    <script type="text/javascript">window.dataLayer = window.dataLayer || [];</script>
    <script type="text/javascript">if ((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent)) === false && typeof(sessionStorage) != 'undefined' && sessionStorage.getItem('visited') !== 'y') {
        var style = document.createElement('style');
        style.type = 'text/css';
        style.innerHTML = '@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}';
        document.getElementsByTagName('head')[0].appendChild(style);
        $(document).ready(function () {
          $('.t-records').addClass('t-records_animated');
          setTimeout(function () {
            $('.t-records').addClass('t-records_visible');
            sessionStorage.setItem('visited', 'y');
          }, 400);
        });
      }</script>
    <link href="/templates/knopka/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

    <jdoc:include type="head" />

    <link rel="stylesheet" href="/media/jui/css/icomoon.css" type="text/css" media="all"/>

    <? if($_SERVER['HTTP_HOST'] && $_SERVER['HTTP_HOST'] == 'knopka.agency') { ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-188479547-1">
        </script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-188479547-1');
        </script>

        <!-- Google AdSense -->
        <script data-ad-client="ca-pub-5639960772602363" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <? } ?>

</head>
<body class="t-body <?= ($menuItemAlias=='home'? 'landing-page' : 'component-page') ?>" style="margin:0;"><!--allrecords-->
<div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="2512305"
     data-tilda-page-id="16032892" data-tilda-formskey="eed1b1688abf305dccd909096825c12e">

<? include('navigation.php') ?>

<?php
    if (in_array($menuItemAlias, ['home', 'home-ua', 'home-ru'])) {
        include('landing.php');
    } else {
        ?>
    <div class="r t-rec t-rec_pt_30 component_wrapper"
         style="padding-top:30px;" data-record-type="480"
         data-bg-color="#f1ff30" data-animationappear="off"><!-- T480 -->
        <div class="t-container">
            <div class="t-col t-col_10 t-prefix_1">
                <jdoc:include type="message" />
                <jdoc:include type="component" />

            </div>
        </div>
    </div>
<?php
    }
?>

    <div id="rec271139769" class="r t-rec t-rec_pt_60 t-rec_pb_75"
         style="padding-top:60px;padding-bottom:75px;background-color:#171717; " data-animationappear="off"
         data-record-type="457" data-bg-color="#171717"><!-- T457 -->
        <div class="t457">
            <div class="t-container">
                <div class="t-col t-col_12">
                    <ul class="t457__ul">
                        <li class="t457__li"><a href="/#about" style="color:#ffffff;" data-menu-item-number="1">О нас</a>
                        </li>
                        <li class="t457__li"><a href="/#service" style="color:#ffffff;"
                                                data-menu-item-number="2">Услуги</a></li>
                        <li class="t457__li"><a href="/#contact" style="color:#ffffff;" data-menu-item-number="3">Контакты</a>
                        </li>
                        <li class="t457__li"><a href="/terms" style="color:#ffffff;" data-menu-item-number="4">Пользовательское&nbsp;соглашение</a></li>
                        <li class="t457__li"><a href="/privacy" style="color:#ffffff;" data-menu-item-number="5">Политика&nbsp;конфиденциальности</a></li>
                    </ul>
                </div>
                <div class="t-col t-col_12">
                    <div class="t457__copyright" field="text" style="color: #ffffff;">© All Rights Reserved<br/>knopka.agency@gmail.com
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/allrecords-->
</body>
</html>