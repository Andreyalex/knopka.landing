<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_quiz
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Initialize Convert Forms Library
include_once(JPATH_ADMINISTRATOR . '/components/com_convertforms/autoload.php');

$lang = JFactory::getLanguage();
$extension = 'com_quiz';
$base_dir = JPATH_ROOT.'/components/com_quiz';
$lang->load($extension, $base_dir);
?>

<div class="knp-quiz">
    <div class="knp-slider">
    <div class="knp-item knp-start" data-id="start" style="justify-content: center">
            <div class="knp-question">
                <?=JText::_('COM_QUIZ_DAVAYTE_VYBEREM');?>
            </div>
            <div class="knp-bottom">
                <div></div>
                <input class="knp-submit" type="button" value="<?=JText::_('COM_QUIZ_NACHAT')?>" />
                <div></div>
            </div>
    </div>

    <div class="knp-item knp-step" data-id="1">
        <div class="knp-question">
            <div>
                <span><?=JText::_('COM_QUIZ_OTNOSITSYALIVASHBIZNES')?></span>
            </div>
            <div class="knp-blocks">
                <div class="knp-block desktop-only">
                    <ul class="dashed">
                        <li><?=JText::_('COM_QUIZ_ODEZDA')?></li>
                        <li><?=JText::_('COM_QUIZ_OBUV')?></li>
                        <li><?=JText::_('COM_QUIZ_KOSMETIKA')?></li>
                        <li><?=JText::_('COM_QUIZ_KOSMETUSLUGI')?></li>
                        <li><?=JText::_('COM_QUIZ_TOVARIDLYAGENSHIN')?></li>
                    </ul>
                </div>
                <div class="knp-block desktop-only">
                    <ul class="dashed">
                        <li><?=JText::_('COM_QUIZ_YEDA')?></li>
                        <li><?=JText::_('COM_QUIZ_OTDYH')?></li>
                        <li><?=JText::_('COM_QUIZ_TOVARIDLYADETEY')?></li>
                        <li><?=JText::_('COM_QUIZ_TOVARYDLYAGIVOTNIH')?></li>
                    </ul>
                </div>
                <div class="knp-block mobile-only">
                    <ul class="dashed">
                        <li><?=JText::_('COM_QUIZ_ODEZDA')?></li>
                        <li><?=JText::_('COM_QUIZ_OBUV')?></li>
                        <li><?=JText::_('COM_QUIZ_KOSMETIKA')?></li>
                        <li><?=JText::_('COM_QUIZ_KOSMETUSLUGI')?></li>
                        <li><?=JText::_('COM_QUIZ_TOVARIDLYAGENSHIN')?></li>
                        <li><?=JText::_('COM_QUIZ_YEDA')?></li>
                        <li><?=JText::_('COM_QUIZ_OTDYH')?></li>
                        <li><?=JText::_('COM_QUIZ_TOVARIDLYADETEY')?></li>
                        <li><?=JText::_('COM_QUIZ_TOVARYDLYAGIVOTNIH')?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="knp-answers">
            <input class="knp-answer knp-submit" type="button" value="<?=JText::_('COM_QUIZ_YES')?>" data-score="1" />
            <input class="knp-answer knp-submit" type="button" value="<?=JText::_('COM_QUIZ_NO')?>" data-score="3,4" />
        </div>
        <div class="knp-bottom">
            <div></div>
            <div class="knp-next"></div>
        </div>
    </div>

    <div class="knp-item knp-step" data-id="2">
            <div class="knp-question">
                <?=JText::_('COM_QUIZ_YESTLIUVASSAYT')?>
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="<?=JText::_('COM_QUIZ_YES')?>" data-score="1,2,3" />
                <input class="knp-answer knp-submit" type="button" value="<?=JText::_('COM_QUIZ_NO')?>" data-score="1,2,4" />
            </div>
            <div class="knp-bottom">
                <div class="knp-prev"></div>
                <div class="knp-next"></div>
            </div>
    </div>

    <div class="knp-item knp-step" data-id="3">
            <div class="knp-question">
                <?=JText::_('COM_QUIZ_KAKOYVOZRASTKLIENTOV')?>
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="<?=JText::_('COM_QUIZ_1835LET')?>" data-score="1,2,4" />
                <input class="knp-answer knp-submit" type="button" value="<?=JText::_('COM_QUIZ_3546LET')?>" data-score="3,2,4" />
                <input class="knp-answer knp-submit" type="button" value="<?=JText::_('COM_QUIZ_4760LET')?>" data-score="2,3,4" />
            </div>
            <div class="knp-bottom">
                <div class="knp-prev"></div>
                <div class="knp-next"></div>
            </div>
    </div>

    <div class="knp-item knp-step" data-id="4">
            <div class="knp-question">
                <?=JText::_('COM_QUIZ_YAVLAYETSYALIBIZNESSEZONNIM')?>
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="<?=JText::_('COM_QUIZ_YES')?>" data-score="3,4" />
                <input class="knp-answer knp-submit" type="button" value="<?=JText::_('COM_QUIZ_NO')?>" data-score="1,2" />
            </div>
            <div class="knp-bottom">
                <div class="knp-prev"></div>
                <div class="knp-next"></div>
            </div>
    </div>

    <div class="knp-item knp-step" data-id="5">
            <div class="knp-question">
                <?=JText::_('COM_QUIZ_POLUCHAETE20SCHELOVEKA')?>
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="<?=JText::_('COM_QUIZ_YES')?>" data-score="1,2,3,4" />
                <input class="knp-answer knp-submit" type="button" value="<?=JText::_('COM_QUIZ_NO')?>" data-score="4" />
            </div>
            <div class="knp-bottom">
                <div class="knp-prev"></div>
                <div class="knp-next"></div>
            </div>
    </div>

    <div class="knp-item knp-step" data-id="6">
            <div class="knp-question">
                <?=JText::_('COM_QUIZ_SKOLKOPOKUPOKSOVERSHAETODIN')?>
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="<?=JText::_('COM_QUIZ_1RAZ')?>" data-score="1,3,4" />
                <input class="knp-answer knp-submit" type="button" value="<?=JText::_('COM_QUIZ_25RAZ')?>" data-score="1,2,3,4" />
                <input class="knp-answer knp-submit" type="button" value="<?=JText::_('COM_QUIZ_BOLEE5RAZ')?>" data-score="1,2,3,4" />
            </div>
            <div class="knp-bottom">
                <div class="knp-prev"></div>
                <div class="knp-next"></div>
            </div>
    </div>

    <div class="knp-item knp-finish" data-id="finish">
        <div class="knp-question">
            <div><?=JText::_('COM_QUIZ_OTLICHNO')?></div>
        </div>
        <div class="knp-details">
            <div class="knp-case-single" style="display:none;margin: 0 40px;text-align:center;"><?=JText::_('COM_QUIZ_ISHODYAIZVASHIHOTVETOV_SINGLE')?></div>
            <div class="knp-case-multiple" style="display:none;margin: 0 40px;text-align:center;"><?=JText::_('COM_QUIZ_ISHODYAIZVASHIHOTVETOV_MULTI')?></div>
            <ul>
                <li class="knp-result" data-id="1">
                    <div class="badge"></div>
                    <div style="display:flex;padding:20px 40px 20px 0;">
                        <div style="display:flex;align-items:center;margin:0 20px;">
                            <svg class="t-sociallinks__svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 30 30" xml:space="preserve"><desc>Instagram</desc><path style="fill:#43dde0;" d="M15,11.014 C12.801,11.014 11.015,12.797 11.015,15 C11.015,17.202 12.802,18.987 15,18.987 C17.199,18.987 18.987,17.202 18.987,15 C18.987,12.797 17.199,11.014 15,11.014 L15,11.014 Z M15,17.606 C13.556,17.606 12.393,16.439 12.393,15 C12.393,13.561 13.556,12.394 15,12.394 C16.429,12.394 17.607,13.561 17.607,15 C17.607,16.439 16.444,17.606 15,17.606 L15,17.606 Z"></path><path style="fill:#43dde0;" d="M19.385,9.556 C18.872,9.556 18.465,9.964 18.465,10.477 C18.465,10.989 18.872,11.396 19.385,11.396 C19.898,11.396 20.306,10.989 20.306,10.477 C20.306,9.964 19.897,9.556 19.385,9.556 L19.385,9.556 Z"></path><path style="fill:#43dde0;" d="M15.002,0.15 C6.798,0.15 0.149,6.797 0.149,15 C0.149,23.201 6.798,29.85 15.002,29.85 C23.201,29.85 29.852,23.202 29.852,15 C29.852,6.797 23.201,0.15 15.002,0.15 L15.002,0.15 Z M22.666,18.265 C22.666,20.688 20.687,22.666 18.25,22.666 L11.75,22.666 C9.312,22.666 7.333,20.687 7.333,18.28 L7.333,11.734 C7.333,9.312 9.311,7.334 11.75,7.334 L18.25,7.334 C20.688,7.334 22.666,9.312 22.666,11.734 L22.666,18.265 L22.666,18.265 Z"></path></svg>
                        </div>
                        <div class="knp-description">
                            <b><?=JText::_('COM_QUIZ_CHEREZINSTAGRAM')?></b>
                            <div><?=JText::_('COM_QUIZ_INSTADESC')?></div>
                        </div>
                    </div>
                </li>
                <li class="knp-result" data-id="2">
                    <div class="badge"></div>
                    <div style="display:flex;padding:20px 40px 20px 0;">
                        <div style="display:flex;align-items:center;margin:0 20px;">
                            <svg class="t-sociallinks__svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><desc>Facebook</desc><path style="fill:#43dde0;" d="M47.761,24c0,13.121-10.638,23.76-23.758,23.76C10.877,47.76,0.239,37.121,0.239,24c0-13.124,10.638-23.76,23.764-23.76C37.123,0.24,47.761,10.876,47.761,24 M20.033,38.85H26.2V24.01h4.163l0.539-5.242H26.2v-3.083c0-1.156,0.769-1.427,1.308-1.427h3.318V9.168L26.258,9.15c-5.072,0-6.225,3.796-6.225,6.224v3.394H17.1v5.242h2.933V38.85z"></path></svg>                        </div>
                        <div class="knp-description">
                            <b><?=JText::_('COM_QUIZ_CHEREZFACEBOOK')?></b>
                            <div><?=JText::_('COM_QUIZ_FACEBOOKDESC')?></div>
                        </div>
                </li>
                <li class="knp-result" data-id="3">
                    <div class="badge"></div>
                    <div style="display:flex;padding:20px 40px 20px 0;">
                        <div style="display:flex;align-items:center;margin:0 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 640 640"><path style="fill:#43dde0;" d="M326.331 274.255v109.761h181.49c-7.37 47.115-54.886 138.002-181.49 138.002-109.242 0-198.369-90.485-198.369-202.006 0-111.509 89.127-201.995 198.369-201.995 62.127 0 103.761 26.516 127.525 49.359l86.883-83.635C484.99 31.512 412.741-.012 326.378-.012 149.494-.012 6.366 143.116 6.366 320c0 176.884 143.128 320.012 320.012 320.012 184.644 0 307.256-129.876 307.256-312.653 0-21-2.244-36.993-5.008-52.997l-302.248-.13-.047.024z"/></svg>
                        </div>
                        <div class="knp-description">
                            <b><?=JText::_('COM_QUIZ_CHEREZKMS')?></b>
                            <div><?=JText::_('COM_QUIZ_KMSDESC')?></div>
                        </div>
                    </div>
                </li>
                <li class="knp-result" data-id="4">
                    <div class="badge"></div>
                    <div style="display:flex;padding:20px 40px 20px 0;">
                        <div style="display:flex;align-items:center;margin:0 20px;">
                            <svg version="1.1" id="layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px"
                                 viewBox="-153 -46 652 652" style="enable-background:new -153 -46 652 652;" xml:space="preserve"><path style="fill:#43dde0;" d="M273,107.6v342.9h-85.7V107.6H273z M15.9,136.1c78.9,0,142.9,64,142.9,142.9s-64,142.9-142.9,142.9S-127,357.9-127,279 S-63,136.1,15.9,136.1z M362.2,193.3l25.1,25.1l25.1-25.1H473v60.6L447.9,279l25.1,25.1v60.6h-60.6l-25.1-25.1l-25.1,25.1h-60.6 v-60.6l25.1-25.1l-25.1-25.1v-60.6H362.2z M15.9,221.9c-31.5,0-57.1,25.6-57.1,57.1s25.6,57.1,57.1,57.1S73,310.5,73,279 S47.4,221.9,15.9,221.9z"/></svg>
                        </div>
                        <div class="knp-description">
                            <b><?=JText::_('COM_QUIZ_CHEREZDOSKI')?></b>
                            <div><?=JText::_('COM_QUIZ_DISKIDESC')?></div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="knp-form">
                <div style="margin: 20px 40px;">
                    <b><?=JText::_('COM_QUIZ_YESLIHOTITEUZNATBOLSHEOSTAVTEDANNIE')?></b>
                </div>
                <? echo ConvertForms\Helper::renderFormById($lang->getTag()=='uk-UA'? 5:4); ?>
            </div>
            <div class="knp-bottom">
                <div class="knp-prev"></div>
            </div>
        </div>
    </div>
    </div>
</div>

<style>
    .knp-quiz {
        overflow: hidden;
        background: rgba(255, 255, 255, 0.1);
    }

    .knp-slider {
        display: flex;
        align-items: stretch;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.1);
        height: 100%;
    }

    .knp-item {
        display: flex;
        overflow: hidden;
        width: 100%;
        flex-shrink: 0;
        flex-direction: column;
        justify-content: space-between;
        word-break: break-word;
    }


    .knp-question {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 40px 20px 20px;
        font-size: 36px;
        text-align: center;
    }

    .knp-answers {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
        padding: 20px 0;
    }

    .knp-bottom {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 20px 0 40px;
    }

    .knp-form {
        display:flex;
        flex-direction: column;
        justify-content:center;
        align-items: center;
    }

    .knp-next {
        flex-basis: 20%;
        margin: 10px 20px;
        height: 68px;
        clip-path:polygon(0 0, 80% 0, 100% 50%, 80% 100%, 0 100%, 20% 50%);
        background-color: rgba(255, 255, 255, 0.7);
    }

    .knp-prev {
        flex-basis: 20%;
        margin: 10px 20px;
        height: 68px;
        clip-path:polygon(20% 0, 100% 0, 80% 50%, 100% 100%, 20% 100%, 0% 50%);
        background-color: rgba(255, 255, 255, 0.7);
    }

    .knp-submit {
        flex-basis: 20%;
        flex-grow: 1;
        margin: 10px 20px;
        padding: 20px;
        border: none;
        background: rgba(67, 221, 224, 1);
        color: #ffffff;
        font-size: 24px;
        text-transform: uppercase;
        max-width: 570px;
    }

    .knp-submit.knp-selected {
        background-color: green;
    }


    .knp-blocks {
        display:flex;
        flex-direction:row;
        justify-content:space-between;
        flex-wrap:wrap;
        font-size: 18px;
        width: 100%;
        margin-top: 20px;
    }

    .knp-block {
        display: flex;
        flex-basis: 40%;
        flex-grow: 1;
        justify-content: space-evenly;
        flex-direction: column;
        background: rgba(255, 255, 255, 0.3);
        margin: 10px 20px;
    }

    @media(max-width: 520px) {
        .knp-block.mobile-only {
            display: flex;
        }
        .knp-block.desktop-only {
            display: none;
        }
    }

    @media(min-width: 521px) {
        .knp-block.mobile-only {
            display: none;
        }
        .knp-block.desktop-only {
            display: flex;
        }
    }

    .knp-block ul {
        text-align: left;
        margin: 20px 40px 20px 40px;
        font-size: 16px;
    }

    .knp-block ul li {
        line-height:18px;
        margin: 4px 0 4px;
    }

    .knp-details ul {
        list-style: none;
    }

    .knp-result {
        position: relative;
        margin-left: -35px;
        margin-bottom: 40px;
    }

    .knp-result .badge {
        position: absolute;
        height: 100%;
        width: 60%;
        z-index: -1;
        clip-path:polygon(0 0, 80% 0, 100% 50%, 80% 100%, 0 100%);
        background-color: rgba(255, 255, 255, 0.3);
    }

    .knp-finish textarea {
        display: none;
    }

    @media(max-width: 640px) {
        .knp-quiz .knp-question {
            font-size: 28px;
        }

        .knp-block ul {
            margin: 10px 10px 10px 20px;
        }
    }

    @media(max-width: 500px) {
        .knp-block {
            width: 100%;
        }
        .knp-block ul {
            flex-basis: 100%;
            margin: 10px 10px 10px 10%;
        }
    }

</style>

<script>
var Quiz = function (root) {

    var quiz = $(root),
        slider = quiz.find('.knp-slider'),
        items = quiz.find('.knp-item'),
        slidingOffset = 0;

    // Model
    var state = {
        'start': {
            canView: true
        },
        '1': {
            canView: false,
            score: [],
            verbal: {}
        },
        '2': {
            canView: false,
            score: [],
            verbal: {}
        },
        '3': {
            canView: false,
            score: [],
            verbal: {}
        },
        '4': {
            canView: false,
            score: [],
            verbal: {}
        },
        '5': {
            canView: false,
            score: [],
            verbal: {}
        },
        '6': {
            canView: false,
            score: [],
            verbal: {}
        },
        'finish': {
            canView: false
        }
    };

    // Business methods
    var storeAnswer = function (el, id) {
        if (!el) return;
        var score = el.data('score');
        if (!score) return;
        state[id].score = score.toString().split(',');
        var question = el.parents('.knp-item').find('.knp-question').text();
        state[id].verbal.question = question;
        state[id].verbal.answer = el.attr('value');
    };

    var calculateResults = function () {
        var score = {},
            results = [];

        for (var idx in state) {
            if (!state[idx].score) continue;
            for (var i = 0; i < state[idx].score.length; i++) {
                score[state[idx].score[i]] || (score[state[idx].score[i]] = 0);
                score[state[idx].score[i]] += 1;
            }
        }

        for (var idx in score) {
            results[score[idx]] || (results[score[idx]] = []);
            results[score[idx]].push(idx);
        }

        return results;
    };

    // DOM methods
    var initialize = function () {

        // DOM event listeners
        quiz.find('.knp-item .knp-submit').click(function () {
            var item = $(this).parents('.knp-item'),
                nextId = item.next().data('id'),
                id = item.data('id');

            storeAnswer($(this), id);
            item.find('.knp-submit').removeClass('knp-selected');
            $(this).addClass('knp-selected');

            setTimeout(function () {
                nextId && (state[nextId].canView = true);
                showNextItem(item);
            }, 250);
        });

        quiz.find('.knp-prev').click(function () {
            showPrevItem($(this).parents('.knp-item'));
        });

        quiz.find('.knp-next').click(function () {
            showNextItem($(this).parents('.knp-item'));
        });

        slider.width((items.length * 100) + '%');
        items.width(100 / items.length + '%');

        $(window).resize(function () {
            quiz.height('auto');
            var h = quiz.height();
            quiz.height(h);
        });

        quiz.find('.knp-finish .knp-details').hide();

        var h = quiz.height();
        quiz.height(h); // Fix the max height that is on start

        var interval = setInterval(function () {
            if (quiz.find('.knp-finish .convertforms').hasClass('cf-success')) {
                clearInterval(interval);
                setTimeout(function () {
                    quiz.find('.knp-finish .knp-form').fadeOut(function () {
                        // Fix the max height that is on start
                        quiz.height('auto');
                        var h = quiz.height();
                        quiz.height(h);
                    });
                }, 5000);
            }
        }, 2000);

        var firstPanel = $(quiz.find('.knp-item')[0]);
        firstPanel.show();
        onShowItem(firstPanel);
    };

    var showNextItem = function (current) {
        var next = current.next();
        if (!next.length || !state[next.data('id')].canView) return;

        onShowItem(next);

        slidingOffset -=100;
        slider.animate({'margin-left': slidingOffset + '%'}, 500, 'swing');
    };

    var showPrevItem = function (current) {
        var prev = current.prev();
        if (!prev.length || !state[prev.data('id')].canView) return;

        onShowItem(prev);

        slidingOffset += 100;
        slider.animate({'margin-left': slidingOffset + '%'}, 500, 'swing');
    };

    var onShowItem = function (el) {
        var item = $(el);
        var nextBtn = item.find('.knp-next');
        var prevBtn = item.find('.knp-prev');
        if (nextBtn.length) {
            (item.next().length && state[item.next().data('id')].canView) ? nextBtn.show() : nextBtn.hide();
        }
        if (prevBtn.length) {
            (item.prev().length && state[item.prev().data('id')].canView) ? prevBtn.show() : prevBtn.hide();
        }

        (item.data('id') === 'finish') && onShowFinish();

        $(window).scrollTop(item.find('.knp-question').offset().top);
    };

    var onShowFinish = function () {
        var results = calculateResults();
        var top = results.pop();

        // Creating verbal result for client
        var verbalResult = "--- Вопросы ---\n";
        for (var idx in state) {
            if (state[idx].verbal && state[idx].verbal.answer) {
                verbalResult += state[idx].verbal.question.replaceAll(/\n+/g, ' ').replaceAll(/\s+/g, ' ').trim()
                    + " >>> " + state[idx].verbal.answer + "\n";
            }
        }

        verbalResult += "\n--- Результат ---\n";
        quiz.find('.knp-finish .knp-case-single, .knp-quiz .knp-finish .knp-case-multiple').hide();
        (top.length === 1) ?
            quiz.find('.knp-finish .knp-case-single').show() :
            quiz.find('.knp-finish .knp-case-multiple').show();


        quiz.find('.knp-finish .knp-result').hide();
        for (var i = 0; i < top.length; i++) {
            var item = quiz.find('.knp-finish .knp-result[data-id="' + top[i] + '"]');
            item.show();
            verbalResult += item.find('.knp-description b').text() + " >>> "
                + item.find('.knp-description div').text().replaceAll(/\n+/g, ' ').replaceAll(/\s+/g, ' ').trim() + "\n";
        }
        // set verbal result to form to send it
        quiz.find('.knp-finish textarea').html(verbalResult);


        // show results
        quiz.find('.knp-finish .knp-details').show();


        // Fix the max height that is on start
        quiz.height('auto');
        var h = quiz.height();
        quiz.height(h);
    };

    initialize();
};

// Quiz initialization
$(document).ready(function ($) {
    // Quiz initialization
    Quiz($('.knp-quiz'));
});

</script>

