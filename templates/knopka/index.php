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
$locale = $menuItemActive->get('language');
$menuItemActiveAlias = $menuItemActive->alias;
$isLanding = in_array($menuItemActiveAlias, ['home', 'home-ua', 'home-ru']);
preg_match('/^\/(ru|ua|en)/', $_SERVER['REQUEST_URI'], $matches);
$path = $matches[1];
$lang = $path? "/$path/" : '/';
$anchorPrefix = $isLanding? '' : $lang;
$config = JFactory::getConfig();

// Output as HTML5
$this->setHtml5(true);
// Add html5 shiv
//JHtml::_('script', 'jui/html5.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));

/** @var \Joomla\CMS\Document\HtmlDocument $doc */
$doc = $app->getDocument();
$doc->setMetaData('author', 'Knopka.agency');

$ver = '0.9.6';

JHtml::_('stylesheet', 'template.css', array('version' => $ver, 'relative' => true));
JHtml::_('stylesheet', '/media/jui/css/icomoon.css', array('relative' => true));
JHtml::_('stylesheet', 'https://static.tildacdn.com/css/tilda-grid-3.0.min.css', array('relative' => false));
JHtml::_('stylesheet', 'tilda-blocks-2.12.css', array('relative' => true));
JHtml::_('stylesheet', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css', array('relative' => false));

JHtml::_('script', 'jui/jquery.min.js', array('relative' => true));
JHtml::_('script', 'https://static.tildacdn.com/js/tilda-scripts-2.8.min.js', array('relative' => false));
JHtml::_('script', 'tilda-blocks-2.7.js', array('relative' => true));
JHtml::_('script', 'https://static.tildacdn.com/js/lazyload-1.3.min.js', array('relative' => false));
JHtml::_('script', 'https://static.tildacdn.com/js/tilda-menusub-1.0.min.js', array('relative' => false));
JHtml::_('script', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', array('relative' => false));

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Knopka.agency</title>
    <meta property="og:url" content="https://knopka.agency"/>
    <meta property="og:title" content="Knopka.agency"/>
    <meta property="og:description" content="<?=$doc->getDescription()?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://static.tildacdn.com/tild3839-3161-4430-a335-636637303332/-/resize/504x/_.png"/>
    <link rel="canonical" href="https://knopka.agency">
    <meta property="fb:app_id" content="257953674358265"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="https://tilda.ws">
    <link rel="dns-prefetch" href="https://static.tildacdn.com">

    <meta name="robots" content="nofollow"/>

    <jdoc:include type="head" />

    <link rel="preload" href="/templates/knopka/fonts/pingfangsc-bold-webfont.woff2" as="font" type="font/woff2" crossorigin />
    <link rel="preload" href="/templates/knopka/fonts/pingfangsc-light-webfont.woff2" as="font" type="font/woff2" crossorigin />
    <link rel="preload" href="/templates/knopka/fonts/pingfangsc-regular-webfont.woff2" as="font" type="font/woff2" crossorigin />
    <link rel="preload" href="/templates/knopka/fonts/pingfangsc-semibold-webfont.woff2" as="font" type="font/woff2" crossorigin />
    <link href="/templates/knopka/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <script type="text/javascript">window.dataLayer = window.dataLayer || [];</script>

    <? if ($config->get('advertising') == '1') { ?>
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
      fbq('init', '446732663104625');
      fbq('track', 'PageView');
      <? if ($menuItemActiveAlias == 'order-created') { ?>
      fbq('track', 'Lead');
      <? } ?>
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=446732663104625&ev=PageView&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->
    <? } ?>
</head>
<body class="t-body <?=($isLanding? 'landing-page' : 'component-page')?> <?='menu-'.$menuItemActiveAlias?>" style="margin:0;"><!--allrecords-->
<div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="2512305"
     data-tilda-page-id="16032892" data-tilda-formskey="eed1b1688abf305dccd909096825c12e">

<? $locale == 'uk-UA'? include('navigation-uk.php') : include('navigation-ru.php'); ?>

<?php
    if ($isLanding) {
        $locale == 'uk-UA'? include('landing-uk.php') : include('landing-ru.php');
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

<? $locale == 'uk-UA'? include('footer-uk.php') : include('footer-ru.php'); ?>

</div><!--/allrecords-->
<jdoc:include type="modules" name="debug" />
</body>
</html>