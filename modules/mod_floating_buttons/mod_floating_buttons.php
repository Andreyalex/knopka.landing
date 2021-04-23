<?php
/**
 * @copyright	Copyright © 2020 - All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @author	https://templateplazza.com
 */
defined('_JEXEC') or die;

$doc = JFactory::getDocument();
// Include assets
$doc->addStyleSheet(JURI::root()."modules/mod_floating_buttons/assets/css/style.min.css");
$css_adjustment = $params->get('css_adjustment');
if($css_adjustment){
    $doc->addStyleDeclaration($css_adjustment);
}
$main_item_position = $params->get('main_item_position');
if($main_item_position){
    $doc->addStyleDeclaration("
    button.jfab_main_btn {
        right:auto!important;
        left:16px!important;
        padding:0!important;}
    .jfab_btns_wrapper {
        right:auto!important;
        left:0!important;
        text-align:left!important;
        }
    .jfab_btns_wrapper button {
        padding:0!important;}
    .sub_fab_btn {
            float:left!important;
            margin-left:20px!important;
        }
    .jfab_btns_wrapper > div {
            display:block;clear:both!important;
        }
    .jfab_btns_wrapper:first-child {
            margin-bottom:30px!important;
        }
    .jfab_tooltip {
        margin-left:-10px!important;
    }
    ");
}
$doc->addStyleSheet('https://fonts.googleapis.com/icon?family=Material+Icons');
$doc->addScript(JURI::root()."modules/mod_floating_buttons/assets/js/script.min.js");
$main_item_bgcolor		    = $params->get("main_item_bgcolor","#4285F4");
$main_item_icon		        = $params->get("main_item_icon","&#xE145;");
$main_item_icon_custom		= $params->get("main_item_icon_custom");
$main_item_color		    = $params->get("main_item_color","#FFFFFF");
$child_item_items		    = $params->get("child_item_items");
$main_item_is_rotated		= $params->get("main_item_is_rotated",'true');
$mod_visibility		        = $params->get("mod_visibility");
$tooltip_theme		        = $params->get("tooltip_theme");

if($mod_visibility == "1") {
    $visibility_class =" visible-xs";
}elseif($mod_visibility == "2"){
    $visibility_class =" hidden-md hidden-lg";
}else {
    $visibility_class ="";
}

if($tooltip_theme == "0"){
    $tooltip_class = "tooltip_dark";
} else {
    $tooltip_class = "tooltip_light";
}

$user = JFactory::getUser();
$levels = $user->getAuthorisedViewLevels();

require JModuleHelper::getLayoutPath('mod_floating_buttons', $params->get('layout', 'default'));