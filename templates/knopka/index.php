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

/** @var \Joomla\CMS\Application\CMSApplication $app */
$app = JFactory::getApplication();
$menuItemActive = $app->getMenu()->getActive();
$menuItemActiveAlias = $menuItemActive->alias;
$isLanding = in_array($menuItemActiveAlias, ['home', 'home-ua', 'home-ru']);
preg_match('/^\/(ru|uk|en)/', $_SERVER['REQUEST_URI'], $matches);
$path = $matches[1];
$lang = $path? "/$path/" : '/';
$anchorPrefix = $isLanding? '' : $lang;

// Output as HTML5
$this->setHtml5(true);
// Add html5 shiv
//JHtml::_('script', 'jui/html5.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));

/** @var \Joomla\CMS\Document\HtmlDocument $doc */
$doc = $app->getDocument();
$doc->setMetaData('author', 'Knopka.agency');

// Add JavaScript Frameworks
JHtml::_('jquery.framework', false, false, false);
// Add Stylesheets
JHtml::_('stylesheet', 'template.css', array('version' => (string) mktime(), 'relative' => true));
JHtml::_('stylesheet', '/media/jui/css/icomoon.css', array('version' => (string) mktime(), 'relative' => true));
JHtml::_('stylesheet', 'https://static.tildacdn.com/css/tilda-grid-3.0.min.css', array('version' => (string) mktime(), 'relative' => false));
JHtml::_('stylesheet', 'https://tilda.ws/project2512305/tilda-blocks-2.12.css', array('version' => (string) mktime(), 'relative' => false));

JHtml::_('script', 'https://static.tildacdn.com/js/tilda-scripts-2.8.min.js', array('version' => (string) mktime(), 'relative' => false));
JHtml::_('script', 'https://tilda.ws/project2512305/tilda-blocks-2.7.js', array('version' => (string) mktime(), 'relative' => false));
JHtml::_('script', 'https://static.tildacdn.com/js/lazyload-1.3.min.js', array('version' => (string) mktime(), 'relative' => false));
JHtml::_('script', 'https://static.tildacdn.com/js/tilda-menusub-1.0.min.js', array('version' => (string) mktime(), 'relative' => false));

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/><!--metatextblock--><title>
        Knopka.agency</title>
    <meta name="description"
          content="контент, smm, оформление и ведение аккаунта, настройка таргетированной рекламы, фото и видео съёмка, дизайн, копирайт, чат-боты, сувенирная продукция"/>
    <meta property="og:url" content="https://knopka.agency"/>
    <meta property="og:title" content="Knopka.agency"/>
    <meta property="og:description"
          content="контент, smm, оформление и ведение аккаунта, настройка таргетированной рекламы, фото и видео съёмка, дизайн, копирайт, чат-боты, сувенирная продукция"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image"
          content="https://static.tildacdn.com/tild3839-3161-4430-a335-636637303332/-/resize/504x/_.png"/>
    <link rel="canonical" href="https://knopka.agency"><!--/metatextblock-->
    <meta property="fb:app_id" content="257953674358265"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="https://tilda.ws">
    <link rel="dns-prefetch" href="https://static.tildacdn.com">

    <meta name="robots" content="nofollow"/>

    <jdoc:include type="head" />

    <link href="/templates/knopka/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

    <script type="text/javascript">window.dataLayer = window.dataLayer || [];</script>

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


        <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '881371576016688');
          fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=881371576016688&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->
    <? } ?>
</head>
<body class="t-body <?=($isLanding? 'landing-page' : 'component-page')?> <?='menu-'.$menuItemActiveAlias?>" style="margin:0;"><!--allrecords-->
<div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="2512305"
     data-tilda-page-id="16032892" data-tilda-formskey="eed1b1688abf305dccd909096825c12e">

<? include('navigation.php') ?>

<?php
    if ($isLanding) {
        include('landing.php');
    } else {
        ?>
    <div class="r t-rec t-rec_pt_30 component_wrapper" data-record-type="480"
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
                        <li class="t457__li"><a href="<?=$anchorPrefix?>#about" style="color:#ffffff;" data-menu-item-number="1">О нас</a>
                        </li>
                        <li class="t457__li"><a href="<?=$anchorPrefix?>#service" style="color:#ffffff;"
                                                data-menu-item-number="2">Услуги</a></li>
                        <li class="t457__li"><a href="<?=$anchorPrefix?>#contact" style="color:#ffffff;" data-menu-item-number="3">Контакты</a>
                        </li>
                        <li class="t457__li"><a href="<?=$lang?>terms" style="color:#ffffff;" data-menu-item-number="4">Пользовательское&nbsp;соглашение</a></li>
                        <li class="t457__li"><a href="<?=$lang?>privacy" style="color:#ffffff;" data-menu-item-number="5">Политика&nbsp;конфиденциальности</a></li>
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