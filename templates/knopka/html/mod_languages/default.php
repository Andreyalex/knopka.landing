<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_languages
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$switch = [];
?>
<div class="mod-languages<?php echo $moduleclass_sfx; ?>">
    <?php if ($headerText) : ?>
        <div class="pretext"><p><?php echo $headerText; ?></p></div>
    <?php endif; ?>

    <ul class="options-mode <?php echo $params->get('inline', 1) ? 'lang-inline' : 'lang-block'; ?>" dir="<?php echo JFactory::getLanguage()->isRtl() ? 'rtl' : 'ltr'; ?>">
        <?php $idx = count($list)-1; foreach ($list as $language) : ?>
            <?php if (!$language->active) : ?>
                <li>
                    <?php $switch[$idx] = htmlspecialchars_decode(htmlspecialchars($language->link, ENT_QUOTES, 'UTF-8'), ENT_NOQUOTES); ?>
                    <a href="<?php echo htmlspecialchars_decode(htmlspecialchars($language->link, ENT_QUOTES, 'UTF-8'), ENT_NOQUOTES); ?>">
                        <?php if ($params->get('image', 1)) : ?>
                            <?php if ($language->image) : ?>
                                <?php echo JHtml::_('image', 'mod_languages/' . $language->image . '.gif', $language->title_native, array('title' => $language->title_native), true); ?>
                            <?php else : ?>
                                <span class="label"><?php echo strtoupper($language->sef); ?></span>
                            <?php endif; ?>
                        <?php else : ?>
                            <?php echo $params->get('full_name', 1) ? $language->title_native : strtoupper($language->sef); ?>
                        <?php endif; ?>
                    </a>
                </li>
            <?php elseif ($params->get('show_active', 1)) : ?>
                <?php $base = JUri::getInstance(); ?>
                <li class="lang-active">
                    <?php $switch[$idx] = htmlspecialchars_decode(htmlspecialchars($base, ENT_QUOTES, 'UTF-8'), ENT_NOQUOTES); ?>
                    <a href="<?php echo htmlspecialchars_decode(htmlspecialchars($base, ENT_QUOTES, 'UTF-8'), ENT_NOQUOTES); ?>">
                        <?php if ($params->get('image', 1)) : ?>
                            <?php if ($language->image) : ?>
                                <?php echo JHtml::_('image', 'mod_languages/' . $language->image . '.gif', $language->title_native, array('title' => $language->title_native), true); ?>
                            <?php else : ?>
                                <span class="label"><?php echo strtoupper($language->sef); ?></span>
                            <?php endif; ?>
                        <?php else : ?>
                            <?php echo $params->get('full_name', 1) ? $language->title_native : strtoupper($language->sef); ?>
                        <?php endif; ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php $idx++; if ($idx == count($list)) $idx = 0; endforeach; ?>
    </ul>

    <ul class="toggle-mode <?php echo $params->get('inline', 1) ? 'lang-inline' : 'lang-block'; ?>" dir="<?php echo JFactory::getLanguage()->isRtl() ? 'rtl' : 'ltr'; ?>">
        <?php $idx = 0; foreach ($list as $language) : ?>
            <?php if ($language->active) : ?>
                <?php $base = JUri::getInstance(); ?>
                <li class="lang-active">
                    <a href="<?php echo $switch[$idx]; ?>">
                        <?php if ($params->get('image', 1)) : ?>
                            <?php if ($language->image) : ?>
                                <?php echo JHtml::_('image', 'mod_languages/' . $language->image . '.gif', $language->title_native, array('title' => $language->title_native), true); ?>
                            <?php else : ?>
                                <span class="label"><?php echo strtoupper($language->sef); ?></span>
                            <?php endif; ?>
                        <?php else : ?>
                            <?php echo $params->get('full_name', 1) ? $language->title_native : strtoupper($language->sef); ?>
                        <?php endif; ?>
                    </a>
                </li>
            <?php endif; ?>
            <?php $idx++; endforeach; ?>
    </ul>
</div>
