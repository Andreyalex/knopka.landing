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
?>

<div class="knp-quiz">

    <div class="knp-item knp-start" data-id="start">
            <div class="knp-question">
                Давайте выберем способ продвижения, наиболее подходящий именно Вам!
            </div>
            <div class="knp-bottom">
                <div></div>
                <input class="knp-submit" type="button" value="Начать" />
                <div></div>
            </div>
    </div>

    <div class="knp-item knp-step" data-id="1">
        <div class="knp-question">
            <div>
                <span>Относится ли Ваш бизнес к одной из этих ниш?</span>
            </div>
            <div class="knp-blocks">
                <div class="knp-block">
                    <ul class="dashed">
                        <li>Одежда</li>
                        <li>Обувь</li>
                        <li>Косметика</li>
                        <li>Косметологические услуги</li>
                    </ul>
                </div>
                <div class="knp-block">
                    <ul class="dashed">
                        <li>Товары для детей</li>
                        <li>Товары для женщин</li>
                    </ul>
                </div>
                <div class="knp-block">
                    <ul class="dashed"><li>Товары для животных</li></ul>
                </div>
                <div class="knp-block">
                    <ul class="dashed">
                        <li>Еда</li>
                        <li>Отдых</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="knp-answers">
            <input class="knp-answer knp-submit" type="button" value="Да" data-score="1" />
            <input class="knp-answer knp-submit" type="button" value="Нет" data-score="3,4" />
        </div>
        <div class="knp-bottom">
            <div></div>
            <div class="knp-next"></div>
        </div>
    </div>

    <div class="knp-item knp-step" data-id="2">
            <div class="knp-question">
                Есть ли у вас сайт?
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="Да" data-score="1,2,3" />
                <input class="knp-answer knp-submit" type="button" value="Нет" data-score="1,2,4" />
            </div>
            <div class="knp-bottom">
                <div class="knp-prev"></div>
                <div class="knp-next"></div>
            </div>
    </div>

    <div class="knp-item knp-step" data-id="3">
            <div class="knp-question">
                Какой возраст у ваших клиентов?
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="18 - 35 лет" data-score="1,2,4" />
                <input class="knp-answer knp-submit" type="button" value="35 - 46 лет" data-score="3,2,4" />
                <input class="knp-answer knp-submit" type="button" value="47 - 60 лет" data-score="2,3,4" />
            </div>
            <div class="knp-bottom">
                <div class="knp-prev"></div>
                <div class="knp-next"></div>
            </div>
    </div>

    <div class="knp-item knp-step" data-id="4">
            <div class="knp-question">
                Является ли вашбизнес сезонным?
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="Да" data-score="3,4" />
                <input class="knp-answer knp-submit" type="button" value="Нет" data-score="1,2" />
            </div>
            <div class="knp-bottom">
                <div class="knp-prev"></div>
                <div class="knp-next"></div>
            </div>
    </div>

    <div class="knp-item knp-step" data-id="5">
            <div class="knp-question">
                Получаете ли вы с одного человека в своем бизнесе доход более $20 ?
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="Да" data-score="1,2,3,4" />
                <input class="knp-answer knp-submit" type="button" value="Нет" data-score="4" />
            </div>
            <div class="knp-bottom">
                <div class="knp-prev"></div>
                <div class="knp-next"></div>
            </div>
    </div>

    <div class="knp-item knp-step" data-id="6">
            <div class="knp-question">
                Сколько покупок у Вас, в среднем, совершает один клиент?
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="1 раз" data-score="1,3,4" />
                <input class="knp-answer knp-submit" type="button" value="2-5 раз" data-score="1,2,3,4" />
                <input class="knp-answer knp-submit" type="button" value="Более 5 раз" data-score="1,2,3,4" />
            </div>
            <div class="knp-bottom">
                <div class="knp-prev"></div>
                <div class="knp-next"></div>
            </div>
    </div>

    <div class="knp-item knp-finish" data-id="finish">
        <div class="knp-question">
            <div>Отлично!</div>
            <div class="knp-case-single">На основании Ваших ответов мы сделали вывод, что Вам лучше всего подходит</div>
            <div class="knp-case-multiple">На основании Ваших ответов мы сделали вывод, что Вам одинаково хорошо подходят</div>
            <div class="knp-result" data-id="1">
                Instagram
            </div>
            <div class="knp-result" data-id="2">
                Facebook
            </div>
            <div class="knp-result" data-id="3">
                Google KMS
            </div>
            <div class="knp-result" data-id="4">
                Доски обьявлений (!!!!)
            </div>
            <div>
                <input class="knp-submit" type="button" value="Давайте же начнем продвигать!" />
            </div>
<!--            <div>--><?// echo ConvertForms\Helper::renderFormById(4); ?><!--</div>-->

            <div class="knp-bottom">
                Вы также можете вернуться к вопросам и подкорректировать Ваши ответы
                <div class="knp-prev"></div>
            </div>
        </div>
    </div>
</div>

<style>
    .knp-quiz {
        display: flex;
        align-items: stretch;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.1);
    }

    .knp-item {
        display: flex;
        width: 100%;
        flex-shrink: 0;
        flex-direction: column;
        justify-content: space-evenly;
    }

    .knp-question {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        flex-basis: 70%;
        padding: 40px 20px 20px;
        font-size: 24px;
        text-align: center;
    }

    .knp-answers {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
        flex-basis: 15%;
        min-height: 108px;
        padding: 0 20px;
    }

    .knp-bottom {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        flex-basis: 15%;
        min-height: 108px;
        padding: 0 40px 40px;
    }

    .knp-next {
        width: 20%;
        height: 68px;
        clip-path:polygon(0 0, 90% 0, 100% 50%, 90% 100%, 0 100%, 10% 50%);
        background-color: rgba(255, 255, 255, 0.7);
    }

    .knp-prev {
        width: 20%;
        height: 68px;
        clip-path:polygon(10% 0, 100% 0, 90% 50%, 100% 100%, 10% 100%, 0% 50%);
        background-color: rgba(255, 255, 255, 0.7);
    }

    .knp-submit {
        border: none;
        background: rgba(67, 221, 224, 1);
        padding: 20px 40px;
        color: #ffffff;
        font-size: 24px;
        text-transform: uppercase;
        width: 20%;
    }

    .knp-submit.knp-selected {
        background-color: green;
    }


    .knp-blocks {
        display:flex;
        flex-direction:row;
        justify-content:center;
        flex-wrap:wrap;
        font-size: 18px;
    }

    .knp-block {
        display: flex;
        justify-content: space-evenly;
        flex-direction: column;
        background: rgba(255, 255, 255, 0.3);
        margin: 0 2.5% 5%;
        flex-grow: 0;
        flex-basis: 40%;
        flex-shrink: 0;
    }

    .knp-block ul {
        text-align: left;
        display: inline-block;
        margin: 20px 20px 20px 40px;
    }

</style>

<script>
    // Model
    var state = {
        'start': {
            canView: true
        },
        '1': {
            canView: false,
            score: []
        },
        '2': {
            canView: false,
            score: []
        },
        '3': {
            canView: false,
            score: []
        },
        '4': {
            canView: false,
            score: []
        },
        '5': {
            canView: false,
            score: []
        },
        '6': {
            canView: false,
            score: []
        },
        'finish': {
            canView: false
        }
    };

    // Business methods
    var storeAnswer = function(el, id) {
        if (!el) return;
        var score = el.data('score');
        if (!score) return;
        state[id].score = score.toString().split(',');
    };

    var calculateResults = function() {
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
    var showNextItem = function(current) {
        var next = current.next();
        if (!next.length || !state[next.data('id')].canView) return;
        next.css('margin-left', '100%');
        onShowItem(next);
        current.animate({'margin-left': '-100%'}, 500, 'swing');
        next.animate({'margin-left': '0%'}, 500);
    };

    var showPrevItem = function(current) {
        var prev = current.prev();
        if (!prev.length || !state[prev.data('id')].canView) return;
        prev.css('margin-left', '-100%');
        onShowItem(prev);
        current.animate({'margin-left': '100%'}, 500, 'swing');
        prev.animate({'margin-left': '0%'}, 500);
    };

    var onShowItem = function(el) {
        var item = $(el);
        var nextBtn = item.find('.knp-next');
        var prevBtn = item.find('.knp-prev');
        if (nextBtn.length) {
            (item.next().length && state[item.next().data('id')].canView)? nextBtn.show() : nextBtn.hide();
        }
        if (prevBtn.length) {
            (item.prev().length && state[item.prev().data('id')].canView)? prevBtn.show() : prevBtn.hide();
        }

        (item.data('id') === 'finish') && onShowFinish();
    };

    var onShowFinish = function() {
        var results = calculateResults();
        var top = results.pop();

        $('.knp-quiz .knp-finish .knp-case-single, .knp-quiz .knp-finish .knp-case-multiple').hide();
        (top.length === 1)?
            $('.knp-quiz .knp-finish .knp-case-single').show() :
            $('.knp-quiz .knp-finish .knp-case-multiple').show();

        $('.knp-quiz .knp-finish .knp-result').hide();
        for (var i = 0; i < top.length; i++) {
            $('.knp-quiz .knp-finish .knp-result[data-id="' + top[i] + '"]').show();
        }
    };

    // Initialization
    $(document).ready(function($){

        // DOM event listeners
        $('.knp-quiz .knp-item .knp-submit').click(function(){
            var item = $(this).parents('.knp-item'),
                nextId = item.next().data('id'),
                id = item.data('id');

            storeAnswer($(this), id);
            item.find('.knp-submit').removeClass('knp-selected');
            $(this).addClass('knp-selected');

            setTimeout(function(){
                nextId && (state[nextId].canView = true);
                showNextItem(item);
            }, 250);
        });

        $('.knp-quiz .knp-prev').click(function(){
            showPrevItem($(this).parents('.knp-item'));
        });

        $('.knp-quiz .knp-next').click(function(){
            showNextItem($(this).parents('.knp-item'));
        });

        // UI initialization
        var firstPanel = $($('.knp-quiz .knp-item')[0]);
        firstPanel.show();
        onShowItem(firstPanel);
    });

</script>

