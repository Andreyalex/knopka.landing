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
$locale = $menuItemActive? $menuItemActive->get('language') : 'uk-UA';
$menuItemActiveAlias = $menuItemActive->alias;
$isLanding = in_array($menuItemActiveAlias, ['home-en', 'home-ua', 'home-ru']);
preg_match('/^\/(ru|ua|en)/', $_SERVER['REQUEST_URI'], $matches);
$path = $matches[1];
$lang = $path? "/$path/" : '/';
$anchorPrefix = $isLanding? '' : $lang;
$config = JFactory::getConfig();

/** @var \Joomla\CMS\Document\HtmlDocument $doc */
$doc = $app->getDocument();
$doc->setMetaData('author', 'Knopka.agency');

$ver = '0.10.3';

JHtml::_('stylesheet', 'template.min.css', array('version' => $ver, 'relative' => true));
JHtml::_('stylesheet', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css', array('relative' => false));

JHtml::_('script', 'jui/jquery.min.js', array('relative' => true));
JHtml::_('script', 'https://static.tildacdn.com/js/tilda-scripts-2.8.min.js', array('relative' => false));
JHtml::_('script', 'tilda-blocks-2.7.js', array('relative' => true));
JHtml::_('script', 'https://static.tildacdn.com/js/lazyload-1.3.min.js', array('relative' => false));
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

    <link rel="preload" href="/templates/knopka/fonts/pingfangsc-light-webfont.woff2" as="font" type="font/woff2" crossorigin />
    <link rel="preload" href="/templates/knopka/fonts/pingfangsc-regular-webfont.woff2" as="font" type="font/woff2" crossorigin />
    <link rel="preload" href="/templates/knopka/fonts/pingfangsc-semibold-webfont.woff2" as="font" type="font/woff2" crossorigin />
    <link href="/templates/knopka/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

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

<?
    switch($locale) {
        case 'uk-UA': include('navigation-uk.php'); break;
        case 'ru-RU': include('navigation-ru.php'); break;
        default: include('navigation-en.php');
    }

    if ($isLanding) {
        switch ($locale) {
            case 'uk-UA': include('landing-uk.php'); break;
            case 'ru-RU': include('landing-ru.php'); break;
            default: include('landing-en.php');
        }
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

<?
    switch($locale) {
        case 'uk-UA':
            include('footer-uk.php');
            break;
        case 'ru-RU':
            include('footer-ru.php');
            break;
        default:
            include('footer-en.php');
    }
?>

</div><!--/allrecords-->

<div class="position-contact">
    <jdoc:include type="modules" name="position-contact" />
</div>

<script>

    // Contact button widget handling

    $(document).ready(function() {

        var canCloseFlag = true;

        $('.position-contact .convertforms').hide();

        $('#floatingbtn .jfab_main_btn').click(function(){
            $('.position-contact .convertforms').fadeOut();
        })

        $($('#floatingbtn .sub_fab_btn')[2]).mousedown(function(){
            canCloseFlag = false;
            $('.position-contact .convertforms').show();
            setTimeout(function(){
                $('.position-contact .convertforms input[type="tel"]').focus();
                canCloseFlag = true;
            }, 200)
        })

        $(document).click(function(event) {
            if (canCloseFlag && !$(event.target).closest(".position-contact .convertforms").length) {
                $('.position-contact .convertforms').hide();
            }
        });

        setTimeout(function() {

            var btn = $('#floatingbtn .jfab_main_btn');

            btn.css('transition', '0s');
            btn
                .animate({'margin-right': 15}, 70, 'linear')
                .animate({'margin-right': 0}, 70, 'linear')
                .animate({'margin-right': 15}, 70, 'linear')
                .animate({'margin-right': 0}, 70, 'linear');

            setTimeout(function() {
                btn
                    .animate({'margin-right': 15}, 70, 'linear')
                    .animate({'margin-right': 0}, 70, 'linear')
                    .animate({'margin-right': 15}, 70, 'linear')
                    .animate({'margin-right': 0}, 70, 'linear');
            }, 500);

            setTimeout(function() {
                btn
                    .animate({'margin-right': 15}, 70, 'linear')
                    .animate({'margin-right': 0}, 70, 'linear')
                    .animate({'margin-right': 15}, 70, 'linear')
                    .animate({'margin-right': 0}, 70, 'linear', function () {
                        setTimeout(function () {
                            btn.css('transition', '')
                        }, 300);
                    });
            }, 1000);

        }, 5000);
    });

    $( window ).load(function() {
        $('.firstpage-bkg')
            .load(function(){
                $(this).css('opacity', 1);
                setTimeout(function(){
                    $('.firstpage-loader').css('display', 'none');
                }, 1000);
            })
            .attr("src", "/templates/knopka/img/ezgif.com-gif-maker-600-15.webp");
    })
</script>

<script>

    // Adjusting height of landing's first top screen

    $(function(){
        var firstContainer = $('.t-cover');

        if (!firstContainer.length) return;

        var resetFirstHeight = function (el) {
            var
                h = $( window ).height(),
                w = $( window ).width();
            switch(true) {
                case (w > 1440): (h < 600) && (h = 600); break;
                case (w >  960): (h < 460) && (h = 460); break;
                case (w >  460): (h < 460) && (h = 460); h-=64; break;
                case (w <= 460): (h < 500) && (h = 500); h-=64; break;
            }
            el.height(h);
        };

        window.addEventListener('resize', function() {
            resetFirstHeight(firstContainer);
        });

        resetFirstHeight(firstContainer);

        var loop = function() {
            var arrow = $('.welcome-arrow');
            var top = arrow.position().top;
            top = (top === 0)? -10 : 0;
            arrow.animate({top: top}, 500, 'swing', loop);
        };
        loop(-10);
    });
</script>

<script>

    // Footer to bottom handling

    $(function(){
        var resetComponentWrapperHeight = function (el) {

            var wrapper =  $('.component_wrapper');

            if (!wrapper.offset()) return;

            var offset = wrapper.offset().top,
                padding = parseInt($('.component_wrapper').css('padding-top')),
                footer = $('#rec271139769').outerHeight(),
                viewPort = $(window).height(),
                h = viewPort - footer - offset + padding;
                if (h <= 0) h = '';

            wrapper.css({'min-height': h});
        };

        window.addEventListener('resize', function() {
            resetComponentWrapperHeight();
        });

        resetComponentWrapperHeight();
    });
</script>

<script>

    // Quiz popup

    $(function(){
        $('.mark').on('touchstart', function(){
            $('.popup')
                .css('left', parseInt($('.mark').position().left) - 56)
                .toggle()
        });

        $('.mark').mouseover(function(){
            $('.popup')
                .css('left', parseInt($('.mark').position().left) - 56)
                .fadeIn()
        });

        $('.mark').mouseleave(function(){
            $('.popup').fadeOut()
        })
    });
</script>


<jdoc:include type="modules" name="debug" />
</body>
</html>