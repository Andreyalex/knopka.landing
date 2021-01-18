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
JHtml::_('stylesheet', 'template.css', array('version' => 'auto', 'relative' => true));

// Use of Google Font
if ($this->params->get('googleFont')) {
    $font = $this->params->get('googleFontName');

    // Handle fonts with selected weights and styles, e.g. Source+Sans+Condensed:400,400i
    $fontStyle = str_replace('+', ' ', strstr($font, ':', true) ?: $font);

    JHtml::_('stylesheet', 'https://fonts.googleapis.com/css?family=' . $font);
    $this->addStyleDeclaration("
	h1, h2, h3, h4, h5, h6, .site-title {
		font-family: '" . $fontStyle . "', sans-serif;
	}");
}

// Template color
if ($this->params->get('templateColor')) {
    $this->addStyleDeclaration('
	body.site {
		border-top: 3px solid ' . $this->params->get('templateColor') . ';
		background-color: ' . $this->params->get('templateBackgroundColor') . ';
	}
	a {
		color: ' . $this->params->get('templateColor') . ';
	}
	.nav-list > .active > a,
	.nav-list > .active > a:hover,
	.dropdown-menu li > a:hover,
	.dropdown-menu .active > a,
	.dropdown-menu .active > a:hover,
	.nav-pills > .active > a,
	.nav-pills > .active > a:hover,
	.btn-primary {
		background: ' . $this->params->get('templateColor') . ';
	}');
}

// Check for a custom CSS file
JHtml::_('stylesheet', 'user.css', array('version' => 'auto', 'relative' => true));

// Check for a custom js file
JHtml::_('script', 'user.js', array('version' => 'auto', 'relative' => true));

// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);

// Adjusting content width
$position7ModuleCount = $this->countModules('position-7');
$position8ModuleCount = $this->countModules('position-8');

if ($position7ModuleCount && $position8ModuleCount) {
    $span = 'span6';
} elseif ($position7ModuleCount && !$position8ModuleCount) {
    $span = 'span9';
} elseif (!$position7ModuleCount && $position8ModuleCount) {
    $span = 'span9';
} else {
    $span = 'span12';
}

// Logo file or site title param
if ($this->params->get('logoFile')) {
    $logo = '<img src="' . htmlspecialchars(JUri::root() . $this->params->get('logoFile'), ENT_QUOTES) . '" alt="' . $sitename . '" />';
} elseif ($this->params->get('sitetitle')) {
    $logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle'), ENT_COMPAT, 'UTF-8') . '</span>';
} else {
    $logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}
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
    <jdoc:include type="head" />
</head>
<body class="t-body" style="margin:0;"><!--allrecords-->
<div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="2512305"
     data-tilda-page-id="16032892" data-tilda-formskey="eed1b1688abf305dccd909096825c12e">
    <div id="rec262006571" class="r t-rec" style="background-color:#f1ff30; " data-record-type="446"
         data-bg-color="#f1ff30"><!-- T446 -->
        <div id="nav262006571marker"></div>
        <div class="t446__mobile">
            <div class="t446__mobile_container">
                <div class="t446__mobile_text t-name t-name_md" field="text">КНОПКА</div>
                <div class="t446__mobile_burger"><span></span> <span></span> <span></span> <span></span></div>
            </div>
        </div>
        <div id="nav262006571" class="t446 t446__hidden t446__positionabsolute "
             style="background-color: rgba(241,255,48,0.0); " data-bgcolor-hex="#f1ff30"
             data-bgcolor-rgba="rgba(241,255,48,0.0)" data-navmarker="nav262006571marker" data-appearoffset=""
             data-bgopacity-two="" data-menushadow="" data-bgopacity="0.0" data-menu-items-align="center"
             data-menu="yes">
            <div class="t446__maincontainer t446__c12collumns" style="">
                <div class="t446__logowrapper">
                    <div class="t446__logowrapper2">
                        <div style="display: block;"><img
                                    src="https://static.tildacdn.com/tild3839-3161-4430-a335-636637303332/_.png"
                                    class="t446__imglogo t446__imglogomobile" imgfield="img"
                                    style="max-width: 70px; width: 70px;" alt=""></div>
                    </div>
                </div>
                <div class="t446__leftwrapper" style="padding-left:20px; padding-right:85px; text-align: left;">
                    <div class="t446__leftmenuwrapper">
                        <ul class="t446__list">
                            <li class="t446__list_item"><a class="t-menu__link-item" href="/#about"
                                                           data-menu-submenu-hook=""
                                                           style="color:#43dde0;font-weight:600;"
                                                           data-menu-item-number="1">О нас</a></li>
                            <li class="t446__list_item"><a class="t-menu__link-item" href="/#service"
                                                           data-menu-submenu-hook=""
                                                           style="color:#43dde0;font-weight:600;"
                                                           data-menu-item-number="2">Услуги</a></li>
                            <li class="t446__list_item"><a class="t-menu__link-item" href="/#contact"
                                                           data-menu-submenu-hook=""
                                                           style="color:#43dde0;font-weight:600;"
                                                           data-menu-item-number="3">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="t446__rightwrapper" style="padding-right:20px; padding-left:85px; text-align: right;">
                    <div class="t446__rightmenuwrapper">
                        <ul class="t446__list"></ul>
                    </div>
                    <div class="t446__additionalwrapper">
                        <div class="t446__right_descr" style="color:#43dde0;font-size:20px;">Телефон: +380505080852
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>@media screen and (max-width: 980px) {
                #rec262006571 .t446__leftcontainer {
                    padding: 20px;
                }

                #rec262006571 .t446__imglogo {
                    padding: 20px 0;
                }

                #rec262006571 .t446__mobile_burger span {
                    background-color: #43dde0;
                }

                #rec262006571 .t446__mobile {
                    background-color: #f1ff30;
                }

                #rec262006571 .t446__mobile_burger {
                    left: 20px;
                    right: unset;
                }

                #rec262006571 .t446__mobile_text {
                    text-align: right;
                    right: 20px;
                    left: unset;
                }

                @media screen and (max-width: 980px) {
                    #rec262006571 .t446 {
                        position: absolute;
                        top: 64px;
                    }
                }
            }</style>
        <script>    var t446__doResize;
          $(window).resize(function () {
            t446_checkOverflow('262006571', '0');
            clearTimeout(t446__doResize);
            t446__doResize = setTimeout(function () {
              t446_checkOverflow('262006571', '0');
            }, 200);
          });
          $(window).load(function () {
            t446_checkOverflow('262006571', '0');
          });
          $(document).ready(function () {
            t446_checkOverflow('262006571', '0');
          });
          $(document).ready(function () {
            t446_highlight();
          });
          $(window).resize(function () {
            t446_setBg('262006571');
          });
          $(document).ready(function () {
            t446_setBg('262006571');
          });</script>
        <script> $(document).ready(function () {
            t446_createMobileMenu('262006571');
          }); </script>
        <script type="text/javascript"> $(document).ready(function () {
            setTimeout(function () {
              t_onFuncLoad('t_menusub_init', function () {
                t_menusub_init('262006571');
              });
            }, 500);
          });</script>
        <style>@media screen and (max-width: 980px) {
                #rec262006571 .t-menusub__menu .t-menusub__link-item {
                    color: #43dde0 !important;
                }

                #rec262006571 .t-menusub__menu .t-menusub__link-item.t-active {
                    color: #43dde0 !important;
                }
            }</style>
        <!--[if IE 8]>
        <style>#rec262006571 .t446 {
            filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D9f1ff30', endColorstr='#D9f1ff30');
        }</style><![endif]--> </div>
<?php
    if ($menuItemAlias == 'home') {
        include('landing.php');
    } else {
        ?>
    <div class="r t-rec t-rec_pt_45 t-rec_pb_90 component_wrapper"
         style="padding-top:45px;padding-bottom:90px;" data-record-type="480"
         data-bg-color="#f1ff30" data-animationappear="off"><!-- T480 -->
        <div style="width: 0; height: 0; overflow: hidden;">
            <div class="t480__sizer t-col t-col_8" data-auto-correct-mobile-width="false" style="height:560px;"></div>
        </div>
        <div class="t480">
            <div class="t-container">
                <div class="t480__col t-col t-col_8 t-prefix_2">

                    <jdoc:include type="component" />

                </div>
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
                        <li class="t457__li"><a href="/terms" style="color:#ffffff;" data-menu-item-number="4">Пользовательское
                                соглашение</a></li>
                        <li class="t457__li"><a href="/privacy" style="color:#ffffff;" data-menu-item-number="5">Политика
                                конфиденциальности</a></li>
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