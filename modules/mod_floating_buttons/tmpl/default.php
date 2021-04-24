<?php
/**
 * @copyright	Copyright © 2020 - All rights reserved.
* @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @author	https://templateplazza.com
 */
defined('_JEXEC') or die;
?>
<div id="floatingbtn" class="<?php echo $tooltip_class.$visibility_class; ?>"></div>
<script>
    jQuery(document).ready(function(){
        var links = [
            <?php if($main_item_icon_custom) {
                $main_item_icon = "<img class='main_item_icon_custom' src='".JURI::base(true)."/".$main_item_icon_custom."' alt=''/>";
            }else{
                $main_item_icon = $main_item_icon;
            } ?>
            {
                "bgcolor":"<?php echo $main_item_bgcolor;?>",
                "icon":"<?php echo $main_item_icon;?>",
                "color":"<?php echo $main_item_color;?>",
            },
            <?php 
            foreach ($child_item_items as $item) :
               if(in_array($item->access, $levels)) :
                $child_item_icon_custom = $item->child_item_icon_custom;
                if($child_item_icon_custom){
                    $child_item_icon = "<img class='child_item_icon_custom' src='".JURI::base(true)."/".$item->child_item_icon_custom."' alt=''/>";
                }else{
                    $child_item_icon = $item->child_item_icon;
                }
            ?>
            {
                "tooltip":"<?php echo $item->child_item_title; ?>",
                "url":"<?php echo $item->child_item_url; ?>",
                "bgcolor":"<?php echo $item->child_item_bgcolor; ?>",
                "color":"<?php echo $item->child_item_color; ?>",
                "icon":"<?php echo $child_item_icon; ?>",
                //"target": "_blank"
            },
            <?php 
                endif; 
            endforeach; ?>
        ];
        var options = {
            rotate: <?php echo $main_item_is_rotated;?>
        };
        jQuery('#floatingbtn').jqueryFab(links, options);
    })
</script>

